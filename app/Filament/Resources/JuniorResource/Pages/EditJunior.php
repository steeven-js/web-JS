<?php

namespace App\Filament\Resources\JuniorResource\Pages;

use App\Filament\Resources\JuniorResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJunior extends EditRecord
{
    protected static string $resource = JuniorResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
