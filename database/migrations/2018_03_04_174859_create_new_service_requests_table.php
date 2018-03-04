<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewServiceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('new_service_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_name');
            $table->text('description');
            $table->string('category_name');
            $table->string('client_number');
            $table->string('client_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('new_service_requests');
    }
}
