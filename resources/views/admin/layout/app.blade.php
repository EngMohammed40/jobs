<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Wexel Admin">
    <meta name="keywords" content="Wexel Admin">
    <meta name="author" content="">
    <title>{{config('app.name')}}</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/pages/img/apple-touch-icon.png')}}">

    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/pages/img/favicon-32x32.png')}}">

    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/pages/img/favicon-16x16.png')}}">

    <link rel="manifest" href="{{asset('assets/pages/img/site.webmanifest')}}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    @php($logo = App\Models\WebsiteDetail::find('1')->website_logo)
    <meta property="og:image" content="{{asset('storage/website_images/'.$logo)}} ">

    @php($description = App\Models\WebsiteDetail::find('1')->website_description)
    <meta property="og:description" content="{{$description}} ">

    @php($title = App\Models\WebsiteDetail::find('1')->website_name)
    <meta property="og:title" content="{{$title}} ">


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
    <!-- SELECT2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        .tippy-popper[x-placement^=top] [data-animation=fade][data-state=visible] {
            display: none;
        }
        h1,h2,h3,h4,h5,h6,a,span,div,li,input,textarea{
            font-family: 'Tajawal', sans-serif;
        }
        label{
            font-size:18px;
            font-weight:bold;
        }
        body.vertical-layout.vertical-menu-modern.menu-expanded .main-menu {
            width: 260px;
        }
        .main-menu .navbar-header {
            height: 100%;
            width: 260px;
            height: 9rem;
            position: relative;
            padding: 0.35rem 1.64rem 0.3rem 1rem;
            -webkit-transition: 300ms ease all;
            transition: 300ms ease all;
        }
        .logo_img img.logo {
            width: 96%;
            border-top-left-radius: 15px;
            border-bottom-right-radius: 15px;
            box-shadow: 0 5px 21px 0 rgba(0, 0, 0, 0.1);
        }
        .main-menu .main-menu-content {
            height: calc(100% - 6rem) !important;
            position: relative;
            padding-bottom: 66px;
        }
        .header-navbar .navbar-container {
            padding-right: 1rem;
            -webkit-transition: 300ms ease all;
            transition: 300ms ease all;
            background: inherit;
            margin-right: 0;
            direction: ltr;
        }
        .header-navbar .navbar-container ul.nav li .scrollable-container {
            position: relative;
            padding: 12px;
        }
        .header-navbar .navbar-container ul.nav li .scrollable-container {
            position: relative;
            padding: 12px;
        }
        li.unread-notification.scrollable-container.media-list.ps {
            background: #7367f0;
            color: #FFF;
        }
    </style>

    <!-- END: Custom CSS-->
    @yield('style')

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static {{(session()->has('mode')) ? session()->get('mode') : '' }}"data-open="click" data-menu="vertical-menu-modern" id="body" data-col="2-columns">

<!-- BEGIN: Header-->
@include('admin.partials.header')

<!-- END: Header-->


<!-- BEGIN: Main Menu-->
@include('admin.partials.aside')
<!-- END: Main Menu-->

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-body">
            @include('admin.partials.flashes')
            @yield('content')
        </div>
    </div>
</div>
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>



<!-- BEGIN: Vendor JS-->
<script src="{{asset('assets/admin/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('assets/admin/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('assets/admin/app-assets/js/core/app.js')}}"></script>
<script src="{{asset('assets/admin/app-assets/js/scripts/components.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
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
<!-- SELECT2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script>
    $(document).ready( function () {
        $('#datatable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Arabic.json"
            },
        });
        CKEDITOR.replace('ckeditor');
    });

    // Read Notification.......
    $('.notify').on('click',function(){
        var notify = $(this).data('notify');
        $.ajax({
            headers    : {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType   : 'html',
            url        :'{{URL::to("read")}}',
            type       :'get',
            success    :'success',
            data       :{
                notify:notify
            },
            success   :function(){
                $(this).siblings('.badge').hide();
            }
        });
    })
</script>
<script>
    function mode(mode) {
        if(mode=="dark-layout"){
            $('body').removeClass('semi-dark-layout');
        }else if(mode=='semi-dark-layout'){
            $('body').removeClass('dark-layout');
        }else{
            $('body').removeClass('semi-dark-layout');
            $('body').removeClass('dark-layout');
        }
        $('body').addClass(mode);
        $.ajax({
            type: "GET",
            url: '{{URL::to("admin/mode")}}/'+mode,
            success: function() {}
        });
    }
</script>
<!-- END: Page JS-->
@yield('javascript')
</body>
<!-- END: Body-->
</html>
