<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * projects.scope: JSON massiv → HTML (TinyMCE).
     * JSON dagi implicit CHECK ni aylanib o'tish uchun yangi ustun
     * ochilib, eski o'chiriladi (query builder — model cast ga bog'liq emas).
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->mediumText('scope_new')->nullable()->after('description');
        });

        foreach (DB::table('projects')->get(['id', 'scope']) as $row) {
            $decoded = is_string($row->scope) ? json_decode($row->scope, true) : $row->scope;
            $html = is_array($decoded)
                ? '<ul>'.implode('', array_map(fn ($p) => '<li>'.e($p).'</li>', $decoded)).'</ul>'
                : (string) $row->scope;
            DB::table('projects')->where('id', $row->id)->update(['scope_new' => $html]);
        }

        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('scope');
        });
        DB::statement('ALTER TABLE projects CHANGE scope_new scope MEDIUMTEXT NULL');
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->json('scope_old')->nullable()->after('description');
        });

        foreach (DB::table('projects')->get(['id', 'scope']) as $row) {
            $items = preg_split('/<\/li\s*>/i', (string) $row->scope);
            $items = array_values(array_filter(array_map(fn ($p) => trim(strip_tags($p)), $items)));
            DB::table('projects')->where('id', $row->id)->update(['scope_old' => json_encode($items, JSON_UNESCAPED_UNICODE)]);
        }

        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('scope');
        });
        DB::statement('ALTER TABLE projects CHANGE scope_old scope JSON NULL');
    }
};
