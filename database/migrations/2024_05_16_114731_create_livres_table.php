<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {if (!Schema::hasTable('livres')){ 
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->string('titre')->nullable();
            $table->string('image')->nullable();
            $table->string('auteur')->nullable(); 
            $table->string('description')->nullable(); 
            $table->string('editeur')->nullable();
            $table->date('date_edition')->nullable();
            $table->integer('nbre_exemplaires')->nullable();
            $table->foreignId('categories_id')->constrained('categories');
            $table->timestamps();
        });
    }}

   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('livres');
    }
};
