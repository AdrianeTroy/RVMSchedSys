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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('contact_num')->nullable();
            $table->integer('lim_slot')->nullable();
            $table->string('facility')->nullable();
            $table->string('fac_color', 255)->nullable();
            $table->date('date')->nullable();
            $table->date('enddate')->nullable();
            $table->time('app_start_time')->nullable();
            $table->time('app_end_time')->nullable();
            $table->string('letter')->nullable();
            $table->string('app_status')->nullable();
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('appointments');
    }
};
