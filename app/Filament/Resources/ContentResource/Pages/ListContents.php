<?php

namespace App\Filament\Resources\ContentResource\Pages;

use App\Filament\Resources\ContentResource;
use Filament\Resources\Pages\ListRecords;

class ListContents extends ListRecords
{
    protected static string $resource = ContentResource::class;

    // Tidak ada tombol Create — section sudah fixed
    protected function getHeaderActions(): array
    {
        return [];
    }
}
