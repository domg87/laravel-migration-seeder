<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30);
            $table->string('original_title', 50)->nullable();
            $table->string('author', 50);
            $table->smallInteger('number');
            $table->smallInteger('n_page');
            $table->string('edition', 50);
            $table->float('price', 6,2);
            $table->boolean('color')->default(false);
            $table->year('release');
            $table->string('cover')->default('https://via.placeholder.com/150x300');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
