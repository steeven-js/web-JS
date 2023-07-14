<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Newbie;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\NewbieResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\NewbieResource\RelationManagers;

class NewbieResource extends Resource
{
    protected static ?string $model = Newbie::class; // Modèle associé à la ressource

    protected static ?string $navigationGroup = 'Challenge'; // Groupe de navigation

    protected static ?int $navigationSort = 1; // Position dans le groupe de navigation

    protected static ?string $navigationIcon = 'heroicon-o-collection'; // Icône de navigation

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
                Forms\Components\Toggle::make('is_visible')
                    ->label('Visible'),
                Forms\Components\TextInput::make('view_code')
                    ->hidden()
                    ->disabled()
                    ->maxLength(255),
                Forms\Components\TextInput::make('position')
                    ->hidden()
                    ->disabled()
                    ->numeric(), // Champ numérique
                Forms\Components\FileUpload::make('image'), // Champ de type fichier
                Forms\Components\TextInput::make('hosted_url')
                    ->url() // Champ de type url
                    ->maxLength(255),
                Forms\Components\Toggle::make('hosted_is_active')
                    ->label('Active'),
                Forms\Components\TextInput::make('github_url')
                    ->url()
                    ->maxLength(255),
                Forms\Components\Toggle::make('github_is_active')
                    ->label('Active'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([  // Liste des colonnes
                Tables\Columns\ImageColumn::make('image')
                    ->circular(),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('slug')
                    ->hidden(),
                Tables\Columns\ToggleColumn::make('is_visible')
                    ->label('Visibility')
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('view_code'),
                Tables\Columns\TextColumn::make('position'),
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
