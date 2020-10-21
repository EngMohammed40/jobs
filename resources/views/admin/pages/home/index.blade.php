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
                <h4 class="mb-0">البنر العلوي / شركات التوظيف</h4>
            </div>
            <div class="card-content">
                <div class="mt-1">
                
                @foreach($banners as $banner)
                <form class="mt-2" action="{{route('admin.home_admin.update',$banner->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>اختر البنر</label>    
                                    <select class="form-control rounded" name="type" id="type">
                                        <option value="top" name="top">البنر العلوي</option>
                                        <option value="bottom" name="bottom">البنر السفلي</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">العنوان</label>
                                    <input type="text" name="banner_head" id="banner_head" value="{{$banner->banner_head_1}}"  class="form-control round">
                                </fieldset>
                            </div>

                             <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">المحتوي</label>
                                    <textarea  type="text" name="banner_body" id="banner_body" class="form-control round">{{$banner->banner_body_1}}</textarea>
                                </fieldset>  
                             </div>   
                             <div class="col-md-12">
                                 <fieldset class="form-group">
                                    <label>محتوي الرابط</label>
                                    <input  type="text" id="banner_link"  name="banner_link" class="form-control round" value="{{$banner->banner_link_1}}" />
                                    </fieldset>
                            </div>    
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label>رابط الموقع</label>
                                    <input type="text" name="banner_href" id="banner_href" value="{{$banner->banner_href_1}}" class="form-control rounded" />
                                    </fieldset>
                             </div>  
                           
                            <div class="col-md-12">
                                <fieldset>
                                    <label>الصورة الحالية</label>
                                    <img id="banner_img" src="{{asset('storage/home_images/'.$banner->banner_img_1.'')}}" />
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

$('#type').change(function(){
    var type = $(this).val();
    console.log(type);
    $.ajax({
         url: "{{route('admin.getBannerData')}}",
                        headers    : {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
        method: "POST",
        data:{
            type:type,
        },
        success: (res) => { 
            
            $('#banner_head').val(res[0]);
            $('#banner_body').html(res[1]);
            $('#banner_link').val(res[2]);
            $('#banner_href').val(res[3]);
            $("#banner_img").attr("src","{{asset("storage/home_images")}}/"+res[4]+"");
            
        }
    })
})
</script>











@endsection
