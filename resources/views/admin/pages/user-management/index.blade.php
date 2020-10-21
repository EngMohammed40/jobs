@extends('admin.layout.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">المسئولين</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive mt-1">
                        <a data-toggle="modal" data-target="#create_admin" href="javascript:;" class="btn btn-primary mr-2 ml-2  mb-1 waves-effect waves-light">اضافة جديد</a>
                        <!-- Modal -->
                        <div class="modal fade text-left" id="create_admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel20" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                <div class="modal-content">
                                    <form action="{{route('admin.user-management.store')}}" method="post">
                                        @csrf
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel20">إضافة مسئول جديد</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>الاسم</label>
                                                        <input type="text" name="name" class="form-control" value="{{old('name')}}" required autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>إسم المستخدم</label>
                                                        <input type="text" name="username" class="form-control" value="{{old('username')}}" required autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>البريد الالكترونى</label>
                                                        <input type="email" name="email" class="form-control" value="{{old('email')}}" required autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>الدور الخاص بالمسئول</label>
                                                        <select name="role" required class="form-control">
                                                            <option value="" disabled selected>الدور الخاص بالمسئول</option>
                                                            @foreach($roles as $role)
                                                                <option value="{{$role->name}}">{{$role->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>كلمة المرور</label>
                                                        <input type="password" name="password" class="form-control" value="{{old('password')}}" required autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>تأكيد كلمة المرور</label>
                                                        <input type="password" name="password_confirmation" class="form-control" value="{{old('password')}}" required autocomplete="off">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-outline-primary">حفظ</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <table id="datatable" class="table table-hover-animation ">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>البريد الالكتروني</th>
                                <th>إسم المستخدم</th>
                                <th>الدور</th>
                                <th>التحكم</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($admins as $admin)
                                <tr>
                                    <td>{{$loop->count}}</td>
                                    <td>{{$admin->name}}</td>
                                    <td>{{$admin->email}}</td>
                                    <td>{{$admin->username}}</td>
                                    <td>{{$admin->role_name}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="javascript;" class="btn btn-primary" data-toggle="modal" data-target="#edit_admin_{{$admin->id}}">
                                                تعديل
                                            </a>
                                            <a href="javascript;" class="btn btn-danger" data-toggle="modal" data-target="#delete_admin_{{$admin->id}}">
                                                حذف
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <div class="modal fade text-left" id="edit_admin_{{$admin->id}}" tabindex="-1" role="dialog" aria-labelledby="edit_admin_{{$admin->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                        <div class="modal-content">
                                            <form action="{{route('admin.user-management.update', $admin->id)}}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel20">تعديل بيانات المسئول</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>الاسم</label>
                                                                <input type="text" name="name" class="form-control" value="{{$admin->name}}" required autocomplete="off">
                                                                <input type="hidden" name="id" class="form-control" value="{{$admin->id}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>إسم المستخدم</label>
                                                                <input type="text" name="username" class="form-control" value="{{$admin->username}}" required autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>البريد الالكترونى</label>
                                                                <input type="email" name="email" class="form-control" value="{{$admin->email}}" required autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>الدور الخاص بالمسئول</label>
                                                                <select name="role" required class="form-control">
                                                                    <option value="" disabled selected>الدور الخاص بالمسئول</option>
                                                                    @foreach($roles as $role)
                                                                        <option
                                                                            {{$role->name == $admin->role_name ? 'selected' : ''}}
                                                                            value="{{$role->name}}">{{$role->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>كلمة المرور</label>
                                                                <input type="password" name="password" class="form-control" value="{{old('password')}}" autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>تأكيد كلمة المرور</label>
                                                                <input type="password" name="password_confirmation" class="form-control" value="{{old('password')}}" autocomplete="off">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-outline-primary">حفظ</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade text-left" id="delete_admin_{{$admin->id}}" tabindex="-1" role="dialog" aria-labelledby="delete_admin_{{$admin->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <form action="{{route('admin.user-management.destroy', $admin->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-header bg-danger white">
                                                    <h5 class="modal-title" id="myModalLabel120">تأكيد الحذف</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h2>هل تريد حذف المسئول</h2>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger" >حذف</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

