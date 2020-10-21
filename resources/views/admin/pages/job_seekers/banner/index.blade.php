@extends('admin.layout.app')

@section('style')
<style>
    img{
        width:300px;
    }
</style>
@endsection

@section('content')

 <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="mb-0">البنر العلوي / اعلانات الافراد </h4>
            </div>
            <div class="card-content">
                <div class="mt-1">
                
                @foreach($banners as $banner)
                             <form class="mt-2" action="{{route('admin.jobSeekerBanner.update',$banner->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">العنوان</label>
                                    <input type="text" name="banner_head" value="{{$banner->banner_head}}"  class="form-control round">
                                </fieldset>
                            </div>

                             <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">المحتوي</label>
                                    <textarea  type="text" name="banner_body" class="form-control round">{{$banner->banner_body}}</textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset>
                                    <label>الصورة الحالية</label>
                                    <img src="{{asset('storage/job-seekers/'.$bannerImage.'')}}" />
                                    <label>تعديل الصورة</label>
                                    <input type="file" name="banner_image" />
                                </fieldset>
                            </div>
                            <button class="btn btn-primary mb-2" type="submit">تعديل</button>

                        </div>
                    </div>

                </form>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('javascript')
<script>
@if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
     {{Session::forget('success')}};
@endif    
</script>

@endsection
