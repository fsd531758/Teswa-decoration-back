<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{

    public function run()
    {
        //color 1
        Color::create([
            "status" => "1",
            "hex" => "#bbbcbc",
            "ar" => [
                "title" => "رمادى",
            ],

            "en" => [
                "title" => "Grey",
            ],
        ]);

        //color 2
        Color::create([
            "status" => "1",
            "hex" => "#000000",
            "ar" => [
                "title" => "أسود",
            ],

            "en" => [
                "title" => "Black",
            ],
        ]);

        //color 3
        Color::create([
            "status" => "1",
            "hex" => "#978b7f",
            "ar" => [
                "title" => "بيج",
            ],

            "en" => [
                "title" => "Beig",
            ],
        ]);

        //color 4
        Color::create([
            "status" => "1",
            "hex" => "#6E2C00",
            "ar" => [
                "title" => "بنى",
            ],

            "en" => [
                "title" => "Brown",
            ],
        ]);

        //color 5
        Color::create([
            "status" => "1",
            "hex" => "#FFFFFF",
            "ar" => [
                "title" => "أبيض",
            ],

            "en" => [
                "title" => "White",
            ],
        ]);

        //color 5
        Color::create([
            "status" => "1",
            "hex" => "#808000",
            "ar" => [
                "title" => "زيتي",
            ],

            "en" => [
                "title" => "Olive",
            ],
        ]);

        //color 5
        Color::create([
            "status" => "1",
            "hex" => "#008080",
            "ar" => [
                "title" => "تركواز",
            ],

            "en" => [
                "title" => "Teal",
            ],
        ]);

        //color 5
        Color::create([
            "status" => "1",
            "hex" => "#ADD8E6",
            "ar" => [
                "title" => "لبنى",
            ],

            "en" => [
                "title" => "Light Blue",
            ],
        ]);

        //color 5
        Color::create([
            "status" => "1",
            "hex" => "#0000FF",
            "ar" => [
                "title" => "أزرق",
            ],

            "en" => [
                "title" => "Blue",
            ],
        ]);

        //color 5
        Color::create([
            "status" => "1",
            "hex" => "#00008B",
            "ar" => [
                "title" => "كحلى",
            ],

            "en" => [
                "title" => "Navy",
            ],
        ]);

        //color 5
        Color::create([
            "status" => "1",
            "hex" => "#FF0000",
            "ar" => [
                "title" => "أحمر",
            ],

            "en" => [
                "title" => "Red",
            ],
        ]);


        //color 5
        Color::create([
            "status" => "1",
            "hex" => "#800080",
            "ar" => [
                "title" => "أرجوانى",
            ],

            "en" => [
                "title" => "Purple",
            ],
        ]);

        //color 5
        Color::create([
            "status" => "1",
            "hex" => "#E6E6FA",
            "ar" => [
                "title" => "أرجوانى فاتح",
            ],

            "en" => [
                "title" => "Lavender",
            ],
        ]);

        //color 5
        Color::create([
            "status" => "1",
            "hex" => "#FFD700",
            "ar" => [
                "title" => "ذهبى",
            ],

            "en" => [
                "title" => "Gold",
            ],
        ]);

        //color 5
        Color::create([
            "status" => "1",
            "hex" => "#F8F0E3",
            "ar" => [
                "title" => "أوف وايت",
            ],

            "en" => [
                "title" => "Off White",
            ],
        ]);
    }
}
