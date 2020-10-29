@extends('admin.layout.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">ناشرو الوظائف</h4>
                </div>
                <div class="card-content">
                    <div class="table-responsive mt-1">

                        <a href="{{route('admin.jobs-publishers.create')}}" class="btn btn-primary mr-2 ml-2  mb-1 waves-effect waves-light">اضافة ناشر</a>

                        <table id="datatable" class="table table-hover-animation mb-0">
                            <thead>
                            <tr>
                                <th>اسم الناشر</th>
                                <th>الصورة</th>
                                <th>التحكم</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($publishers as $publisher)
                                <tr>
                                    <td>{{$publisher->name}}</td>
                                    <td>
                                        <img width="50px" height="50px" class="img-fluid" src="{{asset('storage/jobs-publishers/'.$publisher->image.'')}}" />
                                    </td>
                                    <td>
                                        <a href="{{route('admin.jobs-publishers.edit',$publisher->id)}}" class="btn btn-primary">تعديل</a>
                                        <form method="POST" class="d-inline-block" action="{{route('admin.jobs-publishers.destroy',$publisher->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="حذف" class="btn btn-warning mr-1 mb-1 waves-effect waves-light mt-1">
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
    <script>
        @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
        {{Session::forget('success')}};
        @endif
    </script>

@endsection
