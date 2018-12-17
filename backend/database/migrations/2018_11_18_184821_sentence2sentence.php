<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sentence2sentence extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sentence2sentence', function (Blueprint $table) {
            $table->integer('sentence')->unsigned();
            $table->integer('translation')->unsigned();
            $table->primary(['sentence', 'translation']);
            $table->index(['sentence', 'translation']);
        });


        Schema::table('sentence2sentence', function (Blueprint $table) {
            $table->foreign('sentence')->references('id')->on('sentence')->onDelete('cascade');
            $table->foreign('translation')->references('id')->on('sentence')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('sentence2sentence', function (Blueprint $table) {
            $table->dropForeign(['sentence']);
            $table->dropForeign(['translation']);
        });
        
        Schema::dropIfExists('sentence2sentence');
    }
}
