<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantIbansTable extends Migration
{
    public function __construct()
    {
        $this->prefix = Config::get('shaparak.table_prefix', '');
    }

    public function up()
    {
        Schema::create($this->prefix . 'merchant_ibans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('merchant_id') ;
            $table->string('description')->nullable();
            $table->string('merchantIban')->nullable();
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
        Schema::dropIfExists($this->prefix . 'responses');
    }
}
