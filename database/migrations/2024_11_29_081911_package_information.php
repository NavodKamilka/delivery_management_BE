<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('package_information', function (Blueprint $table) {
            $table->id();
            $table->string('package_description');
            $table->string('package_length');
            $table->string('package_height');
            $table->string('package_width');
            $table->string('package_weight');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('package_information');
    }
};
