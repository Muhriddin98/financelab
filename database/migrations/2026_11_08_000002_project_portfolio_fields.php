<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /** Portfolio jadvali uchun: initiator + capex (nullable, admin keyingi qadamda to'ldiradi). */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('initiator')->nullable()->after('industry');
            $table->string('capex')->nullable()->after('initiator');
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['initiator', 'capex']);
        });
    }
};
