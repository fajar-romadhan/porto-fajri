<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PhotoResource\Pages;
use App\Models\Photo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PhotoResource extends Resource
{
    protected static ?string $model = Photo::class;

    protected static ?string $navigationIcon  = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Foto';
    protected static ?string $modelLabel      = 'Foto';
    protected static ?string $pluralModelLabel = 'Daftar Foto';
    protected static ?int    $navigationSort  = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->label('Kategori')
                    ->helperText('Pilih kategori yang sesuai untuk foto ini.')
                    ->relationship('category', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Forms\Components\TextInput::make('title')
                    ->label('Judul Foto')
                    ->helperText('Contoh: "Momen Wisuda Rina" — akan tampil saat foto di-hover.')
                    ->maxLength(255),

                Forms\Components\FileUpload::make('image_path')
                    ->label('Upload Foto')
                    ->helperText('Upload foto dalam format JPG, PNG, atau WebP. Maksimal 4MB (otomatis dikompres ke 1200x1500 px agar loading website instan).')
                    ->disk('s3')
                    ->visibility('public')
                    ->image()
                    ->directory('photos')
                    ->imageResizeMode('cover')
                    ->imageCropAspectRatio('4:5')
                    ->imageResizeTargetWidth('1200')
                    ->imageResizeTargetHeight('1500')
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                    ->maxSize(4096) // 4MB limit to safely fit within Vercel's 4.5MB payload limit
                    ->required(),

                Forms\Components\TextInput::make('order_column')
                    ->label('Urutan Tampil')
                    ->helperText('Angka kecil tampil lebih dulu. Contoh: isi 1 untuk tampil paling atas.')
                    ->numeric()
                    ->default(0)
                    ->minValue(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_path')
                    ->label('Preview')
                    ->disk('s3')
                    ->height(80)
                    ->square(),

                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->default('(Tanpa Judul)'),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Kategori')
                    ->badge()
                    ->color('warning'),

                Tables\Columns\TextColumn::make('order_column')
                    ->label('Urutan')
                    ->sortable(),
            ])
            ->defaultSort('order_column', 'asc')
            ->filters([
                Tables\Filters\SelectFilter::make('category_id')
                    ->label('Filter Kategori')
                    ->options(\App\Models\Category::pluck('name', 'id')->toArray())
                    ->query(function (\Illuminate\Database\Eloquent\Builder $query, array $data): \Illuminate\Database\Eloquent\Builder {
                        if (isset($data['value']) && $data['value']) {
                            return $query->where('category_id', $data['value']);
                        }
                        return $query;
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('Edit'),
                Tables\Actions\DeleteAction::make()->label('Hapus'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()->label('Hapus yang Dipilih'),
                ]),
            ])
            ->emptyStateHeading('Belum ada foto')
            ->emptyStateDescription('Klik tombol "Tambah Foto" di atas untuk mulai upload foto ke website.')
            ->emptyStateIcon('heroicon-o-photo');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListPhotos::route('/'),
            'create' => Pages\CreatePhoto::route('/create'),
            'edit'   => Pages\EditPhoto::route('/{record}/edit'),
        ];
    }
}
