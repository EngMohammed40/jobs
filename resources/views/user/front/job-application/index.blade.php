<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/pages/css/job-app.css')}}">
    <title>التقدم لوظيفة</title>
</head>

<body>
    <header style="background: url('{{asset('assets/pages/img/header.jpg')}}');background-size: cover;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row rtl py-4">
                <div class="col-sm-12 text-right">
                    <div class="banner">

                        <div class="advice">
                            <h4>نصائح هامة</h4>
                            <ul class="py-3">
                                <li>احذر اعطاء معلوماتك المالية لاي طرف الموقع غير مسؤول عن اي تعاملات مالية او خلافه
                                </li>
                                <li>اكتب رسالتك بطريقة منظمة ومختصرة وعدم التكرار وبطريقة منسقة كي يتم النظر اليها</li>
                                <li> اضف سيرتك المهنية وجميع الخبرات ارفق الملفات اللازمة والمطلوبة</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--  -->
    <section class="ads py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <div class="ad" style="background:url('{{asset('assets/pages/img/ads.png')}}')"></div>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="ad" style="background:url('{{asset('assets/pages/img/ads.png')}}')"></div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <section class="application">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-1 text-right">
                    <h3>تقديم علي وظيفة : <span class="job-name">اسم الوظيفة</span> </h3>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-6 offset-sm-3 text-right">
                    <div class="label rtl">
                        <label for="">الاسم</label>
                        <span class="star">*</span>
                    </div>
                    <input type="text" name="" id="" class="form-control custom-form-control" placeholder="الاسم">
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-6 offset-sm-3 text-right">
                    <div class="label rtl">
                        <label for="">البريد الالكتروني</label>
                        <span class="star">*</span>
                    </div>
                    <input type="email" name="" id="" class="form-control custom-form-control"
                        placeholder="البريد الاكتروني">
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-6 offset-sm-3 text-right">
                    <div class="label rtl">
                        <label for="">الرسالة</label>
                        <span class="star">*</span>
                    </div>
                    <textarea type="email" name="" id="" class="form-control"
                        placeholder="خطابك المرفق المريل الي الشركة"></textarea>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-6 offset-sm-3 text-right">
                    <div class="label rtl">
                        <label for="">رقم الهاتف</label>
                        <span class="star">*</span>
                    </div>
                    <input type="text" name="" id="" class="form-control custom-form-control" placeholder="رقم الهاتف">
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-6 offset-sm-3 text-right">
                    <div class="label rtl">
                        <label for="">تحميل سيرة ذاتية</label>
                        <span class="star">*</span>
                    </div>
                    <input type="file" class="filestyle" multiple>
                    <div class="extensions py-3">
                        (Pdf,Png,Jpg,Doc,Docx)
                        <div class="max py-2">يمكنك تحميل لغاية 8 ملفات</div>
                    </div>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-6 offset-sm-3 text-right">
                    <hr>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-sm-6 offset-sm-3 text-right rtl">
                    <button class="btn orange pr-5 pl-5 pt-2 pb-2 w-50">ارسال طلب وظيفة</button>
                    <button class="btn blue pr-5 pl-5 pt-2 pb-2">اغلاق</button>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <section class="ads py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="ad" style="background:url('{{asset('assets/pages/img/ads.png')}}')"></div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <section class="jobs">
        <div class="container">
            <div class="row rtl not_color py-3">
                <div class="col-sm-12 text-right">
                    <h2>وظائف مشابهة</h2>
                </div>
            </div>
            <div class="row rtl">
                <div class="col-sm-6">
                    <div class="info d-flex">
                        <div class="image">
                            <img src="{{asset('assets/pages/img/egypt.jpg')}}" alt="">
                        </div>
                        <div class="data text-right">
                            <h3 class="pb-3">محاسب</h3>
                            <ul class="list-unstyled">
                                <li>شركة تمتين للاستشارات الهندسية</li>
                                <li class="job-type">
                                    <i class="fa fa-bookmark"></i>دوام كامل
                                </li>
                                <li class="job-country">
                                    <i class="fa fa-map-marker"></i>الدولة : مصر
                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i>يونيو 28 2020
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 specail">
                    <div class="action text-center py-3">
                        <span> <i class="fa fa-envelope"></i> ارسال الي صديق</span>
                        <span><i class="fa fa-heart"></i> حفظ</span>
                    </div>
                    <div class="share py-3">

                        <ul class="list-unstyled d-flex">
                            <li class="share_item"> <i class="fa fa-share-alt"></i> مشاركة</li>
                            <li><i class="fa fa-facebook"></i></li>
                            <li><i class="fa fa-twitter"></i></li>
                            <li><i class="fa fa-linkedin"></i></li>
                            <li><i class="fa fa-envelope-open"></i></li>
                        </ul>
                    </div>
                    <div class="details text-center">
                        <button class="btn orange w-50">مشاهدة التفاصيل</button>
                    </div>
                </div>
            </div>
            <div class="row rtl mt-4">
                <div class="col-sm-6">
                    <div class="info d-flex">
                        <div class="image">
                            <img src="{{asset('assets/pages/img/egypt.jpg')}}" alt="">
                        </div>
                        <div class="data text-right">
                            <h3 class="pb-3">محاسب</h3>
                            <ul class="list-unstyled">
                                <li>شركة تمتين للاستشارات الهندسية</li>
                                <li class="job-type">
                                    <i class="fa fa-bookmark"></i>دوام كامل
                                </li>
                                <li class="job-country">
                                    <i class="fa fa-map-marker"></i>الدولة : مصر
                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i>يونيو 28 2020
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 specail">
                    <div class="action text-center py-3">
                        <span> <i class="fa fa-envelope"></i> ارسال الي صديق</span>
                        <span><i class="fa fa-heart"></i> حفظ</span>
                    </div>
                    <div class="share py-3">

                        <ul class="list-unstyled d-flex">
                            <li class="share_item"> <i class="fa fa-share-alt"></i> مشاركة</li>
                            <li><i class="fa fa-facebook"></i></li>
                            <li><i class="fa fa-twitter"></i></li>
                            <li><i class="fa fa-linkedin"></i></li>
                            <li><i class="fa fa-envelope-open"></i></li>
                        </ul>
                    </div>
                    <div class="details text-center">
                        <button class="btn orange w-50">مشاهدة التفاصيل</button>
                    </div>
                </div>
            </div>
            <div class="row rtl mt-4">
                <div class="col-sm-6">
                    <div class="info d-flex">
                        <div class="image">
                            <img src="{{asset('assets/pages/img/egypt.jpg')}}" alt="">
                        </div>
                        <div class="data text-right">
                            <h3 class="pb-3">محاسب</h3>
                            <ul class="list-unstyled">
                                <li>شركة تمتين للاستشارات الهندسية</li>
                                <li class="job-type">
                                    <i class="fa fa-bookmark"></i>دوام كامل
                                </li>
                                <li class="job-country">
                                    <i class="fa fa-map-marker"></i>الدولة : مصر
                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i>يونيو 28 2020
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 specail">
                    <div class="action text-center py-3">
                        <span> <i class="fa fa-envelope"></i> ارسال الي صديق</span>
                        <span><i class="fa fa-heart"></i> حفظ</span>
                    </div>
                    <div class="share py-3">

                        <ul class="list-unstyled d-flex">
                            <li class="share_item"> <i class="fa fa-share-alt"></i> مشاركة</li>
                            <li><i class="fa fa-facebook"></i></li>
                            <li><i class="fa fa-twitter"></i></li>
                            <li><i class="fa fa-linkedin"></i></li>
                            <li><i class="fa fa-envelope-open"></i></li>
                        </ul>
                    </div>
                    <div class="details text-center">
                        <button class="btn orange w-50">مشاهدة التفاصيل</button>
                    </div>
                </div>
            </div>
            <div class="row rtl mt-4">
                <div class="col-sm-6">
                    <div class="info d-flex">
                        <div class="image">
                            <img src="{{asset('assets/pages/img/egypt.jpg')}}" alt="">
                        </div>
                        <div class="data text-right">
                            <h3 class="pb-3">محاسب</h3>
                            <ul class="list-unstyled">
                                <li>شركة تمتين للاستشارات الهندسية</li>
                                <li class="job-type">
                                    <i class="fa fa-bookmark"></i>دوام كامل
                                </li>
                                <li class="job-country">
                                    <i class="fa fa-map-marker"></i>الدولة : مصر
                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i>يونيو 28 2020
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 specail">
                    <div class="action text-center py-3">
                        <span> <i class="fa fa-envelope"></i> ارسال الي صديق</span>
                        <span><i class="fa fa-heart"></i> حفظ</span>
                    </div>
                    <div class="share py-3">

                        <ul class="list-unstyled d-flex">
                            <li class="share_item"> <i class="fa fa-share-alt"></i> مشاركة</li>
                            <li><i class="fa fa-facebook"></i></li>
                            <li><i class="fa fa-twitter"></i></li>
                            <li><i class="fa fa-linkedin"></i></li>
                            <li><i class="fa fa-envelope-open"></i></li>
                        </ul>
                    </div>
                    <div class="details text-center">
                        <button class="btn orange w-50">مشاهدة التفاصيل</button>
                    </div>
                </div>
            </div>
            <div class="row rtl mt-4">
                <div class="col-sm-6">
                    <div class="info d-flex">
                        <div class="image">
                            <img src="{{asset('assets/pages/img/egypt.jpg')}}" alt="">
                        </div>
                        <div class="data text-right">
                            <h3 class="pb-3">محاسب</h3>
                            <ul class="list-unstyled">
                                <li>شركة تمتين للاستشارات الهندسية</li>
                                <li class="job-type">
                                    <i class="fa fa-bookmark"></i>دوام كامل
                                </li>
                                <li class="job-country">
                                    <i class="fa fa-map-marker"></i>الدولة : مصر
                                </li>
                                <li>
                                    <i class="fa fa-calendar"></i>يونيو 28 2020
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 specail">
                    <div class="action text-center py-3">
                        <span> <i class="fa fa-envelope"></i> ارسال الي صديق</span>
                        <span><i class="fa fa-heart"></i> حفظ</span>
                    </div>
                    <div class="share py-3">

                        <ul class="list-unstyled d-flex">
                            <li class="share_item"> <i class="fa fa-share-alt"></i> مشاركة</li>
                            <li><i class="fa fa-facebook"></i></li>
                            <li><i class="fa fa-twitter"></i></li>
                            <li><i class="fa fa-linkedin"></i></li>
                            <li><i class="fa fa-envelope-open"></i></li>
                        </ul>
                    </div>
                    <div class="details text-center">
                        <button class="btn orange w-50">مشاهدة التفاصيل</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <section class="ads py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="ad" style="background:url('{{asset('assets/pages/img/ads.png')}}')"></div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('assets/pages/js/bootstrap-filestyle.min.js')}}"> </script>
    <script>
        $(".filestyle").filestyle({
            text: "رفع السيرة الذاتية",
            badge: true
        }
        );
    </script>
</body>

</html>