<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Products;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {

        DB::table('products')->truncate();

        Products::create([
            'name' => 'Belguim',
            'groups' =>'Ja',
            'price' => '300',
            'days'=>'30',
            'activations'=>'lopen',
        ]);

        Products::create([
            'name' => 'France',
            'groups' =>'Ja',
            'price' => '300',
            'days'=>'30',
            'activations'=>'lopen',
        ]); 
}
}