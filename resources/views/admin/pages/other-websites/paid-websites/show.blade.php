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
                    <h4 class="mb-0">عرض موقع مجاني / مواقع وظائف أخري</h4>
                </div>
                <div class="card-content pb-4">
                    <div class="mt-1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset class="form-group">
                                            <label for="roundText">الرابط</label>
                                            <input disabled value="{{$website->link}}" type="text" name="link" class="form-control round">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <label class="d-block">الصورة الحالية</label>
                                            <img src="{{asset('storage/other_websites_images/'.$website->image.'')}}" />

                                        </fieldset>
                                    </div>


                                </div>
                            </div>


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
