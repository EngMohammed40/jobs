@extends('user.layouts.pages.main')

@section('styles')
    <style>
        .menu a{
            color:#fff !important;
        }
        .banner{
            background: url("{{asset('test.jpg')}}");
            height: 300px;
            background-size: cover;
            background-position: center;
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
        .icons{
            font-size: 30px;
        }
        .item{
            background: #094a8e;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
@endsection

@section('content')
    @include('user.includes.pages.home.sidebar')
    <div class="banner">
        <div class="content text-right no-back">
            <div class="float-right pt-5 pr-4">
                <h1>قائمة الاستخدام</h1>
            </div>
            <div class="float-left icons pt-5 pl-4">
                <i class="fab fa-facebook-f mr-2"></i>
                <i class="fab fa-twitter mr-2"></i>
                <i class="fab fa-instagram mr-2"></i>
                <i class="fab fa-youtube mr-2"></i>
                <span>تواصل معنا</span>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row pt-4">
                <div class="col-md-4 offset-md-8">
                    <div class="item">
                        <h2>الاحصائات</h2>
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-4 offset-md-8">
                    <div class="item">
                        <h2>كيفية الاستخدام</h2>
                    </div>
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-4 offset-md-8">
                    <div class="item">
                        <h2>الاهداف</h2>
                    </div>
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
