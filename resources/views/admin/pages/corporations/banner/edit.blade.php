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
<form action="{{route('admin.corporations_banner.update',$banner->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUt')
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>العنوان</label>
            <input type="text" class="form-control rounded" name="banner_head" id="banner_head" value="{{$banner->banner_head}}" />
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>المحتوي</label>
            <textarea class="form-control rounded" name="banner_body" id="banner_body"> {{$banner->banner_body}}</textarea>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <input type="hidden" name="page" value="corporations" />
        <button class="btn btn-primary mb-2 waves-effect waves-light" type="submit">تعديل</button>
    </div>
</div>
</form>

@endsection

