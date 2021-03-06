<?php

use Illuminate\Database\Seeder;
use App\Models\AdsGroup;

class AdsGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $adsgroups =
        [
            ['name'=>'أعلى الموقع'],
            ['name'=>'اسفل ايقونات التطبيقات في يمين الموقع'],
            ['name'=>'أسفل الموقع '],
            ['name'=>'بنرات فى صفحة الإعلان'],
            ['name'=>'بنرات إعلانيه أسفل بلوك البحث فى اليمين'],
            ['name'=>'بنرات إعلانيه أسفل السلايد شو فى الصفحة الرئيسيه'],
            ['name'=>'بنرات إعلانية أسفل ( تفرعات الأقسام والأقسام الفرعية ) فى الصفحة الرئيسيه'],
            ['name'=>'بنرات إعلانيه أعلى الإعلانات فى المتاجر'],
            ['name'=>'بنرات إعلانيه تعرض أعلى جدول الإعلانات عند عرض إعلانات ( الدول ، المناطق ، الأقسام كلها ، الخدمات ... إلخ )'],
            ['name'=>'بنرات إعلانيه أسفل بلوك المُعلن فى صفحة عرض الإعلان'],
            ['name'=>'بنرات إعلانية أعلى الموقع ( يميناً )'],
            ['name'=>'بنرات اعلى الموقع ( يساراً ) ']
        ];
        foreach($adsgroups as $adsgroup){
            AdsGroup::create($adsgroup);
        }
    }
}
