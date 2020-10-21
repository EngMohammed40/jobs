@extends('admin.layout.app')

@section('style')
    <style>
        .current-img img {
            width: 146px;
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
                <h4 class="mb-0">بيانات الموقع</h4>
            </div>
            <div class="card-body card-dashboard">
                <form class="mt-2" action="{{route('admin.website.update',$website->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="container">

                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="roundText">الاسم</label>
                                    <input type="text" name="website_name" value="{{$website->website_name}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>

                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="roundText">العملة</label>
                                    <input type="text" name="website_currency" value="{{$website->website_currency}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">شعار الموقع</label>
                                    <div class="custom-file">
                                        <input type="file" name="logo_img" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">رفع صورة</label>
                                    </div>
                                </fieldset>
                                @if($website->website_logo !== '')
                                    <div class="current-img">
                                        <span>الصورة الحالية</span>
                                        <img src="{{asset('storage/website_images/'.$website->website_logo)}}">
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="roundText">وصف الموقع</label>
                                    <textarea name="website_description" id="roundText" class="form-control round">
                                        {{$website->website_description}}
                                    </textarea>
                                </fieldset>
                            </div>

                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="roundText">الكلمات الدلالية</label>
                                    <input type="text" name="website_keywords" value="{{$website->website_keywords}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="roundText">البريد الالكتروني</label>
                                    <input type="text" name="website_email" value="{{$website->website_email}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="roundText">رقم الهاتف</label>
                                    <input type="text" name="website_phone" value="{{$website->website_phone}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="roundText">رقم الفاكس</label>
                                    <input type="text" name="website_fax" value="{{$website->website_fax}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="roundText">العنوان</label>
                                    <input type="text" name="website_address" value="{{$website->website_address}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="roundText">صندوق البريد</label>
                                    <input type="text" name="website_mail" value="{{$website->website_mail}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="roundText">جروب الفيس</label>
                                    <input type="text" name="website_facebook" value="{{$website->website_facebook}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="roundText">جوجل</label>
                                    <input type="text" name="website_google" value="{{$website->website_google}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="roundText">تويتر</label>
                                    <input type="text" name="website_twitter" value="{{$website->website_twitter}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="roundText">انستغرام</label>
                                    <input type="text" name="website_instagram" value="{{$website->website_instagram}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label for="roundText">يوتيوب</label>
                                    <input type="text" name="website_youtube" value="{{$website->website_youtube}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>
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

