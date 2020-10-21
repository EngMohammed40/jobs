@foreach($top_banners as $top_banner)
@foreach($top_banner->ad_images as $ad_image)
<div class="hero">
    <div class="hero-content" style="background:url({{asset('storage/ads_images/'.$ad_image->name.'')}}) no-repeat cover;">
        <h3>{{$top_banner->name}}</h3>
        <p class="lead">
            محرك بحث ضخم يحتوي العديد من وكلاء السيارات المحليين بالاضافة الي الكثير من السيارات المستعملة والجديدة في العديد من الدول . محتوي هائل من السيارات الجديدة في جميع الاسواق . قسم خاص يحتوي كل ما يتعلق بعالم السيارات من اخبار محلية وعالمية . وتغطية معارض السيارات العالمية واطلاق الموديلات الجديدة .

        </p>
    </div>


</div>
@endforeach
@endforeach