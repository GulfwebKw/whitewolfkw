<?php

namespace App\Filament\Pages;

use Dotswan\MapPicker\Fields\Map;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Pages\SettingsPage;

class DetailSettings extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = \App\Settings\DetailSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                TextInput::make('email')
                    ->required(),
                TextInput::make('phone')
                    ->required(),
                TextInput::make('officeAddress')
                    ->required(),
                TextInput::make('poBox')
                    ->required(),
                Forms\Components\FileUpload::make('logo')
                    ->image()
                    ->required(),
                Map::make('location')
                    ->label('Location')
                    ->columnSpanFull()
                    ->afterStateUpdated(function (Get $get, Set $set, string|array|null $old, ?array $state): void {
                        $set('latitude', $state['lat']);
                        $set('longitude', $state['lng']);
                    })
                    ->afterStateHydrated(function ($state, $record, Set $set): void {
                        $set('location', ['lat' => $state['lat'], 'lng' => $state['lng']]);
                    })
                    ->extraStyles([
                        'min-height: 250px',
                        'border-radius: 5px'
                    ])
                    ->liveLocation()
                    ->showMarker()
                    ->markerColor("#22c55eff")
                    ->showFullscreenControl()
                    ->showZoomControl()
                    ->draggable()
                    ->tilesUrl("https://tile.openstreetmap.de/{z}/{x}/{y}.png")
                    ->zoom(10)
                    ->detectRetina()
                    ->showMyLocationButton()
                    ->extraTileControl([])
                    ->extraControl([
                        'zoomDelta'           => 1,
                        'zoomSnap'            => 2,
                    ])
            ]);
    }
}
