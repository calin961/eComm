<?php

namespace Database\Seeders;

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
                'name'=>'LG mobile',
                'price'=>'200',
                "description"=>"good smatrphone",
                "category"=>"mobile",
                "gallery"=>"https://www.lg.com/in/images/mobile-phones/md07523391/gallery/LMK610IM-D-01.jpg"
            ],
            [
                'name'=>'Galaxy S20 Ultra Black 128 GB 5G',
                'price'=>'400',
                "description"=>"good smatrphone",
                "category"=>"mobile",
                "gallery"=>"https://images.samsung.com/is/image/samsung/ro-galaxy-s20-ultra-g988-sm-g988bzkdeue-lsidecosmicblack-thumb-213720813?$160_160_PNG$"
            ],
            [
                'name'=>'Galaxy Note20 Ultra 5G 256 GB Mystic Black',
                'price'=>'200',
                "description"=>"good smatrphone",
                "category"=>"mobile",
                "gallery"=>"https://images.samsung.com/is/image/samsung/ro/galaxy-note20/gallery/ro-galaxy-note20-ultra-5g-n986-sm-n986bzkgeue-frontmysticblack-thumb-272498189?$160_160_PNG$"
            ],
            [
                'name'=>'Galaxy S20 FE 128 GB 5G',
                'price'=>'200',
                "description"=>"good smatrphone",
                "category"=>"mobile",
                "gallery"=>"https://images.samsung.com/is/image/samsung/ro-galaxy-s20-fe-5g-g781-sm-g781bzbdeue-frontcloudnavy-thumb-303515988?$160_160_PNG$"
            ]
        ]);
    }
}
