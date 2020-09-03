@extends("layouts.panel",['page' => 'merchant-create' ])

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
                        <li class="breadcrumb-item small">ایجاد مشتری</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-color font-weight-bold text-white">ایجاد مشتری</div>
                <div class="card-body">
                    <div class="row">
                        <form action="{{ action('\Shaparak\Http\Controller\Client\MerchantsController@store') }}" method="post">
                            @csrf
                            <div class="row form-sheba">
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="firstNameFa" class="small font-weight-bold">firstNameFa</label>
                                    <input id="firstNameFa" class="form-control" value="{{ old("firstNameFa") }}" name="firstNameFa">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="lastNameFa" class="small font-weight-bold">lastNameFa</label>
                                    <input id="lastNameFa" class="form-control" value="{{ old("lastNameFa") }}" name="lastNameFa">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="fatherNameFa" class="small font-weight-bold">fatherNameFa</label>
                                    <input id="fatherNameFa" class="form-control" value="{{ old("fatherNameFa") }}" name="fatherNameFa">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="firstNameEn" class="small font-weight-bold">firstNameEn</label>
                                    <input id="firstNameEn" class="form-control" value="{{ old("firstNameEn") }}" name="firstNameEn">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="lastNameEn" class="small font-weight-bold">lastNameEn</label>
                                    <input id="lastNameEn" class="form-control" value="{{ old("lastNameEn") }}" name="lastNameEn">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="fatherNameEn" class="small font-weight-bold">fatherNameEn</label>
                                    <input id="fatherNameEn" class="form-control" value="{{ old("fatherNameEn") }}" name="fatherNameEn">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="gender" class="small font-weight-bold">gender</label>
                                    <select id="gender" class="form-control" name="gender">
                                        <option
                                                {{ old("gender" ) == 0 ? 'selected' : ""}} value="0">
                                            زن
                                        </option>
                                        <option
                                                {{ old("gender" ) == 1  ? 'selected' : ""}}  value="1">
                                            مرد
                                        </option>
                                    </select>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="birthDate" class="small font-weight-bold">birthDate</label>
                                    <input id="birthDate" class="form-control" value="{{ old("birthDate") }}" type="text">
                                    <input name="birthDate" type="hidden" id="birthDate" class="form-control observer-to-alt"/>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="registerDate" class="small font-weight-bold">registerDate</label>
                                    <input id="registerDate" class="form-control" value="{{ old("registerDate") }}" type="text">
                                    <input name="registerDate" type="hidden" id="registerDate" class="form-control observer-to-alt"/>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="nationalCode" class="small font-weight-bold">nationalCode</label>
                                    <input id="nationalCode" class="form-control" value="{{ old("nationalCode") }}" name="nationalCode"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="registerNumber" class="small font-weight-bold">registerNumber</label>
                                    <input id="registerNumber" class="form-control" value="{{ old("registerNumber") }}" name="registerNumber"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="comNameFa" class="small font-weight-bold">comNameFa</label>
                                    <input id="comNameFa" class="form-control" value="{{ old("comNameFa") }}" name="comNameFa"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="comNameEn" class="small font-weight-bold">comNameEn</label>
                                    <input id="comNameEn" class="form-control" value="{{ old("comNameEn") }}" name="comNameEn"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="merchantType" class="small font-weight-bold">merchantType</label>
                                    <select id="merchantType" class="form-control" name="merchantType">
                                        <option {{ old("merchantType") == 0 ? 'selected' : ""}} value="0">حقیقی
                                        </option>
                                        <option {{ old("merchantType") == 1  ? 'selected' : ""}}  value="1">حقوقی
                                        </option>
                                    </select>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="merchantType" class="small font-weight-bold">residencyType</label>
                                    <select id="merchantType" class="form-control" name="merchantType">
                                        <option {{ old("residencyType") == 0 ? 'selected' : ""}} value="0">ایرانی
                                        </option>
                                        <option {{ old("residencyType") == 1  ? 'selected' : ""}}  value="1">غیر
                                            ایرانی
                                        </option>
                                    </select>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="vitalStatus" class="small font-weight-bold">vitalStatus</label>
                                    <input id="vitalStatus" class="form-control" value="{{ old("vitalStatus") }}" name="vitalStatus"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="birthCrtfctSerial" class="small font-weight-bold">birthCrtfctSerial</label>
                                    <input id="birthCrtfctSerial" class="form-control" value="{{ old("birthCrtfctSerial") }}" name="birthCrtfctSerial"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="birthCrtfctSeriesLetter" class="small font-weight-bold">birthCrtfctSeriesLetter</label>
                                    <input id="birthCrtfctSeriesLetter" class="form-control" value="{{ old("birthCrtfctSeriesLetter") }}" name="birthCrtfctSeriesLetter"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="birthCrtfctSeriesNumber" class="small font-weight-bold">birthCrtfctSeriesNumber</label>
                                    <input id="birthCrtfctSeriesNumber" class="form-control" value="{{ old("birthCrtfctSeriesNumber") }}" name="birthCrtfctSeriesNumber"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="birthCrtfctNumber" class="small font-weight-bold">birthCrtfctNumber</label>
                                    <input id="birthCrtfctNumber" class="form-control" value="{{ old("birthCrtfctNumber") }}" name="birthCrtfctNumber"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="nationalLegalCode" class="small font-weight-bold">nationalLegalCode</label>
                                    <input id="nationalLegalCode" class="form-control" value="{{ old("nationalLegalCode") }}" name="nationalLegalCode"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="commercialCode" class="small font-weight-bold">commercialCode</label>
                                    <input id="commercialCode" class="form-control" value="{{ old("commercialCode") }}" name="commercialCode"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="countryCode" class="small font-weight-bold">countryCode</label>
                                    <input id="countryCode" class="form-control" value="{{ old("countryCode") }}" name="countryCode"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="foreignPervasiveCode" class="small font-weight-bold">foreignPervasiveCode</label>
                                    <input id="foreignPervasiveCode" class="form-control" value="{{ old("foreignPervasiveCode") }}" name="foreignPervasiveCode"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="passportNumber" class="small font-weight-bold">passportNumber</label>
                                    <input id="passportNumber" class="form-control" value="{{ old("passportNumber") }}" name="passportNumber"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="passportExpireDate" class="small font-weight-bold">passportExpireDate</label>
                                    <input id="passportExpireDate" class="form-control" value="{{ old("passportExpireDate") }}" type="text">
                                    <input name="passportExpireDate" type="hidden" id="passportExpireDate" class="form-control observer-to-alt"/>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="telephoneNumber" class="small font-weight-bold">telephoneNumber</label>
                                    <input id="telephoneNumber" class="form-control" value="{{ old("telephoneNumber") }}" name="telephoneNumber"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="cellPhoneNumber" class="small font-weight-bold">cellPhoneNumber</label>
                                    <input id="cellPhoneNumber" class="form-control" value="{{ old("cellPhoneNumber") }}" name="cellPhoneNumber"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="emailAddress" class="small font-weight-bold">emailAddress</label>
                                    <input id="emailAddress" class="form-control" value="{{ old("emailAddress") }}" name="emailAddress"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="webSite" class="small font-weight-bold">webSite</label>
                                    <input id="webSite" class="form-control" value="{{ old("webSite") }}" name="webSite"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="fax" class="small font-weight-bold">fax</label>
                                    <input id="fax" class="form-control" value="{{ old("fax") }}" name="fax">
                                </div>
                                <div class="col-12 border-top border-gray pt-3">
                                    <div class="row">
                                        <div class="col-sm-4 col-12 form-group">
                                            <label for="merchantIbans" class="small font-weight-bold">merchantIbans</label>
                                            <input id="merchantIbans" class="form-control" value="{{ old("merchantIbans") }}" name="merchantIbans">
                                        </div>
                                        <div class="col-sm-4 col-12 form-group">
                                            <label for="description" class="small font-weight-bold">description</label>
                                            <input id="description" class="form-control" value="{{ old("description") }}" name="description">
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
            $(".add-sheba").click(function () {
                $(".form-sheba").append('<div class="col-12 border-top border-gray pt-3">\n' +
                    '                                    <div class="row">\n' +
                    '                                        <div class="col-sm-4 col-12 form-group">\n' +
                    '                                            <label for="merchantIbans" class="small font-weight-bold">merchantIbans</label>\n' +
                    '                                            <input id="merchantIbans" class="form-control" value="{{ old("merchantIbans") }}" name="merchantIbans">\n' +
                    '                                        </div>\n' +
                    '                                        <div class="col-sm-4 col-12 form-group">\n' +
                    '                                            <label for="description" class="small font-weight-bold">description</label>\n' +
                    '                                            <input id="description" class="form-control" value="{{ old("description") }}" name="description">\n' +
                    '                                        </div>\n' +
                    '                                    </div>\n' +
                    '                                </div>'
                );
            });
        });
    </script>
@endsection

