<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Điện thoại';
        $category->description = 'Thể loại điện thoại';
        $category->save();

        $category = new Category();
        $category->name = 'Laptop';
        $category->description = 'Thể loại Latop';
        $category->save();

        $category = new Category();
        $category->name = 'Tủ lạnh';
        $category->description = 'Thể loại tủ lạnh';
        $category->save();

        $category = new Category();
        $category->name = 'Điều Hòa';
        $category->description = 'Thể loại điều hòa';
        $category->save();
    }
}
