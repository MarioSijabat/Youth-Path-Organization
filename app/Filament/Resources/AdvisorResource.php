<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvisorResource\Pages;
use App\Models\Advisor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AdvisorResource extends Resource
{
    protected static ?string $model = Advisor::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')    
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('role')    
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('short_bio')    
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('social_media')    
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('role')
                    ->searchable(),
                Tables\Columns\TextColumn::make('short_bio')
                    ->limit(30)
                    ->searchable(),
                Tables\Columns\TextColumn::make('social_media')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->circular(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAdvisors::route('/'),
            'create' => Pages\CreateAdvisor::route('/create'),
            'edit' => Pages\EditAdvisor::route('/{record}/edit'),
        ];
    }
}