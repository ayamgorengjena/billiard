<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemSeeder extends Seeder
{
    public function run()
    {
        Item::create(['name' => 'Meja Billiard Abimanyu', 'price' => 15000000]);
        Item::create(['name' => 'Stick', 'price' => 250000]);
        Item::create(['name' => 'Bola Billiard 9', 'price' => 300000]);
    }
}
