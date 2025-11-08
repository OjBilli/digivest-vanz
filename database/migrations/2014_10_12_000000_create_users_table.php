<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone')->nullable();
             $table->string('email')->unique();
            $table->string('currency_type');
            $table->string('account_type');
            $table->string('occupation');

            $table->string('username')->unique();
            $table->bigInteger('account_number')->unique();

            $table->enum('role', ['user', 'admin'])->default('user');

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');


        
            $table->string('country');
            $table->string('city')->nullable();
            $table->string('address_1')->nullable();

            $table->string('annual_income')->nullable();

            $table->string('profile_picture');
            $table->string('ssn');
            $table->string('dob');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
