<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('type_of_good', function (Blueprint $table) {
            $table->id();
            $table->string('type_of_good_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('type_of_good');
    }
};
