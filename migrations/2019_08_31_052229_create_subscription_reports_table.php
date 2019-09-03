<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_reports', function (Blueprint $table) {
          
         
          
            $table->unsignedBigInteger('report_id');

            $table->foreign('report_id')->references('id')->on('reports');    

            $table->integer('subscription_id')->unsigned();

            
            
            $table->foreign('subscription_id')->references('id')->on('user_subscriptions');

           

            
       
                
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
        Schema::dropIfExists('subscription_reports');
    }
}
