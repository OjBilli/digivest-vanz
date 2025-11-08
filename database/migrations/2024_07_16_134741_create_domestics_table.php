<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomesticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domestics', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('reference');
            $table->float('amount');
            $table->string('bank_name');
            $table->string('account_name');
            $table->string('account_number');
            $table->string('account_type');
            $table->string('narration');
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
        Schema::dropIfExists('domestics');
    }
}
