<?php

use App\Models\Matiere;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Etudiant::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Matiere::class)->constrained()->onDelete('cascade');
            $table->date('date');
            $table->decimal('valeur', 4, 2); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluations');
    }
};
