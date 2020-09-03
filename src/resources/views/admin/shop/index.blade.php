@extends("layouts.panel",['page' => 'shop-index' ])

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
                        <li class="breadcrumb-item small">لیست فروشگاه</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header card-color font-weight-bold text-white">لیست فروشگاه</div>
                <div class="card-body">
                    <div class="col-12">
                        <form>
                            <div class="form-group row">
                                <div class="col-sm-4 col-12">
                                    <label for="status" class="small">وضعیت</label>
                                    <select id="status" class="form-control" name="status">
                                        <option selected value="0">همه</option>
                                        @foreach(\App\Checkout::statusList() as $key =>  $status)
                                            <option @if($key == request('status')) selected @endif value="{{ $key }}">{{ $status }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-sm-4 col-12">
                                    <label for="from" class="small">تاریخ از</label>
                                    <input type="text" id="from" class="form-control" value="{{ \Carbon\Carbon::createFromTimestamp(request('from'))}}"/>
                                    <input name="from" type="hidden" value="{{ request('from')}}" id="from" class="form-control observer-from-alt"/>
                                </div>

                                <div class="col-sm-4 col-12">
                                    <label for="to" class="small">تاریخ تا</label>
                                    <input type="text" id="to" class="form-control" value="{{ \Carbon\Carbon::createFromTimestamp(request('to'))  }}"/>
                                    <input name="to" type="hidden" value="{{ request('to')}}" id="to" class="form-control observer-to-alt"/>
                                </div>

                                <div class="col-12 text-left mt-3">
                                    <button type="submit" class="btn card-color pr-5 pl-5 text-white">جستجو</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
                                    <td>{{ $shop->created_at_fa }}</td>
                                    <td>
                                        <a href="{{ route('shaparak.shop.find' , ['id' => $shop->id ]) }}"><i class="fa fa-edit"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            {{$shops->appends(Request::all())->render('vendor.pagination.bootstrap-4')}}
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
            $("#from").persianDatepicker({
                observer: true,
                format: 'YYYY-MM-DD',
                altFormat: 'X',
                initialValueType: "gregorian",
                altField: '.observer-to-alt',
                timePicker: {
                    enabled: true,
                    meridiem: {
                        enabled: true
                    }
                }
            });
            $("#to").persianDatepicker({
                observer: true,
                format: 'YYYY-MM-DD',
                altFormat: 'X',
                initialValueType: "gregorian",
                altField: '.observer-to-alt',
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

