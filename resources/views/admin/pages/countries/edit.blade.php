@extends('admin.layout.app')
@section('style')
    <style>
        .current-img img {
            width: 200px;
            display: block;
            margin-top: 11px;
            margin-bottom: 15px;
        }
        .current-img span {
            font-weight: bold;
            display:block;
            margin-top:15px;
        }
    </style>

@endsection

@section('content')

    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">الدول</h4>
            </div>
            <div class="card-content">
                <form class="mt-2" action="{{route('countries.update',$country->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الاسم</label>
                                    <input type="text" name="name" value="{{$country->name}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>

                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الكود</label>
                                    <input type="text" name="code" value="{{$country->code}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>

                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">كود الدولة</label>
                                    <input type="text" name="location_code" value="{{$country->location_code}}" id="roundText" class="form-control round">
                                </fieldset>
                                <small><a target="_blank" href="https://gist.github.com/josephilipraja/8341837">احصل علي كود الدولة</a></small>
                            </div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">العملة</label>
                                    <input type="text" name="currency" value="{{$country->currency}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الصورة</label>
                                    <div class="custom-file">
                                        <input type="file" name="country_img" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">رفع صورة</label>
                                    </div>
                                    <div class="current-img">
                                        <span>الصورة الحالية</span>
                                        <img src="{{asset('storage/countries_images/'.$country->image)}}">
                                    </div>
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

@endsection

