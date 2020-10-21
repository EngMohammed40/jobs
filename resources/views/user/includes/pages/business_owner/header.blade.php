
<div class="business_owner header" style="background:url({{asset('storage/corporations_images/'.$bannerImage->banner_image.'')}})">

    <div class="header-content">
        @foreach($banners as $banner)
        <h5>{{$banner->banner_head}}</h5>
        <p>{{$banner->banner_body}}</p>
        @endforeach
    </div>
</div>
