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
                <h4 class="mb-0">الاقسام</h4>
            </div>
            <div class="card-content">
                <form class="mt-2" action="{{route('admin.sections.update',$section->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الاسم</label>
                                    <input type="text" name="name" value="{{$section->name}}" id="roundText" class="form-control round">
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">القسم الاب</label>
                                    <select name="parent_id" id="parent_id" class="custom-select">

                                        <option value="0"
                                        @if($section->parent_id == 0)
                                            {{'selected'}}
                                        @else
                                            {{''}}
                                        @endif
                                        >لا يوجد</option>

                                        @foreach($sections as $section_single)

                                            <option value="{{$section_single->id}}"
                                                @if($section->parent_id !== 0 && $section_single->id == $section->parent->id)
                                                    {{'selected'}}
                                                @else
                                                    {{''}}

                                                @endif
                                            >{{$section_single->name}}</option>
                                        @endforeach

                                    </select>
                                </fieldset>
                            </div>
                            <div class="section_img col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">الصورة</label>
                                    <div class="custom-file">
                                        <input type="file" name="section_img" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">رفع صورة</label>
                                    </div>

                                    <div class="current-img">
                                        <span>الصورة الحالية</span>
                                        <img src="{{asset('storage/sections_images/'.$section->image)}}">
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


