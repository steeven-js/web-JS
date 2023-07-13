<?php

namespace App\Filament\Resources\NewbieResource\Pages;

use App\Filament\Resources\NewbieResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNewbie extends CreateRecord
{
    protected static string $resource = NewbieResource::class;
}
