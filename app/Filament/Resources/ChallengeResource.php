<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Challenge;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ChallengeResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ChallengeResource\RelationManagers;

class ChallengeResource extends Resource
{
    protected static ?string $model = Challenge::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Select::make('challenge_level_id')
                            ->label('Challenge Level')
                            ->relationship('challengeLevel', 'name')
                            ->required(),

                        Forms\Components\TextInput::make('title')
                            ->required()
                            ->maxValue(50)
                            ->lazy()
                            ->afterStateUpdated(function (string $context, $state, callable $set) {
                                if ($context === 'create' || $context === 'edit') {
                                    $set('slug', Str::slug($state));
                                    $set('view_code', Str::camel($state));
                                }

                                // dd($state);
                            }),

                        Forms\Components\TextInput::make('slug')
                            ->disabled()
                            ->required()
                            ->unique(Challenge::class, 'slug', ignoreRecord: true),

                        Forms\Components\TextInput::make('view_code')
                            ->disabled()
                            ->required()
                            ->unique(Challenge::class, 'view_code', ignoreRecord: true),

                        Forms\Components\FileUpload::make('image'),
                        Forms\Components\TextInput::make('hosted_url')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('github_url')
                            ->maxLength(255),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('challengeLevel.name')
                    ->label('Challenge Level'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\ImageColumn::make('image'),
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
            'index' => Pages\ListChallenges::route('/'),
            'create' => Pages\CreateChallenge::route('/create'),
            'edit' => Pages\EditChallenge::route('/{record}/edit'),
        ];
    }
}
