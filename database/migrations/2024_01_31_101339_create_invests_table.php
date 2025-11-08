<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invests', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('plan_id');
            $table->integer('amount');
            $table->enum('currency', ['Bitcoin', 'Ethereum', 'Cardano', 'Ripple', 'Bnb', 'doge']);
            $table->enum('status',['running', 'confirmed', 'cancelled']);
            $table->string('end')->nullable();
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
        Schema::dropIfExists('invests');
    }
}
