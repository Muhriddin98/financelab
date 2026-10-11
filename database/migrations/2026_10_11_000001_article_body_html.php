<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * articles.body: JSON massiv → HTML (TinyMCE).
     * JSON dagi implicit CHECK ni aylanib o'tish uchun yangi ustun
     * ochilib, eski o'chiriladi (query builder — model cast ga bog'liq emas).
     */
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->mediumText('body_new')->nullable()->after('intro');
        });

        foreach (DB::table('articles')->get(['id', 'body']) as $row) {
            $decoded = is_string($row->body) ? json_decode($row->body, true) : $row->body;
            $html = is_array($decoded)
                ? implode('', array_map(fn ($p) => '<p>'.e($p).'</p>', $decoded))
                : (string) $row->body;
            DB::table('articles')->where('id', $row->id)->update(['body_new' => $html]);
        }

        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('body');
        });
        DB::statement('ALTER TABLE articles CHANGE body_new body MEDIUMTEXT NULL');
    }

    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->json('body_old')->nullable()->after('intro');
        });

        foreach (DB::table('articles')->get(['id', 'body']) as $row) {
            $paras = preg_split('/<\/p\s*>/i', (string) $row->body);
            $paras = array_values(array_filter(array_map(fn ($p) => trim(strip_tags($p)), $paras)));
            DB::table('articles')->where('id', $row->id)->update(['body_old' => json_encode($paras, JSON_UNESCAPED_UNICODE)]);
        }

        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('body');
        });
        DB::statement('ALTER TABLE articles CHANGE body_old body JSON NULL');
    }
};
