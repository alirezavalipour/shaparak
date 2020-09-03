@extends("layouts.panel",['page' => 'response-show' ])

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
                        <li class="breadcrumb-item small"><a href="#">نتایج</a></li>
                        <li class="breadcrumb-item small">ویرایش نتایج</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-color font-weight-bold text-white">ویرایش نتایج</div>
                <div class="card-body">
                    <div class="row">

                        <form action="{{ action(  '\Shaparak\Http\Controller\Client\ResponsesController@store') }}" method="post">
                            @csrf
                            <div class="row form-sheba">
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="tracking_number" class="small font-weight-bold">tracking_number</label>
                                    <input id="tracking_number" class="form-control" value="{{ old("tracking_number", $response->tracking_number) }}" name="tracking_number">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="tracking_number_psp" class="small font-weight-bold">tracking_number_psp</label>
                                    <input id="tracking_number_psp" class="form-control" value="{{ old("tracking_number_psp", $response->tracking_number_psp) }}" name="tracking_number_psp">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="status" class="small font-weight-bold">status</label>
                                    <select id="status" class="form-control" name="status">
                                        @foreach(\Shaparak\Database\models\Response::status() as $key=>$type)
                                            <option {{ old("status", $response->status) == $key ? 'selected' : ""}} value="{{$key}}">
                                                {{$type}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="request_date" class="small font-weight-bold">request_date</label>
                                    <input id="request_date" class="form-control" value="{{ old("request_date", $response->request_date) }}" type="text">
                                    <input name="request_date" type="hidden" id="request_date" class="form-control observer-to-alt"/>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="description" class="small font-weight-bold">description</label>
                                    <input id="description" class="form-control" value="{{ old("description", $response->description) }}" name="description">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="request_type" class="small font-weight-bold">request_type</label>
                                    <select id="request_type" class="form-control" name="request_type">
                                        @foreach(\Shaparak\Database\models\Response::requestType() as $key=>$type)
                                            <option {{ old("request_type", $response->request_type) == $key ? 'selected' : ""}} value="{{$key}}">
                                                {{$type}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="merchant_id" class="small font-weight-bold">merchant_id</label>
                                    <input id="merchant_id" class="form-control" value="{{ old("merchant_id", $response->merchant_id) }}" name="merchant_id">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="related_merchants" class="small font-weight-bold">related_merchants</label>
                                    <input id="related_merchants" class="form-control" value="{{ old("related_merchants", $response->related_merchants) }}" name="related_merchants">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="data" class="small font-weight-bold">data</label>
                                    <input id="data" class="form-control" value="{{ old("data", $response->data) }}" name="data">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="request_rejection_reasons" class="small font-weight-bold">request_rejection_reasons</label>
                                    <input id="request_rejection_reasons" class="form-control" value="{{ old("request_rejection_reasons", $response->request_rejection_reasons) }}" name="request_rejection_reasons">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="request_details" class="small font-weight-bold">request_details</label>
                                    <input id="request_details" class="form-control" value="{{ old("request_details", $response->request_details) }}" name="request_details">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="success" class="small font-weight-bold">success</label>
                                    <input id="success" class="form-control" value="{{ old("success", $response->success) }}" name="success">
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
            $("#request_date").persianDatepicker({
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