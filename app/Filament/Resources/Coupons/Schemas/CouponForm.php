<?php

namespace App\Filament\Resources\Coupons\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CouponForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code')
                    ->required()
                    ->unique(ignoreRecord:true),

                Select::make('type')
                    ->options(['fixed' => 'Fixed amount', 'percentage' => 'Percentage'])
                    ->default('fixed')
                    ->required(),

                TextInput::make('value')
                    ->required()
                    ->numeric(),

                TextInput::make('min_cart_value')
                    ->label('Minimum Cart Value')
                    ->numeric()
                    ->nullable(),

                TextInput::make('usage_limit')
                    ->numeric()
                    ->nullable(),

                DatePicker::make('expires_at')
                    ->native(false)
                    ->displayFormat('d/m/Y')
                    ->label('Expiry Date'),

                Toggle::make('status')
                    ->default(true),
            ]);
    }
}
