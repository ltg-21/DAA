<?php

namespace App\Filament\Admin\Resources\HydrationLogResource\Pages;

use App\Filament\Admin\Resources\HydrationLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHydrationLog extends EditRecord
{
    protected static string $resource = HydrationLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
