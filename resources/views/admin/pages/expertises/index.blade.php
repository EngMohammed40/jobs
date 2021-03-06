@extends('admin.layout.app')

@section('content')

 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">التخصصات</h4>
            </div>
            <div class="card-content">
                <div class="table-responsive mt-1">
            
                    <a href="{{route('admin.expertises.create')}}" class="btn btn-primary mr-2 ml-2  mb-1 waves-effect waves-light">اضافة جديد</a>
              
                    <table id="datatable" class="table table-hover-animation mb-0">
                        <thead>
                            <tr>
                                <th>الاسم</th>
                                <th>الرابط</th>
                                <th></th>
                                <th></th>
                               
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($expertises as $expertise)
                            <tr>
                                <td>{{$expertise->name}}</td>
                                <td>{{$expertise->slug}}</td>
                           
                                <td>
                                    <a href="{{route('admin.expertises.edit',$expertise->id)}}" class="btn btn-primary">تعديل</a>

                                </td>
                             
                                <td>
                                    <form method="POST" action="{{route('admin.expertises.destroy',$expertise->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="حذف" class="btn btn-warning mr-1 mb-1 waves-effect waves-light">
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
