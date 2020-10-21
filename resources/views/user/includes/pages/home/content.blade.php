<div class="main-content container">
    <div class="row">
        <div class="col-md-3">
            <div class="left-block1">
                <h6 class="content-header">مؤسسات / شركات مميزة</h6>
                @foreach($corporations as $corporation)
                <a href="{{$corporation->link}}" target="_blank">
                      <img src="{{asset('storage/corporations_images/'.$corporation->logo.'')}}" style="width:100px;height:100px">
                    
                </a>
                @endforeach
            </div>
            <div class="left-block2">
                
                <h6 class="content-header">أعد سيرتك الذاتية</h6>
                
                <div class="note">
                    <i class="fas fa-file-alt"></i>
                    <span>حمل سيرتك الذاتية الان لتزداد فرصك في الحصول علي وظيفة</span>
           
                </div>
                <button type="button" class="btn btn-warning">حمل الان</button>

       
            </div>
            @foreach($left_banners as $left_banner)
                @foreach($left_banner->ad_images as $left_image)
                    <div class="left-block3">
                        <img src="{{asset('storage/ads_images/'.$left_image->name.'')}}">
        
                    </div>
            @endforeach
            <!--<div class="left-block4">-->
            <!--    <img src="{{asset('assets/pages/img/ksa.jpg')}}">-->

            <!--</div>-->
            <!--<div class="left-block5">-->
            <!--    <img src="{{asset('assets/pages/img/ksa.jpg')}}">-->

            <!--</div>-->
            
            <!--<div class="left-block5">-->
            <!--    <img src="{{asset('assets/pages/img/ksa.jpg')}}">-->

            <!--</div>-->
           @endforeach
        
        
        
        </div>
        
        
        <div class="col-md-9">
            <div class="right-block1 row">
                <div class="col-md-4">
                    <h6 class="content-header">دورات تدريبية</h6>
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">العنوان</th>
                          <th scope="col">المكان</th>
                          <th scope="col">الموعد</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                          
                          <tr>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                          
                          <tr>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                          
                          <tr>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                          
                          <tr>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                          
                          <tr>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                
                </div>
                <div class="col-md-8">
                    <h6 class="content-header">وظائف مميزة</h6>
                    @foreach($jobs as $job)
                    <div class="job row">
                         <div class="col-md-5">
                            <button type="button" class="btn btn-warning">تقدم للوظيفة</button>
                        </div>
                        <div class="col-md-4">
                            <p class="title">{{$job->title}}</p>
                            <p class="description">{{$job->city->name}}  .. {{$job->country->name}}</p>
                        </div>
                        <div class="col-md-3"><img src="{{asset('assets/pages/img/chevrolet.png')}}"></div>
                    
                    </div>
                    @endforeach
                    
                    <!--  <div class="job row">-->
                    <!--     <div class="col-md-5">-->
                    <!--        <button type="button" class="btn btn-warning">تقدم للوظيفة</button>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-4">-->
                    <!--        <p class="title">الوظيفة الاولي</p>-->
                    <!--        <p class="description">قطاع غزة .. القدس</p>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-3"><img src="{{asset('assets/pages/img/chevrolet.png')}}"></div>-->
                    
                    <!--</div>-->
                    
                    
                    <!--  <div class="job row">-->
                    <!--     <div class="col-md-5">-->
                    <!--        <button type="button" class="btn btn-warning">تقدم للوظيفة</button>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-4">-->
                    <!--        <p class="title">الوظيفة الاولي</p>-->
                    <!--        <p class="description">قطاع غزة .. القدس</p>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-3"><img src="{{asset('assets/pages/img/chevrolet.png')}}"></div>-->
                    
                    <!--</div>-->
                    
                    
                    <!--  <div class="job row">-->
                    <!--     <div class="col-md-5">-->
                    <!--        <button type="button" class="btn btn-warning">تقدم للوظيفة</button>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-4">-->
                    <!--        <p class="title">الوظيفة الاولي</p>-->
                    <!--        <p class="description">قطاع غزة .. القدس</p>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-3"><img src="{{asset('assets/pages/img/chevrolet.png')}}"></div>-->
                    
                    <!--</div>-->
                </div>
            
            </div>
            
            <div class="job-search">
                <div class="job-search-block1">
                    <h6 class="content-header">ابحث عن وظيفة</h6>
                    <div class="searching">
                        <p>ابحث باسم الوظيفة او مهارة او اي كلمة بحث اخري</p>
                        <input class="form-control" type="text" placeholder="محاسب / تسويق ...الخ">
                        <button type="button" class="btn btn-warning">ابحث</button>

                    </div>

                </div>

                <div class="job-search-block2">
                    <h6 class="content-header">ابحث عن وظيفة</h6>
                     <div class="form-group">
                        <input type="email" class="form-control"  placeholder="اضف ايميلك هنا">
                      </div>
                      <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option selected disabled>اختر تخصصك</option>
                            @foreach($expertises as $expertise)
                            <option value="{{$expertise->id}}">{{$expertise->name}}</option>
                            @endforeach
                        </select>
                      </div>
                     <button type="button" class="btn btn-warning">ابحث</button>

                </div>


            </div>
            <div class="job-ads">
                @foreach($banners as $banner)
                <div class="job-ad" style="background:url('{{asset('storage/home_images/'.$banner->banner_img_1.'')}}');background-size: cover;">
                    <div class="job-ad-content">
                        <h5>{{$banner->banner_head_1}}</h5>
                        <p>{{$banner->banner_body_1}}</p>
                        <a href="{{$banner->banner_href_1}}" class="btn btn-info">{{$banner->banner_link_1}}</a>

                    
                    </div>
                
                </div>
                
                <div class="job-ad" style="background:url('{{asset('storage/home_images/'.$banner->banner_img_2.'')}}');background-size: cover;">
                    <div class="job-ad-content">
                        <h5>{{$banner->banner_head_2}}</h5>
                        <p>{{$banner->banner_body_2}}</p>
                        <a href="{{$banner->banner_href_2}}" class="btn btn-info">{{$banner->banner_link_2}}</a>

                    
                    </div>
                
                </div>
                @endforeach
            
            </div>
     
        
        
        </div>
        
    </div>


</div> 