@extends('admin.layout.app')
@section('style')
    <style>
            img{
        width:300px;
    }
    </style>
@endsection

@section('content')
 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">اصحاب العمل / البنر العلوي</h4>
            </div>
            <div class="card-body card-dashboard">
                
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="{{route('admin.getImage')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="row">
    <div class="col-md-9">
        <fieldset>
            <label>الصورة الحالية</label>
                <img id="banner_img" src="{{asset('storage/corporations_images/'.$image->banner_image.'')}}">
                    <label>تعديل الصورة</label>
                    <input type="file" name="banner_image">
        </fieldset>
    </div>
        <div class="col-md-3">
        <button class="btn btn-primary mb-2 waves-effect waves-light" type="submit">تعديل</button>
    </div>
</div>
</form>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <a href="{{route('admin.corporations_banner.create')}}" class="btn btn-primary mr-2 ml-2  mb-1 waves-effect waves-light">اضافة جديد</a>
    </div>
</div>

 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-content">
                <div class="table-responsive mt-1">
            
                    <table id="datatable" class="table table-hover-animation mb-0">
                        <thead>
                            <tr>
                                <th>العنوان</th>
                                <th>المحتوي</th>
                                <th>التحكم</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($banners as $banner)
                            <tr>
                                <td>{{$banner->banner_head}}</td>
                                <td>{{$banner->banner_body}}</td>
                                <td>
                                    <a href="{{route('admin.corporations_banner.edit',$banner->id)}}" class="btn btn-primary">تعديل</a>

                                </td>
                             
                                <td>
                                    <form method="POST" action="{{route('admin.corporations_banner.destroy',$banner->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="حذف" class="btn btn-warning mr-1 mb-1 waves-effect waves-light" />
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
