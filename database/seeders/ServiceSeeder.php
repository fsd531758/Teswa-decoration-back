<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{

    public function run()
    {
        //service 1
        Service::create([
            "status" => "1",
            "icon" => "fas fa-chair",
            "ar" => [
                "title" => "غرفة المعيشة",
                "description" => "<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. . </p>",
            ],

            "en" => [
                "title" => "Living Room",
                "description" => "<p>Lorem ipsum dolor amet, consectetur adipiscing elit augue diam, accumsan ipsum dolor sit amet, consectetur adipiscing.</p>",
            ],
        ]);

        //service 2
        Service::create([
            "status" => "1",
            "icon" => "fas fa-cloud-sun",
            "ar" => [
                "title" => "الأثاث الخارجى",
                "description" => "<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. . </p>",
            ],

            "en" => [
                "title" => "Outdoor Furniture",
                "description" => "<p>Lorem ipsum dolor amet, consectetur adipiscing elit augue diam, accumsan ipsum dolor sit amet, consectetur adipiscing.</p>",
            ],
        ]);

        //service 3
        Service::create([
            "status" => "1",
            "icon" => "fas fa-utensils",
            "ar" => [
                "title" => "مناطق تناول الطعام",
                "description" => "<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. . </p>",
            ],

            "en" => [
                "title" => "Dinning Areas",
                "description" => "<p>Lorem ipsum dolor amet, consectetur adipiscing elit augue diam, accumsan ipsum dolor sit amet, consectetur adipiscing.</p>",
            ],
        ]);

        //service 1
        Service::create([
            "status" => "1",
            "icon" => "fas fa-mug-hot",
            "ar" => [
                "title" => "مستلزمات المطابخ",
                "description" => "<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. . </p>",
            ],

            "en" => [
                "title" => "Kitchen Essentials",
                "description" => "<p>Lorem ipsum dolor amet, consectetur adipiscing elit augue diam, accumsan ipsum dolor sit amet, consectetur adipiscing.</p>",
            ],
        ]);

        //service 2
        Service::create([
            "status" => "1",
            "icon" => "fas fa-bed",
            "ar" => [
                "title" => "ديكورات غرف النوم",
                "description" => "<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. . </p>",
            ],

            "en" => [
                "title" => "Bedroom Decorations",
                "description" => "<p>Lorem ipsum dolor amet, consectetur adipiscing elit augue diam, accumsan ipsum dolor sit amet, consectetur adipiscing.</p>",
            ],
        ]);

        //service 3
        Service::create([
            "status" => "1",
            "icon" => "fas fa-briefcase",
            "ar" => [
                "title" => "ديكورات المكاتب",
                "description" => "<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. . </p>",
            ],

            "en" => [
                "title" => "Office Decoration",
                "description" => "<p>Lorem ipsum dolor amet, consectetur adipiscing elit augue diam, accumsan ipsum dolor sit amet, consectetur adipiscing.</p>",
            ],
        ]);
    }
}
