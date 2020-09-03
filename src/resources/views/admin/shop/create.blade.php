@extends("layouts.panel",['page' => 'shop-create' ])

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
                        <li class="breadcrumb-item small"><a href="#">فروشگاه</a></li>
                        <li class="breadcrumb-item small">ایجاد فروشگاه</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-color font-weight-bold text-white">ایجاد فروشگاه</div>
                <div class="card-body">
                    <div class="row">

                        <form action="{{ action(  '\Shaparak\Http\Controller\Client\ShopsController@store') }}" method="post">
                            @csrf
                            <div class="row form-sheba">
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="merchant_id" class="small font-weight-bold">merchant_id</label>
                                    <input id="merchant_id" class="form-control" value="{{ old("merchant_id") }}" name="merchant_id">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="farsiName" class="small font-weight-bold">farsiName</label>
                                    <input id="farsiName" class="form-control" value="{{ old("farsiName") }}" name="farsiName">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="englishName" class="small font-weight-bold">englishName</label>
                                    <input id="englishName" class="form-control" value="{{ old("englishName") }}" name="englishName">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="telephoneNumber" class="small font-weight-bold">telephoneNumber</label>
                                    <input id="telephoneNumber" class="form-control" value="{{ old("telephoneNumber") }}" name="telephoneNumber">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="postalCode" class="small font-weight-bold">postalCode</label>
                                    <input id="postalCode" class="form-control" value="{{ old("postalCode") }}" name="postalCode">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="businessCertificateNumber" class="small font-weight-bold">businessCertificateNumber</label>
                                    <input id="businessCertificateNumber" class="form-control" value="{{ old("businessCertificateNumber") }}" name="businessCertificateNumber">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="certificateExpiryDate" class="small font-weight-bold">certificateExpiryDate</label>
                                    <input id="certificateExpiryDate" class="form-control" value="{{ old("certificateExpiryDate") }}" type="text">
                                    <input name="certificateExpiryDate" type="hidden" id="certificateExpiryDate" class="form-control observer-to-alt"/>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="description" class="small font-weight-bold">description</label>
                                    <input id="description" class="form-control" value="{{ old("description") }}" name="description"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="businessCategoryCode" class="small font-weight-bold">businessCategoryCode</label>
                                    <input id="businessCategoryCode" class="form-control" value="{{ old("businessCategoryCode") }}" name="businessCategoryCode">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="ownershipType" class="small font-weight-bold">ownershipType</label>
                                    <select id="ownershipType" class="form-control" name="ownershipType">
                                        @foreach(\Shaparak\Database\models\Shop::ownershipType() as $key=>$type)
                                            <option {{ old("ownershipType" ) == $key ? 'selected' : ""}} value="{{$key}}">
                                                {{$type}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="rentalContractNumber" class="small font-weight-bold">rentalContractNumber</label>
                                    <input id="rentalContractNumber" class="form-control" value="{{ old("rentalContractNumber") }}" name="rentalContractNumber">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="rentalExpiryDate" class="small font-weight-bold">rentalExpiryDate</label>
                                    <input id="rentalExpiryDate" class="form-control" value="{{ old("rentalExpiryDate") }}" type="text">
                                    <input name="rentalExpiryDate" type="hidden" id="rentalExpiryDate" class="form-control observer-to-alt"/>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="address" class="small font-weight-bold">address</label>
                                    <input id="address" class="form-control" value="{{ old("address") }}" name="address">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="countryCode" class="small font-weight-bold">countryCode</label>
                                    <input id="countryCode" class="form-control" value="{{ old("countryCode") }}" name="countryCode">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="provinceCode" class="small font-weight-bold">provinceCode</label>
                                    <input id="provinceCode" class="form-control" value="{{ old("provinceCode") }}" name="provinceCode">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="cityCode" class="small font-weight-bold">cityCode</label>
                                    <input id="cityCode" class="form-control" value="{{ old("cityCode") }}" name="cityCode">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="businessType" class="small font-weight-bold">businessType</label>
                                    <select id="businessType" class="form-control" name="businessType">
                                        @foreach(\Shaparak\Database\models\Shop::businessType() as $key=>$type)
                                            <option {{ old("businessType" ) == $key ? 'selected' : ""}} value="{{$key}}">
                                                {{$type}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="etrustCertificateType" class="small font-weight-bold">etrustCertificateType</label>
                                    <select id="etrustCertificateType" class="form-control" name="etrustCertificateType">
                                        @foreach(\Shaparak\Database\models\Shop::etrustCertificateType() as $key=>$type)
                                            <option {{ old("etrustCertificateType" ) == $key ? 'selected' : ""}} value="{{$key}}">
                                                {{$type}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="etrustCertificateIssueDate" class="small font-weight-bold">etrustCertificateIssueDate</label>
                                    <input id="etrustCertificateIssueDate" class="form-control" value="{{ old("etrustCertificateIssueDate") }}" type="text">
                                    <input name="etrustCertificateIssueDate" type="hidden" id="etrustCertificateIssueDate" class="form-control observer-to-alt"/>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="certificateIssueDate" class="small font-weight-bold">certificateIssueDate</label>
                                    <input id="certificateIssueDate" class="form-control" value="{{ old("certificateIssueDate") }}" type="text">
                                    <input name="certificateIssueDate" type="hidden" id="certificateIssueDate" class="form-control observer-to-alt"/>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="etrustCertificateExpiryDate" class="small font-weight-bold">etrustCertificateExpiryDate</label>
                                    <input id="etrustCertificateExpiryDate" class="form-control" value="{{ old("etrustCertificateExpiryDate") }}" type="text">
                                    <input name="etrustCertificateExpiryDate" type="hidden" id="etrustCertificateExpiryDate" class="form-control observer-to-alt"/>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="emailAddress" class="small font-weight-bold">emailAddress</label>
                                    <input id="emailAddress" class="form-control" value="{{ old("emailAddress") }}" name="emailAddress">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="websiteAddress" class="small font-weight-bold">websiteAddress</label>
                                    <input id="websiteAddress" class="form-control" value="{{ old("websiteAddress") }}" name="websiteAddress">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
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
            $("#certificateExpiryDate").persianDatepicker({
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
            $("#rentalExpiryDate").persianDatepicker({
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
            $("#etrustCertificateIssueDate").persianDatepicker({
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
            $("#certificateIssueDate").persianDatepicker({
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
            $("#etrustCertificateExpiryDate").persianDatepicker({
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
        });
    </script>
@endsection