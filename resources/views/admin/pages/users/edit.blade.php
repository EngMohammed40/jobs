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
            <form class="mt-2" action="{{route('admin.users.update',$user->id)}}" method="POST">
            <div class="card-header">
                <div class="container">
                    <h4 class="mb-0">{{$user->name}}</h4>
                </div>
            </div>
            <div class="card-body">

                    @csrf
                    @method('PUT')
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الاسم</label>
                                    <input type="text" name="name" value="{{$user->name}}" id="roundText" class="form-control round" required>
                                    <input type="hidden" name="id" value="{{$user->id}}">
                                </fieldset>
                            </div>

                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">البريد الالكتروني</label>
                                    <input type="email" name="email" value="{{$user->email}}" id="roundText" class="form-control round" required>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">اسم المستخدم</label>
                                    <input type="text" name="username" value="{{$user->username}}" id="roundText" class="form-control round" required>
                                </fieldset>
                            </div>

                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">كلمة المرور</label>
                                    <input type="password" name="password" id="roundText" class="form-control round">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">تأكيد كلمة المرور </label>
                                    <input type="password" name="password_confirmation"  id="roundText" class="form-control round">
                                </fieldset>
                            </div>
                        </div>
                    </div>


            </div>
            <div class="card-footer">
                <div class="container">
                    <button class="btn btn-primary" type="submit">تعديل</button>
                    <a href="{{route('admin.users.index')}}" class="btn btn-success">إلغاء</a>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>
@endsection
