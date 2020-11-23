<?php

use Illuminate\Database\Seeder;
use App\Property;
use App\Amenity;
use App\PropertyType;
use App\Location;
use App\Repair;
use App\Covid;
use App\Vip;


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
       factory(App\Repair::class ,10)->create();
       factory(App\Faq::class ,10)->create();

       Covid::create([
        'title' => 'Covid Primjer 1',
        'subtitle' => 'Podnaslov Covid Podnaslov Covid Podnaslov Covid Podnaslov Covid Podnaslov Covid Podnaslov Covid ',
        'description' => 'Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. Opis Covid za modalnu. ',
        'user_id' => '1',

        ]);

        Vip::create([
            'title' => 'Covid Primjer 1'
        ]);
        Vip::create([
            'title' => 'Covid Primjer 1'
        ]);
        Vip::create([
            'title' => 'Covid Primjer 1'
        ]);
        Vip::create([
            'title' => 'Covid Primjer 1'
        ]);
        Vip::create([
            'title' => 'Covid Primjer 1'
        ]);
        Vip::create([
            'title' => 'Covid Primjer 1'
        ]);
        Vip::create([
            'title' => 'Covid Primjer 1'
        ]);
        Vip::create([
            'title' => 'Covid Primjer 1'
        ]);
        Vip::create([
            'title' => 'Covid Primjer 1'
        ]);
        Vip::create([
            'title' => 'Covid Primjer 1'
        ]);
        Vip::create([
            'title' => 'Covid Primjer 1'
        ]);
        Vip::create([
            'title' => 'Covid Primjer 1'
        ]);
        Vip::create([
            'title' => 'Covid Primjer 1'
        ]);
        Vip::create([
            'title' => 'Covid Primjer 1'
        ]);
        Vip::create([
            'title' => 'Covid Primjer 1'
        ]);
        Vip::create([
            'title' => 'Covid Primjer 1'
        ]);
        Vip::create([
            'title' => 'Covid Primjer 1'
        ]);
        Vip::create([
            'title' => 'Covid Primjer 1'
        ]);
    }
}
