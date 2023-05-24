<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run()
    {
        $setting = Setting::create([
            'map' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463877.31803441915!2d46.492192983072115!3d24.725453869058928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2sRiyadh%20Saudi%20Arabia!5e0!3m2!1sen!2seg!4v1683700196645!5m2!1sen!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            
                'ar' => [
                'website_title'         => 'فن المعمار للديكور',
                'address'               => 'الرياض المملكة العربية السعودية',
                'copyrights'            => 'جميع الحقوق محفوظة لدى فن المعمار للديكور ©2023',
                'meta_title'            => 'فن المعمار للديكور',
                'meta_description'      => 'فن المعمار للديكور',
                'meta_keywords'         => 'فن المعمار للديكور',
                'footer_description'    => '<p>فن المعمار للديكور</p>',
            ],
            'en' => [
                'website_title'         => 'Fan Al Meamar For Decoration',
                'address'               => 'Riyadh Saudi Arabia',
                'copyrights'            => 'All rights reserved to Fan Al Meamar For Decoration © 2023',
                'meta_title'            => 'Fan Al Meamar For Decoration',
                'meta_description'      => 'Fan Al Meamar For Decoration',
                'meta_keywords'         => 'Fan Al Meamar For Decoration',
                'footer_description'    => '<p>Fan Al Meamar For Decoration</p>',
            ],
            'contact_email' => 'mohamed@app.com',
            'newsletter_email' => 'mohamed@app.com',
        ]);
        $setting->file()->create([
            'path' => 'seeders/settings/logo.png',
            'type' => 'logo'
        ]);

        $setting->file()->create([
            'path' => 'seeders/settings/white_logo.png',
            'type' => 'white_logo'
        ]);

        $setting->file()->create([
            'path' => 'seeders/settings/favicon.png',
            'type' => 'favicon'
        ]);

        $setting->file()->create([
            'path' => 'seeders/settings/contact_img.png',
            'type' => 'contact_img'
        ]);

        $setting->file()->create([
            'path' => 'seeders/settings/footer_img.jpg',
            'type' => 'footer_img'
        ]);

        $setting->file()->create([
            'path' => 'seeders/settings/breadcrumb.jpg',
            'type' => 'breadcrumb'
        ]);
    }
}
