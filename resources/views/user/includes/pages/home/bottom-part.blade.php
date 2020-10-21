<div class="bottom-part">
    <h6 class="content-header">مقالات ذات صلة</h6>
    
    <div class="articles">
       <div class="row">
           @foreach($articles as $article)
            <div class="article col-lg-1">
                <h5>{{$article->title}}</h5>
                <img src="{{asset('assets/pages/img/ksa.jpg')}}">
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