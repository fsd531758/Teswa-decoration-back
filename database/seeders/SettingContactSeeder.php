<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingContactSeeder extends Seeder
{

    public function run()
    {
        $setting = Setting::first();
        //contact 1
        $setting->contact()->create([
            "status" => "1",
            "contact" => "+163112345678",
            "type" => "mobile",
            "icon" => "fas fa-mobile-alt",
        ]);

        //contact 2
        $setting->contact()->create([
            "status" => "1",
            "contact" => "+163112345678",
            "type" => "mobile",
            "icon" => "fas fa-mobile-alt",
        ]);

        //contact 3
        $setting->contact()->create([
            "status" => "1",
            "contact" => "email@website.com",
            "type" => "email",
            "icon" => "far fa-envelope",
        ]);

        //contact 4
        $setting->contact()->create([
            "status" => "1",
            "contact" => "https://www.facebook.com/",
            "type" => "social",
            "icon" => "fab fa-facebook-f",
        ]);

        //contact 5
        $setting->contact()->create([
            "status" => "1",
            "contact" => "https://www.instagram.com/",
            "type" => "social",
            "icon" => "fab fa-instagram",
        ]);

        //contact 6
        $setting->contact()->create([
            "status" => "1",
            "contact" => "https://twitter.com/",
            "type" => "social",
            "icon" => "fab fa-twitter",
        ]);

        //contact 7
        $setting->contact()->create([
            "status" => "1",
            "contact" => "https://www.linkedin.com/",
            "type" => "social",
            "icon" => "fab fa-linkedin-in",
        ]);
        
        //contact 8
        $setting->contact()->create([
            "status" => "1",
            "contact" => "https://www.pinterest.com/",
            "type" => "social",
            "icon" => "fab fa-pinterest-p",
        ]);
    }
}
