<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSubscriptionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_subscription_details', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('subscrition_id')->unsigned();
            
            $table->foreign('subscrition_id')->references('id')->on('subscription')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->boolean('email_support')->default(1);
            $table->boolean('phone_support')->default(1);
            $table->boolean('dashboard_history')->default(1);
            $table->boolean('customization_request')->default(1);
            $table->boolean('new_report_suggestion')->default(1);

            $table->integer('user_limit');

            $table->integer('analyst_meetings_credit')->default(0);
            $table->integer('on_demand_reports_credits')->default(0);
            $table->integer('report_pdf_download_credits')->default(0);
            $table->integer('reports_updates_credits')->default(0);
            $table->integer('report_data_pack_credits')->default(0);
            $table->integer('company_profile_download_credits')->default(0);

            $table->integer('analyst_meetings_credit_used')->default(0);
            $table->integer('on_demand_reports_credits_used')->default(0);
            $table->integer('report_pdf_download_credits_used')->default(0);
            $table->integer('reports_updates_credits_used')->default(0);
            $table->integer('report_data_pack_credits_used')->default(0);
            $table->integer('company_profile_download_credits_used')->default(0);



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
        Schema::dropIfExists('user_subscription_details');
    }
}
