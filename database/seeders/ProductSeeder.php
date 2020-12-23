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
        //

        DB::table('products')->insert([
            'name'=>'Tecno',
            'price'=>'300',
             'description'=>'A smart phone with 4GB ram and 12megapixil camera',
             'Category'=>'mobile',
             'gallery'=>'https://image.shutterstock.com/image-vector/black-smartphone-samsung-galaxy-s8-600w-640134586.jpg'
            
        ],
        [
            'name'=>'Tecno',
            'price'=>'300',
             'description'=>'A smart phone with 4GB ram and 12megapixil camera',
             'Category'=>'mobile',
             'gallery'=>'https://image.shutterstock.com/image-vector/black-smartphone-samsung-galaxy-s8-600w-640134586.jpg'
            
        ],
        [
            'name'=>'Panasonic TV',
            'price'=>'500',
             'description'=>'A smart tvfor gamin',
             'Category'=>'mobil',
             'gallery'=>'https://image.shutterstock.com/image-photo/bangkokthailand-july-22-2017-brand-600w-682876120.jpg'
            
        ]
    );
    }
}
