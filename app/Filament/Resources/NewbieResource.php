<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewbieResource\Pages;
use App\Filament\Resources\NewbieResource\RelationManagers;
use App\Models\Newbie;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewbieResource extends Resource
{
    protected static ?string $model = Newbie::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('view_code')
                    ->maxLength(255),
                Forms\Components\TextInput::make('position'),
                Forms\Components\TextInput::make('image')
                    ->maxLength(255),
                Forms\Components\TextInput::make('hosted_url')
                    ->maxLength(255),
                Forms\Components\TextInput::make('github_url')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('view_code'),
                Tables\Columns\TextColumn::make('position'),
                Tables\Columns\TextColumn::make('image'),
                Tables\Columns\TextColumn::make('hosted_url'),
                Tables\Columns\TextColumn::make('github_url'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListNewbies::route('/'),
            'create' => Pages\CreateNewbie::route('/create'),
            'edit' => Pages\EditNewbie::route('/{record}/edit'),
        ];
    }    
}
