<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
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
            ]);
    }
}
