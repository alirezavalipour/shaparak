<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResponseTable extends Migration
{
    public function __construct()
    {
        $this->prefix = Config::get('shaparak.table_prefix', '');
    }

    public function up()
    {
        Schema::create($this->prefix . 'responses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tracking_number')->nullable();
            $table->string('tracking_number_psp')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamp('request_date')->nullable();
            $table->text('description')->nullable();
            $table->unsignedInteger('request_type')->nullable();
            $table->unsignedInteger('merchant_id')->nullable();
            $table->text('related_merchants')->nullable();
            $table->text('data')->nullable();
            $table->text('request_rejection_reasons')->nullable();
            $table->text('request_details')->nullable();
            $table->text('success')->nullable();
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
