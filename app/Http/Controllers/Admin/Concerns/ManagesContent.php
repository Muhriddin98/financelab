<?php

namespace App\Http\Controllers\Admin\Concerns;

use Illuminate\Http\Request;

trait ManagesContent
{
    protected function linesToArray(?string $text): array
    {
        return collect(preg_split('/\r\n|\r|\n/', (string) $text))
            ->map(fn ($l) => trim($l))->filter()->values()->all();
    }

    protected function linesFromArray(?array $items): string
    {
        return implode("\n", $items ?? []);
    }

    /**
     * Rasmni optimallashtirib public/uploads ga saqlaydi:
     * eni 1600px dan katta bo'lsa kichrayadi, WebP (q82) ga o'tadi,
     * nomi slug-vaqt.webp ko'rinishida. Eski fayl o'chiriladi.
     */
    protected function upload(Request $request, string $field, string $dir, ?string $old, ?string $slug = null): ?string
    {
        if (! $request->hasFile($field)) {
            return $old;
        }

        $file = $request->file($field);
        $base = $slug ? preg_replace('/[^a-z0-9-]+/', '-', strtolower($slug)) : pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $name = trim($base, '-').'-'.time().'.webp';
        $targetDir = public_path($dir);

        if (! is_dir($targetDir)) {
            mkdir($targetDir, 0755, true);
        }

        $this->convertToWebp($file->getPathname(), $targetDir.'/'.$name, 1600, 82);
        $this->deleteFile($old);

        return $dir.'/'.$name;
    }

    protected function convertToWebp(string $source, string $target, int $maxWidth, int $quality): void
    {
        [$width, $height, $type] = getimagesize($source);

        $image = match ($type) {
            IMAGETYPE_JPEG => imagecreatefromjpeg($source),
            IMAGETYPE_PNG => imagecreatefrompng($source),
            IMAGETYPE_WEBP => imagecreatefromwebp($source),
            IMAGETYPE_GIF => imagecreatefromgif($source),
            default => throw new \RuntimeException('Noma’lum rasm formati.'),
        };

        if ($width > $maxWidth) {
            $newWidth = $maxWidth;
            $newHeight = (int) round($height * $maxWidth / $width);
            $resized = imagecreatetruecolor($newWidth, $newHeight);
            imagealphablending($resized, false);
            imagesavealpha($resized, true);
            imagecopyresampled($resized, $image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
            imagedestroy($image);
            $image = $resized;
        }

        imagealphablending($image, false);
        imagesavealpha($image, true);
        imagewebp($image, $target, $quality);
        imagedestroy($image);
    }

    protected function deleteFile(?string $path): void
    {
        if ($path && is_file(public_path($path))) {
            @unlink(public_path($path));
        }
    }
}
