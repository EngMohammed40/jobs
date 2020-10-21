<div class="top-part container">
    
    <div class="row">
        
        <div class="col-md-2">
            <button type="button" class="btn btn-warning">وظائف حسب المدينة</button>
            <button type="button" class="btn btn-warning">وظائف حسب الشخص</button>
            <button type="button" class="btn btn-warning">وظائف حسب الشركة</button>
            <button type="button" class="btn btn-warning">وظائف حسب الاجر</button>
        </div>
        
        
        <div class=" col-md-6">
            
            @foreach($top_ads as $top_ad)
                @foreach($top_ad->ad_images as $ad_image)
                <img class="img-lg" src="{{asset('storage/ads_images/'.$ad_image->name.'')}}">
                @endforeach
            @endforeach
        </div>
        
        <div  class="city col-md-2">
              <p>{{$current_country->name}}</p>
            <img style="height: 135px;"  src="{{asset('storage/countries_images/'.$current_country->image.'')}}">
        
        </div>
        
        <div class="col-md-2">
            <button type="button" class="btn btn-info">تسجيل اصحاب العمل</button>
            <button type="button" class="btn btn-info">تسجيل شركات التوظيف</button>
            <button type="button" class="btn btn-info">تسجيل طالب عمل</button>
            <button type="button" class="btn btn-info">تسجيل مراكز تدريب</button>
        </div>
        
    
    </div>
    

</div>