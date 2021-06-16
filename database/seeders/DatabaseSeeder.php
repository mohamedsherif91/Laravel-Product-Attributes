<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Attribute;
use App\Models\AttributeOption;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Creatin Default User
        User::create([
            'name' => 'Mohamed Sherif',
            'email' => 'mosherif91@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        $this->command->info('User Created!');

        // Create Attributes
        Attribute::create(['name'=>'Colors']);
        Attribute::create(['name'=>'Sizes']);
        Attribute::create(['name'=>'Types']);

        $this->command->info('Attributes Created!');

        // Create Attributes Options
        AttributeOption::create(['name'=> 'Red', 'attribute_id' => 1]);
        AttributeOption::create(['name'=> 'Black', 'attribute_id' => 1]);
        AttributeOption::create(['name'=> 'Blue', 'attribute_id' => 1]);

        AttributeOption::create(['name' => 'Large', 'attribute_id' => 2]);
        AttributeOption::create(['name' => 'Medium', 'attribute_id' => 2]);
        AttributeOption::create(['name' => 'Small', 'attribute_id' => 2]);


        AttributeOption::create(['name' => 'Coton', 'attribute_id' => 3]);
        AttributeOption::create(['name' => 'Polyester', 'attribute_id' => 3]);

        $this->command->info('Attributes Options Created!');

        $path = 'public/products.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Products Created!');
    }
}
