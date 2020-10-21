@extends('user.layouts.pages.main')

@section('content')

@include('user.includes.pages.business_owner.header')

<!-- Begin Content -->
<div class="business_owner_container container">

    <!-- Section Established Companies -->
    <section class="established">

        <h3 class="section-title">ابرز منشئات اصحاب العمل</h3>
        <div class="established-items">
            @foreach($corporations as $corporation)
            <a href="{{$corporation->link}}"><img src="{{asset('storage/corporations_images/'.$corporation->logo.'')}}"></a>
            @endforeach
        </div>

    </section>
    <!-- End established Companies -->

    <!-- Section Job Ads -->
    <section class="business-job-ads">
        <h3 class="section-title">وظائف الشركات والمنشئات</h3>
        <div class="row">
            <div class="business-job-ad col-md-4">
                <a class="business-job-share" href=""><i class="fas fa-share-alt"></i></a>
                <div class="business-job-content">
                    <div class="row">
                        <div class="business-job-logo col-md-3">
                            <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                        </div>
                        <div class="business-job-title col-md-9">
                            <h4>فني كهرباء وفني ميكانيكا</h4>
                            <h5>Trans business for trading</h5>
                            <p>مصر</p>
                            <p>مجال التوزيع</p>
                        </div>
                        <div class="business-job-info">
                            <hr>
                                    <i class="far fa-clock"></i><span>10/10/2010</span>
                                    <i class="far fa-user"></i><span>0 مقدمي الطلب</span>
                            <hr>
                            <p class="business-job-description">
                                شركة ترانز للتوزيع وكيل سجائر مارلبورو تطلب فني كهرباء وفني ميكانيكا للعمل في الشركة
                            </p>
                            <hr>
                            <p>
                                -مكان العمل: <strong>السادس من اكتوبر</strong>
                                -ساعات العمل: <strong>8</strong>
                            </p>
                            <a href="" class="btn btn-success">دخول صفحة الاعلان</a>
                        </div>
                    </div>

                </div>

            </div>

            <div class="business-job-ad col-md-4">
                <a class="business-job-share" href=""><i class="fas fa-share-alt"></i></a>
                <div class="business-job-content">
                    <div class="row">
                        <div class="business-job-logo col-md-3">
                            <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                        </div>
                        <div class="business-job-title col-md-9">
                            <h4>فني كهرباء وفني ميكانيكا</h4>
                            <h5>Trans business for trading</h5>
                            <p>مصر</p>
                            <p>مجال التوزيع</p>
                        </div>
                        <div class="business-job-info">
                            <hr>
                                    <i class="far fa-clock"></i><span>10/10/2010</span>
                                    <i class="far fa-user"></i><span>0 مقدمي الطلب</span>
                            <hr>
                            <p class="business-job-description">
                                شركة ترانز للتوزيع وكيل سجائر مارلبورو تطلب فني كهرباء وفني ميكانيكا للعمل في الشركة
                            </p>
                            <hr>
                            <p>
                                -مكان العمل: <strong>السادس من اكتوبر</strong>
                                -ساعات العمل: <strong>8</strong>
                            </p>
                            <a href="" class="btn btn-success">دخول صفحة الاعلان</a>
                        </div>
                    </div>

                </div>

            </div>

            <div class="business-job-ad col-md-4">
                <a class="business-job-share" href=""><i class="fas fa-share-alt"></i></a>
                <div class="business-job-content">
                    <div class="row">
                        <div class="business-job-logo col-md-3">
                            <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                        </div>
                        <div class="business-job-title col-md-9">
                            <h4>فني كهرباء وفني ميكانيكا</h4>
                            <h5>Trans business for trading</h5>
                            <p>مصر</p>
                            <p>مجال التوزيع</p>
                        </div>
                        <div class="business-job-info">
                            <hr>
                                    <i class="far fa-clock"></i><span>10/10/2010</span>
                                    <i class="far fa-user"></i><span>0 مقدمي الطلب</span>
                            <hr>
                            <p class="business-job-description">
                                شركة ترانز للتوزيع وكيل سجائر مارلبورو تطلب فني كهرباء وفني ميكانيكا للعمل في الشركة
                            </p>
                            <hr>
                            <p>
                                -مكان العمل: <strong>السادس من اكتوبر</strong>
                                -ساعات العمل: <strong>8</strong>
                            </p>
                            <a href="" class="btn btn-success">دخول صفحة الاعلان</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
