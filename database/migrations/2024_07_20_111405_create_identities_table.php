<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identities', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('ssn');
            $table->string('ssn_front');
            $table->string('ssn_back');
            $table->string('card');
            $table->string('card_front');
            $table->string('card_back');
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
        Schema::dropIfExists('identities');
    }
}
