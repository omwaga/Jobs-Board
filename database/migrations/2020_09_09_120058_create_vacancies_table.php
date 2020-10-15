<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('subscription');
            $table->unsignedBigInteger('country');
            $table->unsignedBigInteger('city');
            $table->unsignedBigInteger('category');
            $table->unsignedBigInteger('job_type');
            $table->string('job_title');
            $table->string('required_experience');
            $table->string('application_deadline');
            $table->ENUM('status', ['published', 'unpublished', 'pending approval'])->default('pending');
            $table->string('slug');
            $table->string('salary');
            $table->text('description');
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('country')
            ->references('id')
            ->on('countries')
            ->onDelete('cascade');

            $table->foreign('city')
            ->references('id')
            ->on('cities')
            ->onDelete('cascade');

            $table->foreign('category')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');

            $table->foreign('job_type')
            ->references('id')
            ->on('job_types')
            ->onDelete('cascade');

            $table->foreign('subscription')
            ->references('id')
            ->on('posting_subscriptions')
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
        Schema::dropIfExists('vacancies');
    }
}
