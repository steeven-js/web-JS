<?php

namespace App\Filament\Resources\ChallengeLevelResource\Pages;

use App\Filament\Resources\ChallengeLevelResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListChallengeLevels extends ListRecords
{
    protected static string $resource = ChallengeLevelResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
