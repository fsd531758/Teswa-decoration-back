<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        //category 1
        $category = Category::create([
            "status" => "1",
            "section_id" => "1",
            "ar" => [
                "title" => "باركيه",
            ],

            "en" => [
                "title" => "Parquet",
            ],
        ]);

        $category->file()->create([
            "path" => "seeders/categories/parquet.jpg",
            "type" => "image",
        ]);


        //category 2
        $category = Category::create([
            "status" => "1",
            "section_id" => "1",
            "ar" => [
                "title" => "باركيه ضد الماء",
            ],

            "en" => [
                "title" => "Parquet against water",
            ],
        ]);

        $category->file()->create([
            "path" => "seeders/categories/spc.jpg",
            "type" => "image",
        ]);

        //category 3
        $category = Category::create([
            "status" => "1",
            "section_id" => "2",
            "ar" => [
                "title" => "خشبى بلاستيكي داخلى",
            ],

            "en" => [
                "title" => "Wooden Plastic",
            ],
        ]);

        $category->file()->create([
            "path" => "seeders/categories/wooden_plastic.jpg",
            "type" => "image",
        ]);

        //category 4
        $category = Category::create([
            "status" => "1",
            "section_id" => "2",
            "ar" => [
                "title" => "ورق جدران",
            ],

            "en" => [
                "title" => "WallPaper",
            ],
        ]);

        $category->file()->create([
            "path" => "seeders/categories/wallpaper.jpg",
            "type" => "image",
        ]);

        //category 5
        // $category = Category::create([
        //     "status" => "1",
        //     "section_id" => "2",
        //     "ar" => [
        //         "title" => "جدارى خشبى داخلى",
        //     ],

        //     "en" => [
        //         "title" => "Wood",
        //     ],
        // ]);

        // $category->file()->create([
        //     "path" => "seeders/categories/wood.jpg",
        //     "type" => "image",
        // ]);

        //category 6
        $category = Category::create([
            "status" => "1",
            "section_id" => "3",
            "ar" => [
                "title" => "أرضيات خارجية خشبى بلاستيك",
            ],

            "en" => [
                "title" => "Outdoor Flooring WPC",
            ],
        ]);

        $category->file()->create([
            "path" => "seeders/categories/wpc.jpg",
            "type" => "image",
        ]);

        //category 6
        $category = Category::create([
            "status" => "1",
            "section_id" => "3",
            "ar" => [
                "title" => "عشب جدارى",
            ],

            "en" => [
                "title" => "Grass",
            ],
        ]);

        $category->file()->create([
            "path" => "seeders/categories/grass.jpg",
            "type" => "image",
        ]);

        //category 6
        // $category = Category::create([
        //     "status" => "1",
        //     "section_id" => "3",
        //     "ar" => [
        //         "title" => "عشب أرضى",
        //     ],

        //     "en" => [
        //         "title" => "Ground Grass",
        //     ],
        // ]);

        // $category->file()->create([
        //     "path" => "seeders/categories/ground_grass.jpg",
        //     "type" => "image",
        // ]);

        //category 6
        // $category = Category::create([
        //     "status" => "1",
        //     "section_id" => "4",
        //     "ar" => [
        //         "title" => "براويز جدارية",
        //     ],

        //     "en" => [
        //         "title" => "Wall Frames",
        //     ],
        // ]);

        // $category->file()->create([
        //     "path" => "seeders/categories/wall_frames.jpg",
        //     "type" => "image",
        // ]);

        //category 6
        $category = Category::create([
            "status" => "1",
            "section_id" => "4",
            "ar" => [
                "title" => "طاولات",
            ],

            "en" => [
                "title" => "Tables",
            ],
        ]);

        $category->file()->create([
            "path" => "seeders/categories/tables.jpg",
            "type" => "image",
        ]);

        //category 6
        $category = Category::create([
            "status" => "1",
            "section_id" => "4",
            "ar" => [
                "title" => "تحف منزلية",
            ],

            "en" => [
                "title" => "Home Antiques",
            ],
        ]);

        $category->file()->create([
            "path" => "seeders/categories/home_antiques.jpg",
            "type" => "image",
        ]);
    }
}
