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
                    <h4 class="mb-0">تعديل موقع مجاني / مواقع وظائف أخري</h4>
                </div>
                <div class="card-content">
                    <div class="mt-1">
                        <form class="mt-2" action="{{route('admin.other-websites-paid.update',$website->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="roundText">الرابط</label>
                                            <input value="{{$website->link}}" type="text" name="link" class="form-control round">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <label class="d-block">الصورة الحالية</label>
                                            <img src="{{asset('storage/other_websites_images/'.$website->image.'')}}" />
                                            <label class="d-block mt-2">تعديل الصورة</label>
                                            <input class="mt-2" type="file" name="image"  />
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <button class="btn btn-primary mb-2" type="submit">تعديل</button>
                                    </div>

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
