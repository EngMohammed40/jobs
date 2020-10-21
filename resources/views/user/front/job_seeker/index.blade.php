@extends('user.layouts.pages.main')

@section('content')

@include('user.includes.pages.job_seeker.header')
<div class="job_seeker_container">
    <div class=" container">
        <p class="mini-title text-center">
            تحتوي هذه الصفحة علي طلبات توظيف مقدمة من باحثين عن وظيفة املا في التواصل مع الشركات والحصول علي وظيفة في اقرب وقت
        </p>
        <div class="row">
            <div class="col-md-3">
                <select class="custom-select">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="custom-select">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="custom-select">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-2">
                <select class="custom-select">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="custom-select">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>

        <!-- start Section Job Seekers -->
        <section class="job-seekers">
            <h4>سير الباحثين عن عمل</h4>
            <div class="row">
                <!--<div class="job-seeker col-md-4" style="border: 5px solid green">-->
                <!--    <div class="row">-->
                <!--        <div class="seeker-info col-md-4" style="border-left: 5px solid green">-->
                <!--            <img src="{{asset('assets/pages/img/ksa.jpg')}}">-->
                <!--            <div class="stars">-->
                <!--                <i class="website_rating fas fa-star" data-rating='1'></i>-->
                <!--                <i class="website_rating fas fa-star" data-rating='2'></i>-->
                <!--                <i class="website_rating fas fa-star" data-rating='3'></i>-->
                <!--                <i class="website_rating fas fa-star" data-rating='4'></i>-->
                <!--                <i class="website_rating fas fa-star" data-rating='5'></i>-->
                <!--            </div>-->
                <!--            <a href="#" class="btn btn-success">اضف للمفضلة</a>-->
                <!--            <a href="#" class="btn btn-danger">معلومات اكثر</a>-->
                <!--        </div>-->
                <!--        <div class="seeker-titles col-md-6">-->
                <!--            <h6>كاشير ومساعد محاسب عام</h6>-->
                <!--            <p class="name">محمد فتحي محمد</p>-->
                <!--            <p class="experience">خبرة اربع سنوات</p>-->
                <!--            <p class="price">الاجر المتوقع 3000 ج م</p>-->
                <!--            <p class="place">القاهرة - مصر</p> <span class="seeker-date"><i class="fas fa-calendar-week"></i>منذ 3 ايام</span>-->
                <!--            <p class="description">اتطلع للعمل في اي مجل وانا في امس الحاجة الي العمل والعمل في اي مكان واي منطقة</p>-->
                <!--        </div>-->
                <!--        <div class="seeker-btns col-md-2">-->
                <!--            <div class="seeker-cat" style="background:green">دوام جزئي</div>-->
                <!--            <a class="seeker-share" href=""><i class="fas fa-phone-alt"></i></a>-->
                <!--            <a class="seeker-share" href=""><i class="fas fa-envelope"></i></a>-->
                <!--            <a class="seeker-share" href=""><i class="fas fa-comment"></i></a>-->
                <!--            <a class="seeker-share" href=""><i class="fas fa-share-alt"></i></a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="job-seeker col-md-4" style="border: 5px solid green">-->
                <!--    <div class="row">-->
                <!--        <div class="seeker-info col-md-4" style="border-left: 5px solid green">-->
                <!--            <img src="{{asset('assets/pages/img/ksa.jpg')}}">-->
                <!--            <div class="stars">-->
                <!--                <i class="website_rating fas fa-star" data-rating='1'></i>-->
                <!--                <i class="website_rating fas fa-star" data-rating='2'></i>-->
                <!--                <i class="website_rating fas fa-star" data-rating='3'></i>-->
                <!--                <i class="website_rating fas fa-star" data-rating='4'></i>-->
                <!--                <i class="website_rating fas fa-star" data-rating='5'></i>-->
                <!--            </div>-->
                <!--            <a href="#" class="btn btn-success">اضف للمفضلة</a>-->
                <!--            <a href="#" class="btn btn-danger">معلومات اكثر</a>-->
                <!--        </div>-->
                <!--        <div class="seeker-titles col-md-6">-->
                <!--            <h6>كاشير ومساعد محاسب عام</h6>-->
                <!--            <p class="name">محمد فتحي محمد</p>-->
                <!--            <p class="experience">خبرة اربع سنوات</p>-->
                <!--            <p class="price">الاجر المتوقع 3000 ج م</p>-->
                <!--            <p class="place">القاهرة - مصر</p> <span class="seeker-date"><i class="fas fa-calendar-week"></i>منذ 3 ايام</span>-->
                <!--            <p class="description">اتطلع للعمل في اي مجل وانا في امس الحاجة الي العمل والعمل في اي مكان واي منطقة</p>-->
                <!--        </div>-->
                <!--        <div class="seeker-btns col-md-2">-->
                <!--            <div class="seeker-cat" style="background:green">دوام جزئي</div>-->
                <!--            <a class="seeker-share" href=""><i class="fas fa-phone-alt"></i></a>-->
                <!--            <a class="seeker-share" href=""><i class="fas fa-envelope"></i></a>-->
                <!--            <a class="seeker-share" href=""><i class="fas fa-comment"></i></a>-->
                <!--            <a class="seeker-share" href=""><i class="fas fa-share-alt"></i></a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                @foreach($job_seekers as $job_seeker)
                <div class="job-seeker col-md-4" style="border: 5px solid green">
                    <div class="row">
                        <div class="seeker-info col-md-4" style="border-left: 5px solid green">
                            <img src="{{asset('assets/pages/img/ksa.jpg')}}">
                            <div class="stars">
                                <i class="website_rating fas fa-star" data-rating='1'></i>
                                <i class="website_rating fas fa-star" data-rating='2'></i>
                                <i class="website_rating fas fa-star" data-rating='3'></i>
                                <i class="website_rating fas fa-star" data-rating='4'></i>
                                <i class="website_rating fas fa-star" data-rating='5'></i>
                            </div>
                            <a href="#" class="btn btn-success">اضف للمفضلة</a>
                            <a href="#" class="btn btn-danger">معلومات اكثر</a>
                        </div>
                        <div class="seeker-titles col-md-6">
                            <h6>كاشير ومساعد محاسب عام</h6>
                            <p class="name">{{$job_seeker->full_name}}</p>
                            <p class="experience">خبرة اربع سنوات</p>
                            <p class="price">الاجر المتوقع {{$job_seeker->min_salary}} ج م</p>
                            <p class="place">{{$job_seeker->city->name}} - {{$job_seeker->country->name}}</p> <span class="seeker-date"><i class="fas fa-calendar-week"></i>منذ 3 ايام</span>
                            <p class="description">اتطلع للعمل في اي مجل وانا في امس الحاجة الي العمل والعمل في اي مكان واي منطقة</p>
                        </div>
                        <div class="seeker-btns col-md-2">
                            <div class="seeker-cat" style="background:green">{{$job_seeker->job_type}}</div>
                            <a class="seeker-share" href=""><i class="fas fa-phone-alt"></i></a>
                            <a class="seeker-share" href=""><i class="fas fa-envelope"></i></a>
                            <a class="seeker-share" href=""><i class="fas fa-comment"></i></a>
                            <a class="seeker-share" href=""><i class="fas fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        <!-- End Section Job Seekers -->

        <!-- Strat Filters -->
        <section class="job-seekers-filter">
            <h4>وظائف حسب المجال</h4>
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
        <!-- End Filters -->

        <!-- Start ads One -->
        <section class="seeker-ads-one">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('assets/pages/img/hero.jpg')}}">
                </div>
                <div class="col-md-6">
                    <img src="{{asset('assets/pages/img/hero.jpg')}}">
                </div>
            </div>
        </section>
        <!-- End Ads One -->

        <!-- Start Advertiement -->
        <h4>علن عن نفسك</h4>
        <section class="seeker-advs">
                <div class="row">
                    <div class="seeker-adv col-md-4">
                        <div class="icon">
                            <i class="fas fa-edit"></i>
                        </div>
                        <h5> اكتب سيرتك الذاتية باحترافية  </h5>
                        <p>امكانية البحث في السيرة الذاتية في الموقع بكل سهولةمع امكانية التواصل بشكل مباشر مع المعلنين</p>
                        <a href="" class="btn btn-success">اكتب سيرتك الذاتية</a>
                    </div>

                    <div class="seeker-adv col-md-4">
                        <div class="icon">
                            <i class="fas fa-paperclip"></i>
                        </div>
                        <h5>حدث سيرتك الذاتية باستمرار </h5>
                        <p>امكانية نشر وظائفك المطلوبة عدد غير محدود وفي اي وقت وبالمجان بدون مقابل او رسوم مع التحكم بطرق التواصل</p>
                        <a href="" class="btn btn-info">حسابي</a>
                    </div>

                    <div class="seeker-adv col-md-4">
                        <div class="icon">
                            <i class="fas fa-poll-h"></i>
                        </div>
                        <h5> ابرز سيرتك الذاتية بعناية فائقة </h5>
                        <p>امتلك حساب مجاني دون قيد او شرط وتحكم بكل بياناتك ومعلوماتك مع امكانية التعديل والحذف</p>
                        <a href="" class="btn btn-danger">معرفة المزيد</a>
                    </div>
                </div>
        </div>
        <!-- End Advertiement -->

        <!-- Start Conditions -->
        <div class="conditions-container container">
            <div class="row">
                <div class="col-md-9">
                    <div class="job_seeker header" style="background:url({{asset('assets/pages/img/hero.jpg')}})">
                        <div class="header-content">
                            <h5>شروط تسجيل حساب الافراد</h5>
                            <ul>
                                <li>اكتب البيانات والمعلومات بشكل دقيق يمكنك تحديد م يراه الاخرين عنك</li>
                                <li>اكتب البيانات والمعلومات بشكل دقيق يمكنك تحديد م يراه الاخرين عنك</li>
                                <li>اكتب البيانات والمعلومات بشكل دقيق يمكنك تحديد م يراه الاخرين عنك</li>
                                <li>اكتب البيانات والمعلومات بشكل دقيق يمكنك تحديد م يراه الاخرين عنك</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <img src="{{asset('assets/pages/img/ksa.jpg')}}">
                </div>
            </div>
        </div>
        <!-- End Conditions -->

        <!-- Start Sign Up -->
        <section class="seeker-sign-up">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#" class="sign-up btn btn-info">تسجيل حساب للباحثين عن عمل</a>
                    </div>

                    <div class="col-md-8">
                        <p class="caution">ملحوظة هامة: وظايف نت ليست شركة توظيف وانما موقع للاعلان عن وظائف خالية متاحةيوميا في اغلب الشركات في الشرق الاوسط فنرجو توخي الحذر خاصة عند دفع اي مبالغ او فيزا او عمولات والموقع غير مسئول عن اي معاملات تحدث من خلال الوظائف المعلنة </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Sign Up -->

        <!-- Start Bottom Ad -->
        <section class="seeker-bottom-ad">
            <div class="container">
                <img src="{{asset('assets/pages/img/hero.jpg')}}">
            </div>
        </section>
        <!-- End Bottom Ad -->
    </div>
</div>


@endsection