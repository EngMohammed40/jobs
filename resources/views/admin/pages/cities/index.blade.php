@extends('admin.layout.app')
@section('content')

 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">المدن</h4>
            </div>
            <div class="card-body card-dashboard">
                <div class="table-responsive mt-1">
                    <a href="{{route('admin.cities.create')}}" class="btn btn-primary mr-2 ml-2  mb-1 waves-effect waves-light">اضافة جديد</a>
                    <table id="datatable" class="table table-striped table-hover-animation mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>الاسم</th>
                                <th>الدولة</th>

                                <th></th>
                                <th></th>


                            </tr>
                        </thead>
                        <tbody>
                             @foreach($cities as $city)
                            <tr>
                                <td>{{$city->name}}</td>
                                <td>{{$city->country->name}}</td>
                                <td>
                                    <a href="{{route('admin.cities.edit',$city->id)}}" class="btn btn-primary">تعديل</a>

                                </td>


                                <td>
                                    <form method="POST" action="{{route('admin.cities.destroy',$city->id)}}">
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
