
@foreach($banners as $banner)
<div class="recruitment_company header" style="background:url({{asset('storage/companies_images/'.$banner->banner_image.'')}})">

    <div class="header-content">
        <h5>{{$banner->banner_head}}</h5>
        <p>{{$banner->banner_body}}</p>

        
    </div>
</div>
@endforeach