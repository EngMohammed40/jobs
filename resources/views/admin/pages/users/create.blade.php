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
                <h4 class="mb-0">اعضاء الموقع</h4>
            </div>
            <div class="card-content">
                <form class="mt-2" action="{{route('admin.users.store')}}" method="POST">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الاسم</label>
                                    <input type="text" name="name" id="roundText" value="{{old('name')}}" class="form-control round" required>
                                </fieldset>
                            </div>

                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">البريد الالكتروني</label>
                                    <input type="email" name="email" id="roundText" value="{{old('email')}}" class="form-control round" required>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">اسم المستخدم</label>
                                    <input type="text" name="username" id="roundText" value="{{old('username')}}" class="form-control round" required>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">كلمة المرور</label>
                                    <input type="password" name="password" id="roundText" class="form-control round" required>
                                </fieldset>
                            </div>

                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">تأكيد كلمة المرور</label>
                                    <input type="password" name="password_confirmation" id="roundText" class="form-control round" required>
                                </fieldset>
                            </div>
                            <button class="btn btn-primary mb-2" type="submit">اضافة</button>

                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
