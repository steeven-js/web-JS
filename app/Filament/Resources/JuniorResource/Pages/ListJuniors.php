<?php

namespace App\Filament\Resources\JuniorResource\Pages;

use App\Filament\Resources\JuniorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJuniors extends ListRecords
{
    protected static string $resource = JuniorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
