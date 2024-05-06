<?php

namespace App\Filament\Pages;

use App\Settings\HomepageSettings;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Form;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Pages\SettingsPage;

class ManageHomepage extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = HomepageSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs\Tab::make('Header Slider')
                    ->schema([
                        Repeater::make('slideshow')
                            ->schema([
                                FileUpload::make('image')
                                    ->image()
                                    ->imageEditor()
                                    ->required(),
                                TextInput::make('title')
                                    ->required(),
                                Forms\Components\Textarea::make('description')
                                    ->required(),
                                TextInput::make('link')
                                    ->url()
                                    ->required(),
                                TextInput::make('button')
                                    ->required(),
                            ]),
                    ]),
                Tabs\Tab::make('About Us')
                    ->schema([
                        TextInput::make('aboutUsTitle')
                            ->required(),
                        TextInput::make('aboutUsContent')
                            ->required(),
                        TextInput::make('aboutUsButtonLabel')
                            ->required(),
                        TextInput::make('aboutUsButtonLink')
                            ->url()
                            ->required(),
                        FileUpload::make('aboutUsImage1')
                            ->image()
                            ->imageEditor()
                            ->required(),
                        FileUpload::make('aboutUsImage2')
                            ->image()
                            ->imageEditor()
                            ->required(),
                    ]),
            ]);
    }
}
