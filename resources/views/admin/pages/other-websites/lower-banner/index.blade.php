@extends('admin.layout.app')

@section('style')
    <style>
        img{
            width:300px;
        }
    </style>
@endsection

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">البنر السفلي / مواقع وظائف أخري</h4>
                </div>
                <div class="card-content">
                    <div class="mt-1">
                            <form class="mt-2" action="{{route('admin.other-websites-lower-banner.update',$upperBanner->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="container">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <fieldset>
                                                <label>الصورة الحالية</label>
                                                <img src="{{asset('storage/other_websites_images/'.$upperBanner->image.'')}}" />
                                                <label>تعديل الصورة</label>
                                                <input type="file" name="banner_image" />
                                            </fieldset>
                                        </div>
                                        <button class="btn btn-primary mb-2" type="submit">تعديل</button>

                                    </div>
                                </div>

                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('javascript')
    <script>
        @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}")
        {{Session::forget('success')}};
        @endif
    </script>

@endsection
