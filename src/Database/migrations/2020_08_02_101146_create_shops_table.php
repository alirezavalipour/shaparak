<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopsTable extends Migration
{
    public function __construct()
    {
        $this->prefix = Config::get('shaparak.table_prefix', '');
    }

    public function up()
    {
        Schema::create($this->prefix . 'shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("farsiName");
            $table->string("englishName");
            $table->string("telephoneNumber");
            $table->string("postalCode");
            $table->string("businessCertificateNumber")->nullable();
            $table->timestamp("certificateExpiryDate")->nullable();
            $table->string("description")->nullable();
            $table->string("businessCategoryCode");
            $table->string("businessSubCategoryCode");
            $table->unsignedInteger("ownershipType")->nullable();
            $table->string("rentalContractNumber")->nullable();
            $table->string("rentalExpiryDate")->nullable();
            $table->string("address")->nullable();
            $table->string("countryCode")->nullable();
            $table->string("provinceCode")->nullable();
            $table->string("cityCode")->nullable();
            $table->string("businessType");
            $table->unsignedInteger("etrustCertificateType")->nullable();
            $table->timestamp("etrustCertificateIssueDate")->nullable();
            $table->timestamp("certificateIssueDate")->nullable();
            $table->timestamp("etrustCertificateExpiryDate")->nullable();
            $table->string("emailAddress")->nullable();
            $table->string("websiteAddress")->nullable();
            $table->unsignedBigInteger('merchant_id');
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
        Schema::dropIfExists($this->prefix . 'shops');
    }
}
