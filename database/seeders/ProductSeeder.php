<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{

    public function run()
    {
        //product 1
        $images = [
            'seeders/products/01.jpg',
            'seeders/products/02.jpg',
            'seeders/products/03.jpg',
            'seeders/products/04.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "price" => "300",
            "category_id" => "1",
            "ar" => [
                "title" => "ردي فكس",
                "short_description" => "<p>KronoFlooring الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>أميال هو أحد مشاريع شركة أميال البناء - الرياض حى المعيزيلة</p>
                                <ul>
                                <li>التأثير: بلوط</li>
                                <li>اللون: رمادي فاتح</li>
                                <li>طريقة التثبيت: 1 clic2go</li>
                                <li>الأبعاد 8 × 192 × 1285 مم (سمك × عرض × طول)</li>
                                </ul>",
            ],

            "en" => [
                "title" => "Ready Fix",
                "short_description" => "<p>KronoFlooring Original 5950 8MM</p>",
                "description" => "<p>Amyal is one of the projects of Amyal Building Company - Riyadh, Al-Muayzelah District</p>
                                <ul>
                                <li>Effect: Oak</li>
                                <li>Color: Light Grey</li>
                                <li>Installation method: 1clic2go</li>
                                <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                </ul>",
            ],
        ]);

        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images[$i],
                "type" => "image",
            ]);
        }

        // $product->file()->create([
        //     "path" => "seeders/products/1-1.jpg",
        //     "type" => "project_model_img_1",
        // ]);
        // $product->file()->create([
        //     "path" => "seeders/products/1-2.jpg",
        //     "type" => "project_model_img_2",
        // ]);

        //product 2
        $images_2 = [
            'seeders/products/05.jpg',
            'seeders/products/06.jpg',
            'seeders/products/07.jpg',
            'seeders/products/08.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "price" => "300",
            "category_id" => "1",
            "ar" => [
                "title" => "ردي فكس 1",
                "short_description" => "<p>KronoFlooring الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>أميال هو أحد مشاريع شركة أميال البناء - الرياض حى المعيزيلة</p>
                                        <ul>
                                        <li>التأثير: بلوط</li>
                                        <li>اللون: رمادي فاتح</li>
                                        <li>طريقة التثبيت: 1 clic2go</li>
                                        <li>الأبعاد 8 × 192 × 1285 مم (سمك × عرض × طول)</li>
                                        </ul>",
            ],

            "en" => [
                "title" => "Ready Fix 1",
                "short_description" => "<p>KronoFlooring Original 5950 8MM</p>",
                "description" => "<p>Amyal is one of the projects of Amyal Building Company - Riyadh, Al-Muayzelah District</p>
                                        <ul>
                                        <li>Effect: Oak</li>
                                        <li>Color: Light Grey</li>
                                        <li>Installation method: 1clic2go</li>
                                        <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                        </ul>",
            ],
        ]);

        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_2[$i],
                "type" => "image",
            ]);
        }
        //product 3
        $images_3 = [
            'seeders/products/09.jpg',
            'seeders/products/10.jpg',
            'seeders/products/11.jpg',
            'seeders/products/12.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "price" => "300",
            "category_id" => "1",
            "ar" => [
                "title" => "ردي فكس 2",
                "short_description" => "<p>KronoFlooring الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>أميال هو أحد مشاريع شركة أميال البناء - الرياض حى المعيزيلة</p>
                                        <ul>
                                        <li>التأثير: بلوط</li>
                                        <li>اللون: رمادي فاتح</li>
                                        <li>طريقة التثبيت: 1 clic2go</li>
                                        <li>الأبعاد 8 × 192 × 1285 مم (سمك × عرض × طول)</li>
                                        </ul>",
            ],

            "en" => [
                "title" => "Ready Fix 2",
                "short_description" => "<p>KronoFlooring Original 5950 8MM</p>",
                "description" => "<p>Amyal is one of the projects of Amyal Building Company - Riyadh, Al-Muayzelah District</p>
                                        <ul>
                                        <li>Effect: Oak</li>
                                        <li>Color: Light Grey</li>
                                        <li>Installation method: 1clic2go</li>
                                        <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                        </ul>",
            ],
        ]);

        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_3[$i],
                "type" => "image",
            ]);
        }

        //product 4
        $images_4 = [
            'seeders/products/13.jpg',
            'seeders/products/14.jpg',
            'seeders/products/15.jpg',
            'seeders/products/16.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "price" => "300",
            "category_id" => "1",
            "ar" => [
                "title" => "ردي فكس3",
                "short_description" => "<p>KronoFlooring الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>أميال هو أحد مشاريع شركة أميال البناء - الرياض حى المعيزيلة</p>
                                        <ul>
                                        <li>التأثير: بلوط</li>
                                        <li>اللون: رمادي فاتح</li>
                                        <li>طريقة التثبيت: 1 clic2go</li>
                                        <li>الأبعاد 8 × 192 × 1285 مم (سمك × عرض × طول)</li>
                                        </ul>",
            ],

            "en" => [
                "title" => "Ready Fix 3",
                "short_description" => "<p>KronoFlooring Original 5950 8MM</p>",
                "description" => "<p>Amyal is one of the projects of Amyal Building Company - Riyadh, Al-Muayzelah District</p>
                                        <ul>
                                        <li>Effect: Oak</li>
                                        <li>Color: Light Grey</li>
                                        <li>Installation method: 1clic2go</li>
                                        <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                        </ul>",
            ],
        ]);

        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_4[$i],
                "type" => "image",
            ]);
        }

        //product 5
        $images_5 = [
            'seeders/products/17.jpg',
            'seeders/products/18.jpg',
            'seeders/products/19.jpg',
            'seeders/products/20.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "price" => "300",
            "category_id" => "2",
            "ar" => [
                "title" => "ردي فكس 4",
                "short_description" => "<p>KronoFlooring الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>أميال هو أحد مشاريع شركة أميال البناء - الرياض حى المعيزيلة</p>
                                        <ul>
                                        <li>التأثير: بلوط</li>
                                        <li>اللون: رمادي فاتح</li>
                                        <li>طريقة التثبيت: 1 clic2go</li>
                                        <li>الأبعاد 8 × 192 × 1285 مم (سمك × عرض × طول)</li>
                                        </ul>",
            ],

            "en" => [
                "title" => "Ready Fix 4",
                "short_description" => "<p>KronoFlooring Original 5950 8MM</p>",
                "description" => "<p>Amyal is one of the projects of Amyal Building Company - Riyadh, Al-Muayzelah District</p>
                                        <ul>
                                        <li>Effect: Oak</li>
                                        <li>Color: Light Grey</li>
                                        <li>Installation method: 1clic2go</li>
                                        <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                        </ul>",
            ],
        ]);

        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_5[$i],
                "type" => "image",
            ]);
        }

        //product 6
        $images_6 = [
            'seeders/products/21.jpg',
            'seeders/products/22.jpg',
            'seeders/products/23.jpg',
            'seeders/products/24.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "price" => "300",
            "category_id" => "2",
            "ar" => [
                "title" => "ردي فكس 5",
                "short_description" => "<p>KronoFlooring الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>أميال هو أحد مشاريع شركة أميال البناء - الرياض حى المعيزيلة</p>
                                                <ul>
                                                <li>التأثير: بلوط</li>
                                                <li>اللون: رمادي فاتح</li>
                                                <li>طريقة التثبيت: 1 clic2go</li>
                                                <li>الأبعاد 8 × 192 × 1285 مم (سمك × عرض × طول)</li>
                                                </ul>",
            ],

            "en" => [
                "title" => "Ready Fix 5",
                "short_description" => "<p>KronoFlooring Original 5950 8MM</p>",
                "description" => "<p>Amyal is one of the projects of Amyal Building Company - Riyadh, Al-Muayzelah District</p>
                                                <ul>
                                                <li>Effect: Oak</li>
                                                <li>Color: Light Grey</li>
                                                <li>Installation method: 1clic2go</li>
                                                <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                                </ul>",
            ],
        ]);

        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_6[$i],
                "type" => "image",
            ]);
        }

        //product 7
        $images_7 = [
            'seeders/products/25.jpg',
            'seeders/products/26.jpg',
            'seeders/products/27.jpg',
            'seeders/products/28.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "price" => "300",
            "category_id" => "2",
            "ar" => [
                "title" => "ردي فكس 6",
                "short_description" => "<p>KronoFlooring الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>أميال هو أحد مشاريع شركة أميال البناء - الرياض حى المعيزيلة</p>
                                                <ul>
                                                <li>التأثير: بلوط</li>
                                                <li>اللون: رمادي فاتح</li>
                                                <li>طريقة التثبيت: 1 clic2go</li>
                                                <li>الأبعاد 8 × 192 × 1285 مم (سمك × عرض × طول)</li>
                                                </ul>",
            ],

            "en" => [
                "title" => "Ready Fix 6",
                "short_description" => "<p>KronoFlooring Original 5950 8MM</p>",
                "description" => "<p>Amyal is one of the projects of Amyal Building Company - Riyadh, Al-Muayzelah District</p>
                                                <ul>
                                                <li>Effect: Oak</li>
                                                <li>Color: Light Grey</li>
                                                <li>Installation method: 1clic2go</li>
                                                <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                                </ul>",
            ],
        ]);

        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_7[$i],
                "type" => "image",
            ]);
        }

        //product 8
        $images_8 = [
            'seeders/products/29.jpg',
            'seeders/products/30.jpg',
            'seeders/products/31.jpg',
            'seeders/products/32.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "price" => "300",
            "category_id" => "3",
            "ar" => [
                "title" => "ردي فكس 7",
                "short_description" => "<p>KronoFlooring الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>أميال هو أحد مشاريع شركة أميال البناء - الرياض حى المعيزيلة</p>
                                                        <ul>
                                                        <li>التأثير: بلوط</li>
                                                        <li>اللون: رمادي فاتح</li>
                                                        <li>طريقة التثبيت: 1 clic2go</li>
                                                        <li>الأبعاد 8 × 192 × 1285 مم (سمك × عرض × طول)</li>
                                                        </ul>",
            ],

            "en" => [
                "title" => "Ready Fix 7",
                "short_description" => "<p>KronoFlooring Original 5950 8MM</p>",
                "description" => "<p>Amyal is one of the projects of Amyal Building Company - Riyadh, Al-Muayzelah District</p>
                                                        <ul>
                                                        <li>Effect: Oak</li>
                                                        <li>Color: Light Grey</li>
                                                        <li>Installation method: 1clic2go</li>
                                                        <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                                        </ul>",
            ],
        ]);

        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_8[$i],
                "type" => "image",
            ]);
        }

        //product 8
        $images_9 = [
            'seeders/products/33.jpg',
            'seeders/products/34.jpg',
            'seeders/products/35.jpg',
            'seeders/products/36.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "price" => "300",
            "category_id" => "3",
            "ar" => [
                "title" => "ردي فكس 8",
                "short_description" => "<p>KronoFlooring الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>أميال هو أحد مشاريع شركة أميال البناء - الرياض حى المعيزيلة</p>
                                                        <ul>
                                                        <li>التأثير: بلوط</li>
                                                        <li>اللون: رمادي فاتح</li>
                                                        <li>طريقة التثبيت: 1 clic2go</li>
                                                        <li>الأبعاد 8 × 192 × 1285 مم (سمك × عرض × طول)</li>
                                                        </ul>",
            ],

            "en" => [
                "title" => "Ready Fix 8",
                "short_description" => "<p>KronoFlooring Original 5950 8MM</p>",
                "description" => "<p>Amyal is one of the projects of Amyal Building Company - Riyadh, Al-Muayzelah District</p>
                                                        <ul>
                                                        <li>Effect: Oak</li>
                                                        <li>Color: Light Grey</li>
                                                        <li>Installation method: 1clic2go</li>
                                                        <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                                        </ul>",
            ],
        ]);

        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_9[$i],
                "type" => "image",
            ]);
        }

        //product 10
        $images_10 = [
            'seeders/products/37.jpg',
            'seeders/products/38.jpg',
            'seeders/products/39.jpg',
            'seeders/products/40.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "price" => "300",
            "category_id" => "3",
            "ar" => [
                "title" => "ردي فكس 9",
                "short_description" => "<p>KronoFlooring الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>أميال هو أحد مشاريع شركة أميال البناء - الرياض حى المعيزيلة</p>
                                                        <ul>
                                                        <li>التأثير: بلوط</li>
                                                        <li>اللون: رمادي فاتح</li>
                                                        <li>طريقة التثبيت: 1 clic2go</li>
                                                        <li>الأبعاد 8 × 192 × 1285 مم (سمك × عرض × طول)</li>
                                                        </ul>",
            ],

            "en" => [
                "title" => "Ready Fix 9",
                "short_description" => "<p>KronoFlooring Original 5950 8MM</p>",
                "description" => "<p>Amyal is one of the projects of Amyal Building Company - Riyadh, Al-Muayzelah District</p>
                                                        <ul>
                                                        <li>Effect: Oak</li>
                                                        <li>Color: Light Grey</li>
                                                        <li>Installation method: 1clic2go</li>
                                                        <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                                        </ul>",
            ],
        ]);

        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_10[$i],
                "type" => "image",
            ]);
        }

        //product 8
        $images_11 = [
            'seeders/products/41.jpg',
            'seeders/products/42.jpg',
            'seeders/products/43.jpg',
            'seeders/products/44.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "price" => "300",
            "category_id" => "4",
            "ar" => [
                "title" => "ردي فكس 10",
                "short_description" => "<p>KronoFlooring الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>أميال هو أحد مشاريع شركة أميال البناء - الرياض حى المعيزيلة</p>
                                                                <ul>
                                                                <li>التأثير: بلوط</li>
                                                                <li>اللون: رمادي فاتح</li>
                                                                <li>طريقة التثبيت: 1 clic2go</li>
                                                                <li>الأبعاد 8 × 192 × 1285 مم (سمك × عرض × طول)</li>
                                                                </ul>",
            ],

            "en" => [
                "title" => "Ready Fix 10",
                "short_description" => "<p>KronoFlooring Original 5950 8MM</p>",
                "description" => "<p>Amyal is one of the projects of Amyal Building Company - Riyadh, Al-Muayzelah District</p>
                                                                <ul>
                                                                <li>Effect: Oak</li>
                                                                <li>Color: Light Grey</li>
                                                                <li>Installation method: 1clic2go</li>
                                                                <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                                                </ul>",
            ],
        ]);

        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_11[$i],
                "type" => "image",
            ]);
        }

        //product 12
        $images_12 = [
            'seeders/products/45.jpg',
            'seeders/products/46.jpg',
            'seeders/products/47.jpg',
            'seeders/products/48.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "price" => "300",
            "category_id" => "4",
            "ar" => [
                "title" => "ردي فكس 11",
                "short_description" => "<p>KronoFlooring الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>أميال هو أحد مشاريع شركة أميال البناء - الرياض حى المعيزيلة</p>
                                                                        <ul>
                                                                        <li>التأثير: بلوط</li>
                                                                        <li>اللون: رمادي فاتح</li>
                                                                        <li>طريقة التثبيت: 1 clic2go</li>
                                                                        <li>الأبعاد 8 × 192 × 1285 مم (سمك × عرض × طول)</li>
                                                                        </ul>",
            ],

            "en" => [
                "title" => "Ready Fix 11",
                "short_description" => "<p>KronoFlooring Original 5950 8MM</p>",
                "description" => "<p>Amyal is one of the projects of Amyal Building Company - Riyadh, Al-Muayzelah District</p>
                                                                        <ul>
                                                                        <li>Effect: Oak</li>
                                                                        <li>Color: Light Grey</li>
                                                                        <li>Installation method: 1clic2go</li>
                                                                        <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                                                        </ul>",
            ],
        ]);

        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_12[$i],
                "type" => "image",
            ]);
        }

        //product 3
        $images_13 = [
            'seeders/products/49.jpg',
            'seeders/products/50.jpg',
            'seeders/products/51.jpg',
            'seeders/products/52.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "price" => "300",
            "category_id" => "4",
            "ar" => [
                "title" => "ردي فكس 12",
                "short_description" => "<p>KronoFlooring الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>أميال هو أحد مشاريع شركة أميال البناء - الرياض حى المعيزيلة</p>
                                                                        <ul>
                                                                        <li>التأثير: بلوط</li>
                                                                        <li>اللون: رمادي فاتح</li>
                                                                        <li>طريقة التثبيت: 1 clic2go</li>
                                                                        <li>الأبعاد 8 × 192 × 1285 مم (سمك × عرض × طول)</li>
                                                                        </ul>",
            ],

            "en" => [
                "title" => "Ready Fix 12",
                "short_description" => "<p>KronoFlooring Original 5950 8MM</p>",
                "description" => "<p>Amyal is one of the projects of Amyal Building Company - Riyadh, Al-Muayzelah District</p>
                                                                        <ul>
                                                                        <li>Effect: Oak</li>
                                                                        <li>Color: Light Grey</li>
                                                                        <li>Installation method: 1clic2go</li>
                                                                        <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                                                        </ul>",
            ],
        ]);

        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_13[$i],
                "type" => "image",
            ]);
        }
    }
}
