<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{

    public function run()
    {
        //partner 1
        $partner = Partner::create([
            "status" => "1",
        ]);
        $partner->file()->create([
            "path" => "seeders/partners/01.png",
            "type" => "image",
        ]);

        //partner 2
        $partner = Partner::create([
            "status" => "1",
        ]);
        $partner->file()->create([
            "path" => "seeders/partners/02.png",
            "type" => "image",
        ]);

        //partner 3
        $partner = Partner::create([
            "status" => "1",
        ]);
        $partner->file()->create([
            "path" => "seeders/partners/03.png",
            "type" => "image",
        ]);

        //partner 4
        $partner = Partner::create([
            "status" => "1",
        ]);
        $partner->file()->create([
            "path" => "seeders/partners/04.png",
            "type" => "image",
        ]);

        //partner 5
        $partner = Partner::create([
            "status" => "1",
        ]);
        $partner->file()->create([
            "path" => "seeders/partners/05.png",
            "type" => "image",
        ]);

        //partner 6
        $partner = Partner::create([
            "status" => "1",
        ]);
        $partner->file()->create([
            "path" => "seeders/partners/06.png",
            "type" => "image",
        ]);

        //partner 7
        $partner = Partner::create([
            "status" => "1",
        ]);
        $partner->file()->create([
            "path" => "seeders/partners/07.png",
            "type" => "image",
        ]);

        //partner 8
        $partner = Partner::create([
            "status" => "1",
        ]);
        $partner->file()->create([
            "path" => "seeders/partners/08.png",
            "type" => "image",
        ]);
    }
}
