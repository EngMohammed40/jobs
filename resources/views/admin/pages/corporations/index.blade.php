@extends('admin.layout.app')
@section('style')

@endsection

@section('content')

 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">الدول</h4>
            </div>
            <div class="card-body card-dashboard">
                <div class="table-responsive mt-1">
                    <table id="datatable" class="table table-striped table-hover-animation mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>اسم الشركة / المؤسسة</th>
                                <th>المجال</th>
                                <th>القطاع</th>
                                <th>الدولة</th>
                                <th>المدينة</th>
                                <th>الحجم</th>
                                <th>الشعار</th>
                            


                            </tr>
                        </thead>
                        <tbody>
                             @foreach($corporations as $corporation)
                            <tr>
                                <td>{{$corporation->corporation_name}}</td>
                                <td>{{$corporation->corporation_field}}</td>
                                <td>{{$corporation->corporation_sector}}</td>
                                <td>{{$corporation->country->name}}</td>
                                <td>{{$corporation->city->name}}</td>
                                <td>{{$corporation->corporation_size}}</td>
                                <td><img style=" width: 100px;" src="{{asset('storage/corporations_images/'.$corporation->logo)}}"></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')


@endsection
