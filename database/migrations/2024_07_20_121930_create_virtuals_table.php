<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVirtualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtuals', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('card_holder');
            $table->string('card_number');
            $table->enum('status',['pending', 'confirmed', 'cancelled']);
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
        Schema::dropIfExists('virtuals');
    }
}
