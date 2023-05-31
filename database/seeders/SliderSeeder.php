<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{

    public function run()
    {
        //slider 1
        $slider = Slider::create([
            "status" => "1",
            "ar" => [
                "title" => " 🤦‍♀️فن المعمار للديكور",
                "sub_title" => "جعل المنزل أكثر روعة",
                "description" => "<p>جميل وسلس وأنيق</p>",
            ],

            "en" => [
                "title" => "Fan Al Meamar For Decoration",
                "sub_title" => "BRING Magic TO HOME",
                "description" => "<p>Beautiful , Smooth & Elegant</p>",
            ],
        ]);
        $slider->file()->create([
            "path" => "seeders/sliders/slider_img_1.jpg",
            "type" => "image",
        ]);

        //slider 2
        $slider = Slider::create([
            "status" => "1",
            "ar" => [
                "title" => "فن المعمار للديكور 1",
                "sub_title" => "جعل المنزل أكثر روعة",
                "description" => "<p>جميل وسلس وأنيق</p>",
            ],

            "en" => [
                "title" => "Fan Al Meamar For Decoration 1",
                "sub_title" => "BRING Magic TO HOME",
                "description" => "<p>Beautiful , Smooth & Elegant</p>",
            ],
        ]);
        $slider->file()->create([
            "path" => "seeders/sliders/slider_img_2.jpg",
            "type" => "image",
        ]);

        //slider 3
        $slider = Slider::create([
            "status" => "1",
            "ar" => [
                "title" => "فن المعمار للديكور 2",
                "sub_title" => "جعل المنزل أكثر روعة",
                "description" => "<p>جميل وسلس وأنيق</p>",
            ],

            "en" => [
                "title" => "Fan Al Meamar For Decoration 2",
                "sub_title" => "BRING Magic TO HOME",
                "description" => "<p>Beautiful , Smooth & Elegant</p>",
            ],
        ]);
        $slider->file()->create([
            "path" => "seeders/sliders/slider_img_3.jpg",
            "type" => "image",
        ]);

        //slider 4
        $slider = Slider::create([
            "status" => "1",
            "ar" => [
                "title" => "فن المعمار للديكور 3",
                "sub_title" => "جعل المنزل أكثر روعة",
                "description" => "<p>جميل وسلس وأنيق</p>",
            ],

            "en" => [
                "title" => "Fan Al Meamar For Decoration 3",
                "sub_title" => "BRING Magic TO HOME",
                "description" => "<p>Beautiful , Smooth & Elegant</p>",
            ],
        ]);
        $slider->file()->create([
            "path" => "seeders/sliders/slider_img_4.jpg",
            "type" => "image",
        ]);
    }
}
