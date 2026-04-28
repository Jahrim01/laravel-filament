<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ProductInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('code'),
                TextEntry::make('name')
                    ->label('Nom produit'),
                TextEntry::make('price')
                    ->label('Prix')
                    ->money('MGA'),
                TextEntry::make('technical_sheet')
                    ->label('Fiche technique')
                    ->placeholder('-')
                    ->columnSpanFull(),
                ImageEntry::make('photo')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->label('créé le')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('mis à jour le')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
