<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('animal', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 20);
            $table->string('specie', 20);
            $table->string('razza', 20)->nullable();
            $table->integer('eta')->nullable();
            $table->string('sesso', 10);
            $table->decimal('peso', 8, 2);
            $table->decimal('altezza', 8, 2);
            $table->string('immagine')->nullable();
            $table->text('info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animal');
    }
};
