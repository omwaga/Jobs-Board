<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('phone_number');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('industry_id');
            $table->string('contact_person');
            $table->unsignedBigInteger('company_type');
            $table->string('logo')->nullable();
            $table->Integer('company_size')->nullable();
            $table->string('physical_address')->nullable();
            $table->string('website_url')->nullable();
            $table->string('facebook_page')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->foreign('country_id')
            ->references('id')
            ->on('countries')
            ->onDelete('cascade');

            $table->foreign('city_id')
            ->references('id')
            ->on('cities')
            ->onDelete('cascade');

            $table->foreign('industry_id')
            ->references('id')
            ->on('industries')
            ->onDelete('cascade');

            $table->foreign('company_type')
            ->references('id')
            ->on('company_types')
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
        Schema::dropIfExists('company_profiles');
    }
}
