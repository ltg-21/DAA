<?php

namespace App\Filament\Admin\Resources\HydrationLogResource\Pages;

use App\Filament\Admin\Resources\HydrationLogResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHydrationLog extends CreateRecord
{
    protected static string $resource = HydrationLogResource::class;
}
