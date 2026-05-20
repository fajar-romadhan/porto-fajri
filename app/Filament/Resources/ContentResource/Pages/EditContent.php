<?php

namespace App\Filament\Resources\ContentResource\Pages;

use App\Filament\Resources\ContentResource;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditContent extends EditRecord
{
    protected static string $resource = ContentResource::class;

    // Tidak ada tombol Delete — konten website tidak boleh dihapus
    protected function getHeaderActions(): array
    {
        return [];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('✅ Berhasil disimpan!')
            ->body('Perubahan sudah tampil di website Anda.');
    }
}
