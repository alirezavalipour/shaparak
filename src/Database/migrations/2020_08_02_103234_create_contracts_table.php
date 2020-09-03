<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    public function __construct()
    {
        $this->prefix = Config::get('shaparak.table_prefix', '');
    }

    public function up()
    {
        Schema::create($this->prefix . 'contracts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp("contractDate");
            $table->timestamp("expiryDate")->nullable();
            $table->timestamp("serviceStartDate");
            $table->string("contractNumber");
            $table->string("description")->nullable();
            $table->string("updateAction")->default(0);
            $table->unsignedBigInteger('merchant_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists($this->prefix . 'contracts');
    }
}
