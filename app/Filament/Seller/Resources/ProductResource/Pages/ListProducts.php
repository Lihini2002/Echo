<?php

namespace App\Filament\Seller\Resources\ProductResource\Pages;

use App\Filament\Seller\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProducts extends ListRecords
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];

        
    }

    // public function query() {
    //     return Product::query()
    //         ->where('brand_id', auth()->user()->brand_id); // Assuming you have a brand_id on the Product model
    //   }
}
