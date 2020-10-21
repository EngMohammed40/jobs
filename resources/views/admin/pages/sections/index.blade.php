@extends('admin.layout.app')
@section('style')
<style>
    img.section_img {
        width: 84px;
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
            <div class="card-body card-dashboard">
                <div class="table-responsive mt-1">
                    <a href="{{route('admin.sections.create')}}" class="btn btn-primary mr-2 ml-2  mb-1 waves-effect waves-light">اضافة جديد</a>
                    <table id="datatable" class="table table-striped table-hover-animation mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>الاسم</th>
                                <th>الرابط</th>
                                <th>القسم الاب</th>
                                <th>الصورة</th>

                                <th></th>
                                <th></th>


                            </tr>
                        </thead>
                        <tbody>
                             @foreach($sections as $section)
                            <tr>
                                <td>{{$section->name}}</td>
                                <td>{{$section->slug}}</td>
                                <td>
                                    @if($section->parent_id != 0)
                                        {{$section->parent->name}}
                                    @else
                                        {{''}}
                                    @endif
                                </td>
                                <td>
                                @if($section->image != null)
                                    <img class="section_img" src="{{asset('storage/sections_images/'.$section->image)}}">
                                @else
                                    {{''}}
                                @endif
                                </td>
                                <td>
                                    <a href="{{route('admin.sections.edit',$section->id)}}" class="btn btn-primary">تعديل</a>

                                </td>
                                <td>
                                    <form method="POST" action="{{route('admin.sections.destroy',$section->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="حذف" class="btn btn-danger mr-1 mb-1 waves-effect waves-light">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')


@endsection
