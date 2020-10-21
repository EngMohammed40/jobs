<!DOCTYPE html>
<html class="loading" lang="ar" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>{{config('app.name')}} :: Admin Login</title>

    @php($logo = App\Models\WebsiteDetail::find('1')->website_logo)
    <meta property="og:image" content="{{asset('storage/website_images/'.$logo)}} ">

    @php($description = App\Models\WebsiteDetail::find('1')->website_description)
    <meta property="og:description" content="{{$description}} ">

     @php($title = App\Models\WebsiteDetail::find('1')->website_name)
    <meta property="og:title" content="{{$title}} ">

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/pages/img/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/pages/img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/pages/img/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('assets/pages/img/site.webmanifest')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;400;500;700;800;900&display=swap" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/vendors/css/vendors-rtl.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/vendors/css/charts/apexcharts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/vendors/css/extensions/tether-theme-arrows.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/vendors/css/extensions/tether.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/vendors/css/extensions/shepherd-theme-default.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/css-rtl/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/css-rtl/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/css-rtl/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/css-rtl/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/css-rtl/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/css-rtl/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/css-rtl/pages/dashboard-analytics.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/css-rtl/pages/card-analytics.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/css-rtl/plugins/tour/tour.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/css-rtl/custom-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/assets/css/style-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/app-assets/vendors/css/tables/datatable/select.dataTables.min.css')}}">

    <style>
        .tippy-popper[x-placement^=top] [data-animation=fade][data-state=visible] {
            display: none;
        }
        h1,h2,h3,h4,h5,h6,a,span,div,li,input,textarea{
            font-family: 'Tajawal', sans-serif;
        }
        label{
            font-weight:bold;
        }
        .card.bg-authentication.rounded-0.mb-0 {
            border-radius: 13px !important;
            width: 83%;
            padding: 16px;
        }
    </style>
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                    @php($logo = App\Models\WebsiteDetail::find('1')->website_logo)
                                    @if($logo != '')
                                        <img class="logo" src="{{asset('storage/website_images/'.$logo)}}">
                                    @endif
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">تسجيل الدخول</h4>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                <form method="POST" action="{{ route('admin.login') }}">
                                                    @csrf
                                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                        <input type="email" name="email" class="form-control" id="user-name" placeholder="البريدالالكتروني" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                    </fieldset>
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input type="password" name="password" class="form-control" id="user-password" placeholder="كلمة المرور" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                                    </fieldset>

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
{{--                                                    <div class="form-group d-flex justify-content-between align-items-center">--}}
{{--                                                        <div class="text-left">--}}
{{--                                                            <fieldset class="checkbox">--}}
{{--                                                                <div class="vs-checkbox-con vs-checkbox-primary">--}}
{{--                                                                    <span class="vs-checkbox">--}}
{{--                                                                        <span class="vs-checkbox--check">--}}
{{--                                                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
{{--                                                                        </span>--}}
{{--                                                                    </span>--}}
{{--                                                                    <span class="">تذكرني</span>--}}
{{--                                                                </div>--}}
{{--                                                            </fieldset>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
                                                    <button type="submit" class="btn btn-primary float-right btn-inline">سجل الدخول</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('assets/admin/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('assets/admin/app-assets/vendors/js/charts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/admin/app-assets/vendors/js/extensions/tether.min.js')}}"></script>
    <script src="{{asset('assets/admin/app-assets/vendors/js/extensions/shepherd.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('assets/admin/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('assets/admin/app-assets/js/core/app.js')}}"></script>
    <script src="{{asset('assets/admin/app-assets/js/scripts/components.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('assets/admin/app-assets/js/scripts/pages/dashboard-analytics.js')}}"></script>
    <script src="{{asset('assets/admin/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('assets/admin/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/admin/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/admin/app-assets/vendors/js/tables/datatable/dataTables.select.min.js')}}"></script>
    <script src="{{asset('assets/admin/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/admin/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
    <script src="{{asset('assets/admin/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/admin/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/admin/app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/admin/app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>

    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
        });
    </script>
    <!-- END: Page JS-->
@yield('javascript')
</body>
<!-- END: Body-->

</html>
