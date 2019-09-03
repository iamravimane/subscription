<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_prices', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('subscription_id')->unsigned();

            $table->foreign('subscription_id')->references('id')->on('user_subscriptions');

            $table->integer('analyst_meetings_credit_per_unit_price')->default(0);
            $table->integer('on_demand_reports_credits_per_unit_price')->default(0);
            $table->integer('report_pdf_download_credits_per_unit_price')->default(0);
            $table->integer('reports_updates_credits_per_unit_price')->default(0);
            $table->integer('report_data_pack_credits_per_unit_price')->default(0);
            $table->integer('company_profile_download_credits_per_unit_price')->default(0);

        

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
        Schema::dropIfExists('credit_prices');
    }
}
