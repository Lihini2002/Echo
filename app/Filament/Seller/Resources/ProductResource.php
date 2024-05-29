<?php

namespace App\Filament\Seller\Resources;

use App\Filament\Seller\Resources\ProductResource\Pages;
use App\Filament\Seller\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;



class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                Textarea::make('description'),
                
 
                SpatieMediaLibraryFileUpload::make('image') ->collection('product_images'),

                // TextInput::make('price')->money('LKR'),
                TextInput::make('price')->numeric()->inputMode('decimal')  ->prefix('RS.'),
                Select::make('category_id')
                ->label('Category')
                ->options(Category::all()->pluck('name', 'id'))
                ->searchable(),
                TextInput::make('stock')->numeric()


                //store this in the database and automatically lower it when sales happen

                //we could have a featured section here just to make it moe better.
                //thses are things that the brand must add to make sense of the product 
                //after this we also have to make band profiles and then have a good profile info on them along with sustainability atings and all 




            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('name'), 
                SpatieMediaLibraryImageColumn::make('image')->collection('product_images')->conversion('thumb'),
                // TextColumn::make('description'),
                TextColumn::make('stock')->numeric(),
              
             
                TextColumn::make('category')
                      ->getStateUsing(function (Product $record): string
                       {
                            $category = Category::find($record->category_id);
                               return $category ? $category->name : null;
                         })
                         
                         
                         ,

                        
                 
                        //  TextColumn::make('brand')
                        //  ->getStateUsing(function (Product $record): string {
                        //      $brand = Brand::find($record->brand_id);
                        //      return $brand ? $brand->name : 'Unknown Brand'; // Provide a default value
                        //  }),

        
                //no need of this 
                // TextColumn::make('brand_id'),
                TextColumn::make('price')->money('LKR'),



                //
            ])
            ->filters([
                //

            ])
            ->modifyQueryUsing(function (Builder $query) { 
                
                    return $query->where('brand_id', auth()->id()); 
                
            }) 

            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
