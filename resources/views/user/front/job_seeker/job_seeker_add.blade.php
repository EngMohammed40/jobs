@extends('user.layouts.pages.main')

@section('content')
<div class="job_seeker_container">
    <div class="add_container container">
        
        <!-- Start Conditions -->
        <h4>تسجيل باحث عن عمل</h4>
        <ul class="seeker_add_conditions">
            <li>نتشرف بانضمامك الي موقع وظايف</li>
            <li>بياناتك الشخصية مهمة كن دقيق عند تعبئتها</li>
            <li>حاول اضافة جميع الخبرات والشهادات بشكل متقن</li>
            <li>استخدم اللغة العربية اثناء التسجيل</li>
            <li>بيانات التسجيل هذه سوف تظهر في سيرتك الذاتية في الموقع</li>
        </ul>
        <!-- End Conditions -->
        @if($errors->count()>0)
        <hr>
            <div class="alert alert-danger">
            <ul>
        @foreach ($errors->all() as $error)
            <li style="text-align: right;">{{ $error }}</li>
        @endforeach 
            </ul>

        </div>
        @endif
        <!-- Start Form -->
        <hr>
        <form class="seeker_add_form" action="{{route('job-seeker.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Start Personal Data -->
            <h5>البيانات الشخصية</h5>
            <div class="container">
                <div class="form-group">
                    <label>الجنس</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" checked name="sex" value="ذكر">
                        <label class="form-check-label" for="inlineRadio1">ذكر</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sex"  value="انثي">
                        <label class="form-check-label" for="inlineRadio2">انثي</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>الحالة الاجتماعية</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" checked name="social_state" value="اعزب">
                        <label class="form-check-label" for="inlineRadio1">اعزب</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="social_state"  value="متزوج">
                        <label class="form-check-label" for="inlineRadio2">متزوج</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>الاسم الثلاثي</label>
                    <input type="text" name="full_name" class="form-control" aria-describedby="emailHelp" required>
                </div>
                
                 <div class="form-group">
                    <label>سنة الميلاد</label>
                    <select class="form-control" name="birth_year">
                        @for($i=1970;$i<=2000;$i++)
                            <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                </div>

                <div class="form-group">
                    <label>الجنسية</label>
                    <select name="nationality" class="form-control" >
                        @foreach($countries as $country)
                            <option value="{{$country->name}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                </div>

                
                <div class="form-group">
                    <label>دولة الاقامة</label>
                    <select name="home_country" id="country" class="form-control" >
                        @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>المدينة </label>
                     <select name="home_city" id="cities" class="form-control" >
                    </select>
                </div>

                <div class="form-group">
                    <label>الصورة الشخصية</label>
                    <input name="photo" type="file" class="form-control-file" required>
                </div>

            </div>
                <!-- End Personal Data -->

                <!-- Start Contact Data -->
            <hr>
            <h5>بيانات الاتصال</h5>
            <div class="container">
                
                <div class="form-group">
                    <label>رقم الجوال</label>
                    <input type="text" name="mobile" class="form-control" aria-describedby="emailHelp" required>
                </div>

                <div class="form-group">
                    <label>البريد الالكتروني</label>
                    <input type="email" name="email" class="form-control" aria-describedby="emailHelp" required>
                </div>

                <div class="form-group">
                    <label>تأكيد البريد الالكتروني</label>
                    <input type="email" name="email_confirmation" class="form-control" aria-describedby="emailHelp" required>
                </div>

                <p>قم بالتأشير علي المعلومات التي ترغب باخفائها عن اصحاب العمل</p>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="name_hide" value="1">
                    <label class="form-check-label">
                        اخفاء معلومات الاسم
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="phone_hide" value="1">
                    <label class="form-check-label">
                        اخفاء رقم الهاتف
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="email_hide" value="1">
                    <label class="form-check-label">
                        اخفاء البريد الالكتروني
                    </label>
                </div>

            </div>
                <!-- End Contact Data -->

                <!-- Start Experience Data -->
            <hr>
            <h5>المستوي التعليمي والتخصص والخبرات </h5>
            <div class="container" id="experience_container">
                <div id="experience_row">
                    <div class="form-group">
                        <label>المستوي التعليمي</label>
                        <input type="text" name="education1" class="form-control" aria-describedby="emailHelp" required>
                    </div>

                    <div class="form-group">
                        <label>مجال التخصص</label>
                        <select name="expertise1" class="form-control" >
                            @foreach($expertises as $expertise)
                                <option value="{{$expertise->id}}">{{$expertise->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <label>هل يوجد خبرات</label>
                    <div class="form-check form-check-inline">
                        <input class="experience_yes form-check-input" type="radio" data-id="experience1" checked name="experience1" >
                        <label class="form-check-label">نعم</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="experience_no form-check-input" type="radio" name="experience1" data-id="experience1">
                        <label class="form-check-label">لا</label>
                    </div>

                    <div id="experience1" class="experience_number form-group">
                        <label>اجمالي سنوات الخبرة</label>
                        <select name="experience_number1" class="form-control" >
                            @for($e=1;$e<=7;$e++ )
                                <option value="{{$e}}">{{$e}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div id="new_experience_row"></div>
                <button id="seeker_field_add" type="button" class="btn btn-danger">اضف حقل جديد</button>
                
            </div>
                <input type="hidden" value="1" id="total_education_number" name="total_education_number" />
                <!-- End Experience Data -->
                
                <!-- Start Rate Section -->
            <hr>
            <h5>الحد الادني للاجر او الراتب</h5>
            <div class="seeker_rate_container container">
                <label>هل ترغب في تحديد الحد الادني للأجر او الراتب</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="rate_yes" checked type="radio" value="1" name="salary_status">
                    <label class="form-check-label">نعم</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="rate_no" type="radio" value="0"  name="salary_status">
                    <label class="form-check-label">لا الراتب قابل للتفاوض</label>
                </div>

                <div id="low_rate_accepted" class="form-group">
                    <label>الراتب الادني المقبول</label>
                    <input type="text" name="min_salary" class="form-control">
                </div>
            </div>
                <!-- End Rate Section -->


                <!-- Start Fav Place -->
            <hr>
            <h5>مكان العمل المفضل</h5>
            <div class="seeker_place_container container">
                <label>هل ترغب في تحديد منطقة او مدينة محددة للعمل بها</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="place_yes" checked type="radio" value="1" name="work_status">
                    <label class="form-check-label">نعم</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="place_no" type="radio" value="0"  name="work_status">
                    <label class="form-check-label">لا انا مستعد للعمل في اي منطقة</label>
                </div>

                <div id="place_row" class="form-group">
                    <label>مكان العمل المفضل </label>
                    <select id="work_region1" name="work_region1" class="form-control" >
                       @foreach($current_country->cities as $city)
                            <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>

                    <select id="work_city1" name="work_city1" class="form-control" >
                    </select>
                </div>
            </div>
            <div id="new_place_row"></div>
            <button id="seeker_place_add" type="button" class="btn btn-danger">اضف مكان جديد</button>
            <input type="hidden" value="1" id="total_place_number" name="total_place_number" />
                <!-- End Fav Place -->

                <!-- Start Type of job -->
            <hr>
            <h5>نوع الوظيفة المطلوبة</h5>
            <div class="container">
                <div class="colors">
                    <span class="color first_color_span active-color" data-color="#687f9c">دوام كامل</span>
                    <span class="color b4da3c" data-color="#b4da3c">دوام جزئي</span>
                    <span class="color a3d5e2" data-color="#a3d5e2">عن بعد</span>
                    <span class="color eee5b8" data-color="#eee5b8">مؤقت</span>
                    <span class="color cbc4e6" data-color="#cbc4e6">متعاقد</span>
                    <span class="color f7bdbe" data-color="#f7bdbe">غير محدد</span>

                    <input type="hidden" name="color" id="color">
                    <input type="hidden" id="job_type" name="job_type" value="دوام كامل" />
                </div>
            </div>
                <!-- End Type of job -->

                <!-- Start Sign Info -->
            <hr>
            <h5>معلومات الدخول</h5>
            <div class="container">
                <div class="alert alert-danger d-none" id="alert_password">كلمة السر غير متطابقة</div>
                <div class="form-group">
                    <label>كلمة السر</label>
                    <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp" required>
                </div>

                 <div class="form-group">
                    <label>تأكيد كلمة السر</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" aria-describedby="emailHelp" required>
                </div>
            </div>
                <!-- End Sign Info -->

                <!-- Footer -->
                <div class="conditions-check form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="conditions" id="conditions_check">
                    <label class="form-check-label">لقد قرأت ووافقت علي بنود اتفاقية الاستخدام الخاصة بوظيفة .كوم</label>
                </div>

            <input type="submit" id="submit" class="btn btn-danger" disabled value="متابعة التسجيل">
        </form>
        <!-- End Form -->
     
    </div>
</div>

@endsection

@section('scripts')
<script>
   /////// Get Cities Functions ...................
    function get_cities(){
        $.ajax({
            headers    : {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
            dataType   : 'html',
            url        :'{{URL::to("get-cities")}}',
            type       :'get',
            success    :'success',
            data       :{
                            id:$('#country').val()
                        },
            success    :function(result){
                            $('#cities').html(result);
                        }
        });
    }

    // Get Region Cities Functions ...................
    function get_region_cities(){
        $.ajax({
            headers    : {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
            dataType   : 'html',
            url        :'{{URL::to("get-region-cities")}}',
            type       :'get',
            success    :'success',
            data       :{
                            id:$('#work_region1').val()
                        },
            success    :function(result){
                            $('#work_city1').html(result);
                        }
        });
    }


    // Experience Adding Field..........................
    var i = 1;
    $("#seeker_field_add").click(function () {
            var html = '';
            i++;
            html +='<div id="experience_row">';
            html +=      '<div class="form-group">';
            html +=          '<label>المستوي التعليمي</label>';
            html +=          '<input type="text" name="education'+i+'" class="form-control" aria-describedby="emailHelp">';
            html +=      '</div>';

            html +=     '<div class="form-group">';
            html +=         '<label>مجال التخصص</label>';
            html +=     '<select name="expertise'+i+'" class="form-control" >';
                        @foreach($expertises as $expertise)
            html +=       '<option value="{{$expertise->id}}">{{$expertise->name}}</option>';
                        @endforeach
            html +=      '</select>';
            html +=   '</div>';

            html +=    '<label>هل يوجد خبرات</label>';
            html +=     '<div class="form-check form-check-inline">';
            html +=        '<input class="experience_yes form-check-input" type="radio" checked name="experience'+i+'" data-id="experience'+i+'" >';
            html +=        '<label class="form-check-label">نعم</label>';
            html +=    '</div>';
            html +=    '<div class="form-check form-check-inline">';
            html +=       ' <input data-id="experience'+i+'" class="experience_no form-check-input" type="radio" name="experience'+i+'">';
            html +=     '<label class="form-check-label">لا</label>';
            html +=    '</div>';

            html +=    '<div id="experience'+i+'" class="experience_number form-group">';
            html +=       ' <label>اجمالي سنوات الخبرة</label>';
            html +=        '<select name="experience_number'+i+'" class="form-control" >';
                        @for($e=1;$e<=7;$e++ )
            html +=                '<option value="{{$e}}">{{$e}}</option>';
                        @endfor
            html +=        '</select>';
            html +=    '</div>';
            html += '<button type="button" id="seeker_field_remove" class="btn btn-danger">ازالة</button>';
            html += '</div>';

            $('#new_experience_row').append(html);
            var total_education_number  = Number($('#total_education_number').val());
            total_education_number++
            var new_total_eduction_number = total_education_number.toString();
            $('#total_education_number').val(new_total_eduction_number);
        });

        // remove row........................
        $(document).on('click', '#seeker_field_remove', function () {
            $(this).closest('#experience_row').remove();
            var total_education_number  = Number($('#total_education_number').val());
            total_education_number--
            var new_total_eduction_number = total_education_number.toString();
            $('#total_education_number').val(new_total_eduction_number);
        });

        

$(document).ready(function(){
    // Colors===========================
    $('#color').val($('.active-color').data('color'));
    $('.color').on('click',function(){
        $('.color').removeClass('active-color');
        $(this).addClass('active-color');
        $('#color').val($(this).data('color'));
        $("#job_type").val($(this).html());
    });

    // Cities Country.....................
    get_cities();
    // On change of country Select..............
    $('#country').on('change',function(){
        get_cities();
    });


    // Region City.......................
    get_region_cities();
    $(document).on('change','#work_region1',function(){
        get_region_cities();
    });

    // Experience field ..................
   
    $(document).on('click','.experience_yes',function(){
        var id = $(this).data('id');
        $('#'+id).show();
    });
    
    $(document).on('click','.experience_no',function(){
        var id = $(this).data('id');
        $('#'+id).hide();
    });
    
    // Rate Field......................
    $('#rate_yes').on('click',function(){
        $('#low_rate_accepted').show();
    });
    
     $('#rate_no').on('click',function(){
        $('#low_rate_accepted').hide();
    });
    
    
    // Place Field.................
     $('#place_yes').on('click',function(){
        $('#place_row').show();
        $('#seeker_place_add').show();
    });
    
     $('#place_no').on('click',function(){
        $('#place_row').hide();
        $('#seeker_place_add').hide();
    });
    
    
    // Place Add Field..............
     var i = 1;
    $("#seeker_place_add").click(function () {
            var html = '';
            i++;
            html += '<div class="seeker_place_container container">';
            html += '<div id="place_row" class="form-group">';
            html += '<label>مكان العمل المفضل </label>';
            html += '<select id="work_region'+i+'" name="work_region'+i+'" class="form-control" >';
                        @foreach($current_country->cities as $city)
            html +='<option value="{{$city->id}}">{{$city->name}}</option>';
                        @endforeach
            html += '</select>';

            html +='<select id="work_city'+i+'" name="work_city'+i+'" class="form-control" >';
            html += '</select>';
            html += '<button type="button" id="seeker_place_remove" class="btn btn-danger">ازالة</button>';
            html += '</div>';
            html += '</div>'

            $('#new_place_row').append(html);
            var total_place_number  = Number($('#total_place_number').val());
            total_place_number++
            var new_total_place_number = total_place_number.toString();
            $('#total_place_number').val(new_total_place_number);
            $.ajax({
                headers    : {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                dataType   : 'html',
                url        :'{{URL::to("get-region-cities")}}',
                type       :'get',
                success    :'success',
                data       :{
                                id:$('#work_region'+i).val()
                            },
                success    :function(result){
                                $('#work_city'+i).html(result);
                            }
            });
            
            $(document).on('change','#work_region'+i,function(){
                $.ajax({
                    headers    : {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                    dataType   : 'html',
                    url        :'{{URL::to("get-region-cities")}}',
                    type       :'get',
                    success    :'success',
                    data       :{
                                    id:$('#work_region'+i).val()
                                },
                    success    :function(result){
                                    $('#work_city'+i).html(result);
                                }
                });
            
            });
        });

        // remove row........................
        $(document).on('click', '#seeker_place_remove', function () {
            $(this).closest('.seeker_place_container').remove();
            var total_place_number  = Number($('#total_place_number').val());
            total_place_number--
            var new_total_place_number = total_place_number.toString();
            $('#total_place_number').val(new_total_place_number);
        });
        
    
    // Passwords Match =================
    $('#password_confirmation').keyup(function(){
        var password = $('#password').val();
        var password_confirmation = $('#password_confirmation').val();
        if(password === password_confirmation){
         $('#alert_password').addClass('d-none');
        }else{
            $('#alert_password').removeClass('d-none');  
        }

    })
        
    // Conditions and usage button......................
    $('#conditions_check').on('click',function(){
          $('#submit').attr('disabled',!this.checked);  
        
    });
    
              


});

    
</script>

@endsection





