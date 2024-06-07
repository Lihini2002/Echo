<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sustainableProductCategories = [
            "Food" => [
                "Fruits",
                "Vegetables",
                "Grains",
                "Legumes",
                "Nuts and Seeds",
                "Dairy Alternatives" ,
                "Plant-based Proteins",
                "Sustainable Seafood",
                "Organic Meats and Poultry",
            ],
            "Clothing" => [
                "Organic Cotton Clothing",
                "Hemp Clothing",
                "Bamboo Clothing",
                "Recycled Polyester Clothing",
                "Linen Clothing",
                "Vintage or Second-hand Clothing",
                "Fair Trade Clothing",
                "Sustainable Activewear",
                "Eco-friendly Shoes",
            ],
            "Home Goods" => [
                "Eco-friendly Cleaning Products",
                "Bamboo or Wooden Kitchen Utensils",
                "Organic Bedding",
                "Energy-efficient Appliances",
                "Reusable Water Bottles and Containers",
                "Compostable Dinnerware",
                "Sustainable Furniture",
                "Recycled Paper Products",
                "Solar-powered Gadgets and Lights",
            ],
            "Personal Care and Beauty" => [
                "Organic Skincare Products",
                "Cruelty-free Cosmetics",
                "Biodegradable Toiletries",
                "Natural and Organic Hair Care Products",
                "Eco-friendly Menstrual Products",
                "Reef-safe Sunscreen",
                "Bamboo Toothbrushes",
                "Plastic-free Grooming Accessories",
            ],
            "Electronics" => [
                "Energy-efficient Appliances and Devices",
                "Electronic Devices made from Recycled Materials",
                "E-waste Recycling Programs",
                "Energy-efficient Light Bulbs",
                "Solar-powered Chargers and Gadgets",
                "Energy-saving Smart Home Devices",
                "Sustainable Electronics Packaging",
            ],
            "Transportation" => [
                "Electric Vehicles (EVs)",
                "Hybrid Vehicles",
                "Public Transportation Passes",
                "Bicycles and E-bikes",
                "Carpooling or Ridesharing Services",
                "Sustainable Fuel Options" ,
                "Carbon Offset Programs for Travel",
            ],
        ];

        foreach ($sustainableProductCategories as $categoryName => $sustainableProducts) {
            $category = \App\Models\Category::create([
                'name' => $categoryName,
                'slug' => \Illuminate\Support\Str::slug($categoryName),
            ]);

            if (is_array($sustainableProducts)) {
                foreach ($sustainableProducts as $productName) {
                    \App\Models\Category::create([
                        'name' => $productName,
                        'slug' => \Illuminate\Support\Str::slug($productName),
                        'parent_id' => $category->id,
                    ]);
                }
            }
        }
    }
}
