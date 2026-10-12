<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('locale', 5)->default('en')->after('id');
            $table->dropUnique('articles_slug_unique');
            $table->unique(['slug', 'locale']);
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->string('locale', 5)->default('en')->after('id');
            $table->dropUnique('projects_slug_unique');
            $table->unique(['slug', 'locale']);
        });
    }

    public function down(): void
    {
        // Rollback da har slug dan faqat EN nusxa qoladi.
        foreach (['articles', 'projects'] as $table) {
            $dups = DB::table($table)->select('slug')->groupBy('slug')->havingRaw('COUNT(*) > 1')->pluck('slug');
            foreach ($dups as $slug) {
                DB::table($table)->where('slug', $slug)->where('locale', '!=', 'en')->delete();
            }

            Schema::table($table, function (Blueprint $table) {
                $table->dropUnique([$table->getTable(), 'slug', 'locale']);
            });
        }

        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('locale');
            $table->unique('slug');
        });

        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('locale');
            $table->unique('slug');
        });
    }
};
