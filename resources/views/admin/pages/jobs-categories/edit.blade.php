@extends('admin.layout.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">تعديل فئة وظيفة</h4>
                </div>
                @foreach($errors->all() as $error)
                    <h1>{{$error}}</h1>
                @endforeach
                <div class="card-content">
                    <form class="mt-2" action="{{route('admin.jobs-categories.update',$category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset class="form-group">
                                        <label for="roundText">اسم الفئة</label>
                                        <input type="text" value="{{$category->name}}" name="name" required id="roundText" class="form-control round w-50">
                                    </fieldset>
                                </div>

                                <div class="col-md-12">
                                    <fieldset class="form-group">
                                        <label class="d-block" for="roundText">الصورة الحالية </label>
                                        <img width="150px" height="150px" class="img-fluid" src="{{asset('storage/job-categories/'.$category->image.'')}}" />
                                    </fieldset>
                                </div>

                                <div class="col-md-12">
                                    <fieldset class="form-group">
                                        <label class="d-block" for="roundText">تعديل الصورة </label>
                                        <input type="file" name="image"  />
                                    </fieldset>
                                </div>

                                <div class="col-md-12">
                                    <button class="btn btn-primary mb-2" type="submit">تعديل</button>
                                </div>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('javascript')

@endsection

