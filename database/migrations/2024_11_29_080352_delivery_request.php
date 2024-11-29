<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('delivery_request', function (Blueprint $table) {
            $table->id();
            $table->integer('pickup_id');
            $table->integer('delivery_id');
            $table->integer('type_of_good_id');
            $table->integer('delivery_provider_id');
            $table->integer('priority_id');
            $table->date('shipment_pick_up_date');
            $table->time('shipment_pick_up_time');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('delivery_request');
    }
};
