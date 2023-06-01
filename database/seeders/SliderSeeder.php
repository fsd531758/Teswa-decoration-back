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
                "title" => "المعمار للديكور",
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
                "title" => "100+ علامة تجارية",
                "sub_title" => "فن المعمار للديكور",
                "description" => "<p>تشكيلة واسعة من ماركات التصميم الإيطالية والعالمية.</p>",
            ],

            "en" => [
                "title" => "100+ BRANDS",
                "sub_title" => "Fan Al Meamar For Decoration",
                "description" => "<p>A wide selection of Italian and international design brands.</p>",
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
                "title" => "أعد التفكير في مساحتك",
                "sub_title" => "فن المعمار للديكور",
                "description" => "<p>عصري أو كلاسيكي - لدينا كل ما تحتاجه!</p>",
            ],

            "en" => [
                "title" => "Rethink Your Space",
                "sub_title" => "Fan Al Meamar For Decoration",
                "description" => "<p>Trendy or Classic - We Have Everything You Need!</p>",
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
                "title" => "مجموعة واسعة من المنتجات",
                "sub_title" => "فن المعمار للديكور",
                "description" => "<p>تسوق منتجاتنا واختر العلامات التجارية التي تناسب احتياجاتك وتعكس أسلوبك بشكل أفضل.</p>",
            ],

            "en" => [
                "title" => "A Wide Selection OF Products",
                "sub_title" => "Fan Al Meamar For Decoration",
                "description" => "<p>Shop our Products and choose the brands that better suit your needs and reflect your style.</p>",
            ],
        ]);
        $slider->file()->create([
            "path" => "seeders/sliders/slider_img_4.jpg",
            "type" => "image",
        ]);
    }
}
