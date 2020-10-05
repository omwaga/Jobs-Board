<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobseekerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseeker_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number')->unique();
            $table->string('email')->unique();
            $table->string('gender');
            $table->unsignedBigInteger('current_location');
            $table->date('date_of_birth');
            $table->string('when_to_start');
            $table->unsignedBigInteger('home_city');
            $table->unsignedBigInteger('preferred_location');
            $table->unsignedBigInteger('job_type');
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('current_location')
            ->references('id')
            ->on('cities')
            ->onDelete('cascade');

            $table->foreign('home_city')
            ->references('id')
            ->on('cities')
            ->onDelete('cascade');

            $table->foreign('preferred_location')
            ->references('id')
            ->on('cities')
            ->onDelete('cascade');

            $table->foreign('job_type')
            ->references('id')
            ->on('job_types')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobseeker_details');
    }
}
