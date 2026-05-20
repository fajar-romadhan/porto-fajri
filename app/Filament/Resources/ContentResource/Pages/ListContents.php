<?php

namespace App\Filament\Resources\ContentResource\Pages;

use App\Filament\Resources\ContentResource;
use Filament\Resources\Pages\ListRecords;

class ListContents extends ListRecords
{
    protected static string $resource = ContentResource::class;

    public function mount(): void
    {
        $sections = [
            'logo_text' => [
                'content' => 'FAJRI Photography',
            ],
            'hero_bg' => [
                'content' => '',
                'image_path' => null,
            ],
            'about_text' => [
                'content' => 'Berfokus pada estetika minimalis dan keaslian momen. Setiap karya dihasilkan melalui observasi cahaya yang tenang dan komposisi yang bersih, memastikan kenangan Anda abadi dan elegan.',
            ],
            'about_bg' => [
                'content' => '',
                'image_path' => null,
            ],
            'footer_text' => [
                'content' => '&copy; 2026 FAJRI Photography. Minimalist approach to visual storytelling.',
            ],
        ];

        foreach ($sections as $section => $data) {
            \App\Models\Content::firstOrCreate(
                ['section' => $section],
                $data
            );
        }

        parent::mount();
    }

    // Tidak ada tombol Create — section sudah fixed
    protected function getHeaderActions(): array
    {
        return [];
    }
}
