<?php

use Illuminate\Database\Seeder;
use App\NewCategories;

class NewCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NewCategories::create([
            'title' => 'Furnishing & Design',
            'description' => 'No description'
          ]);
          NewCategories::create([
            'title' => 'Property Maintenance',
            'description' => 'No description'
          ]);
          NewCategories::create([
            'title' => 'Renovation & Repairs',
            'description' => 'No description'
          ]);
          NewCategories::create([
            'title' => 'Other',
            'description' => 'No description'
          ]);
    }
}
