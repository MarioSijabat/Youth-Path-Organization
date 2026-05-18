<?php

namespace App\Filament\Resources\ElderResource\Pages;

use App\Filament\Resources\ElderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListElders extends ListRecords
{
    protected static string $resource = ElderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
