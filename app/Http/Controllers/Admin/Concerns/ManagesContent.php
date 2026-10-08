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

    /** public/uploads ga yuklaydi, symlink kerak emas. */
    protected function upload(Request $request, string $field, string $dir, ?string $old): ?string
    {
        if (! $request->hasFile($field)) {
            return $old;
        }

        $this->deleteFile($old);

        $file = $request->file($field);
        $name = time().'_'.preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
        $file->move(public_path($dir), $name);

        return $dir.'/'.$name;
    }

    protected function deleteFile(?string $path): void
    {
        if ($path && is_file(public_path($path))) {
            @unlink(public_path($path));
        }
    }
}
