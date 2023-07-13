<?php

namespace App\Filament\Resources\NewbieResource\Pages;

use App\Filament\Resources\NewbieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNewbie extends EditRecord
{
    protected static string $resource = NewbieResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
