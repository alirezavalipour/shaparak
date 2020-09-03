<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantOfficersTable extends Migration
{
    public function __construct()
    {
        $this->prefix = Config::get('shaparak.table_prefix', '');
    }

    public function up()
    {
        Schema::create($this->prefix . 'merchant_officers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('merchant_id')->unsigned();
            $table->string('firstNameFa')->nullable();
            $table->string('lastNameFa')->nullable();
            $table->string('fatherNameFa')->nullable();
            $table->string('firstNameEn')->nullable();
            $table->string('lastNameEn')->nullable();
            $table->string('fatherNameEn')->nullable();
            $table->string('gender')->nullable();
            $table->string('birthDate')->nullable();
            $table->string('nationalCode')->nullable();
            $table->unsignedInteger('residencyType');
            $table->unsignedInteger('vitalStatus')->nullable();
            $table->unsignedInteger('birthCrtfctSeriesNumber')->nullable();
            $table->unsignedInteger('birthCrtfctSerial')->nullable();
            $table->unsignedInteger('birthCrtfctSeriesLetter')->nullable();
            $table->unsignedInteger('birthCrtfctNumber')->nullable();
            $table->string('countryCode')->nullable();
            $table->string('foreignPervasiveCode')->nullable();
            $table->string('registerDate')->nullable();
            $table->string('registerNumber')->nullable();
            $table->string('passportNumber')->nullable();
            $table->string('passportExpireDate')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists($this->prefix . 'merchant_officers');
    }
}
