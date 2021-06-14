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
                'name'=>'Apple Mobile',
                'price'=>'50000',
                'description'=>'Smart Phone With 4gb Ram',
                'category'=>'Mobile',
                'gellary'=>'https://www.google.com/search?q=mobile+phone+product+images&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjMk_iH35bxAhUM4zgGHTxGBXYQ_AUoAXoECAEQAw&biw=1242&bih=568#imgrc=JF_9wEsLFEiH3M',
            ],
            [
                'name'=>'LG Mobile',
                'price'=>'10000',
                'description'=>'Smart Phone With 4gb Ram',
                'category'=>'LG W3+',
                'gellary'=>'https://www.google.com/search?q=lg+mobile+new+model&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjjgZyD5JbxAhUmzDgGHXT5DYYQ_AUoAnoECAEQBA&biw=1242&bih=568#imgrc=c-hEOEDs08el-M',
            ],[
                'name'=>'LG Tv',
                'price'=>'15000',
                'description'=>'Smart Tv',
                'category'=>'Tv',
                'gellary'=>'https://www.google.com/search?q=smart+tv&source=lnms&tbm=isch&sa=X&ved=2ahUKEwiO86y65JbxAhXI4zgGHVoVAlwQ_AUoA3oECAEQBQ&biw=1242&bih=568#imgrc=GYzDl_XWTupgJM',
            ],[
                'name'=>'Smart Watch',
                'price'=>'35000',
                'description'=>'Smart Watch',
                'category'=>'Watch',
                'gellary'=>'https://www.google.com/search?q=smart+watch&source=lnms&tbm=isch&sa=X&ved=2ahUKEwidopyr5ZbxAhU73jgGHf7cCOgQ_AUoAnoECAEQBA&biw=1242&bih=568#imgrc=X8GbFQAIoQhk1M',
            ],
        ]);
    }
}
