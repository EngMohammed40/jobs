@extends('user.layouts.pages.main')

@section('styles')
<style>
    .established-items{
        background:none;
    }
</style>
@endsection
@section('content')

@include('user.includes.pages.recruitment_company.header')

<!-- Begin Content -->
<div class="recruitment_company_container">
    <div class=" container">

        <!-- Section Established Companies -->
        <section class="established">

            <h3 class="section-title">ابرز شركات التوظيف</h3>
            <div class="established-items">
                @foreach($companies as $company)
                <a href="{{$company->link}}"><img src="{{asset('storage/companies_images/'.$company->logo.'')}}"></a>
                @endforeach
            </div>

        </section>
        <!-- End established Companies -->

        <!-- Section Job Ads -->
        <section class="recruitment-company-ads">
            <h3 class="section-title">اعلانات شركات التوظيف</h3>
            <div class="row">
                <div class="recruitment-company-ad col-md-4">
                    <a class="recruitment-company-share" href=""><i class="fas fa-share-alt"></i></a>
                    <div class="recruitment-company-content">
                        <div class="row">
                            <div class="recruitment-company-logo col-md-3">
                                <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                            </div>
                            <div class="recruitment-company-title col-md-9">
                                <h4>فني كهرباء وفني ميكانيكا</h4>
                                <h5>Trans business for trading</h5>
                                <p>مصر</p>
                                <p>مجال التوزيع</p>
                            </div>
                            <div class="recruitment-company-info">
                                <hr>
                                        <i class="far fa-clock"></i><span>10/10/2010</span>
                                        <i class="far fa-user"></i><span>0 مقدمي الطلب</span>
                                <hr>
                                <p class="recruitment-company-description">
                                    شركة ترانز للتوزيع وكيل سجائر مارلبورو تطلب فني كهرباء وفني ميكانيكا للعمل في الشركة
                                </p>
                                                                <hr>
                                <p>
                                    - مكان العمل : السادس من اكتوبر 
                                    - عدد ساعات العمل : 8
                                </p>
                                <a href="" class="btn btn-success">دخول صفحة الاعلان</a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="recruitment-company-ad col-md-4">
                    <a class="recruitment-company-share" href=""><i class="fas fa-share-alt"></i></a>
                    <div class="recruitment-company-content">
                        <div class="row">
                            <div class="recruitment-company-logo col-md-3">
                                <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                            </div>
                            <div class="recruitment-company-title col-md-9">
                                <h4>فني كهرباء وفني ميكانيكا</h4>
                                <h5>Trans business for trading</h5>
                                <p>مصر</p>
                                <p>مجال التوزيع</p>
                            </div>
                            <div class="recruitment-company-info">
                                <hr>
                                        <i class="far fa-clock"></i><span>10/10/2010</span>
                                        <i class="far fa-user"></i><span>0 مقدمي الطلب</span>
                                <hr>
                                <p class="recruitment-company-description">
                                    شركة ترانز للتوزيع وكيل سجائر مارلبورو تطلب فني كهرباء وفني ميكانيكا للعمل في الشركة
                                </p>
                                                                <hr>
                                <p>
                                    - مكان العمل : السادس من اكتوبر 
                                    - عدد ساعات العمل : 8
                                </p>
                                <a href="" class="btn btn-success">دخول صفحة الاعلان</a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="recruitment-company-ad col-md-4">
                    <a class="recruitment-company-share" href=""><i class="fas fa-share-alt"></i></a>
                    <div class="recruitment-company-content">
                        <div class="row">
                            <div class="recruitment-company-logo col-md-3">
                                <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                            </div>
                            <div class="recruitment-company-title col-md-9">
                                <h4>فني كهرباء وفني ميكانيكا</h4>
                                <h5>Trans business for trading</h5>
                                <p>مصر</p>
                                <p>مجال التوزيع</p>
                            </div>
                            <div class="recruitment-company-info">
                                <hr>
                                        <i class="far fa-clock"></i><span>10/10/2010</span>
                                        <i class="far fa-user"></i><span>0 مقدمي الطلب</span>
                                <hr>
                                <p class="recruitment-company-description">
                                    شركة ترانز للتوزيع وكيل سجائر مارلبورو تطلب فني كهرباء وفني ميكانيكا للعمل في الشركة
                                </p>
                                                                <hr>
                                <p>
                                    - مكان العمل : السادس من اكتوبر 
                                    - عدد ساعات العمل : 8
                                </p>
                                <a href="" class="btn btn-success">دخول صفحة الاعلان</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="recruitment-company-ad col-md-4">
                    <a class="recruitment-company-share" href=""><i class="fas fa-share-alt"></i></a>
                    <div class="recruitment-company-content">
                        <div class="row">
                            <div class="recruitment-company-logo col-md-3">
                                <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                            </div>
                            <div class="recruitment-company-title col-md-9">
                                <h4>فني كهرباء وفني ميكانيكا</h4>
                                <h5>Trans business for trading</h5>
                                <p>مصر</p>
                                <p>مجال التوزيع</p>
                            </div>
                            <div class="recruitment-company-info">
                                <hr>
                                        <i class="far fa-clock"></i><span>10/10/2010</span>
                                        <i class="far fa-user"></i><span>0 مقدمي الطلب</span>
                                <hr>
                                <p class="recruitment-company-description">
                                    شركة ترانز للتوزيع وكيل سجائر مارلبورو تطلب فني كهرباء وفني ميكانيكا للعمل في الشركة
                                </p>
                                                                <hr>
                                <p>
                                    - مكان العمل : السادس من اكتوبر 
                                    - عدد ساعات العمل : 8
                                </p>
                                <a href="" class="btn btn-success">دخول صفحة الاعلان</a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="recruitment-company-ad col-md-4">
                    <a class="recruitment-company-share" href=""><i class="fas fa-share-alt"></i></a>
                    <div class="recruitment-company-content">
                        <div class="row">
                            <div class="recruitment-company-logo col-md-3">
                                <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                            </div>
                            <div class="recruitment-company-title col-md-9">
                                <h4>فني كهرباء وفني ميكانيكا</h4>
                                <h5>Trans business for trading</h5>
                                <p>مصر</p>
                                <p>مجال التوزيع</p>
                            </div>
                            <div class="recruitment-company-info">
                                <hr>
                                        <i class="far fa-clock"></i><span>10/10/2010</span>
                                        <i class="far fa-user"></i><span>0 مقدمي الطلب</span>
                                <hr>
                                <p class="recruitment-company-description">
                                    شركة ترانز للتوزيع وكيل سجائر مارلبورو تطلب فني كهرباء وفني ميكانيكا للعمل في الشركة
                                </p>
                                                                <hr>
                                <p>
                                    - مكان العمل : السادس من اكتوبر 
                                    - عدد ساعات العمل : 8
                                </p>
                                <a href="" class="btn btn-success">دخول صفحة الاعلان</a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="recruitment-company-ad col-md-4">
                    <a class="recruitment-company-share" href=""><i class="fas fa-share-alt"></i></a>
                    <div class="recruitment-company-content">
                        <div class="row">
                            <div class="recruitment-company-logo col-md-3">
                                <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                            </div>
                            <div class="recruitment-company-title col-md-9">
                                <h4>فني كهرباء وفني ميكانيكا</h4>
                                <h5>Trans business for trading</h5>
                                <p>مصر</p>
                                <p>مجال التوزيع</p>
                            </div>
                            <div class="recruitment-company-info">
                                <hr>
                                        <i class="far fa-clock"></i><span>10/10/2010</span>
                                        <i class="far fa-user"></i><span>0 مقدمي الطلب</span>
                                <hr>
                                <p class="recruitment-company-description">
                                    شركة ترانز للتوزيع وكيل سجائر مارلبورو تطلب فني كهرباء وفني ميكانيكا للعمل في الشركة
                                </p>
                                                                <hr>
                                <p>
                                    - مكان العمل : السادس من اكتوبر 
                                    - عدد ساعات العمل : 8
                                </p>
                                <a href="" class="btn btn-success">دخول صفحة الاعلان</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="recruitment-company-ad col-md-4">
                    <a class="recruitment-company-share" href=""><i class="fas fa-share-alt"></i></a>
                    <div class="recruitment-company-content">
                        <div class="row">
                            <div class="recruitment-company-logo col-md-3">
                                <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                            </div>
                            <div class="recruitment-company-title col-md-9">
                                <h4>فني كهرباء وفني ميكانيكا</h4>
                                <h5>Trans business for trading</h5>
                                <p>مصر</p>
                                <p>مجال التوزيع</p>
                            </div>
                            <div class="recruitment-company-info">
                                <hr>
                                        <i class="far fa-clock"></i><span>10/10/2010</span>
                                        <i class="far fa-user"></i><span>0 مقدمي الطلب</span>
                                <hr>
                                <p class="recruitment-company-description">
                                    شركة ترانز للتوزيع وكيل سجائر مارلبورو تطلب فني كهرباء وفني ميكانيكا للعمل في الشركة
                                </p>
                                                                <hr>
                                <p>
                                    - مكان العمل : السادس من اكتوبر 
                                    - عدد ساعات العمل : 8
                                </p>
                                <a href="" class="btn btn-success">دخول صفحة الاعلان</a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="recruitment-company-ad col-md-4">
                    <a class="recruitment-company-share" href=""><i class="fas fa-share-alt"></i></a>
                    <div class="recruitment-company-content">
                        <div class="row">
                            <div class="recruitment-company-logo col-md-3">
                                <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                            </div>
                            <div class="recruitment-company-title col-md-9">
                                <h4>فني كهرباء وفني ميكانيكا</h4>
                                <h5>Trans business for trading</h5>
                                <p>مصر</p>
                                <p>مجال التوزيع</p>
                            </div>
                            <div class="recruitment-company-info">
                                <hr>
                                        <i class="far fa-clock"></i><span>10/10/2010</span>
                                        <i class="far fa-user"></i><span>0 مقدمي الطلب</span>
                                <hr>
                                <p class="recruitment-company-description">
                                    شركة ترانز للتوزيع وكيل سجائر مارلبورو تطلب فني كهرباء وفني ميكانيكا للعمل في الشركة
                                </p>
                                                                <hr>
                                <p>
                                    - مكان العمل : السادس من اكتوبر 
                                    - عدد ساعات العمل : 8
                                </p>
                                <a href="" class="btn btn-success">دخول صفحة الاعلان</a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="recruitment-company-ad col-md-4">
                    <a class="recruitment-company-share" href=""><i class="fas fa-share-alt"></i></a>
                    <div class="recruitment-company-content">
                        <div class="row">
                            <div class="recruitment-company-logo col-md-3">
                                <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                            </div>
                            <div class="recruitment-company-title col-md-9">
                                <h4>فني كهرباء وفني ميكانيكا</h4>
                                <h5>Trans business for trading</h5>
                                <p>مصر</p>
                                <p>مجال التوزيع</p>
                            </div>
                            <div class="recruitment-company-info">
                                <hr>
                                        <i class="far fa-clock"></i><span>10/10/2010</span>
                                        <i class="far fa-user"></i><span>0 مقدمي الطلب</span>
                                <hr>
                                <p class="recruitment-company-description">
                                    شركة ترانز للتوزيع وكيل سجائر مارلبورو تطلب فني كهرباء وفني ميكانيكا للعمل في الشركة
                                </p>
                                <hr>
                                <p>
                                    - مكان العمل : السادس من اكتوبر 
                                    - عدد ساعات العمل : 8
                                </p>
                                <a href="" class="btn btn-success">دخول صفحة الاعلان</a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </section>
        <!-- End Section Job Ads -->
    
        <!-- Section Bottom Part -->
        <section class="recruitment-companies-bottom-part">
            @foreach($middle_ad as $ad_middle)
                @foreach($ad_middle->ad_images as $admiddle_image)
                    <div class="business-owner-bottom-ad">
                        <a href=""><img src="{{asset('storage/ads_images/'.$admiddle_image->name.'')}}"></a>
                    </div>
                @endforeach
            
            @endforeach

             <h3 class="section-title">مميزات وفوائد لاصحاب شركات التوظيف</h3>
            <div class="row">
                @foreach($banners as $banner)
                <div class="col-md-4">
                    <div class="card" >
                        <img src="{{asset('storage/companies_images/'.$banner->features_right_img.'')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$banner->features_right_head}}</h5>
                            <p class="card-text">{{$banner->features_right_body}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" >
                        <img src="{{asset('storage/companies_images/'.$banner->features_middle_img.'')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$banner->features_middle_head}}</h5>
                            <p class="card-text">{{$banner->features_middle_body}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" >
                        <img src="{{asset('storage/companies_images/'.$banner->features_left_img.'')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$banner->features_left_head}}</h5>
                            <p class="card-text">{{$banner->features_left_body}}</p>
                        </div>
                    </div>
                </div>

                
                @endforeach
                <p class="recruitment_company_call_to_action">سجل الان مجانا وبدون رسوم</p>
            </div>

            <section class="recruitment_company_features container">
                <div class="row">
                    <div class="info-item-right col-md-8" style="background:url({{asset('storage/companies_images/'.$ruleImage->rules_img.'')}})">
                        <div class="header-content">
                            <h5>شروط تسجيل حساب شركات التوظيف</h5>
                            @foreach($rules as $rule)
                            <p>{{$rule->rule}}</p>
                            @endforeach
                        </div>
                    </div>

                    <div class="info-item-left col-md-4">
                        <a  href=""><img src="{{asset('assets/pages/img/ksa.jpg')}}"></a>
                    </div>
                </div>
            </section>
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
            @foreach($last_ad as $ad)
                @foreach($ad->ad_images as $ad_image)
                    <img src="{{asset('storage/ads_images/'.$ad_image->name.'')}}">
                @endforeach
            
            @endforeach
        </section>

    </div>
</div>

@endsection