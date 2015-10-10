<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('nutritionist_id')->unsigned();
            $table->dateTime('date_time');
            $table->enum('status', ['scheduled','cancelled','accomplished']);
            $table->integer('review')->nullable();
            $table->float('weight')->nullable();
            $table->float('height')->nullable();
            $table->float('waist')->nullable();
            $table->float('hip')->nullable();
            $table->float('arm_perimeter')->nullable();
            $table->float('bicipital')->nullable();
            $table->float('tricipital')->nullable();
            $table->float('bmi')->nullable();
            $table->float('ideal_weight')->nullable();
            $table->string('card_number')->nullable();
            $table->string('expiration_date')->nullable();
            $table->string('cv_code')->nullable();
            $table->string('name')->nullable();
            $table->string('plan')->nullable();
            $table->text('comment')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('nutritionist_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('meetings');
    }
}
