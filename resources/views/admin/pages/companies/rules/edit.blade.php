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
                <h4 class="mb-0">شركات التوظيف / شروط تسجيل حساب شركات التوظيف</h4>
            </div>
            <div class="card-body card-dashboard">
                
            </div>
        </div>
    </div>
</div>
<form action="{{route('admin.companies_rules.update',$rule->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>الشروط</label>
            <textarea class="form-control rounded" name="rule" id="banner_body">{{$rule->rule}}</textarea>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <input type="hidden" name="page" value="companies" />
        <button class="btn btn-primary mb-2 waves-effect waves-light" type="submit">تعديل</button>
    </div>
</div>
</form>
@endsection

