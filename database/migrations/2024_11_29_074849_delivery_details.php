<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('delivery_details', function (Blueprint $table) {
            $table->id();
            $table->string('delivery_address');
            $table->string('delivery_name');
            $table->integer('delivery_contact')->length(10);
            $table->string('delivery_email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('delivery_details');
    }
};
