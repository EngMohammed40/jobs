<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/pages/css/jobs-register.css')}}">
    <title>تسجيل حساب وظائف</title>
</head>

<body>
   
    
    
    <header>
        <div class="container">
            <div class="row rtl text-right py-3">
                <div class="col-md-12">
                    <div class="instructions">
                        <h1>تسجيل حساب جديد</h1>
                        <ul class="mt-3">
                            <li>قم باضافة الوظائف المتاحة بشركتك مجانا وبدون اي مصاريف</li>
                            <li>يتم عرض اعلاناتكم في الموقع لمدة ستين يوم مجانا</li>
                            <li>طرق تواصل مختلفة مع امكانية التحكم بها واخفاء اي منها</li>
                            <li>امكانية الحذف والتعديل علي اعلانات الوظائف في اي وقت</li>
                            <li>صفحة خاصة بكل حساب بها جميع المعلومات والاعلانات</li>
                            <li>امكانية مشاركة الوظائف علي منصات التواصل الاجتماعي</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container nav">
            <nav class="rtl">
                <div class="option">
                    <input type="radio" name="radio" id="company_radio">
                    <label for="">شركة او مؤسسة</label>

                </div>
                <div class="option">
                    <input type="radio" name="radio" checked id="job_radio">
                    <label for="">شركة توظيف</label>

                </div>
                <div class="option">
                    <input type="radio" name="radio" id="institute_radio">
                    <label for="">معهد تدريب</label>

                </div>
            </nav>
        </div>
    </header>

    <!--  -->
    @foreach ($errors->all() as $error)
    {{ $error }}<br/>
    @endforeach
    <form action="{{route('corporations.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <section class="company py-4" id="company">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-12 text-right">
                    <h3>ادخل معلومات الاتصال</h3>
                </div>
            </div>
            <div class="row rtl py-3">
                <div class="col-md-4 text-right">
                    <div class="form-group">
                        <label for="">الاسم</label>
                        <span class="star">*</span>
                        <input type="text" class="form-control" name="personal_name" placeholder="اسمك الشخصي">
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <div class="hide">
                        <input type="checkbox" value="1" name="name_hide">
                        <label for="">اخفاء الاسم</label>

                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <div class="form-group">
                        <label for="">المسمي الوظيفي</label>
                        <span class="star">*</span>
                        <input type="text" class="form-control" name="job_name" placeholder="المسمي الوظيفي">
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <div class="hide">
                        <input type="checkbox" name="job_name_hide" value="1">
                        <label for="">اخفاء المسمي</label>

                    </div>
                </div>
            </div>
            <div class="row rtl py-3">
                <div class="col-md-4 text-right">
                    <div class="form-group">
                        <label for="">البريد الاكتروني</label>
                        <span class="star">*</span>
                        <input type="email" class="form-control" name="email" placeholder="البريد الاكتروني">
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <div class="hide">
                        <input type="checkbox" name="email_hide" value="1">
                        <label for="">اخفاء البريد</label>

                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <div class="form-group">
                        <label for="">رقم الهاتف الجوال</label>
                        <span class="star">*</span>
                        <input type="text" name="mobile" class="form-control" placeholder="رقم هاتف متنقل">
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <div class="hide">
                        <input type="checkbox" name="mobile_hide" value="1">
                        <label for="">اخفاء الرقم</label>

                    </div>
                </div>
            </div>
            <div class="row rtl py-3">
                <div class="col-md-12 text-right">
                    <input type="checkbox" name="chat" value="1">
                    <label for="" class="label-colored">ارغب بالتواصل عن طريق الشات بالموقع</label>
                </div>
            </div>
            <hr>
            <div class="row py-3">
                <div class="col-md-12 text-right">
                    <h3>معلومات المؤسسة / الشركة</h3>
                </div>
            </div>
            <div class="row rtl">
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">اسم المؤسسة / الشركة</label>
                        <span class="star">*</span>
                        <input type="text" class="form-control" name="corporation_name">
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">مجال المؤسسة / الشركة</label>
                        <span class="star">*</span>
                        <input type="text" class="form-control" name="corporation_field">
                    </div>
                </div>
            </div>
            <div class="row rtl ">
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">قطاع المؤسسة / الشركة</label>
                        <span class="star">*</span>
                        <select class="form-control" name="corporation_sector">
                            <option value="قطاع عام">
                                قطاع عام
                            </option>
                            <option value="قطاع خاص">
                                قطاع خاص
                            </option>
                            <option value=" مؤسسة غير ربحية دولية">
                                مؤسسة غير ربحية دولية 
                            </option>
                            <option value="مؤسسة اهلية محلية">
                                مؤسسة اهلية محلية
                            </option>
                            <option value="مؤسسة تعليمية">
                                مؤسسة تعليمية
                            </option>
                            <option value="شركة غير ربحية">
                                شركة غير ربحية
                            </option>
                            <option value="شركة عامة">
                                شركة عامة
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">حجم المؤسسة / الشركة</label>
                        <span class="star">*</span>
                        <select class="form-control" name="corporation_size">
                            <option value="اقل من 10">
                                اقل من 10
                            </option>
                            <option value="من 11 الي 25">
                                من 11 الي 25
                            </option>
                            <option value="من 26 الي 50">
                                من 26 الي 50
                            </option>
                            <option value="من 51 الي 100">
                            من 51 الي 100    
                            </option>
                            <option value="اكثر من 100">
                                اكثر من 100
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row rtl">
                <div class="col-md-12 text-right">
                    <label for="">نبذة عن المؤسسة / الشركة</label>
                    <textarea name="corporation_about" id="" cols="30" rows="5" class="form-control"
                        placeholder="اكتب نبذة مختصرة للشركة"></textarea>
                </div>
            </div>
            <div class="row rtl py-2">
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">الدولة</label>
                        <span class="star">*</span>
                        <select name="country" class="form-control" id="country_1">
                            @foreach($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">المدينة</label>
                        <span class="star">*</span>
                        <select name="city" id="cities_1" class="form-control">
                        </select>
                    </div>
                </div>
            </div>
            <div class="row rtl py-2">
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">موقع المؤسسة / الشركة</label>
                        <input type="text" name="link" class="form-control" placeholder="اضف رابط موقع المؤسسة / الشركة">
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">أين سمعت عنا ؟</label>
                        <select class="form-control" name="hear_about">
                            <option value="">خيار 1</option>
                            <option value="">خيار 2</option>
                            <option value="">خيار 3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row rtl py-2">
                <div class="col-md-12 text-right">
                    <label for="">اضف روابط التواصل الاجتماعي للشركة ان وجد</label>
                </div>
            </div>
            <div class="row rtl">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="facebook" placeholder="رابط فيسبوك">
                </div>
                <div class="col-md-4">
                    <input type="text" name="twitter" class="form-control" placeholder="رابط تويتر">
                </div>
                <div class="col-md-4">
                    <input type="text" name="linkedin" class="form-control" placeholder="رابط لينكدن">
                </div>
            </div>
            <div class="row rtl py-5">
                <div class="col-md-6 text-right">
                    <input type="file" name="logo" id="">
                    <label for="">شعار المؤسسة / الشركة</label>
                </div>
                <div class="col-md-6 text-center">
                    <label for="">اختر لون الغلاف</label>
                    <ul class="list-unstyled colors py-3">
                        <li class="color1"></li>
                        <li class="color2"></li>
                        <li class="color3"></li>
                        <li class="color4"></li>
                    </ul>
                    <input type="hidden" name="profile_color" id="profile_color" />
                </div>
            </div>
            <hr>
            <div class="row rtl text-right">
                <div class="col-md-12">
                    <h3>معلومات الدخول الي حسابكم</h3>
                </div>
            </div>
            <div class="row rtl">
                <div class="col-md-6 text-right">
                    <label for="">اسم المستخدم</label>
                    <span class="star">*</span>
                    <input type="email" class="form-control" name="user_email" placeholder="البريد الالكتروني">
                </div>
                <div class="col-md-6 text-center">
                    <div class="verify">
                        <span class="star">*</span>
                        <label for="" class="label-colored">سيصل لك كود التفعيل الي هذا الايميل لتفعيل الحساب</label>
                    </div>
                </div>
            </div>
            <div class="row rtl py-4">
                <div class="col-md-6 text-right">
                    <label for="">كلمة المرور</label>
                    <span class="star">*</span>
                    <input type="password" name="password" id="password_2" class="form-control">
                </div>
                <div class="col-md-6 text-right">
                    <label for=""> تاكيد كلمة المرور</label>
                    <span class="star">*</span>
                    <input type="password" name="repassword" id="repassword_2" class="form-control">
                </div>
            </div>
            <div class="row rtl">
                            <div class="d-none alert alert-danger" id="password_validation_2">
                كلمة السر غير متطابقة
            </div>
            </div>
            <div class="row rtl">
                <label for="">ادخل كود التحقق الموجود في المربع</label>
            </div>
            <div class="row rtl py-4">
                <div class="col-md-2 text-center">
                    <div class="capatcha">
                           
                             <input type="text" class="form-control" id="captcha" name="captcha" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="cap-verify">
                   
                    </div>
                </div>
            </div>
            <div class="row rtl py-4 policy">
                <span> بالضغط علي انشاء حساب فانك توافق علي جميع </span> <a href="#">شروط الاستخدام</a> <span>وانك
                    قرأت</span> <a href="#">سياسة الخصوصية</a>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <button type="submit" disabled="true" class="btn btn-primary btn-block">انشاء حساب</button>
                </div>
            </div>
            <div class="row rtl py-3">
                <div class="col-md-12 text-center">
                    <input type="checkbox" name="" id="">
                    <label for="">الاشتراك في القائمة البريدية</label>
                </div>
            </div>
        </div>
    </section>
    </form>
    
    
    
    <form action="{{route('companies.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <section class="company py-4 d-none" id="job">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-12 text-right">
                    <h3>ادخل معلومات الاتصال</h3>
                </div>
            </div>
            <div class="row rtl py-3">
                <div class="col-md-4 text-right">
                    <div class="form-group">
                        <label for="">الاسم</label>
                        <span class="star">*</span>
                        <input type="text" class="form-control" name="personal_name" placeholder="اسمك الشخصي">
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <div class="hide">
                        <input type="checkbox" value="1" name="name_hide">
                        <label for="">اخفاء الاسم</label>

                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <div class="form-group">
                        <label for="">المسمي الوظيفي</label>
                        <span class="star">*</span>
                        <input type="text" class="form-control" name="job_name" placeholder="المسمي الوظيفي">
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <div class="hide">
                        <input type="checkbox" name="job_name_hide" value="1">
                        <label for="">اخفاء المسمي</label>

                    </div>
                </div>
            </div>
            <div class="row rtl py-3">
                <div class="col-md-4 text-right">
                    <div class="form-group">
                        <label for="">البريد الاكتروني</label>
                        <span class="star">*</span>
                        <input type="email" class="form-control" name="email" placeholder="البريد الاكتروني">
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <div class="hide">
                        <input type="checkbox" name="email_hide" value="1">
                        <label for="">اخفاء البريد</label>

                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <div class="form-group">
                        <label for="">رقم الهاتف الجوال</label>
                        <span class="star">*</span>
                        <input type="text" name="mobile" class="form-control" placeholder="رقم هاتف متنقل">
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <div class="hide">
                        <input type="checkbox" name="mobile_hide" value="1">
                        <label for="">اخفاء الرقم</label>

                    </div>
                </div>
            </div>
            <div class="row rtl py-3">
                <div class="col-md-12 text-right">
                    <input type="checkbox" name="chat" value="1">
                    <label for="" class="label-colored">ارغب بالتواصل عن طريق الشات بالموقع</label>
                </div>
            </div>
            <hr>
            <div class="row py-3">
                <div class="col-md-12 text-right">
                    <h3>معلومات شركة التوظيف</h3>
                </div>
            </div>
            <div class="row rtl">
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">اسم شركة التوظيف</label>
                        <span class="star">*</span>
                        <input type="text" class="form-control" name="company_name">
                    </div>
                </div>
            </div>

            <div class="row rtl">
                <div class="col-md-12 text-right">
                    <label for="">نبذة عن شركة التوظيف</label>
                    <textarea name="company_about" cols="30" rows="5" class="form-control"
                        placeholder="اكتب نبذة مختصرة للشركة"></textarea>
                </div>
            </div>
            <div class="row rtl py-2">
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">الدولة</label>
                        <span class="star">*</span>
                        <select class="form-control" id="country_2" name="country">
                            @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">المدينة</label>
                        <span class="star">*</span>
                        <select class="form-control" id="cities_2" name="city">

                        </select>
                    </div>
                </div>
            </div>
            <div class="row rtl py-2">
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">موقع شركة التوظيف </label>
                        <input type="text" name="link" class="form-control" placeholder="اضف رابط موقع شركة التوظيف">
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">أين سمعت عنا ؟</label>
                        <select class="form-control" name="hear_about">
                            <option value="خيار 1">
                                خيار 1
                            </option>
                            <option value="خيار 2">
                                خيار 2
                            </option>
                            <option value="خيار 3">
                                خيار 3
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row rtl py-2">
                <div class="col-md-12 text-right">
                    <label for="">اضف روابط التواصل الاجتماعي للشركة ان وجد</label>
                </div>
            </div>
            <div class="row rtl">
                <div class="col-md-4">
                    <input type="text" name="facebook" class="form-control" placeholder="رابط فيسبوك">
                </div>
                <div class="col-md-4">
                    <input type="text" name="twitter" class="form-control" placeholder="رابط تويتر">
                </div>
                <div class="col-md-4">
                    <input type="text" name="linkedin" class="form-control" placeholder="رابط لينكدن">
                </div>
            </div>
            <div class="row rtl py-5">
                <div class="col-md-6 text-right">
                    <input type="file" name="logo">
                    <label for="">شعار شركة التوظيف </label>
                </div>
                <div class="col-md-6 text-center">
                    <label for="">اختر لون الغلاف</label>
                    <ul class="list-unstyled colors py-3">
                        <li class="color1"></li>
                        <li class="color2"></li>
                        <li class="color3"></li>
                        <li class="color4"></li>
                    </ul>
                    <input type="hidden" name="profile_color" id="profile_color_2" />
                </div>
            </div>
            <hr>
            <div class="row rtl text-right">
                <div class="col-md-12">
                    <h3>معلومات الدخول الي حسابكم</h3>
                </div>
            </div>
            <div class="row rtl">
                <div class="col-md-6 text-right">
                    <label for="">اسم المستخدم</label>
                    <span class="star">*</span>
                    <input type="email" class="form-control" name="user_email" placeholder="البريد الالكتروني">
                </div>
                <div class="col-md-6 text-center">
                    <div class="verify">
                        <span class="star">*</span>
                        <label for="" class="label-colored">سيصل لك كود التفعيل الي هذا الايميل لتفعيل الحساب</label>
                    </div>
                </div>
            </div>
            <div class="row rtl py-4">
                <div class="col-md-6 text-right">
                    <label for="">كلمة المرور</label>
                    <span class="star">*</span>
                    <input type="password" name="password" id="password_1" class="form-control">
                </div>
                <div class="col-md-6 text-right">
                    <label for=""> تاكيد كلمة المرور</label>
                    <span class="star">*</span>
                    <input type="password" name="repassword" class="form-control" id="repassword_1">
                </div>
            </div>
                        <div class="row rtl">
                            <div class="d-none alert alert-danger" id="password_validation_2">
                كلمة السر غير متطابقة
            </div>
            </div>
            <div class="row rtl">
                <label for="">ادخل كود التحقق الموجود في المربع</label>
            </div>
             <div class="row rtl py-4">
                <div class="col-md-2 text-center">
                    <div class="capatcha">
                        {!! captcha_img() !!}    
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="cap-verify">
                        
                    <input type="text" class="form-control" id="captcha" name="captcha_company" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="row rtl py-4 policy">
                <span> بالضغط علي انشاء حساب فانك توافق علي جميع </span> <a href="#">شروط الاستخدام</a> <span>وانك
                    قرأت</span> <a href="#">سياسة الخصوصية</a>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <button type="submit" disabled="true" class="btn btn-primary btn-block">انشاء حساب</button>
                </div>
            </div>
            <div class="row rtl py-3">
                <div class="col-md-12 text-center">
                    <input type="checkbox" name="email_list">
                    <label for="">الاشتراك في القائمة البريدية</label>
                </div>
            </div>
        </div>
    </section>
    </form>
    
    <form action="{{route('centers.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <section class="company py-4 d-none" id="institute">
        <div class="container">
            <div class="row py-3">
                <div class="col-md-12 text-right">
                    <h3>ادخل معلومات الاتصال</h3>
                </div>
            </div>
            <div class="row rtl py-3">
                <div class="col-md-4 text-right">
                    <div class="form-group">
                        <label for="">الاسم</label>
                        <span class="star">*</span>
                        <input type="text" class="form-control" name="personal_name" placeholder="اسمك الشخصي">
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <div class="hide">
                        <input type="checkbox" value="1" name="name_hide">
                        <label for="">اخفاء الاسم</label>

                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <div class="form-group">
                        <label for="">المسمي الوظيفي</label>
                        <span class="star">*</span>
                        <input type="text" class="form-control" name="job_name" placeholder="المسمي الوظيفي">
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <div class="hide">
                        <input type="checkbox" name="job_name_hide" value="1">
                        <label for="">اخفاء المسمي</label>

                    </div>
                </div>
            </div>
            <div class="row rtl py-3">
                <div class="col-md-4 text-right">
                    <div class="form-group">
                        <label for="">البريد الاكتروني</label>
                        <span class="star">*</span>
                        <input type="email" class="form-control" name="email" placeholder="البريد الاكتروني">
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <div class="hide">
                        <input type="checkbox" name="email_hide" value="1">
                        <label for="">اخفاء البريد</label>

                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <div class="form-group">
                        <label for="">رقم الهاتف الجوال</label>
                        <span class="star">*</span>
                        <input type="text" name="mobile" class="form-control" placeholder="رقم هاتف متنقل">
                    </div>
                </div>
                <div class="col-md-2 text-right">
                    <div class="hide">
                        <input type="checkbox" name="mobile_hide" value="1">
                        <label for="">اخفاء الرقم</label>

                    </div>
                </div>
            </div>
            <div class="row rtl py-3">
                <div class="col-md-12 text-right">
                    <input type="checkbox" name="chat" value="1">
                    <label for="" class="label-colored">ارغب بالتواصل عن طريق الشات بالموقع</label>
                </div>
            </div>
            <hr>
            <div class="row py-3">
                <div class="col-md-12 text-right">
                    <h3>معلومات عن مركز / معهد التدريب</h3>
                </div>
            </div>
            <div class="row rtl">
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">اسم المركز / المعهد</label>
                        <span class="star">*</span>
                        <input type="text" class="form-control" name="center_name">
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">مجال التدريب</label>
                        <span class="star">*</span>
                        <input type="text" class="form-control" name="center_field">
                    </div>
                </div>
            </div>
            <div class="row rtl">
                <div class="col-md-12 text-right">
                    <label for="">نبذة عن المركز / المعهد</label>
                    <textarea name="center_about" cols="30" rows="5" class="form-control"
                        placeholder="اكتب نبذة مختصرة للمركز / المعهد"></textarea>
                </div>
            </div>
            <div class="row rtl py-2">
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">الدولة</label>
                        <span class="star">*</span>
                        <select class="form-control" id="country_3" name="country">
                                         @foreach($countries as $country)
                        <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">المدينة</label>
                        <span class="star">*</span>
                        <select class="form-control" id="cities_3" name="city">
       
                        </select>
                    </div>
                </div>
            </div>
            <div class="row rtl py-2">
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">موقع المركز / المعهد</label>
                        <input type="text" name="link" class="form-control" placeholder="اضف رابط موقع المركز / المعهد">
                    </div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="form-group">

                        <label for="">أين سمعت عنا ؟</label>
                        <select class="form-control" name="hear">
                            <option value="خيار 1">
                                خيار 1
                            </option>
                            <option value="خيار 2">
                                خيار 2
                            </option>
                            <option value="خيار 3">
                                خيار 3
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row rtl py-2">
                <div class="col-md-12 text-right">
                    <label for="">اضف روابط التواصل الاجتماعي للمركز / المعهد ان وجد</label>
                </div>
            </div>
            <div class="row rtl">
                <div class="col-md-4">
                    <input type="text" name="facebook" class="form-control" placeholder="رابط فيسبوك">
                </div>
                <div class="col-md-4">
                    <input type="text" name="twitter" class="form-control" placeholder="رابط تويتر">
                </div>
                <div class="col-md-4">
                    <input type="text" name="linkedin" class="form-control" placeholder="رابط لينكدن">
                </div>
            </div>
            <div class="row rtl py-5">
                <div class="col-md-6 text-right">
                    <input type="file" name="logo">
                    <label for="">شعار المركز / المعهد</label>
                </div>
                <div class="col-md-6 text-center">
                    <label for="">اختر لون الغلاف</label>
                    <ul class="list-unstyled colors py-3">
                        <li class="color1"></li>
                        <li class="color2"></li>
                        <li class="color3"></li>
                        <li class="color4"></li>
                    </ul>
                 <input type="hidden" name="profile_color" id="profile_color_3" />
                </div>
            </div>
            <hr>
            <div class="row rtl text-right">
                <div class="col-md-12">
                    <h3>معلومات الدخول الي حسابكم</h3>
                </div>
            </div>
            <div class="row rtl">
                <div class="col-md-6 text-right">
                    <label for="">اسم المستخدم</label>
                    <span class="star">*</span>
                    <input type="email" name="user_email" class="form-control" id="" placeholder="البريد الالكتروني">
                </div>
                <div class="col-md-6 text-center">
                    <div class="verify">
                        <span class="star">*</span>
                        <label for="" class="label-colored">سيصل لك كود التفعيل الي هذا الايميل لتفعيل الحساب</label>
                    </div>
                </div>
            </div>
            <div class="row rtl py-4">
                <div class="col-md-6 text-right">
                    <label for="">كلمة المرور</label>
                    <span class="star">*</span>
                    <input type="password" name="password" class="form-control" id="password_3">
                </div>
                <div class="col-md-6 text-right">
                    <label for=""> تاكيد كلمة المرور</label>
                    <span class="star">*</span>
                    <input type="password" class="form-control" id="repassword_3">
                </div>
            </div>
                        <div class="row rtl">
                            <div class="d-none alert alert-danger" id="password_validation_2">
                كلمة السر غير متطابقة
            </div>
            </div>
            <div class="row rtl">
                <label for="">ادخل كود التحقق الموجود في المربع</label>
            </div>
             <div class="row rtl py-4">
                <div class="col-md-2 text-center">
                    <div class="capatcha">
               
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="cap-verify">
                    <input type="text" class="form-control" id="captcha" name="captcha" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="row rtl py-4 policy">
                <span> بالضغط علي انشاء حساب فانك توافق علي جميع </span> <a href="#">شروط الاستخدام</a> <span>وانك
                    قرأت</span> <a href="#">سياسة الخصوصية</a>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <button type="submit" disabled="true" class="btn btn-primary btn-block">انشاء حساب</button>
                </div>
            </div>
            <div class="row rtl py-3">
                <div class="col-md-12 text-center">
                    <input type="checkbox" name="" id="">
                    <label for="">الاشتراك في القائمة البريدية</label>
                </div>
            </div>
        </div>

    </section>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {

            //  getting cities in all sections
            function get_cities(i){
                $.ajax({
                    headers    : {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                    dataType   : 'html',
                    url        :'{{URL::to("get-cities")}}',
                    type       :'get',
                    success    :'success',
                    data       :{
                                    id:$('#country_'+ i +'').val()
                                },
                    success    :function(result){
                                    $('#cities_'+ i +'').html(result);
                                }
                });
            }
                // Cities Country.....................
                get_cities(1);
                // On change of country Select..............
                $('#country_1').on('change',function(){
                    get_cities(1);
                });
                  $('#country_2').on('change',function(){
                    get_cities(2);
                });
                  $('#country_3').on('change',function(){
                      get_cities(3);
                });
                
                // Password Validation
                function passwordValidate(i){
                $('#repassword_'+i+'').on('keyup',(function(){
                    var password =  $('#password_'+i+'').val(); 
                    var repassword =  $('#repassword_'+i+'').val();
                    console.log(password,repassword)
                    if(password === repassword){
                        $('#password_validation_'+i+'').addClass('d-none');
                        $('button[type="submit"]').prop('disabled','');
                    }else{
                       $('#password_validation_'+i+'').removeClass('d-none'); 
                       $('button[type="submit"]').prop('disabled','true');
                       
                    }
                }))

            }
            passwordValidate(2);
              // showing sections acording to radio box
            function check() {
                if ($('#company_radio').prop('checked')) {
                    $('#company').removeClass('d-none');
                    $('#job').addClass('d-none');
                    $('#institute').addClass('d-none');
                    get_cities(1);
                    passwordValidate(2)
                } else if ($('#job_radio').prop('checked')) {
                    $('#company').addClass('d-none');
                    $('#job').removeClass('d-none');
                    $('#institute').addClass('d-none');
                    get_cities(2);
                    passwordValidate(1)
                } else if ($('#institute_radio').prop('checked')) {
                    $('#company').addClass('d-none');
                    $('#job').addClass('d-none');
                    $('#institute').removeClass('d-none');
                    get_cities(3);
                    passwordValidate(3)
                }
            }

            $('input[type="radio"]').click(function () {
                check();
            })
            $('.colors li').click(function(){
                $('#profile_color').val($(this).css('background-color'));
                $('#profile_color_2').val($(this).css('background-color'));
                $('#profile_color_3').val($(this).css('background-color'));
            })
            

            
        })
    </script>
</body>

</html>