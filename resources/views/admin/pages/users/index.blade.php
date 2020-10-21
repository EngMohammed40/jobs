@extends('admin.layout.app')

@section('content')

 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">المستخدمين</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive mt-1">
                    <a href="{{route('admin.users.create')}}" class="btn btn-primary mr-2 ml-2  mb-1 waves-effect waves-light">اضافة جديد</a>
                    <table id="datatable" class="table table-hover-animation mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>البريد الالكتروني</th>
                                <th>إسم المستخدم</th>
                                <th>التحكم</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach($users as $user)
                            <tr>
                                <td>{{$loop->count}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->username}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('admin.users.show', $user->id)}}" class="btn btn-success">عرض</a>
                                        <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-primary">تعديل</a>
                                        <a  href="javascript:;" data-toggle="modal" data-target="#delete_user_{{$user->id}}" class="btn btn-danger">حذف</a>
                                    </div>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade text-left" id="delete_user_{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="delete_user_{{$user->id}}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <form action="{{route('admin.users.destroy', $user->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <div class="modal-header bg-danger white">
                                                <h5 class="modal-title" id="myModalLabel120">تأكيد الحذف</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h2>هل تريد حذف المستخدم</h2>
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

@section('javascript')

@endsection
