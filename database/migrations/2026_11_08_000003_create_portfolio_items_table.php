<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Portfolio jadvali — projects dan ALOHIDA (4 ustun alohida tahrirlanadi).
     * Mavjud loyihalar ko'chiriladi (initiator/capex bo'sh).
     */
    public function up(): void
    {
        Schema::create('portfolio_items', function (Blueprint $table) {
            $table->id();
            $table->string('industry', 50);
            $table->string('locale', 5)->default('en');
            $table->string('title');
            $table->string('initiator')->nullable();
            $table->string('capex')->nullable();
            $table->text('scope')->nullable();
            $table->boolean('is_published')->default(true);
            $table->timestamps();
            $table->unique(['industry', 'locale', 'title']);
        });

        $anchors = ['mining' => 'Mining', 'automotive' => 'Automotive', 'manufacturing' => 'Manufacturing', 'energy' => 'Energy', 'infrastructure' => 'Infrastructure'];
        foreach (DB::table('projects')->get() as $p) {
            $anchor = null;
            foreach ($anchors as $a => $name) {
                if (stripos((string) $p->industry, $name) !== false || stripos($name, (string) $p->industry) !== false) {
                    $anchor = $a;
                    break;
                }
            }
            if (! $anchor) {
                continue;
            }
            DB::table('portfolio_items')->updateOrInsert(
                ['industry' => $anchor, 'locale' => $p->locale ?? 'en', 'title' => $p->title],
                ['initiator' => $p->initiator, 'capex' => $p->capex, 'scope' => strip_tags($p->description ?? ''), 'is_published' => $p->is_published ?? true, 'created_at' => now(), 'updated_at' => now()]
            );
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolio_items');
    }
};
