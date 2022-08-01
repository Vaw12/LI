<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('clients');
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
        Schema::table('licenses', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('clients');
        });
        Schema::table('exports', function (Blueprint $table) {
            $table->foreign('license_id')->references('id')->on('licenses');
        });
        Schema::table('films', function (Blueprint $table) {
            $table->foreign('license_id')->references('id')->on('licenses');
        });
        Schema::table('utilizations', function (Blueprint $table) {
            $table->foreign('license_id')->references('id')->on('licenses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
