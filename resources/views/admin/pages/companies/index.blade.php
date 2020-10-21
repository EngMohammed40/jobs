@extends('admin.layout.app')

@section('content')

 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">الشركات</h4>
            </div>
            <div class="card-content">
                <div class="table-responsive mt-1">
            
                    <!--<a href="{{route('admin.companies.create')}}" class="btn btn-primary mr-2 ml-2  mb-1 waves-effect waves-light">اضافة شركة</a>-->
              
                    <table id="datatable" class="table table-hover-animation mb-0">
                        <thead>
                            <tr>
                                <th>شركة التوظيف</th>
                                <th>الدولة</th>
                                <th>المدينة</th>
                                <th>الشعار</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($companies as $company)
                            <tr>
                                <td>{{$company->company_name}}</td>
                                <td>{{$company->country->name}}</td>
                                <td>{{$company->city->name}}</td>
                                <td> <img src="{{asset('storage/companies_images/'.$company->logo.'')}}" alt="image" style="width:100px; height:100px" /> </td>
                                <!--<td>-->
                                <!--    <a href="{{route('admin.companies.edit',$company->id)}}" class="btn btn-primary">تعديل</a>-->

                                <!--</td>-->
                             
                                <!--<td>-->
                                <!--    <form method="POST" action="{{route('admin.companies.destroy',$company->id)}}">-->
                                <!--        @csrf-->
                                <!--        @method('DELETE')-->
                                <!--        <input type="submit" value="حذف" class="btn btn-warning mr-1 mb-1 waves-effect waves-light">-->
                                <!--    </form> -->
                                <!--</td>-->
                            
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
