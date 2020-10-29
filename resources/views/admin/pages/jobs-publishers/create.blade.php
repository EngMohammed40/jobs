@extends('admin.layout.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">اضافة ناشر وظيفة</h4>
                </div>
                @foreach($errors->all() as $error)
                    <h1>{{$error}}</h1>
                @endforeach
                <div class="card-content">
                    <form class="mt-2" action="{{route('admin.jobs-publishers.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <fieldset class="form-group">
                                        <label for="roundText">اسم الناشر</label>
                                        <input type="text" name="name" required id="roundText" class="form-control round w-50">
                                    </fieldset>
                                </div>
                                <div class="col-md-12">
                                    <fieldset class="form-group">
                                        <label class="d-block" for="roundText">الصورة </label>
                                        <input type="file" name="image" required />
                                    </fieldset>
                                </div>

                                <div class="col-md-12">
                                    <button class="btn btn-primary mb-2" type="submit">اضافة</button>
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

