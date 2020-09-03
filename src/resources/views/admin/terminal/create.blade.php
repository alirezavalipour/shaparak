@extends("layouts.panel",['page' => 'terminal-create' ])

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
                        <li class="breadcrumb-item small">ایجاد پایانه</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-color font-weight-bold text-white">ایجاد پایانه</div>
                <div class="card-body">
                    <div class="row">

                        <form action="{{ action(  '\Shaparak\Http\Controller\Client\TerminalsController@store') }}" method="post">
                            @csrf
                            <div class="row form-sheba">
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="acceptor_id" class="small font-weight-bold">acceptor_id</label>
                                    <input id="acceptor_id" class="form-control" value="{{ old("acceptor_id") }}" name="acceptor_id">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="sequence" class="small font-weight-bold">sequence</label>
                                    <input id="sequence" class="form-control" value="{{ old("sequence") }}" name="sequence">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="terminalNumber" class="small font-weight-bold">terminalNumber</label>
                                    <input id="terminalNumber" class="form-control" value="{{ old("terminalNumber") }}" name="terminalNumber">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="serialNumber" class="small font-weight-bold">serialNumber</label>
                                    <input id="serialNumber" class="form-control" value="{{ old("serialNumber") }}" name="serialNumber">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="setupDate" class="small font-weight-bold">setupDate</label>
                                    <input id="setupDate" class="form-control" value="{{ old("setupDate") }}" type="text">
                                    <input name="setupDate" type="hidden" id="setupDate" class="form-control observer-to-alt"/>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="hardwareBrand" class="small font-weight-bold">hardwareBrand</label>
                                    <input id="hardwareBrand" class="form-control" value="{{ old("hardwareBrand") }}" name="hardwareBrand">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="hardwareModel" class="small font-weight-bold">hardwareModel</label>
                                    <input id="hardwareModel" class="form-control" value="{{ old("hardwareModel") }}" name="hardwareModel">
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="terminalType" class="small font-weight-bold">terminalType</label>
                                    <select id="terminalType" class="form-control" name="terminalType">
                                        @foreach(\Shaparak\Database\models\Terminal::terminalTypes() as $key=>$type)
                                            <option {{ old("terminalType" ) == $key ? 'selected' : ""}} value="{{$key}}">
                                                {{$type}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="accessAddress" class="small font-weight-bold">accessAddress</label>
                                    <input id="accessAddress" class="form-control" value="{{ old("accessAddress") }}" name="accessAddress"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="accessPort" class="small font-weight-bold">accessPort</label>
                                    <input id="accessPort" class="form-control" value="{{ old("accessPort") }}" name="accessPort"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="callbackAddress" class="small font-weight-bold">callbackAddress</label>
                                    <input id="callbackAddress" class="form-control" value="{{ old("callbackAddress") }}" name="callbackAddress"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="callbackPort" class="small font-weight-bold">callbackPort</label>
                                    <input id="callbackPort" class="form-control" value="{{ old("callbackPort") }}" name="callbackPort"></div>
                                <div class="col-sm-4 col-12 form-group">
                                    <label for="description" class="small font-weight-bold">description</label>
                                    <input id="description" class="form-control" value="{{ old("description") }}" name="description">
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
            $("#setupDate").persianDatepicker({
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



