<?php

namespace App\Filament\Resources\Products\Schemas;

use App\Models\Product;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code')
                    ->required()
                    ->minLength(3)
                    ->maxLength(255)
                    ->unique(Product::class, 'code',ignoreRecord: true),
                TextInput::make('name')
                    ->label('Nom produit')
                    ->minLength(5)
                    ->required(),
                TextInput::make('price')
                    ->label('Prix')
                    ->required()
                    ->numeric()
                    ->prefix('MGA'),
                Textarea::make('technical_sheet')
                    ->label('Fiche technique')
                    ->rows(5),
                FileUpload::make('photo')
                    ->image()
                    ->directory('products')
                    ->imagePreviewHeight('150')
                    ->preserveFilenames(),
            ]);
    }
}
