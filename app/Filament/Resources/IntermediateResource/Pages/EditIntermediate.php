<?php

namespace App\Filament\Resources\IntermediateResource\Pages;

use App\Filament\Resources\IntermediateResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIntermediate extends EditRecord
{
    protected static string $resource = IntermediateResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
