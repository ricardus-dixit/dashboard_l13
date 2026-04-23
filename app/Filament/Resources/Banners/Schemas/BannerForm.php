<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title'),
                FileUpload::make('image')
                    ->image()
                    ->required(),
                Select::make('type')
                    ->options(['slider' => 'Slider', 'grid' => 'Grid'])
                    ->default('slider')
                    ->required(),
                TextInput::make('position')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('status')
                    ->required(),
            ]);
    }
}
