<?php

namespace App\Filament\Resources\BrandsResource\Pages;

use App\Filament\Resources\BrandsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;


//usinh this page to handle adding a new user along with a new brand
class CreateBrands extends CreateRecord
{
    protected static string $resource = BrandsResource::class;
}
