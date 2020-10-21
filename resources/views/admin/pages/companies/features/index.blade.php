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
                <h4 class="mb-0">مميزات شركات التوظيف  / شركات التوظيف</h4>
            </div>
            <div class="card-content">
                <div class="mt-1">
                
                @foreach($companies_page as $company_page)
                             <form class="mt-2" action="{{route('admin.companies_feature.update',$company_page->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="container">
                        
                        <div class="row">
                            <div class="col-md-6">
                                <fieldse>
                                    <label>اختر الميزة</label>
                                    <select class="form-control rounded" name="type" id="type">
                                        <option value="right">
                                           الميزة جهة اليمين 
                                        </option>
                                        <option value="left">
                                            الميزة جهة اليسار
                                        </option>
                                        <option value="middle">
                                            الميزة في الوسط
                                        </option>
                                        
                                    </select>
                                </fieldse>
                            </div>
                            <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">العنوان</label>
                                    <input type="text" id="feature_head" name="feature_head" value="{{$company_page->features_right_head}}"  class="form-control round">
                                </fieldset>
                            </div>

                             <div class="col-md-12">
                                <fieldset class="form-group">
                                    <label for="roundText">المحتوي</label>
                                    <textarea  type="text" id="feature_body" name="feature_body" class="form-control round">{{$company_page->features_right_body}}</textarea>
                                </fieldset>
                            </div>
                            <div class="col-md-12">
                                <fieldset id="image_updated">
                                    <label>الصورة الحالية</label>
                                    <img id="feature_img" src="{{asset('storage/companies_images/'.$company_page->features_right_img.'')}}" />
                                    <label>تعديل الصورة</label>
                                    <input type="file" name="feature_image" />
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
    $.ajax({
        url: "{{route('admin.getFeatureData')}}",
                        headers    : {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
        method: "POST",
        data:{
            type:type,
        },
        success: (res) => { 
            
            $('#feature_head').val(res[0]);
            $('#feature_body').val(res[1]);
            // $('#feature_img').addClass('d-none');
            $("#feature_img").attr("src","{{asset("storage/companies_images")}}/"+res[2]+"");
        }
    })
})

</script>

@endsection
