<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionReportPdfDownloadCreditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_report_pdf_download_credit', function (Blueprint $table) {
            $table->integer('subscription_id')->unsigned();
    

            $table->foreign('subscription_id')->references('id')->on('subscriptions')
                ->onUpdate('cascade')->onDelete('cascade');


            $table->bigIncrements('price');    
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
        Schema::dropIfExists('subscription_report_pdf_download_credit');
    }
}
