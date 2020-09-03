<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantsTable extends Migration
{

    public function __construct()
    {
        $this->prefix = Config::get('shaparak.table_prefix', '');

    }

    public function up()
    {
        Schema::create($this->prefix . 'merchants', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('firstNameFa')->nullable();
            $table->string('lastNameFa')->nullable();
            $table->string('fatherNameFa')->nullable();
            $table->string('firstNameEn')->nullable();
            $table->string('lastNameEn')->nullable();
            $table->string('fatherNameEn')->nullable();
            $table->string('gender')->nullable();
            $table->timestamp('birthDate');
            $table->timestamp('registerDate')->nullable();
            $table->string('nationalCode')->nullable();
            $table->string('registerNumber')->nullable();
            $table->string('comNameFa')->nullable();
            $table->string('comNameEn')->nullable();
            $table->unsignedInteger('merchantType');
            $table->unsignedInteger('residencyType');
            $table->unsignedInteger('vitalStatus')->nullable();
            $table->unsignedInteger('birthCrtfctSerial')->nullable();
            $table->unsignedInteger('birthCrtfctSeriesLetter')->nullable();
            $table->unsignedInteger('birthCrtfctSeriesNumber')->nullable();
            $table->unsignedInteger('birthCrtfctNumber')->nullable();
            $table->string('nationalLegalCode')->nullable();
            $table->string('commercialCode')->nullable();
            $table->string('countryCode')->nullable();
            $table->string('foreignPervasiveCode')->nullable();
            $table->string('passportNumber')->nullable();
            $table->timestamp('passportExpireDate')->nullable();
            $table->string('description')->nullable();
            $table->string('telephoneNumber')->nullable();
            $table->string('cellPhoneNumber')->nullable();
            $table->string('emailAddress')->nullable();
            $table->string('webSite')->nullable();
            $table->string('fax')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->prefix . 'merchants');
    }
}
