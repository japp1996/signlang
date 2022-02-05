<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditWordsTableAddNameVideoCategoryWordStartEndField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('words', function (Blueprint $table) {
            $table->string('name', 100);
            $table->integer('video_id')->unsigned();
            $table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');
            $table->integer('word_category_id')->unsigned();
            $table->foreign('word_category_id')->references('id')->on('words')->onDelete('cascade');
            $table->integer('start')->unsigned();
            $table->integer('end')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('words', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropForeign('words_video_id_foreign');
            $table->dropColumn('video_id');
            $table->dropForeign('words_word_category_id_foreign');
            $table->dropColumn('word_category_id');
        });
    }
}
