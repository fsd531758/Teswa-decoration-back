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
            "identifier" => "experience",
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


        //vision
        $page = Page::create([
            "identifier" => "vision",
            "has_sub_title" => 0,
            "has_description" => 1,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 1,
            "ar" => [
                "title" => "رؤييتنا",
                "description" => "<p>أن نكون معروفين من قبل عملائنا للإبداع في الأفكار ، والنهج والحلول الحديثة</p>",
            ],
            "en" => [
                "title" => "Our Vision",
                "description" => "<p>To be recognized by our clients for creativity in thoughts, up to date approaches and solutions</p>",
            ],
        ]);

        $page->file()->create([
            "path" => "seeders/pages/vision.jpg",
            "type" => "image",
        ]);

        //mission
        $page = Page::create([
            "identifier" => "mission",
            "has_sub_title" => 0,
            "has_description" => 1,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 1,
            "ar" => [
                "title" => "مهمتنا",
                "description" => "<p>مهمتنا هي خلق تجربة مجزية ، قيمة تجمع بين الأداء الوظيفي والجودة العالية والابتكار لعملائنا. الثقة ضرورية ، نحن نبني جسر ثقة مع عملائنا للتأكد من أن التصميم المفضل لدينا سيكون منزلهم المفضل. التصاميم هي تفكير بصري ، نحن نقوم بذلك. عملاء سعداء وراضون هم هدفنا.</p>",
            ],
            "en" => [
                "title" => "Our Mission",
                "description" => "<p>Our Mission is to create a rewarding experience, a value that combines functionality with high quality and innovation for our clients. trust is essential, we build a trusting bridge with our clients to insure that our favorite design will be their favorite home. designs are thinking made visual, WE DO IT. happy & satisfied clients are our goal.</p>",
            ],
        ]);

        $page->file()->create([
            "path" => "seeders/pages/mission.jpg",
            "type" => "image",
        ]);

        //about
        $page = Page::create([
            "identifier" => "about",
            "has_sub_title" => 0,
            "has_description" => 1,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 1,
            "ar" => [
                "title" => "من نحن",
                "description" => "<p>شركة ديكور سريعة النمو مقرها المملكة العربية السعودية.
                نحن مبتكرون - مع العناصر الجمالية (الفضاء ، النمط ، الملمس ، اللون ، النغمة ، الكتلة ، الفراغ ، الضوء والظل ...) نحن نحدد أحلامك وتحتاج إلى واقع في شكل واحد.</p>",
            ],
            "en" => [
                "title" => "About us",
                "description" => "<p>A fast-growing Decoration company based in KSA.
                We are innovative – With aesthetics elements (space, pattern, texture, color, tone, mass, void, light and shadow…) we are sculpting your dreams and needs to reality in one form.</p>",
            ],
        ]);

        $page->file()->create([
            "path" => "seeders/pages/about.jpg",
            "type" => "image",
        ]);

        //message
        $page = Page::create([
            "identifier" => "message",
            "has_sub_title" => 0,
            "has_description" => 1,
            "has_link" => 0,
            "has_video" => 0,
            "has_image" => 1,
            "ar" => [
                "title" => "رسالتنا",
                "description" => "<p>نسعى جاهدين لتقديم خدمات تصميم داخلي عالية الجودة لعملائنا ضمن جدولهم الزمني وميزانيتهم. الأخلاقية في جميع تعاملاتنا مع العملاء والبائعين والموردين. لدينا فريق ماهر وشامل يهتم بالتفاصيل. مساحة العمل لدينا داعمة وخالية من السياسة ومفتوحة دائمًا للمفاوضات. أسعار منافسة.</p>",
            ],
            "en" => [
                "title" => "Our Message",
                "description" => "<p>Striving to deliver quality interior design services to our clients within their schedule and budget. Ethical in all our dealings with clients, vendors and suppliers. We have a skilled and thorough team who have attention to detail. Our work space is supportive, free of politics and always open for negotiations. Competitive prices.</p>",
            ],
        ]);

        $page->file()->create([
            "path" => "seeders/pages/msg.jpg",
            "type" => "image",
        ]);
    }
}
