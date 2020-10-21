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
                <h4 class="mb-0">المقالات</h4>
            </div>
            <div class="card-content">
                <form class="mt-2" action="{{route('admin.articles.update',$article->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">العنوان</label>
                                    <input type="text" name="title" value="{{$article->title}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الوصف</label>
                                    <textarea  name="description" id="roundText" class="form-control round">{{$article->description}}</textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الرابط</label>
                                    <input type="text" name="link" value="{{$article->link}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الصورة</label>
                                    <div class="custom-file">
                                        <input type="file" name="article_img" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">رفع صورة</label>
                                    </div>
                                    <div class="current-img">
                                        <span>الصورة الحالية</span>
                                        <img src="{{asset('storage/articles_images/'.$article->image)}}">
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

