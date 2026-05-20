<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContentResource\Pages;
use App\Models\Content;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ContentResource extends Resource
{
    protected static ?string $model = Content::class;

    protected static ?string $navigationIcon   = 'heroicon-o-pencil-square';
    protected static ?string $navigationLabel  = 'Teks & Gambar Website';
    protected static ?string $modelLabel       = 'Konten';
    protected static ?string $pluralModelLabel = 'Pengaturan Teks & Gambar';
    protected static ?int    $navigationSort   = 3;

    // Label ramah untuk setiap section
    private static array $sectionLabels = [
        'logo_text'   => '🔤 Nama / Logo Website',
        'hero_bg'     => '🖼️ Foto Latar Halaman Utama (Hero)',
        'about_text'  => '📝 Teks Tentang Saya (About)',
        'about_bg'    => '🖼️ Foto Latar Bagian "About"',
        'footer_text' => '📄 Teks Footer (Bagian Bawah)',
    ];

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Placeholder::make('section_label')
                    ->label('Bagian yang sedang diedit')
                    ->content(fn ($record) => self::$sectionLabels[$record?->section ?? ''] ?? $record?->section ?? '-'),

                Forms\Components\Textarea::make('content')
                    ->label('Isi Teks')
                    ->helperText('Isi teks yang akan tampil di website. Kosongkan jika bagian ini hanya menggunakan gambar.')
                    ->rows(4)
                    ->columnSpanFull(),

                Forms\Components\FileUpload::make('image_path')
                    ->label('Foto / Gambar Latar')
                    ->helperText('Upload gambar (JPG, PNG, WebP). Maksimal 4MB per foto (otomatis dikompres ke resolusi HD 1920x1080 px agar loading website tetap ringan).')
                    ->disk('s3')
                    ->visibility('public')
                    ->image()
                    ->directory('backgrounds')
                    ->multiple()
                    ->maxFiles(5)
                    ->reorderable()
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                    ->maxSize(4096) // 4MB limit to safely fit within Vercel's 4.5MB payload limit
                    ->columnSpanFull()
                    ->imageResizeMode('cover')
                    ->imageResizeTargetWidth('1920')
                    ->imageResizeTargetHeight('1080'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('section')
                    ->label('Bagian Website')
                    ->formatStateUsing(fn ($state) => self::$sectionLabels[$state] ?? $state)
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('content')
                    ->label('Isi Teks Saat Ini')
                    ->limit(60)
                    ->placeholder('(Hanya gambar)')
                    ->color('gray'),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('✏️ Edit')
                    ->tooltip('Ubah teks atau gambar untuk bagian ini'),
            ])
            // Sembunyikan bulk action & tombol create — ini settings bukan data
            ->bulkActions([])
            ->paginated(false)
            ->heading('Pengaturan Konten Website')
            ->description('Klik tombol "Edit" di setiap baris untuk mengubah teks atau foto yang tampil di website Anda.');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContents::route('/'),
            // Hanya edit — tidak ada create/show halaman terpisah
            'edit'  => Pages\EditContent::route('/{record}/edit'),
        ];
    }

    // Sembunyikan tombol "New Konten" — admin tidak perlu buat section baru
    public static function canCreate(): bool
    {
        return false;
    }

    // Nonaktifkan delete — section website tidak boleh dihapus
    public static function canDelete(\Illuminate\Database\Eloquent\Model $record): bool
    {
        return false;
    }
}
