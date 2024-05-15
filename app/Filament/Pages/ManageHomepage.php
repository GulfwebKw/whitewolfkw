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
            ->columns(1)
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('Header Slider')
                            ->schema([
                                Repeater::make('slideshow')
                                    ->columns(2)
                                    ->label('Slide shows')
                                    ->schema([
                                        TextInput::make('title')
                                            ->required(),
                                        Forms\Components\Textarea::make('description')
                                            ->required(),
                                        TextInput::make('link')
                                            ->url()
                                            ->required(),
                                        TextInput::make('button')
                                            ->required(),
                                        FileUpload::make('image')
                                            ->image()
                                            ->imageEditor()
                                            ->required(),
                                    ]),
                            ]),
                        Tabs\Tab::make('About Us')
                            ->columns(2)
                            ->schema([
                                TextInput::make('aboutUsTitle')
                                    ->required(),
                                TextInput::make('aboutUsButtonLabel')
                                    ->required(),
                                TextInput::make('aboutUsButtonLink')
                                    ->url()
                                    ->required(),
                                \Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor::make('aboutUsContent')
                                    ->columnSpanFull()
                                    ->required(),
                                FileUpload::make('aboutUsImage1')
                                    ->image()
                                    ->imageEditor()
                                    ->required(),
                                FileUpload::make('aboutUsImage2')
                                    ->image()
                                    ->imageEditor(),
                            ]),
                        Tabs\Tab::make('Our Mission')
                            ->columns(2)
                            ->schema([
                                TextInput::make('ourMissionTitle')
                                    ->required(),
                                TextInput::make('ourMissionButtonLabel')
                                    ->required(),
                                TextInput::make('ourMissionFrom')
                                    ->required(),
                                TextInput::make('ourMissionFromSubHeader')
                                    ->required(),
                                TextInput::make('ourMissionButtonLink')
                                    ->url()
                                    ->required(),
                                \Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor::make('ourMissionContent')
                                    ->columnSpanFull()
                                    ->required(),
                                Repeater::make('ourMissionSlideshow')
                                    ->columns(2)
                                    ->columnSpan(2)
                                    ->label('Mission slideshows')
                                    ->schema([
                                        TextInput::make('title')
                                            ->required(),
                                        FileUpload::make('image')
                                            ->image()
                                            ->imageEditor()
                                            ->required(),
                                    ]),
                                Repeater::make('ourMissionProductions')
                                    ->columns(2)
                                    ->columnSpan(2)
                                    ->label('Mission productions')
                                    ->schema([
                                        TextInput::make('title')
                                            ->required(),
                                        TextInput::make('link')
                                            ->url()
                                            ->required(),
                                        FileUpload::make('image')
                                            ->image()
                                            ->imageEditor()
                                            ->required(),
                                    ]),
                            ]),
                    ]),
            ]);
    }
}
