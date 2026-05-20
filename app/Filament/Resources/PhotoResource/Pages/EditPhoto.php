<?php

namespace App\Filament\Resources\PhotoResource\Pages;

use App\Filament\Resources\PhotoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Filament\Notifications\Notification;

class EditPhoto extends EditRecord
{
    protected static string $resource = PhotoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->label('Hapus Foto')
                ->requiresConfirmation()
                ->modalHeading('Hapus Foto Ini?')
                ->modalDescription('Foto yang dihapus tidak bisa dikembalikan. Yakin ingin menghapus?')
                ->modalSubmitActionLabel('Ya, Hapus'),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotification(): ?Notification
    {
        return Notification::make()
            ->success()
            ->title('✅ Foto berhasil diperbarui!')
            ->body('Perubahan sudah tersimpan dan tampil di website.');
    }
}
