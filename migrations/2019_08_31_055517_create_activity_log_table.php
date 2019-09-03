<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_log', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            // $table->integer('subscription_id')->nullable();
            // $table->foreign('subscrition_id')->references('id')->on('subscription')
            // ->onUpdate('cascade')->onDelete('cascade');
            
            $table->string('source_type');
            $table->integer('source_id')->nullable();
            $table->string('action');

            $table->enum('status', ['active', 'deleted']);

           


         
        
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
        Schema::dropIfExists('activity_log');
    }
}
