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
            "ar" => [
                "title" => "غرفة المعيشة 1",
                "description" => "<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. . </p>",
            ],

            "en" => [
                "title" => "Living Room 1",
                "description" => "<p>Lorem ipsum dolor amet, consectetur adipiscing elit augue diam, accumsan ipsum dolor sit amet, consectetur adipiscing.</p>",
            ],
        ]);

        //service 2
        Service::create([
            "status" => "1",
            "ar" => [
                "title" => "الأثاث الخارجى 1",
                "description" => "<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. . </p>",
            ],

            "en" => [
                "title" => "Outdoor Furniture 1",
                "description" => "<p>Lorem ipsum dolor amet, consectetur adipiscing elit augue diam, accumsan ipsum dolor sit amet, consectetur adipiscing.</p>",
            ],
        ]);

        //service 3
        Service::create([
            "status" => "1",
            "ar" => [
                "title" => "مناطق تناول الطعام 1",
                "description" => "<p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. . </p>",
            ],

            "en" => [
                "title" => "Dinning Areas 1",
                "description" => "<p>Lorem ipsum dolor amet, consectetur adipiscing elit augue diam, accumsan ipsum dolor sit amet, consectetur adipiscing.</p>",
            ],
        ]);
    }
}
