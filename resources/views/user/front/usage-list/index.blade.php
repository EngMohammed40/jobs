@extends('user.layouts.pages.main')

@section('styles')
    <style>
        .menu a{
            color:#fff !important;
        }
        .banner{
            background: url("{{asset('storage/other_websites_images/'.$upperBanner->image.'')}}");
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
    </style>
@endsection

@section('content')
    @include('user.includes.pages.home.sidebar')
    <div class="banner">
        <div class="content text-right no-back">
            <h1 class="pr-3 pt-2">{{$upperBanner->head}}</h1>
            <h3 class="pr-3 pt-2">{{$upperBanner->desc}}</h3>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row pt-4">
                <div class="col text-right">
                    <p class="free">مواقع مجانية</p>
                </div>
            </div>
            <div class="row py-2" dir="rtl">
                @foreach( $freeWebsites as $freeWebsite )
                    <div class="col-md-4 mt-3">
                        <a href="{{$freeWebsite->link}}">
                            <img class="img-fluid" src="{{asset('storage/other_websites_images/'.$freeWebsite->image.'')}}" alt="test" />
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="row pt-4">
                <div class="col text-right">
                    <p class="free">مواقع مدفوعة</p>
                </div>
            </div>
            <div class="row py-2" dir="rtl">
                @foreach( $paidWebsites as $paidWebsite )
                    <div class="col-md-4 mt-3">
                        <a href="{{$paidWebsit->link}}">
                            <img class="img-fluid" src="{{asset('storage/other_websites_images/'.$paidWebsite->image.'')}}" alt="test" />
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="content mt-4">
        <div class="container">
            <div class="row">
                <div class="col-text-center">
                    <img class="img-fluid" src="{{asset('storage/other_websites_images/'.$lowerBanner->image.'')}}" alt="test" />
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