<div class="row">
            <div class="business-job-ad col-md-4">
                <a class="business-job-share" href=""><i class="fas fa-share-alt"></i></a>
                <div class="business-job-content">
                    <div class="row">
                        <div class="business-job-logo col-md-3">
                            <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                        </div>
                        <div class="business-job-title col-md-9">
                            <h4>فني كهرباء وفني ميكانيكا</h4>
                            <h5>Trans business for trading</h5>
                            <p>مصر</p>
                            <p>مجال التوزيع</p>
                        </div>
                        <div class="business-job-info">
                            <hr>
                                    <i class="far fa-clock"></i><span>10/10/2010</span>
                                    <i class="far fa-user"></i><span>0 مقدمي الطلب</span>
                            <hr>
                            <p class="business-job-description">
                                شركة ترانز للتوزيع وكيل سجائر مارلبورو تطلب فني كهرباء وفني ميكانيكا للعمل في الشركة
                            </p>
                            <hr>
                            <p>
                                -مكان العمل: <strong>السادس من اكتوبر</strong>
                                -ساعات العمل: <strong>8</strong>
                            </p>
                            <a href="" class="btn btn-success">دخول صفحة الاعلان</a>
                        </div>
                    </div>

                </div>

            </div>

            <div class="business-job-ad col-md-4">
                <a class="business-job-share" href=""><i class="fas fa-share-alt"></i></a>
                <div class="business-job-content">
                    <div class="row">
                        <div class="business-job-logo col-md-3">
                            <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                        </div>
                        <div class="business-job-title col-md-9">
                            <h4>فني كهرباء وفني ميكانيكا</h4>
                            <h5>Trans business for trading</h5>
                            <p>مصر</p>
                            <p>مجال التوزيع</p>
                        </div>
                        <div class="business-job-info">
                            <hr>
                                    <i class="far fa-clock"></i><span>10/10/2010</span>
                                    <i class="far fa-user"></i><span>0 مقدمي الطلب</span>
                            <hr>
                            <p class="business-job-description">
                                شركة ترانز للتوزيع وكيل سجائر مارلبورو تطلب فني كهرباء وفني ميكانيكا للعمل في الشركة
                            </p>
                            <hr>
                            <p>
                                -مكان العمل: <strong>السادس من اكتوبر</strong>
                                -ساعات العمل: <strong>8</strong>
                            </p>
                            <a href="" class="btn btn-success">دخول صفحة الاعلان</a>
                        </div>
                    </div>

                </div>

            </div>

            <div class="business-job-ad col-md-4">
                <a class="business-job-share" href=""><i class="fas fa-share-alt"></i></a>
                <div class="business-job-content">
                    <div class="row">
                        <div class="business-job-logo col-md-3">
                            <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                        </div>
                        <div class="business-job-title col-md-9">
                            <h4>فني كهرباء وفني ميكانيكا</h4>
                            <h5>Trans business for trading</h5>
                            <p>مصر</p>
                            <p>مجال التوزيع</p>
                        </div>
                        <div class="business-job-info">
                            <hr>
                                    <i class="far fa-clock"></i><span>10/10/2010</span>
                                    <i class="far fa-user"></i><span>0 مقدمي الطلب</span>
                            <hr>
                            <p class="business-job-description">
                                شركة ترانز للتوزيع وكيل سجائر مارلبورو تطلب فني كهرباء وفني ميكانيكا للعمل في الشركة
                            </p>
                            <hr>
                            <p>
                                -مكان العمل: <strong>السادس من اكتوبر</strong>
                                -ساعات العمل: <strong>8</strong>
                            </p>
                            <a href="" class="btn btn-success">دخول صفحة الاعلان</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="row">
            <div class="business-job-ad col-md-4">
                <a class="business-job-share" href=""><i class="fas fa-share-alt"></i></a>
                <div class="business-job-content">
                    <div class="row">
                        <div class="business-job-logo col-md-3">
                            <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                        </div>
                        <div class="business-job-title col-md-9">
                            <h4>فني كهرباء وفني ميكانيكا</h4>
                            <h5>Trans business for trading</h5>
                            <p>مصر</p>
                            <p>مجال التوزيع</p>
                        </div>
                        <div class="business-job-info">
                            <hr>
                                    <i class="far fa-clock"></i><span>10/10/2010</span>
                                    <i class="far fa-user"></i><span>0 مقدمي الطلب</span>
                            <hr>
                            <p class="business-job-description">
                                شركة ترانز للتوزيع وكيل سجائر مارلبورو تطلب فني كهرباء وفني ميكانيكا للعمل في الشركة
                            </p>
                            <hr>
                            <p>
                                -مكان العمل: <strong>السادس من اكتوبر</strong>
                                -ساعات العمل: <strong>8</strong>
                            </p>
                            <a href="" class="btn btn-success">دخول صفحة الاعلان</a>
                        </div>
                    </div>

                </div>

            </div>

            <div class="business-job-ad col-md-4">
                <a class="business-job-share" href=""><i class="fas fa-share-alt"></i></a>
                <div class="business-job-content">
                    <div class="row">
                        <div class="business-job-logo col-md-3">
                            <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                        </div>
                        <div class="business-job-title col-md-9">
                            <h4>فني كهرباء وفني ميكانيكا</h4>
                            <h5>Trans business for trading</h5>
                            <p>مصر</p>
                            <p>مجال التوزيع</p>
                        </div>
                        <div class="business-job-info">
                            <hr>
                                    <i class="far fa-clock"></i><span>10/10/2010</span>
                                    <i class="far fa-user"></i><span>0 مقدمي الطلب</span>
                            <hr>
                            <p class="business-job-description">
                                شركة ترانز للتوزيع وكيل سجائر مارلبورو تطلب فني كهرباء وفني ميكانيكا للعمل في الشركة
                            </p>
                            <hr>
                            <p>
                                -مكان العمل: <strong>السادس من اكتوبر</strong>
                                -ساعات العمل: <strong>8</strong>
                            </p>
                            <a href="" class="btn btn-success">دخول صفحة الاعلان</a>
                        </div>
                    </div>

                </div>

            </div>

            <div class="business-job-ad col-md-4">
                <a class="business-job-share" href=""><i class="fas fa-share-alt"></i></a>
                <div class="business-job-content">
                    <div class="row">
                        <div class="business-job-logo col-md-3">
                            <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                        </div>
                        <div class="business-job-title col-md-9">
                            <h4>فني كهرباء وفني ميكانيكا</h4>
                            <h5>Trans business for trading</h5>
                            <p>مصر</p>
                            <p>مجال التوزيع</p>
                        </div>
                        <div class="business-job-info">
                            <hr>
                                    <i class="far fa-clock"></i><span>10/10/2010</span>
                                    <i class="far fa-user"></i><span>0 مقدمي الطلب</span>
                            <hr>
                            <p class="business-job-description">
                                شركة ترانز للتوزيع وكيل سجائر مارلبورو تطلب فني كهرباء وفني ميكانيكا للعمل في الشركة
                            </p>
                            <hr>
                            <p>
                                -مكان العمل: <strong>السادس من اكتوبر</strong>
                                -ساعات العمل: <strong>8</strong>
                            </p>
                            <a href="" class="btn btn-success">دخول صفحة الاعلان</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </section>
    <!-- End Section Job Ads -->

    <!-- Start section Job Filter -->
    <section class="business-jobs-filter">
        <h3 class="section-title">وظائف حسب التصنيفات</h3>
        <div class="filters">
            @foreach($sections as $section)
            <div class="filter-item">
                <a href="">
                    <img src="{{asset('storage/sections_images/'.$section->image.'')}}">
                    <p>{{$section->name}}</p>
                </a>
            </div>
            @endforeach
 
        </div>
    </section>
    <!-- End Section Job Filters -->
    
    <!-- Section Bottom Part -->
    <section class="business-jobs-bottom-part">
        <div class="row">
            
            <div class="info-item-right col-md-8" style="background:url({{asset('storage/corporations_images/'.$bannerImage->feature_image.'')}})">
                 <div class="header-content">
                     <h5>مزايا اصحاب العمل</h5>
                     @foreach($features as $feature)
                    <p>{{$feature->feature}}</p>
                    @endforeach
                </div>
            </div>
            @foreach($top_side_ads as $top_side_ad)
                @foreach($top_side_ad->ad_images as $top_side_ad_image)
                 <div class="info-item-left col-md-4">
                    <a  href=""><img src="{{asset('storage/ads_images/'.$top_side_ad_image->name.'')}}"></a>
                </div>
                @endforeach
            @endforeach
        </div>

        <div class="row">
            <div class="info-item-right col-md-8" style="background:url({{asset('storage/corporations_images/'.$bannerImage->rule_image.'')}})">
                 <div class="header-content">
                    <h5>شروط تسجيل حساب اصحاب العمل</h5>
                    @foreach($rules as $rule)
                    <p>{{$rule->rule}}</p>
                    @endforeach
                </div>
            </div>

            @foreach($bottom_side_ads as $bottom_side_ad)
                @foreach($bottom_side_ad->ad_images as $bottom_side_ad_image)
                 <div class="info-item-left col-md-4">
                    <a  href=""><img style="    height: 255px;" src="{{asset('storage/ads_images/'.$bottom_side_ad_image->name.'')}}"></a>
                </div>
                @endforeach
            @endforeach
        </div>

        
    </section>

    <section class="business-owner-items">
        <div class="row">
            <div class="business-owner-item col-md-4">
                <div class="icon">
                    <i class="fas fa-search"></i>
                </div>
                <h4>البحث في السيرة الذاتية</h4>
                <p>امكانية البحث في السيرة الذاتية في الموقع بكل سهولةمع امكانية التواصل بشكل مباشر مع المعلنين</p>
                <a href="" class="btn btn-success">ابحث عن سير ذاتية الان</a>
            </div>

            <div class="business-owner-item col-md-4">
                <div class="icon">
                    <i class="far fa-copy"></i>
                </div>
                <h4>نشر وظائفك</h4>
                <p>امكانية نشر وظائفك المطلوبة عدد غير محدود وفي اي وقت وبالمجان بدون مقابل او رسوم مع التحكم بطرق التواصل</p>
                <a href="" class="btn btn-info">اعلن عن وظيفة الان</a>
            </div>

            <div class="business-owner-item col-md-4">
                <div class="icon">
                    <i class="fas fa-credit-card"></i>
                </div>
                <h4>حسابك الخاص بالتوظيف</h4>
                <p>امتلك حساب مجاني دون قيد او شرط وتحكم بكل بياناتك ومعلوماتك مع امكانية التعديل والحذف</p>
                <a href="" class="btn btn-danger">اسعارنا</a>
            </div>
        </div>
    </section>

    <section class="business-owner-bottom-ad">
        @foreach($bottom_ads as $bottom_ad)
            @foreach($bottom_ad->ad_images as $bottom_ad_image)
                <img src="{{asset('storage/ads_images/'.$bottom_ad_image->name.'')}}">
            @endforeach
        @endforeach
    </section>

</div>

@endsection