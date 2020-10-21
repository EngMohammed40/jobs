@extends('admin.layout.app')
@section('style')
<style>
    img.country_img {
        width: 100px;
        height: 50px;
    }
</style>
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
                @can('countries-add')
                    <a href="{{route('admin.countries.create')}}" class="btn btn-primary mr-2 ml-2  mb-1 waves-effect waves-light">اضافة جديد</a>
                @endcan
                    <table id="datatable" class="table table-striped table-hover-animation mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>الاسم</th>
                                <th>الرابط</th>
                                <th>الكود</th>
                                <th>كود الدولة</th>
                                <th>العملة</th>
                                <th>الصورة</th>

                                <th></th>
                                <th></th>


                            </tr>
                        </thead>
                        <tbody>
                             @foreach($countries as $country)
                            <tr>
                                <td>{{$country->name}}</td>
                                <td>{{$country->slug}}</td>
                                <td>{{$country->code}}</td>
                                <td>{{$country->location_code}}</td>
                                <td>{{$country->currency}}</td>
                                <td><img class="country_img" src="{{asset('storage/countries_images/'.$country->image)}}"></td>
                                <td>
                                    <a href="{{route('admin.countries.edit',$country->id)}}" class="btn btn-primary">تعديل</a>

                                </td>

                                <td>
                                    <form method="POST" action="{{route('admin.countries.destroy',$country->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="حذف" class="btn btn-danger mr-1 mb-1 waves-effect waves-light">
                                    </form>
                                </td>
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
