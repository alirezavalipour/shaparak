<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcceptorsTable extends Migration
{
    public function __construct()
    {
        $this->prefix = Config::get('shaparak.table_prefix', '');
    }

    public function up()
    {
        Schema::create($this->prefix . 'acceptors', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('iin');
            $table->string('acceptorCode');
            $table->string('facilitatorAcceptorCode')->nullable();
            $table->unsignedInteger('acceptorType')->nullable();
            $table->boolean('cancelable')->default(false);
            $table->boolean('refundable')->default(false);
            $table->boolean('blockable')->default(false);
            $table->boolean('chargeBackable')->default(false);
            $table->boolean('settledSeparately')->default(false);
            $table->unsignedInteger('allowScatteredSettlement')->default(false);
            $table->boolean('acceptCreditCardTransaction')->default(false);
            $table->boolean('allowIranianProductsTrx')->default(false);
            $table->boolean('allowKaraCardTrx')->default(false);
            $table->boolean('allowGoodsBasketTrx')->default(false);
            $table->boolean('allowFoodSecurityTrx')->default(false);
            $table->boolean('allowJcbCardTrx')->default(false);
            $table->boolean('allowUpiCardTrx')->default(false);
            $table->boolean('allowVisaCardTrx')->default(false);
            $table->boolean('allowMasterCardTrx')->default(false);
            $table->boolean('allowAmericanExpressTrx')->default(false);
            $table->boolean('allowOtherInternationaCardsTrx')->default(false);
            $table->string('description')->nullable();
            $table->text('shaparakSettlementIbans');
            $table->unsignedBigInteger('shop_id');
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
        Schema::dropIfExists($this->prefix . 'acceptors');
    }
}
