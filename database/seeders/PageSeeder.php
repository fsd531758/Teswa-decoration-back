<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{

    public function run()
    {
        //about us section Homepage
        $page = Page::create([
            "identifier" => "about_us",
            "has_sub_title" => 1,
            "has_description" => 1,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 0,
            "ar" => [
                "title" => "فن المعمار للديكور ، شركة أثاثات إبداعية تقع في الرياض ، المملكة العربية السعودية.",
                "sub_title" => "تأسست منذ عام 1930.",
                "description" => "<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                <p>ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام هنا يوجد محتوى نصي، هنا يوجد محتوى نصي فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.</p>",
            ],
            "en" => [
                "title" => "Fan Al Meamar For Decoration , A Creative Furniture Company Located In Riyadh , KSA.",
                "sub_title" => "Established since 1930.",
                "description" => "<p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus.</p>
                <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin lectus.</p>",
            ],
        ]);



        //summary section Homepage
        $page = Page::create([
            "identifier" => "summary",
            "has_sub_title" => 1,
            "has_description" => 1,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 1,
            "ar" => [
                "title" => "في سوق الأثاث",
                "sub_title" => "85 سنة",
                "description" => "<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>",
            ],
            "en" => [
                "title" => "We Have Furniture Expertise In Following Areas.",
                "sub_title" => "85 Years",
                "description" => "<p>In furniture market</p>",
            ],
        ]);

        $page->file()->create([
            "path" => "seeders/pages/chair.png",
            "type" => "image",
        ]);
    }
}
