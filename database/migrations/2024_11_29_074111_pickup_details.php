<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pickup_details', function (Blueprint $table) {
            $table->id();
            $table->string('pickup_address');
            $table->string('pickup_name');
            $table->integer('pickup_contact')->length(10);
            $table->string('pickup_email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pickup_details');
    }
};
