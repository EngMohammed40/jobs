<div class="job_seeker header" style="background:url({{asset('storage/job-seekers/'.$bannerImage.'')}})">

    <div class="header-content">
        @foreach($banners as $banner)
        <h5>{{$banner->banner_head}}</h5>
        <p>{{$banner->banner_body}}</p>
        @endforeach
        <h5>ابحث عن السيرة الذاتية مجانا</h5>
         <!-- Search Box -->
        <div class=" col-md-6 offset-6">
            <form method="GET" id="search_form" action=""> 
            @csrf
                <div class="col-auto">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                        <button type="submit" class=" btn btn-info">ابحث عن السيرة الذاتية</button>
                        </div>
                        <input type="text" id="search_item" name="search" class="form-control" >
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>