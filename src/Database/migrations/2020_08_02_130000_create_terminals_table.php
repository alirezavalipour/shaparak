<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerminalsTable extends Migration
{
    public function __construct()
    {
        $this->prefix = Config::get('shaparak.table_prefix', '');
    }

    public function up()
    {
        Schema::create($this->prefix.'terminals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('acceptor_id');
            $table->string("sequence");
            $table->string("terminalNumber");
            $table->unsignedInteger("terminalType");
            $table->string("serialNumber")->nullable();
            $table->timestamp("setupDate");
            $table->string("hardwareBrand")->nullable();
            $table->string("hardwareModel")->nullable();
            $table->string("accessAddress")->nullable();
            $table->string("accessPort")->nullable();
            $table->string("callbackAddress")->nullable();
            $table->string("callbackPort")->nullable();
            $table->string("description")->nullable();
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
        Schema::dropIfExists($this->prefix.'terminals');
    }
}
