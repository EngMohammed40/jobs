@extends('admin.layout.app')
@section('style')
<style>
    img.article_img {
        width: 84px;
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
            <div class="card-body card-dashboard">
                <div class="table-responsive mt-1">
                    <a href="{{route('admin.articles.create')}}" class="btn btn-primary mr-2 ml-2  mb-1 waves-effect waves-light">اضافة جديد</a>
                    <table id="datatable" class="table table-striped table-hover-animation mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>العنوان</th>
                                <th>الرابط</th>
                                <th>الصورة</th>

                                <th></th>
                                <th></th>


                            </tr>
                        </thead>
                        <tbody>
                             @foreach($articles as $article)
                            <tr>
                                <td>{{$article->title}}</td>
                                <td>{{$article->link}}</td>
                                <td><img class="article_img" src="{{asset('storage/articles_images/'.$article->image)}}"></td>
                                <td>
                                    <a href="{{route('admin.articles.edit',$article->id)}}" class="btn btn-primary">تعديل</a>

                                </td>

                                <td>
                                    <form method="POST" action="{{route('admin.articles.destroy',$article->id)}}">
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
