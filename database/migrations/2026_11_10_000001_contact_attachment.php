<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /** Kontakt forma fayli (ixtiyoriy, max 5MB) — uploads/contact da saqlanadi. */
    public function up(): void
    {
        Schema::table('contact_messages', function (Blueprint $table) {
            $table->string('attachment')->nullable()->after('message');
        });
    }

    public function down(): void
    {
        Schema::table('contact_messages', function (Blueprint $table) {
            $table->dropColumn('attachment');
        });
    }
};
