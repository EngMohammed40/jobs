@extends('user.layouts.pages.main')

@section('content')

    <!-- Sidebar -->
    @include('user.includes.pages.home.sidebar')

    <!-- Content -->

    <div class="content">
        @include('user.includes.pages.home.top-part')
        @include('user.includes.pages.home.hero')
        @include('user.includes.pages.home.content')
        @include('user.includes.pages.home.bottom-part')
    </div>




@endsection

@section('scripts')

<script>
@if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
     {{Session::forget('success')}};
@endif    
</script>

@endsection


@section('styles')
<style>
    .menu li a{
        color: #FFF;
    }
</style>
@endsection