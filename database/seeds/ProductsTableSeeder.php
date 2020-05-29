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
        $products = [
            [
                'name' => "Arcteryx Brown Jacket",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "Arcteryx",
                'units' => 21,
                'price' => 200.10,
                'sale' => false,
                'favorite' => false,
                'image' => 'arcteryx-brown.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Arcteryx Black Jacket ",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "Arcteryx",
                'units' => 400,
                'price' => 190.21,
                'sale' => false,
                'favorite' => false,
                'image' => 'arcteryx-Hoody-Black.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Arcteryx Blue Jacket",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "Arcteryx",
                'units' => 21,
                'price' => 210.10,
                'sale' => false,
                'favorite' => false,
                'image' => 'arcteryx-Jacket-Paradigm.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Arcteryx Rain Jacket ",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "Arcteryx",
                'units' => 400,
                'price' => 180.21,
                'sale' => false,
                'favorite' => false,
                'image' => 'Norvan-SL-Insulated-Hoody-Black-Infrared.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Eddie Bauer Down Jacket",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "Eddie Bauer",
                'units' => 21,
                'price' => 150.10,
                'sale' => false,
                'favorite' => false,
                'image' => 'EddieBauerDown.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Eddie Bauer Heavy Powder",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "Eddie Bauer",
                'units' => 400,
                'price' => 190.21,
                'sale' => false,
                'favorite' => false,
                'image' => 'EddieBauerHeavyPowder.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Eddie Bauer Rain Jacket",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "Eddie Bauer",
                'units' => 21,
                'price' => 190.10,
                'sale' => false,
                'favorite' => false,
                'image' => 'EddieBauerRainJacket.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Eddie Bauer Windfoil",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "Eddie Bauer",
                'units' => 400,
                'price' => 180.21,
                'sale' => false,
                'favorite' => false,
                'image' => 'EddieBauerWindfoil.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Nike Jacket Black & White",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "Nike",
                'units' => 21,
                'price' => 150.10,
                'sale' => false,
                'favorite' => false,
                'image' => 'nike-jacket-b&w.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Nike Jacket Red",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "Nike",
                'units' => 400,
                'price' => 190.21,
                'sale' => false,
                'favorite' => false,
                'image' => 'nike-jacket-red.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Nike Jacket Swoosh",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "Nike",
                'units' => 21,
                'price' => 190.10,
                'sale' => false,
                'favorite' => false,
                'image' => 'nike-jacket-swoosh.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Nike Windrunner",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "Nike",
                'units' => 400,
                'price' => 180.21,
                'sale' => false,
                'favorite' => false,
                'image' => 'nike-jacket-windrunner.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "North Face",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "North Face",
                'units' => 400,
                'price' => 190.21,
                'sale' => false,
                'favorite' => false,
                'image' => 'EddieBauerHeavyPowder.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "North Face Jacket Black Puffy",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "North Face",
                'units' => 21,
                'price' => 190.10,
                'sale' => false,
                'favorite' => false,
                'image' => 'jacket_BLACK_3.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "North Face Jacket Grey",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "North Face",
                'units' => 400,
                'price' => 180.21,
                'sale' => false,
                'favorite' => false,
                'image' => 'jacket_NAVY_3.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "North Face Jacket Windbreaker",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "North Face",
                'units' => 21,
                'price' => 150.10,
                'sale' => false,
                'favorite' => false,
                'image' => 'NorthEnd.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "North Face Parka",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "North Face",
                'units' => 400,
                'price' => 190.21,
                'sale' => false,
                'favorite' => false,
                'image' => 'NorthEndArmy.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "North Face Jacket Hooded",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "North Face",
                'units' => 21,
                'price' => 190.10,
                'sale' => false,
                'favorite' => false,
                'image' => 'NorthEndHoodedSoft.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "North Face Jacket Heavy Puffy",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "North Face",
                'units' => 400,
                'price' => 180.21,
                'sale' => false,
                'favorite' => false,
                'image' => 'NorthEndPuffy.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "North Face Jacket Soft ",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "North Face",
                'units' => 9,
                'price' => 140.10,
                'sale' => true,
                'favorite' => false,
                'image' => 'NorthEndSoft.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "North Face Rain Jacket ",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'brand' => "North Face",
                'units' => 7,
                'price' => 140.21,
                'sale' => true,
                'favorite' => false,
                'image' => 'NorthEndWaterproof.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
        ];

        DB::table('products')->insert($products);
    }
}