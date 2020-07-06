<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            array(
                'name' => 'Samsung A10S',
                'price' => '12500',
                'category' => 'Samsung',
                'description' => 'Samsung Samsung Samsung Samsung Samsung Samsung Samsung Samsung Samsung Samsung Samsung Samsung Samsung Samsung Samsung ',
                'image' => 'productacbMGrLnwoyK.jpg',
            ),
            array(
                'name' => 'Huawei Y9',
                'price' => '19500',
                'category' => 'Huawei',
                'description' => 'Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei ',
                'image' => 'productwChffo7g1L86.jpg',
            ),
            array(
                'name' => 'Huawei P30 Lite',
                'price' => '25000',
                'category' => 'Huawei',
                'description' => 'Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei Huawei ',
                'image' => 'productnmsO8Txflew0.webp',
            ),
        ]);
    }
}
