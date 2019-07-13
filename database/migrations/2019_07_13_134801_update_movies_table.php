<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     // creo questa migrations per aggiornare la tabella movie inserendo una nuova tabella
    public function up()
    {
      Schema::create('movies', function (Blueprint $table) {
        $table->unsignedBigInteger('genre_id');
        $table->foreign('genre_id')->references('id')->('genres');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      $table->dropForeign('movies_genre_id_foreign');
      $table->dropColumn('genre_id');
    }
}
