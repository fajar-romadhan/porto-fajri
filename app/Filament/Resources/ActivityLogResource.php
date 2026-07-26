<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActivityLogResource\Pages;
use App\Models\ActivityLog;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ActivityLogResource extends Resource
{
    protected static ?string $model            = ActivityLog::class;
    protected static ?string $navigationIcon   = 'heroicon-o-clock';
    protected static ?string $navigationLabel  = 'Log Aktivitas';
    protected static ?string $navigationGroup  = 'Sistem Studio';
    protected static ?int $navigationSort      = 99;

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal & Waktu (WIB)')
                    ->dateTime('d M Y, H:i:s')
                    ->suffix(' WIB')
                    ->sortable(),

                Tables\Columns\BadgeColumn::make('action_type')
                    ->label('Aksi')
                    ->colors([
                        'success' => 'CREATE',
                        'info'    => 'UPDATE',
                        'danger'  => 'DELETE',
                        'warning' => 'SETTING',
                        'primary' => 'LOGIN',
                    ]),

                Tables\Columns\TextColumn::make('module')
                    ->label('Modul')
                    ->badge(),

                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi Aktivitas')
                    ->searchable()
                    ->wrap(),

                Tables\Columns\TextColumn::make('admin_name')
                    ->label('Admin')
                    ->badge(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('action_type')
                    ->label('Filter Jenis Aksi')
                    ->options([
                        'CREATE'  => 'CREATE (Tambah Data)',
                        'UPDATE'  => 'UPDATE (Edit Data)',
                        'DELETE'  => 'DELETE (Hapus Data)',
                        'SETTING' => 'SETTING (Ubah Pengaturan)',
                    ]),
                Tables\Filters\SelectFilter::make('module')
                    ->label('Filter Modul')
                    ->options([
                        'Foto'         => 'Foto Portofolio',
                        'Kategori'     => 'Kategori',
                        'Teks Website' => 'Teks Website',
                        'Sistem'       => 'Sistem',
                    ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListActivityLogs::route('/'),
        ];
    }
}
