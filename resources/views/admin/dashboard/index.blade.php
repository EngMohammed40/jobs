@extends('admin.layout.app')

@section('content')
    <!-- BEGIN: Content-->
    <section id="dashboard-analytics">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-primary p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-users text-primary font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1 mb-25">{{App\Models\User::all()->count()}}</h2>
                            <p>المستخدمين</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 ">
                    <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-primary p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-users text-primary font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1 mb-25">{{App\Models\User::all()->count()}}</h2>
                            <p>المقالات</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-primary p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-trending-up text-primary font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1 mb-25">{{App\Models\WebsiteDetail::find(1)->website_visits}}</h2>
                            <p>الزيارات</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-header d-flex flex-column align-items-start pb-0">
                            <div class="avatar bg-rgba-primary p-50 m-0">
                                <div class="avatar-content">
                                    <i class="feather icon-trending-up text-primary font-medium-5"></i>
                                </div>
                            </div>
                            <h2 class="text-bold-700 mt-1 mb-25">{{App\Models\WebsiteDetail::find(1)->website_visits}}</h2>
                            <p>الإعلانات</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h1>{{App\Models\Websitedetail::find(1)->website_name}}</h1>
                        </div>
                        <div class="card-body card-dashboard">
                            <h5>{{App\Models\Websitedetail::find(1)->website_description}}</h5>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-0">أحدث المستخدمين</h4>
                        </div>
                        <div class="card-body card-dashboard">
                            <div class="table-responsive mt-1">
                                <table id="datatable" class="table table-striped table-hover-animation mb-0">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>الاسم</th>
                                            <th>الايميل</th>
                                            <th>تاريخ الانضمام</th>
                                            <th>التحكم</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->count}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->diff_created_at}}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="{{route('admin.users.show', $user->id)}}">
                                                    عرض تفاصيل المستخدم
                                                </a>
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
        </div>
    </section>
    <!-- END: Content-->
@endsection
