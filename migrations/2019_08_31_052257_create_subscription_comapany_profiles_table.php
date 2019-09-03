<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionComapanyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_comapany_profiles', function (Blueprint $table) {
         

            $table->integer('subscription_id')->unsigned();
           // $table->integer('comapany_profile_id')->unsigned();

            $table->unsignedBigInteger('comapany_profile_id');

            

            $table->foreign('subscription_id')->references('id')->on('user_subscriptions');

            $table->foreign('comapany_profile_id')->references('id')->on('company_profiles');
                
            
               
                
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
        Schema::dropIfExists('subscription_comapany_profiles');
    }
}
