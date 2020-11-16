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
        Schema::create('promoCode', function (Blueprint $table) {

            $table->char('promoCode')->unique();
            $table->bigInteger('Amount');
            $table->bigInteger('Radius');
            $table->string('location');
            $table->string('Event');
            $table->double('latitude');
            $table->double('longtitude');
            $table->string('Status');
            $table->boolean('Deactivated');
            $table->boolean('Expired');
            // $table->timestamp('created_at')->nullable();
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
        Schema::dropIfExists('promoCode');
    }
}
