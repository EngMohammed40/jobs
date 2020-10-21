@extends('admin.layout.app')

@section('content')

 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">الوظائف</h4>
            </div>
            <div class="card-content">
                <div class="table-responsive mt-1">
            
                    <a href="{{route('admin.jobs.create')}}" class="btn btn-primary mr-2 ml-2  mb-1 waves-effect waves-light">اضافة وظيفة</a>
              
                    <table id="datatable" class="table table-hover-animation mb-0">
                        <thead>
                            <tr>
                                <th>الوظيفة</th>
                                <th>الوصف</th>
                                <th>المدينة</th>
                                <th>الدولة</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($jobs as $job)
                            <tr>
                                <td>{{$job->title}}</td>
                                <td>{{$job->description}}</td>
                                <td>{{$job->city->name}}</td>
                                <td>{{$job->country->name}}</td>
                                <td>
                                    <a href="{{route('admin.jobs.edit',$job->id)}}" class="btn btn-primary">تعديل</a>

                                </td>
                             
                                <td>
                                    <form method="POST" action="{{route('admin.jobs.destroy',$job->id)}}">
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
<script>
@if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
     {{Session::forget('success')}};
@endif    
</script>

@endsection
