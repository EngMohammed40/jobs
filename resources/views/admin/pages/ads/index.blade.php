@extends('admin.layout.app')

@section('content')

 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">المساحات الاعلانية</h4>
            </div>
            <div class="card-body card-dashboard">
                <div class="table-responsive mt-1">
                    <a href="{{route('admin.ads.create')}}" class="btn btn-primary mr-2 ml-2  mb-1 waves-effect waves-light">اضافة جديد</a>
                    <table id="datatable" class="table table-striped table-hover-animation mb-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>الإعلان</th>
                                <th>تعديل / حذف</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ads as $ad)
                            <tr>
                                <td>{{$ad->id}}</td>
                                <td>{{$ad->name}}</td>
                                <td>
                                    @if($ad->type == "img")
                                        @if($ad->ad_images()->count() > 0)
                                            @php($images = $ad->ad_images)
                                            @foreach($images as $image)
                                                <img width="120" src="{{asset('storage/ads_images/'.$image->name)}}">
                                            @endforeach
                                        @endif
                                    @elseif($ad->type== "none")
                                        <a class="btn btn-danger waves-effect waves-light" href="#"> غير مُفعل </a>
                                    @else
                                        {{$ad->type}}
                                    @endif
                                </td>

                                <td>
                                    <a href="{{route('admin.ads.edit',$ad->id)}}" class="btn btn-primary">تعديل</a>
                                    <form method="POST" class="d-inline-flex" action="{{route('admin.ads.destroy',$ad->id)}}">
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
