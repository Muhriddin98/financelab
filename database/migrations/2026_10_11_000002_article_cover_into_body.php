<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Muqova rasmi (image) matn boshiga ko'chiriladi — forma Rasm
     * maydoni olib tashlandi, karta uchun image avtomatik olinadi.
     */
    public function up(): void
    {
        foreach (DB::table('articles')->whereNotNull('image')->get(['id', 'image', 'body']) as $row) {
            if (str_contains((string) $row->body, $row->image)) {
                continue;
            }
            $img = '<p><img src="'.e($row->image).'" alt=""></p>';
            DB::table('articles')->where('id', $row->id)->update(['body' => $img.($row->body ?? '')]);
        }
    }

    public function down(): void
    {
        foreach (DB::table('articles')->whereNotNull('image')->get(['id', 'image', 'body']) as $row) {
            $body = preg_replace('/^<p><img src="[^"]*" alt=""><\/p>/', '', (string) $row->body, 1);
            DB::table('articles')->where('id', $row->id)->update(['body' => $body]);
        }
    }
};
