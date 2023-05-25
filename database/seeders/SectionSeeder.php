<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{

    public function run()
    {
        //section 1
        Section::create([
            "status" => "1",
            "ar" => [
                "title" => "أرضيات",
            ],

            "en" => [
                "title" => "Floors",
            ],
        ]);

        //section 2
        Section::create([
            "status" => "1",
            "ar" => [
                "title" => "ديكورات الجدران",
            ],

            "en" => [
                "title" => "Wall Decorations",
            ],
        ]);

        //section 3
        Section::create([
            "status" => "1",
            "ar" => [
                "title" => "الحدائق",
            ],

            "en" => [
                "title" => "Gardens",
            ],
        ]);

        //section 4
        Section::create([
            "status" => "1",
            "ar" => [
                "title" => "أكسسوارات منزلية",
            ],

            "en" => [
                "title" => "Home Accessories",
            ],
        ]);

    }
}
