@extends('user.layouts.pages.main')

@section('styles')
    <style>
        .justify-content-evenly{
            justify-content: space-evenly;
        }
        .menu a{
            color:#fff !important;
        }
        .banner{
            background: #880015;
            height: 300px;
            color: #fff;

        }
        .no-back{
            background:none;
        }
        .text{
            margin-right: 20px;
        }
        .mail{
            font-size: 25px;
        }
        .socialize span:last-of-type{
            background: #007eb2;
            padding: 10px 25px;
        }
        .socialize span:nth-child(2){
            background: #577ace;
            padding: 10px 25px;
        }
        .socialize span:first-of-type{
            background: #5dc8ff;
            padding: 10px 25px;
        }
        .mails{
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            width: 60%;
            padding-top: 10px;
        }
        .site{
            background: #fff;
            width: 50%;
            margin: auto;
            padding: 15px;
        }
        .fa-star{
            color: darkgoldenrod;
        }
        .backgroundize{
            background: #fff;
            color: #000;
            padding: 10px 20px;
        }
    </style>
@endsection

@section('content')
    @include('user.includes.pages.home.sidebar')
    <div class="banner pt-5">
        <div class="overlay"></div>
        <div class="content text-center no-back">
            <div class="row" dir="rtl">
                <div class="col-md-8">
                    <div class="upper d-flex justify-content-around">
                        <img class="img-fluid" src="{{asset('com.PNG')}}" >
                        <h1 class="mt-5">شركة مجموعة مسلماني </h1>
                    </div>
                    <div class="lower d-flex justify-content-evenly py-5">
                        <div class="stars backgroundize">
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                        </div>
                        <div class="jobs_number backgroundize">
                            عدد الوظائف : 5
                        </div>
                        <div class="applicants backgroundize">
                            عدد المتقدمين : 25
                        </div>
                        <div class="seen backgroundize">
                            عدد الذين شاهدوا الشركة : 50
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" class="btn-block site">موقع الشركة</a>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="w-50 m-auto">
                                <div class="d-flex justify-content-between socialize">
                                    <span><i class="fab fa-twitter"></i> </span>

                                    <span><i class="fab fa-facebook-f"></i> </span>
                                    <span><i class="fab fa-linkedin-in"></i> </span>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="w-50 m-auto">
                                <div class="d-flex justify-content-between socialize">
                                    <span class="w-100"><i class="fas fa-plus"></i> تابعنا</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="row py-3">
                <div class="col text-right">
                    <p><strong>القطاع</strong></p>
                    <p>المساعدات الانسانية</p>
                </div>
                <div class="col text-right">
                    <p><strong>القطاع</strong></p>
                    <p>المساعدات الانسانية</p>
                </div>
                <div class="col text-right">
                    <p><strong>القطاع</strong></p>
                    <p>المساعدات الانسانية</p>
                </div>
                <div class="col text-right">
                    <p><strong>القطاع</strong></p>
                    <p>المساعدات الانسانية</p>
                </div>
                <div class="col text-right">
                    <p><strong>القطاع</strong></p>
                    <p>المساعدات الانسانية</p>
                </div>
            </div>
        </div>
    </div>


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header text-right" style="background: #880015;color: #fff">
                        <h3>وظائف الشركة</h3>
                    </div>
                    <div class="card-body text-right">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#" style="background: #880015" class="btn text-white w-100"> التفاصيل</a>
                                <button style="background: #880015" class="btn text-white text-white mt-2 w-100">منذ ثلاثة أيام</button>
                                <button style="background: #880015" class="btn text-white text-white mt-2 w-100">مازال التقديم متاح</button>
                            </div>
                            <div class="col-md-9">
                                <div class="d-flex">
                                    <div class="text">
                                        <h4><strong>مدير الادارة التجارية</strong></h4>
                                        <div>
                                            شركة التفاني للاتصالات والتقنية - دوام كامل - طرابلس
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <span style="margin: 10px"><i class="fas fa-envelope"></i> ارسال الي صديق</span>
                                            <span style="margin: 10px"><i class="fas fa-heart"></i>   حفظ</span>
                                            <span style="margin: 10px"><i class="fas fa-share-alt"></i>   مشاركة</span>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('taf.PNG')}}" />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-3">
                                <a href="#" style="background: #880015" class="btn text-white w-100"> التفاصيل</a>
                                <button style="background: #880015" class="btn text-white text-white mt-2 w-100">منذ ثلاثة أيام</button>
                                <button style="background: #880015" class="btn text-white text-white mt-2 w-100">مازال التقديم متاح</button>
                            </div>
                            <div class="col-md-9">
                                <div class="d-flex">
                                    <div class="text">
                                        <h4><strong>مدير الادارة التجارية</strong></h4>
                                        <div>
                                            شركة التفاني للاتصالات والتقنية - دوام كامل - طرابلس
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <span style="margin: 10px"><i class="fas fa-envelope"></i> ارسال الي صديق</span>
                                            <span style="margin: 10px"><i class="fas fa-heart"></i>   حفظ</span>
                                            <span style="margin: 10px"><i class="fas fa-share-alt"></i>   مشاركة</span>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('taf.PNG')}}" />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-3">
                                <a href="#" style="background: #880015" class="btn text-white w-100"> التفاصيل</a>
                                <button style="background: #880015" class="btn text-white text-white mt-2 w-100">منذ ثلاثة أيام</button>
                                <button style="background: #880015" class="btn text-white text-white mt-2 w-100">مازال التقديم متاح</button>
                            </div>
                            <div class="col-md-9">
                                <div class="d-flex">
                                    <div class="text">
                                        <h4><strong>مدير الادارة التجارية</strong></h4>
                                        <div>
                                            شركة التفاني للاتصالات والتقنية - دوام كامل - طرابلس
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <span style="margin: 10px"><i class="fas fa-envelope"></i> ارسال الي صديق</span>
                                            <span style="margin: 10px"><i class="fas fa-heart"></i>   حفظ</span>
                                            <span style="margin: 10px"><i class="fas fa-share-alt"></i>   مشاركة</span>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('taf.PNG')}}" />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-3">
                                <a href="#" style="background: #880015" class="btn text-white w-100"> التفاصيل</a>
                                <button style="background: #880015" class="btn text-white text-white mt-2 w-100">منذ ثلاثة أيام</button>
                                <button style="background: #880015" class="btn text-white text-white mt-2 w-100">مازال التقديم متاح</button>
                            </div>
                            <div class="col-md-9">
                                <div class="d-flex">
                                    <div class="text">
                                        <h4><strong>مدير الادارة التجارية</strong></h4>
                                        <div>
                                            شركة التفاني للاتصالات والتقنية - دوام كامل - طرابلس
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <span style="margin: 10px"><i class="fas fa-envelope"></i> ارسال الي صديق</span>
                                            <span style="margin: 10px"><i class="fas fa-heart"></i>   حفظ</span>
                                            <span style="margin: 10px"><i class="fas fa-share-alt"></i>   مشاركة</span>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('taf.PNG')}}" />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-3">
                                <a href="#" style="background: #880015" class="btn text-white w-100"> التفاصيل</a>
                                <button style="background: #880015" class="btn text-white text-white mt-2 w-100">منذ ثلاثة أيام</button>
                                <button style="background: #880015" class="btn text-white text-white mt-2 w-100">مازال التقديم متاح</button>
                            </div>
                            <div class="col-md-9">
                                <div class="d-flex">
                                    <div class="text">
                                        <h4><strong>مدير الادارة التجارية</strong></h4>
                                        <div>
                                            شركة التفاني للاتصالات والتقنية - دوام كامل - طرابلس
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <span style="margin: 10px"><i class="fas fa-envelope"></i> ارسال الي صديق</span>
                                            <span style="margin: 10px"><i class="fas fa-heart"></i>   حفظ</span>
                                            <span style="margin: 10px"><i class="fas fa-share-alt"></i>   مشاركة</span>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('taf.PNG')}}" />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-3">
                                <a href="#" style="background: #880015" class="btn text-white w-100"> التفاصيل</a>
                                <button style="background: #880015" class="btn text-white text-white mt-2 w-100">منذ ثلاثة أيام</button>
                                <button style="background: #880015" class="btn text-white text-white mt-2 w-100">مازال التقديم متاح</button>
                            </div>
                            <div class="col-md-9">
                                <div class="d-flex">
                                    <div class="text">
                                        <h4><strong>مدير الادارة التجارية</strong></h4>
                                        <div>
                                            شركة التفاني للاتصالات والتقنية - دوام كامل - طرابلس
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <span style="margin: 10px"><i class="fas fa-envelope"></i> ارسال الي صديق</span>
                                            <span style="margin: 10px"><i class="fas fa-heart"></i>   حفظ</span>
                                            <span style="margin: 10px"><i class="fas fa-share-alt"></i>   مشاركة</span>
                                        </div>
                                    </div>
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('taf.PNG')}}" />
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="about">
                    <div class="card">
                        <div class="card-header text-right" style="background: #880015;color: #fff">
                            <h3>نبذة عن الشركة</h3>
                        </div>
                        <div class="card-body text-right" style="height: 300px;overflow-y: scroll;">
                            <p>
                                نبذة عن الشركة نبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركةنبذة عن الشركة
                            </p>
                        </div>
                    </div>
                </div>

                <div class="share mt-3">
                    <div class="card">
                        <div class="card-header text-right" style="background: #880015;color: #fff">
                            <h3>شارك صفحة الشركة</h3>
                        </div>
                        <div class="card-body text-right">
                            <div class="d-flex justify-content-between socialize text-white">
                                <span><i class="fab fa-twitter"></i> </span>
                                <span><i class="fab fa-facebook-f"></i> </span>
                                <span><i class="fab fa-linkedin-in"></i> </span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="share mt-3">
                    <div class="card">
                        <div class="card-header text-right" style="background: #880015;color: #fff">
                            <h3>قيم الشركة</h3>
                        </div>
                        <div class="card-body text-right">
                            <div class="form">
                                <form>
                                    <input type="text" class="form-control" placeholder="Name" />
                                    <input type="email" class="form-control mt-2" placeholder="Email" />
                                </form>
                            </div>
                            <div class="d-flex justify-content-evenly py-5">
                                <div class="submit">
                                    <button style="background: darkgoldenrod;color: #fff;padding: 10px 31px;" type="submit" class="btn">تقييم</button>
                                </div>
                                <div class="stars backgroundize">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    {{--  banner  --}}
    <div class="content mt-4">
        <div class="container">
            <div class="row">
                <div class="col-text-center">
                    <img class="img-fluid" src="{{asset('banner.jpg')}}" alt="test" />
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
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
        </div>
    </div>

    {{-- articles --}}
    <div class="content mt-4">
        <div class="container">
            <div class="bottom-part">
                <h6 class="content-header">مقالات ذات صلة</h6>

                <div class="articles">
                    <div class="row">
                        @foreach($articles as $article)
                            <div class="article col-lg-3">
                                <h5>{{$article->title}}</h5>
                                <img class="img-fluid" src="{{asset('assets/pages/img/ksa.jpg')}}">
                                <p class="article-title">{{$article->link}}</p>
                                <p class="article-content">{{$article->description}}</p>

                            </div>
                    @endforeach
                    <!-- <div class="article col-lg-1">-->
                        <!--     <h5>استراتيجيات البحث عن عمل</h5>-->
                    <!--     <img src="{{asset('assets/pages/img/ksa.jpg')}}">-->
                        <!--     <p class="article-title">لماذا لا يتواصل معاك صاحب العمل؟</p>-->
                        <!--     <p class="article-content">عادة ما يتساءل الباحثين عن عمل عن الاسباب التي قد تدفع صاحب العمل لعدم التواصل معهم.</p>-->

                        <!--</div>-->

                        <!-- <div class="article col-lg-1">-->
                        <!--     <h5>استراتيجيات البحث عن عمل</h5>-->
                    <!--     <img src="{{asset('assets/pages/img/ksa.jpg')}}">-->
                        <!--     <p class="article-title">لماذا لا يتواصل معاك صاحب العمل؟</p>-->
                        <!--     <p class="article-content">عادة ما يتساءل الباحثين عن عمل عن الاسباب التي قد تدفع صاحب العمل لعدم التواصل معهم.</p>-->

                        <!--</div>-->

                        <!-- <div class="article col-lg-1">-->
                        <!--     <h5>استراتيجيات البحث عن عمل</h5>-->
                    <!--     <img src="{{asset('assets/pages/img/ksa.jpg')}}">-->
                        <!--     <p class="article-title">لماذا لا يتواصل معاك صاحب العمل؟</p>-->
                        <!--     <p class="article-content">عادة ما يتساءل الباحثين عن عمل عن الاسباب التي قد تدفع صاحب العمل لعدم التواصل معهم.</p>-->

                        <!--</div>-->

                        <!-- <div class="article col-lg-1">-->
                        <!--     <h5>استراتيجيات البحث عن عمل</h5>-->
                    <!--     <img src="{{asset('assets/pages/img/ksa.jpg')}}">-->
                        <!--     <p class="article-title">لماذا لا يتواصل معاك صاحب العمل؟</p>-->
                        <!--     <p class="article-content">عادة ما يتساءل الباحثين عن عمل عن الاسباب التي قد تدفع صاحب العمل لعدم التواصل معهم.</p>-->

                        <!--</div>-->

                        <!-- <div class="article col-lg-1">-->
                        <!--     <h5>استراتيجيات البحث عن عمل</h5>-->
                    <!--     <img src="{{asset('assets/pages/img/ksa.jpg')}}">-->
                        <!--     <p class="article-title">لماذا لا يتواصل معاك صاحب العمل؟</p>-->
                        <!--     <p class="article-content">عادة ما يتساءل الباحثين عن عمل عن الاسباب التي قد تدفع صاحب العمل لعدم التواصل معهم.</p>-->

                        <!--</div>-->

                    </div>


                </div>


            </div>
        </div>
    </div>
@endsection
