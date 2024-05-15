<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Forms\Components\RadioButtonImage;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                TextInput::make('subTitle')
                    ->nullable(),
                \Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor::make('content')
                    ->columnSpan(2)
                    ->required(),
                RadioButtonImage::make('template')
                    ->columnSpan(2)
                    ->options([
                        'rr' => asset('assets/images/admin/rr.png'),
                        'lr' => asset('assets/images/admin/lr.png'),
                        'll' => asset('assets/images/admin/ll.png'),
                        'rl' => asset('assets/images/admin/rl.png'),
                    ])
                    ->required(),
                Forms\Components\FileUpload::make('image1')
                    ->image()
                    ->imageEditor()
                    ->required(),
                Forms\Components\FileUpload::make('image2')
                    ->image()
                    ->imageEditor()
                    ->nullable(),
                IconPicker::make('icon')
                    ->required(),
                Forms\Components\Checkbox::make('is_active')
                    ->inline(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\BooleanColumn::make('is_active'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->reorderable('ordering')
            ->paginatedWhileReordering(false)
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
