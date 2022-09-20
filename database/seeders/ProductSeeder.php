<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        
            [
                'name'=>'Oppo Mobile',
                'price'=>'30000',
                'category'=>'Mobile',
                'description'=>'Oppo Smartphone with 12GB Ram',
                'gallery'=>'https://www.oppo.com/content/dam/oppo/common/mkt/v2-2/f17-pro/navigation/F17%20pro-navigation-blue-v2.png',
            ],
            [
                'name'=>'Panasonic TV',
                'price'=>'200000',
                'category'=>'TV',
                'description'=>'LED TV ',
                'gallery'=>'https://5.imimg.com/data5/BC/WD/MY-29094786/panasonic-led-television-500x500.jpg',
            ],
            [
                'name'=>'Samsung TV',
                'price'=>'20000',
                'category'=>'TV',
                'description'=>'Samsung 32 nch LED TV',
                'gallery'=>'https://images.samsung.com/is/image/samsung/in-full-hd-tv-t5500-ua43t5500akxxl-ua--r----auxxl-227105592?$650_519_PNG$',
            ],
            [
                'name'=>'LG Regrigerator',
                'price'=>'40000',
                'category'=>'Fridge',
                'description'=>'Doule door refrigerator',
                'gallery'=>'https://www.lg.com/in/images/refrigerators/md06237117/gallery/N01_GL-S292RDS3-Refrigerators-Front-View-D-01.jpg',
            ]



        ]);
    }
}
