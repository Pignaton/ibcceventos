<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table){
            $table->id();
            $table->string('email');
            $table->string('password');
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });

        Schema::create('registers', function(Blueprint $table){
            $table->id();
            $table->integer('age');
            $table->string('name');
            $table->string('email', 40)->nullable();
            $table->string('phone', 11)->nullable();
            $table->string('gender', 10)->nullable();
            $table->char('check_frequent', 1)->nullable();
            $table->char('check_companion', 1)->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });

        Schema::create('address', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('id_register');
            $table->string('zipcode', 9)->nullable();
            $table->string('road', 40)->nullable();
            $table->integer('number')->nullable();
            $table->string('complement', 40)->nullable();
            $table->string('dsitrict', 40)->nullable();
            $table->string('city', 40)->nullable();
            $table->string('state', 40)->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at');

            $table->foreign('id_register')->references('id')->on('registers');
        });

        Schema::create('registers', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('leader', 100)->nullable();
            $table->string('phone', 11)->nullable();
            $table->integer('quantidade')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * 
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('registers');
        Schema::drop('address');
    }
}
