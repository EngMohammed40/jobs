@extends('user.layouts.pages.main')

@section('styles')
    <style>
        .menu a{
            color:#fff !important;
        }
        .banner{
            background: #1f96aa;
            height: 300px;
            color: #fff;

        }
        .no-back{
            background:none;
        }
        .free{
            background: #7092bf;
            width: 30%;
            float: right;
            padding: 15px;
            font-size: 25px;
            color: #fff;
        }
        .mail{
            font-size: 25px;
        }
        .borderaize{
            border-bottom: solid 1px #1f96aa;
            width: 25%;
            padding-bottom: 15px;
        }
        .mails{
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            width: 60%;
            padding-top: 10px;
        }
    </style>
@endsection

@section('content')
    @include('user.includes.pages.home.sidebar')
    <div class="banner pt-5">
        <div class="content text-center no-back">
            <div class="pt-5 pr-4">
                <h1 class="d-inline-block">القائمة البريدية</h1>
                <i class="far fa-envelope-open ml-4" style="font-size: 30px"></i>
            </div>

        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row pt-4">
                <div class="col text-right">
                    <h2>اشترك بالقائمة البريدية</h2>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-12 text-center">
                    <h3 class="borderaize m-auto">اختر أحد الخيارات التالية</h3>
                </div>


            </div>
            <div class="mails">
                <div class="mail">
                    <label class="mr-5" for="jobs">أحدث الوظائف</label>
                    <input type="checkbox" id="jobs">
                </div>
                <div class="mail">
                    <label class="mr-5" for="loops">أحدث الدورات</label>
                    <input type="checkbox" id="loops">
                </div>
                <div class="mail">
                    <label class="mr-5" for="articles">أحدث المقالات</label>
                    <input type="checkbox" id="articles">
                </div>
                <div class="mail">
                    <label class="mr-5" for="companies">اعلاانات شركات التوظيف</label>
                    <input type="checkbox" id="companies">
                </div>
                <div class="mail">
                    <label class="mr-5" for="owner">اعلانات اصحاب العمل</label>
                    <input type="checkbox" id="owner">
                </div>
            </div>
            <div class="row pt-4">
                <div class="col text-center">
                    <label>عزيزي المستخدم أدخل البريد الالكتروني </label>
                    <input type="text" class="form-control w-50 m-auto" style="border-color: #1f96aa;color: #1f96aa;">
                </div>
            </div>
            <div class="row pt-4">
                <div class="col text-center">
                    <button class="btn w-50" style="background: #1f96aa;color: #fff;">اشترك</button>
                </div>
            </div>
        </div>
    </div>


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
