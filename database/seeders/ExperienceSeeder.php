<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    public function run()
    {
        //Experience 1
        Experience::create([
            "status" => "1",
            "number" => "85",
            "ar" => [
                "title" => "تصميم داخلي",
            ],

            "en" => [
                "title" => "Interior Design",
            ],
        ]);

        //Experience 2
        Experience::create([
            "status" => "1",
            "number" => "95",
            "ar" => [
                "title" => "التصاميم الخارجية",
            ],

            "en" => [
                "title" => "Exterior Designs",
            ],
        ]);

        //Experience 3
        Experience::create([
            "status" => "1",
            "number" => "87",
            "ar" => [
                "title" => "تجديد البيت",
            ],

            "en" => [
                "title" => "Home Rennovation",
            ],
        ]);

        //Experience 3
        Experience::create([
            "status" => "1",
            "number" => "90",
            "ar" => [
                "title" => "حلول متكاملة",
            ],

            "en" => [
                "title" => "Turnkey Solutions",
            ],
        ]);


    }
}
