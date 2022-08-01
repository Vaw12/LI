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
        Schema::create('exports', function (Blueprint $table) {
            $table->id();
            $table->binary('research_permit')->nullable();
            $table->binary('research_proposal')->nullable();
            $table->binary('support_letter')->nullable();
            $table->binary('application_form')->nullable();
            $table->binary('research_clearance')->nullable();
            $table->binary('access_permit')->nullable();
            $table->binary('prior_consent')->nullable();
            $table->binary('instituitional_profile')->nullable();
            $table->binary('cv')->nullable();
            $table->foreignId('license_id');
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
        Schema::dropIfExists('exports');
    }
};
