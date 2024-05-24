<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrandsResource\Pages;
use App\Filament\Resources\BrandsResource\RelationManagers;
use App\Models\Brand;
use App\Models\Category;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Fieldset;
use Filament\Tables\Columns\ImageColumn;



use Filament\Forms\Components\FileUpload;

use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BrandsResource extends Resource
{
    protected static ?string $model = Brand::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        //what information do you need when you are creating a new brand 
            //brand_name 
            //brand_location 
            //brand_categories //select multiple 
            //brand_logo 
            //brand description 
            //sustainabiliity practices as badges so text 

            //lets have two sections with login details and Brand details. 
            //if you configure things to create a new user along with a new brand then you can then just do the login stuff 



            ->schema([

                TextInput::make('name'),
                TextInput::make('location'),
                TextInput::make('slug'),
                TextInput::make('subtitle'),

                //this is a many to many relationship that needs a pivot table
                //should we implement this later?
              
                FileUpload::make('logo'),
                Textarea::make('description')->columnSpan(2), 
                Select::make('user_id')
                ->options(
                    User::all()->pluck('email', 'id')
                )
                    ,
                Select::make('category_id')
                ->options(
                    Category::getTopLevelCategories()->pluck('name', 'id')
                ),
                //add a feature to add the sustainablility certificates 

                //add a section to add login infomration 

                // Fieldset::make('User Information')
                // ->relationship('user')
                // ->schema([
                //     Select::make('user_id')
                //         ->relationship('user', 'email')
                //         ->options(User::pluck('email', 'id' ,))
                //         ->searchable()
                //         ->required()
                    

                    

                ]);
                
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                //Brand name 
                //BrandLogo
                //Category 
                TextColumn::make('name'), 
                ImageColumn::make('logo'),
                TextColumn::make('category'),
                TextColumn::make('productsCount'), 

            ])
            ->filters([
                //
            ])
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
            'index' => Pages\ListBrands::route('/'),
            'create' => Pages\CreateBrands::route('/create'),
            'edit' => Pages\EditBrands::route('/{record}/edit'),
        ];
    }
}
