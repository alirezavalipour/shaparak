@extends("layouts.panel",['page' => 'acceptor-create' ])

@section('head')
    <link href="{{asset('persian-datepicker/dist/css/persian-datepicker.css')}}" rel="stylesheet">
    <link href="{{asset('persian-datepicker/assets/css/fontiran.css')}}" rel="stylesheet">
@endsection

@section("content")

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item small"><a href="#">خانه</a></li>
                        <li class="breadcrumb-item small"><a href="#">شاپرک</a></li>
                        <li class="breadcrumb-item small">ایجاد پذیرنده</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-color font-weight-bold text-white">ایجاد پذیرنده</div>
                <div class="card-body">
                    <div class="row">

                        <form action="{{ action(  '\Shaparak\Http\Controller\Client\AcceptorsController@store') }}" method="post">
                            @csrf
                            <div class="row form-sheba">
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="shop_id" class="small font-weight-bold">shop_id</label>
                                    <input id="shop_id" class="form-control" value="{{ old("shop_id") }}" name="shop_id">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="iin" class="small font-weight-bold">iin</label>
                                    <input id="iin" class="form-control" value="{{ old("iin") }}" name="iin">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="acceptorCode" class="small font-weight-bold">acceptorCode</label>
                                    <input id="acceptorCode" class="form-control" value="{{ old("acceptorCode") }}" name="acceptorCode">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="facilitatorAcceptorCode" class="small font-weight-bold">facilitatorAcceptorCode</label>
                                    <input id="facilitatorAcceptorCode" class="form-control" value="{{ old("facilitatorAcceptorCode") }}" name="facilitatorAcceptorCode">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="acceptorType" class="small font-weight-bold">acceptorType</label>
                                    <input id="acceptorType" class="form-control" value="{{ old("acceptorType") }}" name="acceptorType">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="cancelable" class="small font-weight-bold">cancelable</label>
                                    <input id="cancelable" class="form-control" value="{{ old("cancelable") }}" name="cancelable">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="refundable" class="small font-weight-bold">refundable</label>
                                    <input id="refundable" class="form-control" value="{{ old("refundable") }}" name="refundable">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="blockable" class="small font-weight-bold">blockable</label>
                                    <input id="blockable" class="form-control" value="{{ old("blockable") }}" name="blockable">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="chargeBackable" class="small font-weight-bold">chargeBackable</label>
                                    <input id="chargeBackable" class="form-control" value="{{ old("chargeBackable") }}" name="chargeBackable">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="settledSeparately" class="small font-weight-bold">settledSeparately</label>
                                    <input id="settledSeparately" class="form-control" value="{{ old("settledSeparately") }}" name="settledSeparately">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="allowScatteredSettlement" class="small font-weight-bold">allowScatteredSettlement</label>
                                    <input id="allowScatteredSettlement" class="form-control" value="{{ old("allowScatteredSettlement") }}" name="allowScatteredSettlement">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="acceptCreditCardTransaction" class="small font-weight-bold">acceptCreditCardTransaction</label>
                                    <input id="acceptCreditCardTransaction" class="form-control" value="{{ old("acceptCreditCardTransaction") }}" name="acceptCreditCardTransaction">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="allowIranianProductsTrx" class="small font-weight-bold">allowIranianProductsTrx</label>
                                    <input id="allowIranianProductsTrx" class="form-control" value="{{ old("allowIranianProductsTrx") }}" name="allowIranianProductsTrx">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="allowKaraCardTrx" class="small font-weight-bold">allowKaraCardTrx</label>
                                    <input id="allowKaraCardTrx" class="form-control" value="{{ old("allowKaraCardTrx") }}" name="allowKaraCardTrx">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="allowGoodsBasketTrx" class="small font-weight-bold">allowGoodsBasketTrx</label>
                                    <input id="allowGoodsBasketTrx" class="form-control" value="{{ old("allowGoodsBasketTrx") }}" name="allowGoodsBasketTrx">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="allowFoodSecurityTrx" class="small font-weight-bold">allowFoodSecurityTrx</label>
                                    <input id="allowFoodSecurityTrx" class="form-control" value="{{ old("allowFoodSecurityTrx") }}" name="allowFoodSecurityTrx">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="allowJcbCardTrx" class="small font-weight-bold">allowJcbCardTrx</label>
                                    <input id="allowJcbCardTrx" class="form-control" value="{{ old("allowJcbCardTrx") }}" name="allowJcbCardTrx">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="allowUpiCardTrx" class="small font-weight-bold">allowUpiCardTrx</label>
                                    <input id="allowUpiCardTrx" class="form-control" value="{{ old("allowUpiCardTrx") }}" name="allowUpiCardTrx">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="allowVisaCardTrx" class="small font-weight-bold">allowVisaCardTrx</label>
                                    <input id="allowVisaCardTrx" class="form-control" value="{{ old("allowVisaCardTrx") }}" name="allowVisaCardTrx">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="allowMasterCardTrx" class="small font-weight-bold">allowMasterCardTrx</label>
                                    <input id="allowMasterCardTrx" class="form-control" value="{{ old("allowMasterCardTrx") }}" name="allowMasterCardTrx">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="allowAmericanExpressTrx" class="small font-weight-bold">allowAmericanExpressTrx</label>
                                    <input id="allowAmericanExpressTrx" class="form-control" value="{{ old("allowAmericanExpressTrx") }}" name="allowAmericanExpressTrx">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="allowOtherInternationaCardsTrx" class="small font-weight-bold">allowOtherInternationaCardsTrx</label>
                                    <input id="allowOtherInternationaCardsTrx" class="form-control" value="{{ old("allowOtherInternationaCardsTrx") }}" name="allowOtherInternationaCardsTrx">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="description" class="small font-weight-bold">description</label>
                                    <input id="description" class="form-control" value="{{ old("description") }}" name="description">
                                </div>
                                <div class="col-12 border-top border-gray pt-3">
                                    <div class="row">
                                        <div class="col-sm-4 col-12 form-group">
                                            <label for="shaparakSettlementIbans" class="small font-weight-bold">shaparakSettlementIbans</label>
                                            <input id="shaparakSettlementIbans" class="form-control" value="{{ old("shaparakSettlementIbans") }}" name="shaparakSettlementIbans">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a class="add-sheba btn btn-primary text-white"><i class="fa fa-plus"></i><span class="mr-2">افزودن شبا</span></a>
                                    <button class="btn card-color text-white pr-5 pl-5" type="submit">ارسال</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $(".add-sheba").click(function () {
                $(".form-sheba").append('<div class="col-12 border-top border-gray pt-3">\n' +
                    '                                    <div class="row">\n' +
                    '                                        <div class="col-sm-4 col-12 form-group">\n' +
                    '                                            <label for="shaparakSettlementIbans" class="small font-weight-bold">shaparakSettlementIbans</label>\n' +
                    '                                            <input id="shaparakSettlementIbans" class="form-control" value="{{ old("shaparakSettlementIbans") }}" name="shaparakSettlementIbans">\n' +
                    '                                        </div>\n' +
                    '                                    </div>\n' +
                    '                                </div>');
            });
        });
    </script>
@endsection


