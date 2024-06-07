<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CertificationsResource\Pages;
use App\Filament\Resources\CertificationsResource\RelationManagers;
use App\Models\Certifications;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CertificationsResource extends Resource
{
    protected static ?string $model = Certifications::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->required()
                ->maxLength(255),
            TextInput::make('subtitle')
                ->required()
                ->maxLength(255),
            Textarea::make('description')
                ->maxLength(1000)
                ->required(),
            SpatieMediaLibraryFileUpload::make('image')->collection('certification_images'),
           
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make('id')->sortable(),
                SpatieMediaLibraryImageColumn::make('image')->collection('certification_images')->conversion('thumb'),
                TextColumn::make('name')->searchable(),
                TextColumn::make('subtitle')->searchable(),
                TextColumn::make('description')->searchable(),
            ])
            ->filters([
                
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListCertifications::route('/'),
            'create' => Pages\CreateCertifications::route('/create'),
            'edit' => Pages\EditCertifications::route('/{record}/edit'),
        ];
    }
}
