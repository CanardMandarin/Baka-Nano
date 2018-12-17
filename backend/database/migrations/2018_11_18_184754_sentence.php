<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sentence extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sentence', function (Blueprint $table) {
            $table->increments('id');
            $table->text('sentence');

            $table->integer('id_level')->unsigned()->nullable();
            $table->integer('id_language')->unsigned()->nullable();

            $table->timestamps();
        });

        Schema::table('sentence', function (Blueprint $table) {
            $table->foreign('id_level')->references('id')->on('level')->onDelete('cascade');
            $table->foreign('id_language')->references('id')->on('language')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('sentence', function (Blueprint $table) {
            $table->dropForeign(['id_level']);
            $table->dropForeign(['id_language']);
        });

        Schema::dropIfExists('sentence');
    }
}