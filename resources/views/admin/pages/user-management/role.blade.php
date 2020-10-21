@extends('admin.layout.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">الادوار</h4>
                </div>
                <div class="card-content">
                    <div class="table-responsive mt-1">
                        <a href="javascript:;" data-toggle="modal" data-target="#add_role" class="btn btn-primary mr-2 ml-2  mb-1 waves-effect waves-light">اضافة جديد</a>
                        <table id="datatable" class="table table-hover-animation mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>إسم الدور</th>
                                <th>صلاحيات الدور</th>
                                <th>التحكم</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{$loop->count}}</td>
                                    <td>{{$role->name}}</td>
                                    <td width="50%">
                                        <form action="{{route('admin.permission.update', $role->id)}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <select name="permissions[]" class="form-control select2" multiple="multiple">
                                                @foreach($permissions as $permission)
                                                    <option
                                                        @foreach ($role->permissions()->get() as $item)
                                                        @if ($permission->id == $item->id)
                                                        selected
                                                        @endif
                                                        @endforeach
                                                        value="{{$permission->name}}">{{$permission->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-success btn-sm text-center mt-3">حفظ</button>
                                        </form>
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#edit_role_{{$role->id}}">تعديل</a>
                                            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete_role_{{$role->id}}">حذف</a>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade text-left" id="edit_role_{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="edit_role_{{$role->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <form action="{{route('admin.role.update', $role->id)}}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel120">تعديل دور </h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>اسم الدور</label>
                                                        <input type="text" name="name" required value="{{$role->name}}" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary" >تعديل</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade text-left" id="delete_role_{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="delete_role_{{$role->id}}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <form action="{{route('admin.role.destroy', $role->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-header bg-danger white">
                                                    <h5 class="modal-title" id="myModalLabel120">تأكيد الحذف</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h2>هل تريد حذف الدور</h2>
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


    <!-- Modal -->
    <div class="modal fade text-left" id="add_role" tabindex="-1" role="dialog" aria-labelledby="add_role" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <form action="{{route('admin.role.store')}}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel120">إضافة دور جديد</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>اسم الدور</label>
                            <input type="text" name="name" required value="{{old('role')}}" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" >حفظ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop


@section('javascript')
    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('assets/admin/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <script>
        $(function () {
            // Basic Select2 select
            $(".select2").select2({
                dropdownAutoWidth: true,
                width: '100%',
                dir:'rtl'
            })
        });
    </script>
@endsection
