<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Illuminate\Support\Str;
use App\Models\Intermediate;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\IntermediateResource\Pages;
use App\Filament\Resources\IntermediateResource\RelationManagers;

class IntermediateResource extends Resource
{
    protected static ?string $model = Intermediate::class;

    protected static ?string $navigationGroup = 'Challenge'; // Groupe de navigation

    protected static ?int $navigationSort = 3; // Position dans le groupe de navigation

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->lazy()
                    ->afterStateUpdated(fn (string $context, $state, callable $set) => $context === 'create' || $context === 'edit' ? $set('slug', Str::slug($state)) : null),
                Forms\Components\TextInput::make('slug')
                    ->disabled()
                    ->required()
                    ->unique(Newbie::class, 'slug', ignoreRecord: true),
                Forms\Components\TextInput::make('view_code')
                    ->disabled()
                    ->maxLength(255),
                Forms\Components\TextInput::make('position')
                    ->disabled()
                    ->numeric(), // Champ numérique
                Forms\Components\FileUpload::make('image'), // Champ de type fichier
                Forms\Components\TextInput::make('hosted_url')
                    ->url() // Champ de type url
                    ->maxLength(255),
                Forms\Components\TextInput::make('github_url')
                    ->url()
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
            'index' => Pages\ListIntermediates::route('/'),
            'create' => Pages\CreateIntermediate::route('/create'),
            'edit' => Pages\EditIntermediate::route('/{record}/edit'),
        ];
    }
}
