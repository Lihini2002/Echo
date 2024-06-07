<?php

namespace App\Filament\Seller\Resources\ProductResource\Pages;

use App\Filament\Seller\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str; 

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    // public function save()
    // {
    //     $data = $this->manager->getCreateRecordRequest()->get('record');

        
    //     // Create a new brand

    // }


    //
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $user = auth()->user();  // Get the authenticated user
         $data['brand_id'] = $user->brand->id;
        $data['slug'] = Str::slug($data['name'], '-');
        $data['meta_title'] = $data['name'];
        $data['meta_description'] =  $data['description'];

        //set status as a boolean value
        $data['status'] = ($data['stock'] > 0) ? true : false;
    

        return $data;
    }
}
