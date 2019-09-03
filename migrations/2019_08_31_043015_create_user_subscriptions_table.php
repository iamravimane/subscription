<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');


            $table->integer('package_id')->unsigned();

            
            $table->foreign('package_id')->references('id')->on('packages')
            ->onUpdate('cascade')->onDelete('cascade');


            $table->date('subscription_start_timestamp');
            $table->date('subscription_end_timestamp');

           


            $table->enum('status', ['live', 'expired']);	

            //$table->primary(['user_id', 'package_id']);




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
        Schema::dropIfExists('user_subscriptions');
    }
}
