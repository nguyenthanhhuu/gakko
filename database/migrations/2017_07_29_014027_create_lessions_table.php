<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lesson_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->integer('member_id')->unsigned();
            $table->string('chapter_name')->nullable();
            $table->string('chapter_time')->nullable();
            $table->string('title')->nullable();
            $table->string('video_link')->nullable();
            $table->string('old_filename')->nullable();
            $table->string('status')->nullable();
            $table->engine = 'InnoDB';
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
        Schema::dropIfExists('lessions');
    }
}
