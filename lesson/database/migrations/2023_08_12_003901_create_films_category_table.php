<?php

use App\Models\Film;
use App\Models\FilmCategory;
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
        Schema::create('film_category', function (Blueprint $table) {
            //$table->integerIncrements('id');
            $table->integer('id')->autoIncrement()->unsigned();
            $table->integer('film_id')->unsigned();
            $table->foreign('film_id')
                ->references('id')
                ->on('film')
                ->onUpdate('cascade');
            $table->string('name', 45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film_category');
    }
};
