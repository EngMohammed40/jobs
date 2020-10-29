@extends('user.layouts.pages.main')

@section('styles')
    <style>
        .menu a{
            color:#fff !important;
        }
        .banner{
            background: url('{{asset('banner.jpg')}}');
            height: 300px;
            color: #fff;
            background-size: cover ;
            background-position: center ;

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
        .borderaize{
            border: solid 2px #000;
            padding: 20px;
        }
        .mails{
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            width: 60%;
            padding-top: 10px;
        }
        .inputalize{
            width: 80%;
            margin: auto;
            padding: 30px;
            text-align: right;
        }
        .buttonalzie{
            background: #0000ff;
            color: #fff;
            padding: 10px 20px;
            position: absolute;
            left: 10%;
            top: 27.5%;

        }
    </style>
@endsection

@section('content')
    @include('user.includes.pages.home.sidebar')
    <div class="banner pt-5">
        <div class="overlay"></div>
        <div class="content text-center no-back">
            <div class="pt-5 pr-4">
                <h1>وظائف في السعودية</h1>
                <p>ابحث في أكثر من 25000 وظيفة</p>
                <div class="header-search">
                    <input placeholder="المسمي الوظيفي , الشركة أو الكلمات الرئيسية" class="form-control inputalize" type="text">
                    <button class="btn buttonalzie"><i class="fa fa-search"></i> </button>
                </div>
            </div>

        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row pt-4">
                <div class="col-md-12 text-center">
                    <h2>استكشاف الوظائف حسب الفئة</h2>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="borderaize">
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <div class="d-flex">
                                    <div class="text">
                                        <p><strong>وظائف مهندسين </strong></p>
                                        <p>5000 وظيفة شاغرة</p>
                                    </div>
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('tes2.PNG')}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex">
                                    <div class="text">
                                        <p><strong>وظائف مهندسين </strong></p>
                                        <p>5000 وظيفة شاغرة</p>
                                    </div>
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('tes2.PNG')}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex">
                                    <div class="text">
                                        <p><strong>وظائف مهندسين </strong></p>
                                        <p>5000 وظيفة شاغرة</p>
                                    </div>
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('tes2.PNG')}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex">
                                    <div class="text">
                                        <p><strong>وظائف مهندسين </strong></p>
                                        <p>5000 وظيفة شاغرة</p>
                                    </div>
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('tes2.PNG')}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex">
                                    <div class="text">
                                        <p><strong>وظائف مهندسين </strong></p>
                                        <p>5000 وظيفة شاغرة</p>
                                    </div>
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('tes2.PNG')}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex">
                                    <div class="text">
                                        <p><strong>وظائف مهندسين </strong></p>
                                        <p>5000 وظيفة شاغرة</p>
                                    </div>
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('tes2.PNG')}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex">
                                    <div class="text">
                                        <p><strong>وظائف مهندسين </strong></p>
                                        <p>5000 وظيفة شاغرة</p>
                                    </div>
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('tes2.PNG')}}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex">
                                    <div class="text">
                                        <p><strong>وظائف مهندسين </strong></p>
                                        <p>5000 وظيفة شاغرة</p>
                                    </div>
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('tes2.PNG')}}" />
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
            <div class="row pt-4">
                <div class="col-md-12 text-center">
                    <h2>استكشاف الوظائف حسب المدينة</h2>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="borderaize">
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="text">
                                        <p><strong>وظائف الرياض </strong></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="text">
                                        <p><strong>وظائف الرياض </strong></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="text">
                                        <p><strong>وظائف الرياض </strong></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="text">
                                        <p><strong>وظائف الرياض </strong></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="text">
                                        <p><strong>وظائف الرياض </strong></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="text">
                                        <p><strong>وظائف الرياض </strong></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="text">
                                        <p><strong>وظائف الرياض </strong></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex justify-content-center">
                                    <div class="text">
                                        <p><strong>وظائف الرياض </strong></p>
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
            <div class="row pt-4">
                <div class="col-md-12 text-center">
                    <h2>استكشاف الوظائف حسب الناشر</h2>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="borderaize">
                        <div class="row">
                            <div class="col-md-3 mt-3">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('jz.PNG')}}" />
                                    </div>
                                    <div class="text mt-2">
                                        <p><strong>وظائف الرياض </strong></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('jz.PNG')}}" />
                                    </div>
                                    <div class="text mt-2">
                                        <p><strong>وظائف الرياض </strong></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('jz.PNG')}}" />
                                    </div>
                                    <div class="text mt-2">
                                        <p><strong>وظائف الرياض </strong></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('jz.PNG')}}" />
                                    </div>
                                    <div class="text mt-2">
                                        <p><strong>وظائف الرياض </strong></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('jz.PNG')}}" />
                                    </div>
                                    <div class="text mt-2">
                                        <p><strong>وظائف الرياض </strong></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('jz.PNG')}}" />
                                    </div>
                                    <div class="text mt-2">
                                        <p><strong>وظائف الرياض </strong></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('jz.PNG')}}" />
                                    </div>
                                    <div class="text mt-2">
                                        <p><strong>وظائف الرياض </strong></p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 mt-3">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="image">
                                        <img class="img-fluid" src="{{asset('jz.PNG')}}" />
                                    </div>
                                    <div class="text mt-2">
                                        <p><strong>وظائف الرياض </strong></p>
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
