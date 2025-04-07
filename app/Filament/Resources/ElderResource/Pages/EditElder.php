<?php

namespace App\Filament\Resources\ElderResource\Pages;

use App\Filament\Resources\ElderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditElder extends EditRecord
{
    protected static string $resource = ElderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
