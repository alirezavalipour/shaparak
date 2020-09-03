@extends("layouts.panel",['page' => 'merchant-show' ])

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
                        <li class="breadcrumb-item small"><a href="#">فروش</a></li>
                        <li class="breadcrumb-item small">ویرایش مشتریان</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-color font-weight-bold text-white">ویرایش مشتریان</div>
                <div class="card-body">
                    <div class="row">
                        <ul class="col-sm-3 col-12 mb-3 nav nav-tabs nav-justified link-color">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#step1">مشتری</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#step2">قراداد</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#step3">فروشگاه</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#step4">عملیات</a>
                            </li>
                        </ul>
                        <div class="col-sm-9 d-sm-block d-none border-bottom border-gray mb-3"></div>
                        <div class="col-12 tab-content">
                            <form id="step1" class="tab-pane active" action="{{ route('shaparak.merchant.update' , ['merchant' => $merchant->id ]) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="firstNameFa" class="small font-weight-bold">firstNameFa</label>
                                        <input id="firstNameFa" class="form-control" value="{{ old("firstNameFa" , $merchant->firstNameFa) }}" name="firstNameFa">
                                    </div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="lastNameFa" class="small font-weight-bold">lastNameFa</label>
                                        <input id="lastNameFa" class="form-control" value="{{ old("lastNameFa" , $merchant->lastNameFa) }}" name="lastNameFa">
                                    </div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="fatherNameFa" class="small font-weight-bold">fatherNameFa</label>
                                        <input id="fatherNameFa" class="form-control" value="{{ old("fatherNameFa" , $merchant->fatherNameFa ) }}" name="fatherNameFa">
                                    </div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="firstNameEn" class="small font-weight-bold">firstNameEn</label>
                                        <input id="firstNameEn" class="form-control" value="{{ old("firstNameEn" , $merchant->firstNameEn ) }}" name="firstNameEn">
                                    </div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="lastNameEn" class="small font-weight-bold">lastNameEn</label>
                                        <input id="lastNameEn" class="form-control" value="{{ old("lastNameEn" , $merchant->lastNameEn) }}" name="lastNameEn">
                                    </div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="fatherNameEn" class="small font-weight-bold">fatherNameEn</label>
                                        <input id="fatherNameEn" class="form-control" value="{{ old("fatherNameEn" , $merchant->fatherNameEn) }}" name="fatherNameEn">
                                    </div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="gender" class="small font-weight-bold">gender</label>
                                        <select id="gender" class="form-control" name="gender">
                                            <option
                                                {{ old("gender" , $merchant->gender) == 0 ? 'selected' : ""}} value="0">
                                                زن
                                            </option>
                                            <option
                                                {{ old("gender" , $merchant->gender) == 1  ? 'selected' : ""}}  value="1">
                                                مرد
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="birthDate" class="small font-weight-bold">birthDate</label>
                                        <input id="birthDate" class="form-control" value="{{ old("birthDate" , $merchant->birthDate) }}" type="text">
                                        <input name="birthDate" type="hidden" id="birthDate" class="form-control observer-to-alt"/>
                                    </div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="registerDate" class="small font-weight-bold">registerDate</label>
                                        <input id="registerDate" class="form-control" value="{{ old("registerDate" , $merchant->registerDate) }}" type="text">
                                        <input name="registerDate" type="hidden" id="registerDate" class="form-control observer-to-alt"/>
                                    </div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="nationalCode" class="small font-weight-bold">nationalCode</label>
                                        <input id="nationalCode" class="form-control" value="{{ old("nationalCode" , $merchant->nationalCode) }}" name="nationalCode"></div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="registerNumber" class="small font-weight-bold">registerNumber</label>
                                        <input id="registerNumber" class="form-control" value="{{ old("registerNumber" , $merchant->registerNumber ) }}" name="registerNumber"></div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="comNameFa" class="small font-weight-bold">comNameFa</label>
                                        <input id="comNameFa" class="form-control" value="{{ old("comNameFa" , $merchant->comNameFa) }}" name="comNameFa"></div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="comNameEn" class="small font-weight-bold">comNameEn</label>
                                        <input id="comNameEn" class="form-control" value="{{ old("comNameEn" , $merchant->comNameEn) }}" name="comNameEn"></div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="merchantType" class="small font-weight-bold">merchantType</label>
                                        <select id="merchantType" class="form-control" name="merchantType">
                                            <option
                                                {{ old("merchantType" , $merchant->merchantType) == 0 ? 'selected' : ""}} value="0">
                                                حقیقی
                                            </option>
                                            <option
                                                {{ old("merchantType" , $merchant->merchantType) == 1  ? 'selected' : ""}}  value="1">
                                                حقوقی
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="merchantType" class="small font-weight-bold">residencyType</label>
                                        <select id="merchantType" class="form-control" name="merchantType">
                                            <option
                                                {{ old("residencyType" , $merchant->residencyType) == 0 ? 'selected' : ""}} value="0">
                                                ایرانی
                                            </option>
                                            <option
                                                {{ old("residencyType" , $merchant->residencyType) == 1  ? 'selected' : ""}}  value="1">
                                                غیر
                                                ایرانی
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="vitalStatus" class="small font-weight-bold">vitalStatus</label>
                                        <input id="vitalStatus" class="form-control" value="{{ old("vitalStatus" , $merchant->vitalStatus) }}" name="vitalStatus"></div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="birthCrtfctSerial" class="small font-weight-bold">birthCrtfctSerial</label>
                                        <input id="birthCrtfctSerial" class="form-control" value="{{ old("birthCrtfctSerial" , $merchant->birthCrtfctSerial) }}" name="birthCrtfctSerial"></div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="birthCrtfctSeriesLetter" class="small font-weight-bold">birthCrtfctSeriesLetter</label>
                                        <input id="birthCrtfctSeriesLetter" class="form-control" value="{{ old("birthCrtfctSeriesLetter" , $merchant->birthCrtfctSeriesLetter) }}" name="birthCrtfctSeriesLetter"></div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="birthCrtfctSeriesNumber" class="small font-weight-bold">birthCrtfctSeriesNumber</label>
                                        <input id="birthCrtfctSeriesNumber" class="form-control" value="{{ old("birthCrtfctSeriesNumber" , $merchant->birthCrtfctSeriesNumber) }}" name="birthCrtfctSeriesNumber"></div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="birthCrtfctNumber" class="small font-weight-bold">birthCrtfctNumber</label>
                                        <input id="birthCrtfctNumber" class="form-control" value="{{ old("birthCrtfctNumber", $merchant->birthCrtfctNumber ) }}" name="birthCrtfctNumber"></div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="nationalLegalCode" class="small font-weight-bold">nationalLegalCode</label>
                                        <input id="nationalLegalCode" class="form-control" value="{{ old("nationalLegalCode" , $merchant->nationalLegalCode) }}" name="nationalLegalCode"></div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="commercialCode" class="small font-weight-bold">commercialCode</label>
                                        <input id="commercialCode" class="form-control" value="{{ old("commercialCode" , $merchant->commercialCode) }}" name="commercialCode"></div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="countryCode" class="small font-weight-bold">countryCode</label>
                                        <input id="countryCode" class="form-control" value="{{ old("countryCode" , $merchant->countryCode) }}" name="countryCode"></div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="foreignPervasiveCode" class="small font-weight-bold">foreignPervasiveCode</label>
                                        <input id="foreignPervasiveCode" class="form-control" value="{{ old("foreignPervasiveCode" , $merchant->foreignPervasiveCode) }}" name="foreignPervasiveCode"></div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="passportNumber" class="small font-weight-bold">passportNumber</label>
                                        <input id="passportNumber" class="form-control" value="{{ old("passportNumber" , $merchant->passportNumber) }}" name="passportNumber"></div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="passportExpireDate" class="small font-weight-bold">passportExpireDate</label>
                                        <input id="passportExpireDate" class="form-control" value="{{ old("passportExpireDate" , $merchant->passportExpireDate) }}" type="text">
                                        <input name="passportExpireDate" type="hidden" id="passportExpireDate" class="form-control observer-to-alt"/>
                                    </div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="telephoneNumber" class="small font-weight-bold">telephoneNumber</label>
                                        <input id="telephoneNumber" class="form-control" value="{{ old("telephoneNumber", $merchant->telephoneNumber) }}" name="telephoneNumber"></div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="cellPhoneNumber" class="small font-weight-bold">cellPhoneNumber</label>
                                        <input id="cellPhoneNumber" class="form-control" value="{{ old("cellPhoneNumber" , $merchant->cellPhoneNumber) }}" name="cellPhoneNumber"></div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="emailAddress" class="small font-weight-bold">emailAddress</label>
                                        <input id="emailAddress" class="form-control" value="{{ old("emailAddress", $merchant->emailAddress) }}" name="emailAddress"></div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="webSite" class="small font-weight-bold">webSite</label>
                                        <input id="webSite" class="form-control" value="{{ old("webSite" , $merchant->webSite) }}" name="webSite"></div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="fax" class="small font-weight-bold">fax</label>
                                        <input id="fax" class="form-control" value="{{ old("fax" , $merchant->fax) }}" name="fax"></div>
                                    <div class="col-12 border-top border-gray pt-3">
                                        <div class="row">
                                            @foreach($merchant->merchantIbans as $merchantIban)
                                                <div class="col-sm-4 col-12 form-group">
                                                    <label for="merchantIbans" class="small font-weight-bold">merchantIbans</label>
                                                    <input id="merchantIbans" class="form-control" value="{{ old("merchantIbans" , $merchantIban->merchantIbans) }}" name="merchantIbans">
                                                </div>
                                                <div class="col-sm-4 col-12 form-group">
                                                    <label for="description" class="small font-weight-bold">description</label>
                                                    <input id="description" class="form-control" value="{{ old("description" , $merchantIban->description) }}" name="description">
                                                </div>
                                            @endforeach
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
                            <form id="step2" class="tab-pane" action="{{ action('\Shaparak\Http\Controller\Client\MerchantsController@store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="merchant_id" class="small font-weight-bold">merchant_id</label>
                                        <input id="merchant_id" class="form-control" value="{{ old("merchant_id", $contract->merchant_id) }}" name="merchant_id">
                                    </div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="contractDate" class="small font-weight-bold">contractDate</label>
                                        <input id="contractDate" class="form-control" value="{{ old("contractDate", $contract->contractDate) }}" type="text">
                                        <input name="contractDate" type="hidden" id="contractDate" class="form-control observer-to-alt"/>
                                    </div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="expiryDate" class="small font-weight-bold">expiryDate</label>
                                        <input id="expiryDate" class="form-control" value="{{ old("expiryDate", $contract->expiryDate) }}" type="text">
                                        <input name="expiryDate" type="hidden" id="expiryDate" class="form-control observer-to-alt"/>
                                    </div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="serviceStartDate" class="small font-weight-bold">serviceStartDate</label>
                                        <input id="serviceStartDate" class="form-control" value="{{ old("serviceStartDate", $contract->serviceStartDate) }}" type="text">
                                        <input name="serviceStartDate" type="hidden" id="serviceStartDate" class="form-control observer-to-alt"/>
                                    </div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="contractNumber" class="small font-weight-bold">contractNumber</label>
                                        <input id="contractNumber" class="form-control" value="{{ old("contractNumber", $contract->contractNumber) }}" name="contractNumber">
                                    </div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="description" class="small font-weight-bold">description</label>
                                        <input id="description" class="form-control" value="{{ old("description", $contract->description) }}" name="description">
                                    </div>
                                    <div class="col-sm-4 col-12 form-group">
                                        <label for="updateAction" class="small font-weight-bold">updateAction</label>
                                        <input id="updateAction" class="form-control" value="{{ old("updateAction", $contract->updateAction) }}" name="updateAction">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button class="btn card-color text-white pr-5 pl-5" type="submit">ارسال</button>
                                    </div>
                                </div>
                            </form>
                            <div id="step3" class="tab-pane">
                                <div class="row">
                                    <div class="col-12 table-responsive mt-3">
                                        <table class="table table-bordered table-striped table-hover small text-center">
                                            <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>merchant_id</th>
                                                <th>farsiName</th>
                                                <th>telephoneNumber</th>
                                                <th>address</th>
                                                <th>provinceCode</th>
                                                <th>cityCode</th>
                                                <th>businessType</th>
                                                <th>created_at</th>
                                                <th>update</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($shops  as $shop)
                                                <tr>
                                                    <td>
                                                        <a href="{{ route('shaparak.shop.find' , ['id' => $shop->id ]) }}">{{ $shop->id }}</a>
                                                    </td>
                                                    <td>{{ $shop->merchant_id }}</td>
                                                    <td>{{ $shop->farsiName }}</td>
                                                    <td>{{ $shop->telephoneNumber }}</td>
                                                    <td>{{ $shop->address }}</td>
                                                    <td>{{ $shop->provinceCode }}</td>
                                                    <td>{{ $shop->cityCode }}</td>
                                                    <td>{{ $shop->businessType }}</td>
                                                    <td>{{ $shop->created_at }}</td>
                                                    <td>
                                                        <a href="{{ route('shaparak.shop.find' , ['id' => $shop->id ]) }}"><i class="fa fa-edit"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div id="step4" class="tab-pane">
                                <div class="row">
                                    <form class="col-sm-3 col-12 form-group" action="{{route('shaparak.shop_provider_register.send', ['id' => $merchant->id ])}}" method="post">
                                        @csrf
                                        <button class="btn btn-danger col-12">تعریف مشتری و فروشگاه</button>
                                    </form>
                                    <form class="col-sm-3 col-12 form-group" action="{{route('shaparak.terminal-terminal_register.send', ['id' => $merchant->id ])}}" method="post">
                                        @csrf
                                        <button class="btn btn-success col-12">تعریف پذیرندگی</button>
                                    </form>
                                    <form class="col-sm-3 col-12 form-group" action="{{route('shaparak.change_sheba.send', ['id' => $merchant->id ])}}" method="post">
                                        @csrf
                                        <button class="btn btn-primary col-12">تعریف شباهای متصل به پذیرندگی</button>
                                    </form>
                                    <form class="col-sm-3 col-12 form-group" action="{{route('shaparak.deactivate_terminal.send', ['id' => $merchant->id ])}}" method="post">
                                        @csrf
                                        <button class="btn btn-warning col-12">غیرفعال سازی پایانه</button>
                                    </form>
                                    <form class="col-sm-3 col-12 form-group" action="{{route('shaparak.deactivate_terminal.send', ['id' => $merchant->id ])}}" method="post">
                                        @csrf
                                        <button class="btn btn-info col-12">فعال سازی مجدد سامانه</button>
                                    </form>
                                    <form class="col-sm-3 col-12 form-group" action="{{route('shaparak.deactivate_terminal.send', ['id' => $merchant->id ])}}" method="post">
                                        @csrf
                                        <button class="btn btn-secondary col-12">تغییر فروشگاه</button>
                                    </form>
                                    <form class="col-sm-3 col-12 form-group" action="{{route('shaparak.deactivate_terminal.send', ['id' => $merchant->id ])}}" method="post">
                                        @csrf
                                        <button class="btn card-color text-white col-12">اصلاح اطلاعات</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script src="{{asset('persian-date/dist/persian-date.js')}}"></script>
    <script src="{{asset('persian-datepicker/dist/js/persian-datepicker.js')}}"></script>
    <script>
        $(document).ready(function () {
            $("#birthDate").persianDatepicker({
                observer: true,
                format: 'YYYY-MM-DD',
                altFormat: 'X',
                initialValueType: "gregorian",
                altField: '.observer-to-alt' ,
                timePicker: {
                    enabled: true,
                    meridiem: {
                        enabled: true
                    }
                }
            });
            $("#passportExpireDate").persianDatepicker({
                observer: true,
                format: 'YYYY-MM-DD',
                altFormat: 'X',
                initialValueType: "gregorian",
                altField: '.observer-to-alt' ,
                timePicker: {
                    enabled: true,
                    meridiem: {
                        enabled: true
                    }
                }
            });
            $("#registerDate").persianDatepicker({
                observer: true,
                format: 'YYYY-MM-DD',
                altFormat: 'X',
                initialValueType: "gregorian",
                altField: '.observer-to-alt' ,
                timePicker: {
                    enabled: true,
                    meridiem: {
                        enabled: true
                    }
                }
            });
            $("#contractDate").persianDatepicker({
                observer: true,
                format: 'YYYY-MM-DD',
                altFormat: 'X',
                initialValueType: "gregorian",
                altField: '.observer-to-alt' ,
                timePicker: {
                    enabled: true,
                    meridiem: {
                        enabled: true
                    }
                }
            });
            $("#expiryDate").persianDatepicker({
                observer: true,
                format: 'YYYY-MM-DD',
                altFormat: 'X',
                initialValueType: "gregorian",
                altField: '.observer-to-alt' ,
                timePicker: {
                    enabled: true,
                    meridiem: {
                        enabled: true
                    }
                }
            });
            $("#serviceStartDate").persianDatepicker({
                observer: true,
                format: 'YYYY-MM-DD',
                altFormat: 'X',
                initialValueType: "gregorian",
                altField: '.observer-to-alt' ,
                timePicker: {
                    enabled: true,
                    meridiem: {
                        enabled: true
                    }
                }
            });
            $(".add-sheba").click(function () {
                $(".form-sheba").append('<div class="col-12 border-top border-gray pt-3">\n' +
                    '                                    <div class="row">\n' +
                    '                                        <div class="col-sm-4 col-12 form-group">\n' +
                    '                                            <label for="merchantIbans" class="small font-weight-bold">merchantIbans</label>\n' +
                    '                                            <input id="merchantIbans" class="form-control" value="{{ old("merchantIbans" , $merchant->merchantIbans) }}" name="merchantIbans">\n' +
                    '                                        </div>\n' +
                    '                                        <div class="col-sm-4 col-12 form-group">\n' +
                    '                                            <label for="description" class="small font-weight-bold">description</label>\n' +
                    '                                            <input id="description" class="form-control" value="{{ old("description" , $merchant->description) }}" name="description">\n' +
                    '                                        </div>\n' +
                    '                                    </div>\n' +
                    '                                </div>'
                );
            });
        });
    </script>
@endsection

