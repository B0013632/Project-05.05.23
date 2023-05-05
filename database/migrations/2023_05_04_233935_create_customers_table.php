<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('firstname', 30);
            $table->string('surname', 30);
            $table->string('email', 50);
            $table->string('phone', 20);
            $table->boolean('vip')->default(false);
            $table->string('comments', 100)->nullable();
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}