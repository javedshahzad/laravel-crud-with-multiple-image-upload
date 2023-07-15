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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('username')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('property_owner')->nullable();
            $table->string('property_name')->nullable();
            $table->string('property_type')->nullable();
            $table->string('allotment_type')->nullable();
            $table->string('quantity_allotment')->nullable();
            $table->string('property_location')->nullable();
            $table->string('property_picture')->nullable();
            $table->string('property_docs')->nullable();
            $table->string("status")->default("received");
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
        Schema::dropIfExists('users');
    }
}
