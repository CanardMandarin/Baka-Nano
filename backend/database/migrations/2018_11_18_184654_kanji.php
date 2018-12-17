<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kanji extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up() {
        Schema::create('kanji', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kanji');
            $table->integer('kname');
            $table->integer('kstroke');
            $table->integer('grade');

            $table->string('meaning');
            $table->string('kunyomi');
            $table->string('onyomi');

            $table->text('examples');

            $table->integer('id_level')->unsigned()->nullable();

            $table->timestamps();
        });

        Schema::table('kanji', function (Blueprint $table) {
            $table->foreign('id_level')->references('id')->on('level')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('kanji', function (Blueprint $table) {
            $table->dropForeign(['id_level']);
        });

        Schema::dropIfExists('kanji');
    }
}