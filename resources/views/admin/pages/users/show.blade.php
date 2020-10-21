@extends('admin.layout.app')
@section('style')
    <style>
        .select2-container {
            box-sizing: border-box;
            display: inline-block;
            margin: 0;
            position: relative;
            vertical-align: middle;
            width: 97% !important;
        }
    </style>
@endsection
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">{{$user->name}}</h4>
                </div>
                <div class="card-body">
                   <div class="table-responsive">
                       <table class="table table-striped table-bordered">
                           <tr>
                               <td>الاسم</td>
                               <td>{{$user->name}}</td>
                           </tr>
                           <tr>
                               <td>البريد الالكترونى</td>
                               <td>{{$user->email}}</td>
                           </tr>
                           <tr>
                               <td>اسم المستخدم</td>
                               <td>{{$user->username}}</td>
                           </tr>
                       </table>
                   </div>
                </div>
                <div class="card-footer">
                    <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-primary">تعديل</a>
                    <a href="{{route('admin.users.index')}}" class="btn btn-success">رجوع</a>
                </div>
            </div>
        </div>
    </div>

@endsection
