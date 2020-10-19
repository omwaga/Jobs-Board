<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('vacancy_id');
            $table->string('full_name');
            $table->string('phone_number');
            $table->string('email');
            $table->unsignedBigInteger('country');
            $table->unsignedBigInteger('city');
            $table->string('resume');
            $table->string('cover_letter')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('vacancy_id')
            ->references('id')
            ->on('vacancies')
            ->onDelete('cascade');

            $table->foreign('country')
            ->references('id')
            ->on('countries')
            ->onDelete('cascade');

            $table->foreign('city')
            ->references('id')
            ->on('cities')
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
        Schema::dropIfExists('applications');
    }
}
