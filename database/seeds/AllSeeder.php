<?php

use Illuminate\Database\Seeder;
use App\Property;
use App\Amenity;
use App\PropertyType;
use App\Location;


class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\News::class ,10)->create();
       factory(App\Design::class ,10)->create();
       factory(App\Maintenance::class ,10)->create();
       factory(App\Faq::class ,10)->create();
    }
}
