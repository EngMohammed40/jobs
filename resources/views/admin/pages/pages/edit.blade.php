@extends('admin.layout.app')

@section('content')

    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">صفحات الموقع</h4>
            </div>
            <div class="card-content">
                <form class="mt-2" action="{{route('admin.pages.update',$page->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">العنوان</label>
                                    <input type="text" name="name" value="{{$page->name}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>
                             <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">المحتوي</label>
                                    <textarea name="content" id="ckeditor" class="form-control round">
                                        {!! $page->content !!}
                                    </textarea>
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

