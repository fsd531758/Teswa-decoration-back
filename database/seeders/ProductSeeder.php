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
            "is_trending" => "1",
            "price" => "70",
            "category_id" => "1",
            "ar" => [
                "title" => "ردي فكس",
                "short_description" => "<p>KronoFlooring الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>التموجات من اللون البني الداكن والبني الفاتح تعطيك إطلالة جذابة وقريبة من لون الخشب الطبيعي . احصلي على أرضيات تلائم ذوقك. وصف العلامة التجارية توفر العلامة التجارية الألمانية الشهيرة ريدي فكس باركيه بجودة ممتازة وتصميمات وألوان ذات مظهر طبيعي يلائم الأذواق المختلفة ,صديق للبيئة, مقاوم للاشتعال,مقاوم للتآكل</p>
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
                "description" => "<p> Dark brown and light brown ripples give you an attractive look close to the natural wood color. Get floors that suit your style. Brand description : The famous German brand ReadyFX Parquet provides excellent quality, designs and colors with natural appearance to suit different tastes , eco-friend,flame resistant, corrosion resistant</p>
                                <ul>
                                <li>Effect: Oak</li>
                                <li>Color: Light Grey</li>
                                <li>Installation method: 1clic2go</li>
                                <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                </ul>",
            ],
        ]);

        $product->colors()->attach([1, 2, 3, 4, 5]);


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

        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "0",
            "price" => "65",
            "category_id" => "1",
            "ar" => [
                "title" => "وي باركيه كلاسيك",
                "short_description" => "<p>شيفرون باركيه 8 مم أرضيات من خشب البلوط الاسكندنافي (8194)</p>",
                "description" => "<p>التموجات من اللون البني الداكن والبني الفاتح تعطيك إطلالة جذابة وقريبة من لون الخشب الطبيعي . احصلي على أرضيات تلائم ذوقك. وصف العلامة التجارية توفر العلامة التجارية الألمانية الشهيرة ريدي فكس باركيه بجودة ممتازة وتصميمات وألوان ذات مظهر طبيعي يلائم الأذواق المختلفة ,صديق للبيئة, مقاوم للاشتعال,مقاوم للتآكل</p>
                                        <ul>
                                        <li>التأثير: بلوط</li>
                                        <li>اللون: رمادي فاتح</li>
                                        <li>طريقة التثبيت: 1 clic2go</li>
                                        <li>الأبعاد 8 × 192 × 1285 مم (سمك × عرض × طول)</li>
                                        </ul>",
            ],

            "en" => [
                "title" => "Wiparquet CLassic",
                "short_description" => "<p>Chevron Parquet 8mm Scandi Oak Laminate Flooring (8194)</p>",
                "description" => "<p> Dark brown and light brown ripples give you an attractive look close to the natural wood color. Get floors that suit your style. Brand description : The famous German brand ReadyFX Parquet provides excellent quality, designs and colors with natural appearance to suit different tastes , eco-friend,flame resistant, corrosion resistant</p>
                                        <ul>
                                        <li>Effect: Oak</li>
                                        <li>Color: Light Grey</li>
                                        <li>Installation method: 1clic2go</li>
                                        <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                        </ul>",
            ],
        ]);

        $product->colors()->attach([1, 2, 3, 4, 8, 10, 12]);

        for ($i = 0; $i < 2; $i++) {
            $product->files()->create([
                "path" => $images_2[$i],
                "type" => "image",
            ]);
        }

        //product 3
        $images_3 = [
            'seeders/products/07.jpg',
            'seeders/products/08.jpg',
            'seeders/products/09.jpg',
            'seeders/products/10.jpg',
            'seeders/products/11.jpg',
            'seeders/products/12.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "1",
            "price" => "90",
            "category_id" => "1",
            "ar" => [
                "title" => "ترندلاين برو",
                "short_description" => "<p>ترندلاين برو الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>التموجات من اللون البني الداكن والبني الفاتح تعطيك إطلالة جذابة وقريبة من لون الخشب الطبيعي . احصلي على أرضيات تلائم ذوقك. وصف العلامة التجارية توفر العلامة التجارية الألمانية الشهيرة ريدي فكس باركيه بجودة ممتازة وتصميمات وألوان ذات مظهر طبيعي يلائم الأذواق المختلفة ,صديق للبيئة, مقاوم للاشتعال,مقاوم للتآكل</p>
                                        <ul>
                                        <li>التأثير: بلوط</li>
                                        <li>اللون: رمادي فاتح</li>
                                        <li>طريقة التثبيت: 1 clic2go</li>
                                        <li>الأبعاد 8 × 192 × 1285 مم (سمك × عرض × طول)</li>
                                        </ul>",
            ],

            "en" => [
                "title" => "Trendline PRO",
                "short_description" => "<p>Trendline PRO Original 5950 8MM</p>",
                "description" => "<p> Dark brown and light brown ripples give you an attractive look close to the natural wood color. Get floors that suit your style. Brand description : The famous German brand ReadyFX Parquet provides excellent quality, designs and colors with natural appearance to suit different tastes , eco-friend,flame resistant, corrosion resistant</p>
                                        <ul>
                                        <li>Effect: Oak</li>
                                        <li>Color: Light Grey</li>
                                        <li>Installation method: 1clic2go</li>
                                        <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                        </ul>",
            ],
        ]);

        $product->colors()->attach([1, 2, 3, 4]);


        for ($i = 0; $i < 6; $i++) {
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
            'seeders/products/17.jpg',

        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "0",
            "price" => "70",
            "category_id" => "1",
            "ar" => [
                "title" => "سويس فلور",
                "short_description" => "<p>سويس فلور الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>التموجات من اللون البني الداكن والبني الفاتح تعطيك إطلالة جذابة وقريبة من لون الخشب الطبيعي . احصلي على أرضيات تلائم ذوقك. وصف العلامة التجارية توفر العلامة التجارية الألمانية الشهيرة ريدي فكس باركيه بجودة ممتازة وتصميمات وألوان ذات مظهر طبيعي يلائم الأذواق المختلفة ,صديق للبيئة, مقاوم للاشتعال,مقاوم للتآكل</p>
                                        <ul>
                                        <li>التأثير: بلوط</li>
                                        <li>اللون: رمادي فاتح</li>
                                        <li>طريقة التثبيت: 1 clic2go</li>
                                        <li>الأبعاد 8 × 192 × 1285 مم (سمك × عرض × طول)</li>
                                        </ul>",
            ],

            "en" => [
                "title" => "Swiss Floor",
                "short_description" => "<p>Swiss Floor Original 5950 8MM</p>",
                "description" => "<p> Dark brown and light brown ripples give you an attractive look close to the natural wood color. Get floors that suit your style. Brand description : The famous German brand ReadyFX Parquet provides excellent quality, designs and colors with natural appearance to suit different tastes , eco-friend,flame resistant, corrosion resistant</p>
                                        <ul>
                                        <li>Effect: Oak</li>
                                        <li>Color: Light Grey</li>
                                        <li>Installation method: 1clic2go</li>
                                        <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                        </ul>",
            ],
        ]);

        $product->colors()->attach([8, 9, 10, 11, 12, 13]);


        for ($i = 0; $i < 5; $i++) {
            $product->files()->create([
                "path" => $images_4[$i],
                "type" => "image",
            ]);
        }


        //product 5
        $images_5 = [
            'seeders/products/18.jpg',
            'seeders/products/19.jpg',
            'seeders/products/20.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "1",
            "price" => "70",
            "category_id" => "2",
            "ar" => [
                "title" => "ليو اس بي سي",
                "short_description" => "<p>ليو اس بي سي الأصلي 5950 4 مللي متر</p>",
                "description" => "<p>التموجات من اللون البني الداكن والبني الفاتح تعطيك إطلالة جذابة وقريبة من لون الخشب الطبيعي . احصلي على أرضيات تلائم ذوقك. وصف العلامة التجارية توفر العلامة التجارية الألمانية الشهيرة ريدي فكس باركيه بجودة ممتازة وتصميمات وألوان ذات مظهر طبيعي يلائم الأذواق المختلفة ,صديق للبيئة, مقاوم للاشتعال,مقاوم للتآكل</p>
                                        <ul>
                                        <li>التأثير: بلوط</li>
                                        <li>اللون: رمادي فاتح</li>
                                        <li>طريقة التثبيت: 1 clic2go</li>
                                        <li>الأبعاد 8 × 192 × 1285 مم (سمك × عرض × طول)</li>
                                        </ul>",
            ],

            "en" => [
                "title" => "LEO SPC",
                "short_description" => "<p>LEO SPC Original 5950 4MM</p>",
                "description" => "<p> Dark brown and light brown ripples give you an attractive look close to the natural wood color. Get floors that suit your style. Brand description : The famous German brand ReadyFX Parquet provides excellent quality, designs and colors with natural appearance to suit different tastes , eco-friend,flame resistant, corrosion resistant</p>
                                        <ul>
                                        <li>Effect: Oak</li>
                                        <li>Color: Light Grey</li>
                                        <li>Installation method: 1clic2go</li>
                                        <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                        </ul>",
            ],
        ]);

        $product->colors()->attach([1, 2, 14, 15]);


        for ($i = 0; $i < 3; $i++) {
            $product->files()->create([
                "path" => $images_5[$i],
                "type" => "image",
            ]);
        }


        //product 6 cat2
        $images_6 = [
            'seeders/products/21.jpg',
            'seeders/products/22.jpg',
            'seeders/products/23.jpg',
            'seeders/products/24.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "0",
            "price" => "50",
            "category_id" => "2",
            "ar" => [
                "title" => "ليو",
                "short_description" => "<p>ليو الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>التموجات من اللون البني الداكن والبني الفاتح تعطيك إطلالة جذابة وقريبة من لون الخشب الطبيعي . احصلي على أرضيات تلائم ذوقك. وصف العلامة التجارية توفر العلامة التجارية الألمانية الشهيرة ريدي فكس باركيه بجودة ممتازة وتصميمات وألوان ذات مظهر طبيعي يلائم الأذواق المختلفة ,صديق للبيئة, مقاوم للاشتعال,مقاوم للتآكل</p>
                                                <ul>
                                                <li>الأبعاد 10 × 17 × 290 مم (سمك × عرض × طول)</li>
                                                </ul>",
            ],

            "en" => [
                "title" => "LEO",
                "short_description" => "<p>LEO Original 5950 8MM</p>",
                "description" => "<p> Dark brown and light brown ripples give you an attractive look close to the natural wood color. Get floors that suit your style. Brand description : The famous German brand ReadyFX Parquet provides excellent quality, designs and colors with natural appearance to suit different tastes , eco-friend,flame resistant, corrosion resistant</p>
                                                <ul>
                                                <li>Dimensions 8 x 192 x 1285mm (Thickness x Width x Length)</li>
                                                </ul>",
            ],
        ]);

        $product->colors()->attach([1, 2, 3, 12, 13]);


        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_6[$i],
                "type" => "image",
            ]);
        }

        //product 7  cat3
        $images_7 = [
            'seeders/products/25.jpg',
            'seeders/products/26.jpg',
            'seeders/products/27.jpg',
            'seeders/products/28.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "0",
            "price" => "60",
            "category_id" => "3",
            "ar" => [
                "title" => "جلاكسى",
                "short_description" => "<p>جلاكسى الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>التموجات من اللون البني الداكن والبني الفاتح تعطيك إطلالة جذابة وقريبة من لون الخشب الطبيعي . احصلي على أرضيات تلائم ذوقك. وصف العلامة التجارية توفر العلامة التجارية الألمانية الشهيرة ريدي فكس باركيه بجودة ممتازة وتصميمات وألوان ذات مظهر طبيعي يلائم الأذواق المختلفة ,صديق للبيئة, مقاوم للاشتعال,مقاوم للتآكل</p>
                                                <ul>
                                                <li>مقاوم للماء	: نعم</li>
                                                <li>العرض: 12</li>
                                                <li>الطول: 290</li>
                                                </ul>",
            ],

            "en" => [
                "title" => "Gallaxy",
                "short_description" => "<p>Gallaxy Original 5950 8MM</p>",
                "description" => "<p> Dark brown and light brown ripples give you an attractive look close to the natural wood color. Get floors that suit your style. Brand description : The famous German brand ReadyFX Parquet provides excellent quality, designs and colors with natural appearance to suit different tastes , eco-friend,flame resistant, corrosion resistant</p>
                                                <ul>
                                                <li>Width: 12</li>
                                                <li>Length: 290</li>
                                                <li>Water Resistance: YES</li>
                                                </ul>",
            ],
        ]);

        $product->colors()->attach([6, 7, 8, 15, 14]);


        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_7[$i],
                "type" => "image",
            ]);
        }

        //product 8 cat 3
        $images_8 = [
            'seeders/products/29.jpg',
            'seeders/products/30.jpg',
            'seeders/products/31.jpg',
            'seeders/products/32.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "1",
            "price" => "70",
            "category_id" => "3",
            "ar" => [
                "title" => "جالكسي - خشبى",
                "short_description" => "<p>جالكسي - خشبى الأصلي 5950 8 مللي متر</p>",
                "description" => "<p>التموجات من اللون البني الداكن والبني الفاتح تعطيك إطلالة جذابة وقريبة من لون الخشب الطبيعي . احصلي على أرضيات تلائم ذوقك. وصف العلامة التجارية توفر العلامة التجارية الألمانية الشهيرة ريدي فكس باركيه بجودة ممتازة وتصميمات وألوان ذات مظهر طبيعي يلائم الأذواق المختلفة ,صديق للبيئة, مقاوم للاشتعال,مقاوم للتآكل</p>
                <ul>
                <li>مقاوم للماء	: نعم</li>
                <li>العرض: 12</li>
                <li>الطول: 290</li>
                </ul>",
            ],

            "en" => [
                "title" => "Wooden Galaxy",
                "short_description" => "<p>Wooden Galaxy Original 5950 8MM</p>",
                "description" => "<p> Dark brown and light brown ripples give you an attractive look close to the natural wood color. Get floors that suit your style. Brand description : The famous German brand ReadyFX Parquet provides excellent quality, designs and colors with natural appearance to suit different tastes , eco-friend,flame resistant, corrosion resistant</p>
                <ul>
                <li>Width: 12</li>
                <li>Length: 290</li>
                <li>Water Resistance: YES</li>
                </ul>",
            ],
        ]);

        $product->colors()->attach([1, 2, 7, 8, 9, 13]);


        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_8[$i],
                "type" => "image",
            ]);
        }

        //product 8 cat 4
        $images_9 = [
            'seeders/products/33.jpg',
            'seeders/products/34.jpg',
            'seeders/products/35.jpg',
            'seeders/products/36.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "1",
            "price" => "70",
            "category_id" => "4",
            "ar" => [
                "title" => "مونس",
                "short_description" => "<p>ورق جدران فاخر عالى الجودة</p>",
                "description" => "<p>ستجعل هذه الخلفية الأنيقة ميزة رائعة في أي غرفة. يتميز التصميم بالنمط مع لمعان رقيق ، وهو مطبوع على ورق فينيل فاخر ثقيل الوزن لضمان تشطيب ممتاز. سهلة التطبيق ، ستبدو هذه الخلفية عالية الجودة رائعة عند استخدامها لتزيين غرفة كاملة أو لإنشاء جدار مميز.</p>
                                                        <ul>
                                                        <li>عرض اللفة: 70 سم</li>
                                                        <li>طول اللفة: 10 متر</li>
                                                        <li>تطابق النمط: مباراة مجانية</li>
                                                        <li>وزن الرول: 2090.00 جم</li>
                                                        <li>قطر اللفة: 7.8 سم</li>
                                                        </ul>",
            ],

            "en" => [
                "title" => "MONS",
                "short_description" => "<p>Luxury Wallpaper</p>",
                "description" => "<p> This stylish Wallpaper would make a great feature in any room. The design features the pattern with a subtle sheen, and is printed on to luxurious heavyweight vinyl paper to ensure an excellent finish. Easy to apply, this high quality wallpaper would look fantastic when used to decorate a whole room or to create a feature wall.</p>
                                    <ul>
                                    <li>Roll Width: 70 cm</li>
                                    <li>Roll Length: 10 m</li>
                                    <li>Pattern Match: Free Match</li>
                                    <li>Roll Weight: 2090.00 g</li>
                                    <li>Roll Diameter: 7.8 cm</li>
                                    </ul>",
            ],
        ]);
        $product->colors()->attach([1, 2, 3, 4, 5]);


        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_9[$i],
                "type" => "image",
            ]);
        }

        //product 10 cat 4
        $images_10 = [
            'seeders/products/37.jpg',
            'seeders/products/38.jpg',
            'seeders/products/39.jpg',
            'seeders/products/40.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "1",
            "price" => "70",
            "category_id" => "4",
            "ar" => [
                "title" => "جيوتو",
                "short_description" => "<p>ورق جدران فاخر عالى الجودة</p>",
                "description" => "<p>ستجعل هذه الخلفية الأنيقة ميزة رائعة في أي غرفة. يتميز التصميم بالنمط مع لمعان رقيق ، وهو مطبوع على ورق فينيل فاخر ثقيل الوزن لضمان تشطيب ممتاز. سهلة التطبيق ، ستبدو هذه الخلفية عالية الجودة رائعة عند استخدامها لتزيين غرفة كاملة أو لإنشاء جدار مميز.</p>
                                                        <ul>
                                                        <li>عرض اللفة: 70 سم</li>
                                                        <li>طول اللفة: 10 متر</li>
                                                        <li>تطابق النمط: مباراة مجانية</li>
                                                        <li>وزن الرول: 2090.00 جم</li>
                                                        <li>قطر اللفة: 7.8 سم</li>
                                                        </ul>",
            ],

            "en" => [
                "title" => "GIOTTO",
                "short_description" => "<p>Luxury Wallpaper</p>",
                "description" => "<p> This stylish Wallpaper would make a great feature in any room. The design features the pattern with a subtle sheen, and is printed on to luxurious heavyweight vinyl paper to ensure an excellent finish. Easy to apply, this high quality wallpaper would look fantastic when used to decorate a whole room or to create a feature wall.</p>
                                    <ul>
                                    <li>Roll Width: 70 cm</li>
                                    <li>Roll Length: 10 m</li>
                                    <li>Pattern Match: Free Match</li>
                                    <li>Roll Weight: 2090.00 g</li>
                                    <li>Roll Diameter: 7.8 cm</li>
                                    </ul>",
            ],
        ]);

        $product->colors()->attach([1, 2, 3, 4, 5, 6, 7]);


        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_10[$i],
                "type" => "image",
            ]);
        }

        //product 8 cat 4
        $images_11 = [
            'seeders/products/41.jpg',
            'seeders/products/42.jpg',
            'seeders/products/43.jpg',
            'seeders/products/44.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "0",
            "price" => "70",
            "category_id" => "4",
            "ar" => [
                "title" => "تكستشر",
                "short_description" => "<p>ورق جدران فاخر عالى الجودة</p>",
                "description" => "<p>ستجعل هذه الخلفية الأنيقة ميزة رائعة في أي غرفة. يتميز التصميم بالنمط مع لمعان رقيق ، وهو مطبوع على ورق فينيل فاخر ثقيل الوزن لضمان تشطيب ممتاز. سهلة التطبيق ، ستبدو هذه الخلفية عالية الجودة رائعة عند استخدامها لتزيين غرفة كاملة أو لإنشاء جدار مميز.</p>
                                                        <ul>
                                                        <li>عرض اللفة: 70 سم</li>
                                                        <li>طول اللفة: 10 متر</li>
                                                        <li>تطابق النمط: مباراة مجانية</li>
                                                        <li>وزن الرول: 2090.00 جم</li>
                                                        <li>قطر اللفة: 7.8 سم</li>
                                                        </ul>",
            ],

            "en" => [
                "title" => "TEXTURE",
                "short_description" => "<p>Luxury Wallpaper</p>",
                "description" => "<p> This stylish Wallpaper would make a great feature in any room. The design features the pattern with a subtle sheen, and is printed on to luxurious heavyweight vinyl paper to ensure an excellent finish. Easy to apply, this high quality wallpaper would look fantastic when used to decorate a whole room or to create a feature wall.</p>
                                    <ul>
                                    <li>Roll Width: 70 cm</li>
                                    <li>Roll Length: 10 m</li>
                                    <li>Pattern Match: Free Match</li>
                                    <li>Roll Weight: 2090.00 g</li>
                                    <li>Roll Diameter: 7.8 cm</li>
                                    </ul>",
            ],
        ]);
        $product->colors()->attach([12, 13, 14, 15]);


        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_11[$i],
                "type" => "image",
            ]);
        }

        //product 12 cat 4
        $images_12 = [
            'seeders/products/45.jpg',
            'seeders/products/46.jpg',
            'seeders/products/47.jpg',
            'seeders/products/48.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "1",
            "price" => "70",
            "category_id" => "4",
            "ar" => [
                "title" => "غريس",
                "short_description" => "<p>ورق جدران فاخر عالى الجودة</p>",
                "description" => "<p>ستجعل هذه الخلفية الأنيقة ميزة رائعة في أي غرفة. يتميز التصميم بالنمط مع لمعان رقيق ، وهو مطبوع على ورق فينيل فاخر ثقيل الوزن لضمان تشطيب ممتاز. سهلة التطبيق ، ستبدو هذه الخلفية عالية الجودة رائعة عند استخدامها لتزيين غرفة كاملة أو لإنشاء جدار مميز.</p>
                                                        <ul>
                                                        <li>عرض اللفة: 70 سم</li>
                                                        <li>طول اللفة: 10 متر</li>
                                                        <li>تطابق النمط: مباراة مجانية</li>
                                                        <li>وزن الرول: 2090.00 جم</li>
                                                        <li>قطر اللفة: 7.8 سم</li>
                                                        </ul>",
            ],

            "en" => [
                "title" => "GRACE",
                "short_description" => "<p>Luxury Wallpaper</p>",
                "description" => "<p> This stylish Wallpaper would make a great feature in any room. The design features the pattern with a subtle sheen, and is printed on to luxurious heavyweight vinyl paper to ensure an excellent finish. Easy to apply, this high quality wallpaper would look fantastic when used to decorate a whole room or to create a feature wall.</p>
                                    <ul>
                                    <li>Roll Width: 70 cm</li>
                                    <li>Roll Length: 10 m</li>
                                    <li>Pattern Match: Free Match</li>
                                    <li>Roll Weight: 2090.00 g</li>
                                    <li>Roll Diameter: 7.8 cm</li>
                                    </ul>",
            ],
        ]);
        $product->colors()->attach([7, 8]);


        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_12[$i],
                "type" => "image",
            ]);
        }

        //product 3 cat 5
        $images_13 = [
            'seeders/products/49.jpg',
            'seeders/products/50.jpg',
            'seeders/products/51.jpg',
            'seeders/products/52.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "0",
            "price" => "95",
            "category_id" => "5",
            "ar" => [
                "title" => "خشب ديكورات من مادة Tile",
                "short_description" => "<p>Tile الأصلي </p>",
                "description" => "<p>تركيبة بلاستيك تشبه الخشب, تأتي بشكل بلاط مربع , مقسم إلى مستطيلات, سهلة الفك والتركيب على أرضية الحدائق. تعطي حديقتك رونقاً وجمالاً. متوافر باللون البني. السعر لا يشمل التركيب</p>
                                    <ul>
                                    <li>الطول: 30</li>
                                    <li>العرض: 30</li>
                                    <li>عدد القطع فى الكرتونة : 10 </li>
                                    </ul>",
            ],

            "en" => [
                "title" => "Tiles",
                "short_description" => "<p>Tiles Original</p>",
                "description" => "<p>Wood Plastic Composite, it is a square tile devided into rectangles, brown colour, easy to install and uninstall on garden's floar, it gives your garden luster and beauty.</p>
                                    <ul>
                                    <li>Height: 30</li>
                                    <li>width: 30</li>
                                    <li>Number of Pcs / Carton: 10</li>
                                    </ul>",
            ],
        ]);
        $product->colors()->attach([1, 2]);


        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_13[$i],
                "type" => "image",
            ]);
        }

        //product 3 cat 5
        $images_14 = [
            'seeders/products/53.jpg',
            'seeders/products/54.jpg',
            'seeders/products/55.jpg',
            'seeders/products/56.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "0",
            "price" => "110",
            "category_id" => "5",
            "ar" => [
                "title" => "خشب ديكورات من مادة Decking",
                "short_description" => "<p>Decking الأصلي</p>",
                "description" => "<p>تركيبة بلاستيك تشبه الخشب, تأتي بشكل بلاط مربع , مقسم إلى مستطيلات, سهلة الفك والتركيب على أرضية الحدائق. تعطي حديقتك رونقاً وجمالاً. متوافر باللون البني. السعر لا يشمل التركيب</p>
                                    <ul>
                                    <li>الطول: 30</li>
                                    <li>العرض: 30</li>
                                    <li>عدد القطع فى الكرتونة : 10 </li>
                                    </ul>",
            ],

            "en" => [
                "title" => "Ready Fix 13",
                "short_description" => "<p>Decking Original</p>",
                "description" => "<p>Wood Plastic Composite, it is a square tile devided into rectangles, brown colour, easy to install and uninstall on garden's floar, it gives your garden luster and beauty.</p>
                                    <ul>
                                    <li>Height: 30</li>
                                    <li>width: 30</li>
                                    <li>Number of Pcs / Carton: 10</li>
                                    </ul>",
            ],
        ]);
        $product->colors()->attach([3, 4, 5]);


        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_14[$i],
                "type" => "image",
            ]);
        }

        //product 3 cat 5
        $images_15 = [
            'seeders/products/57.jpg',
            'seeders/products/58.jpg',
            'seeders/products/59.jpg',
            'seeders/products/60.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "1",
            "price" => "30",
            "category_id" => "6",
            "ar" => [
                "title" => "عشب ديكور جداري 2D",
                "short_description" => "<p>عشب ديكور جداري 2D أخضر</p>",
                "description" => "<p>التموجات من اللون البني الداكن والبني الفاتح تعطيك إطلالة جذابة وقريبة من لون الخشب الطبيعي . احصلي على أرضيات تلائم ذوقك. وصف العلامة التجارية توفر العلامة التجارية الألمانية الشهيرة ريدي فكس باركيه بجودة ممتازة وتصميمات وألوان ذات مظهر طبيعي يلائم الأذواق المختلفة ,صديق للبيئة, مقاوم للاشتعال,مقاوم للتآكل</p>
                                    <ul>
                                    <li>الطول: 50</li>
                                    <li>العرض: 50</li>
                                    <li>عدد القطع فى الكرتونة : 1 </li>
                                    </ul>",
            ],

            "en" => [
                "title" => "Wall Grass 2D",
                "short_description" => "<p>Wall Grass Green</p>",
                "description" => "<p>Artificial wall grass, easy to fix, suitable for schools, personal backyards. It adds a special luster to the space. Available in yellowish green color. Advantages of artificial turf : Artificial turf for homes is distinguished from natural by not requiring much care for it, as it does not need to extend irrigation networks, cut and trim it, or use any chemicals and fertilizers, and it also withstands different temperatures of cold or extreme heat, in addition to the ease of installing artificial turf for homes, whether they are The ground is concrete or rocky, and we do not forget that it preserves its color and shape for a long period ranging from 15 to 20 years, and it is not considered an environment suitable for flying and crawling insects as normal.</p>
                                    <ul>
                                    <li>Height: 50</li>
                                    <li>width: 50</li>
                                    <li>Number of Pcs / Carton: 1</li>
                                    </ul>",

            ],
        ]);
        $product->colors()->attach([5, 6, 10, 15, 14, 13]);


        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_15[$i],
                "type" => "image",
            ]);
        }

        //product 3 cat 6
        $images_16 = [
            'seeders/products/61.jpg',
            'seeders/products/62.jpg',
            'seeders/products/63.jpg',
            'seeders/products/64.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "1",
            "price" => "30",
            "category_id" => "6",
            "ar" => [
                "title" => "عشب ديكور جداري 2D",
                "short_description" => "<p>عشب ديكور جداري 2D أخضر</p>",
                "description" => "<p>التموجات من اللون البني الداكن والبني الفاتح تعطيك إطلالة جذابة وقريبة من لون الخشب الطبيعي . احصلي على أرضيات تلائم ذوقك. وصف العلامة التجارية توفر العلامة التجارية الألمانية الشهيرة ريدي فكس باركيه بجودة ممتازة وتصميمات وألوان ذات مظهر طبيعي يلائم الأذواق المختلفة ,صديق للبيئة, مقاوم للاشتعال,مقاوم للتآكل</p>
                                            <ul>
                                            <li>الطول: 50</li>
                                            <li>العرض: 50</li>
                                            <li>عدد القطع فى الكرتونة : 1 </li>
                                            </ul>",
            ],

            "en" => [
                "title" => "Wall Grass 2D",
                "short_description" => "<p>Wall Grass Green</p>",
                "description" => "<p>Artificial wall grass, easy to fix, suitable for schools, personal backyards. It adds a special luster to the space. Available in yellowish green color. Advantages of artificial turf : Artificial turf for homes is distinguished from natural by not requiring much care for it, as it does not need to extend irrigation networks, cut and trim it, or use any chemicals and fertilizers, and it also withstands different temperatures of cold or extreme heat, in addition to the ease of installing artificial turf for homes, whether they are The ground is concrete or rocky, and we do not forget that it preserves its color and shape for a long period ranging from 15 to 20 years, and it is not considered an environment suitable for flying and crawling insects as normal.</p>
                                            <ul>
                                            <li>Height: 50</li>
                                            <li>width: 50</li>
                                            <li>Number of Pcs / Carton: 1</li>
                                            </ul>",
            ],
        ]);

        $product->colors()->attach([9, 10, 11, 12, 13]);


        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_16[$i],
                "type" => "image",
            ]);
        }

        //product 3 cat 7
        $images_17 = [
            'seeders/products/65.jpg',
            'seeders/products/66.jpg',
            'seeders/products/67.jpg',
            'seeders/products/68.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "1",
            "price" => "70",
            "category_id" => "7",
            "ar" => [
                "title" => "طاولة خشب",
                "short_description" => "<p>طاولة خشبية قصيرة بلون أبيض</p>",
                "description" => "<p>طاولة خشبية قصيرة بلون أبيض وارجل بنية مناسبة لغرف المعيشة والمكاتب</p>
                                            <ul>
                                            <li>الطول: 48</li>
                                            <li>العرض: 46</li>
                                            </ul>",
            ],

            "en" => [
                "title" => "Wooden Table",
                "short_description" => "<p>A beautiful wooden short table</p>",
                "description" => "<p>A beautiful wooden short table for service with white color in top and beige legs.</p>
                                            <ul>
                                            <li>Height: 46</li>
                                            <li>width: 48</li>
                                            </ul>",
            ],
        ]);

        $product->colors()->attach([1, 2, 3, 11, 12, 13]);


        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_17[$i],
                "type" => "image",
            ]);
        }

        //product 3 cat 7
        $images_18 = [
            'seeders/products/69.jpg',
            'seeders/products/70.jpg',
            'seeders/products/71.jpg',
            'seeders/products/72.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "1",
            "price" => "30",
            "category_id" => "7",
            "ar" => [
                "title" => "طقم 3 طاولات دائرية",
                "short_description" => "<p>طاولة خشبية</p>",
                "description" => "<p>طاولة خشبية قصيرة للخدمة بلون أبيض وارجل بنية مناسبة لغرف المعيشة والمكاتب</p>
                                            <ul>
                                            <li>الطول: 48</li>
                                            <li>العرض: 46</li>
                                            </ul>",
            ],

            "en" => [
                "title" => "Tea Tables Set",
                "short_description" => "<p>A beautiful wooden short table</p>",
                "description" => "<p>A beautiful wooden short table for service with white color in top and beige legs.</p>
                                            <ul>
                                            <li>Height: 46</li>
                                            <li>width: 48</li>
                                            </ul>",
            ],
        ]);
        $product->colors()->attach([1, 2, 3, 4, 5, 6]);


        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_18[$i],
                "type" => "image",
            ]);
        }

        //product 3 cat 8
        $images_19 = [
            'seeders/products/73.jpg',
            'seeders/products/74.jpg',
            'seeders/products/75.jpg',
            'seeders/products/76.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "0",
            "price" => "30",
            "category_id" => "8",
            "ar" => [
                "title" => "طقم 3 حبه صناديق",
                "short_description" => "<p>ثلاث صناديق خشبية</p>",
                "description" => "<p>ثلاث صناديق خشبية بقياسات مختلفة ورسوم توضح خريطة العالم عليها بشكل يجعلها تبدو صناديق أثرية .</p>
                                            <ul>
                                            <li>الطول: 22</li>
                                            <li>العرض: 30</li>
                                            </ul>",
            ],

            "en" => [
                "title" => "Set Of 3 Small Wooden Boxes Map Drawing",
                "short_description" => "<p>Three wooden boxes</p>",
                "description" => "<p>Three wooden boxes in different sixes with a drawn of world map to look like a lovley ancient boxes</p>
                                            <ul>
                                            <li>Height: 22</li>
                                            <li>width: 30</li>
                                            </ul>",
            ],
        ]);

        $product->colors()->attach([6, 7, 8, 9]);


        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_19[$i],
                "type" => "image",
            ]);
        }

        //product 3 cat 8
        $images_20 = [
            'seeders/products/77.jpg',
            'seeders/products/78.jpg',
            'seeders/products/79.jpg',
            'seeders/products/80.jpg',
        ];

        $product = Product::create([
            "status" => "1",
            "is_trending" => "1",
            "price" => "30",
            "category_id" => "8",
            "ar" => [
                "title" => "حامل ورد ذهبى",
                "short_description" => "<p>حامل ورد ذهبي يليق بنباتاتك</p>",
                "description" => "<p>حامل ورد ذهبي يليق بنباتاتك الغالية يلائم الشرفة والصالة</p>
                                            <ul>
                                            <li>الطول: 48</li>
                                            <li>العرض: 46</li>
                                            </ul>",
            ],

            "en" => [
                "title" => "Golden Rose Holder",
                "short_description" => "<p>golden Roses pot perfect for your beatiful plants</p>",
                "description" => "<p>golden Roses pot perfect for your beatiful plants , it fits in your balcony and living room .</p>
                                            <ul>
                                            <li>Height: 15</li>
                                            <li>width: 15</li>
                                            </ul>",
            ],
        ]);

        $product->colors()->attach([1, 2, 3, 4, 5, 6, 7, 8]);

        for ($i = 0; $i < 4; $i++) {
            $product->files()->create([
                "path" => $images_20[$i],
                "type" => "image",
            ]);
        }
    }
}
