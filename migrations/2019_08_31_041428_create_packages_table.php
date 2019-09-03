<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->integer('maximum_users')->nullable();
            $table->integer('report_count')->nullable();
            $table->integer('on_demand_report_credit')->nullable();	
            $table->integer('analyst_meeting_credit')->nullable();
            $table->integer('user_limit')->nullable();
            $table->integer('company_profile')->nullable();
            $table->double('price_per_year')->nullable();
            $table->double('discount')->nullable();
            $table->integer('expiry_protection_period')->nullable();
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
        Schema::dropIfExists('packages');
    }
}
