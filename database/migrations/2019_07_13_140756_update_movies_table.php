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
    public function up()
    {
      Schema::table('movies', function (Blueprint $table) {
        $table->unsignedBigInteger('genre_id')->nullable()->after('id');
        $table->foreign('genre_id')->references('id')->on('genres');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('movies', function (Blueprint $table) {
          $table->dropForeign('movies_genre_id_foreign');
          $table->dropColumn('genre_id');
      });
    }
}
