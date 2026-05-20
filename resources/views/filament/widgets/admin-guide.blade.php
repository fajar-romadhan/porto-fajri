<x-filament-widgets::widget>
    <x-filament::section>
        <x-slot name="heading">
            📋 Panduan Cepat Pengelolaan Website
        </x-slot>

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-gray-600 dark:text-gray-300" style="border-collapse:collapse; line-height:1.7;">
                <tbody>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <td class="py-3 pr-3 whitespace-nowrap align-top font-bold text-emerald-700 dark:text-emerald-400">① Kategori</td>
                        <td class="py-3">Buat kategori dulu sebelum upload foto. Menu <strong>Kategori</strong> → <strong>Tambah Kategori</strong>.</td>
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <td class="py-3 pr-3 whitespace-nowrap align-top font-bold text-blue-800 dark:text-blue-400">② Upload Foto</td>
                        <td class="py-3">Menu <strong>Foto</strong> → <strong>Tambah Foto</strong> → pilih kategori, isi judul, dan upload gambar.</td>
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <td class="py-3 pr-3 whitespace-nowrap align-top font-bold text-purple-800 dark:text-purple-400">③ Edit Website</td>
                        <td class="py-3">Ganti teks About, Logo, foto Hero di menu <strong>Teks &amp; Gambar Website</strong> → klik <strong>Edit</strong>.</td>
                    </tr>
                    <tr class="border-b border-gray-200 dark:border-gray-700">
                        <td class="py-3 pr-3 whitespace-nowrap align-top font-bold text-amber-700 dark:text-amber-400">④ Urutan Foto</td>
                        <td class="py-3">
                            <div class="mb-1">Kolom <strong>Urutan Tampil</strong> saat mengedit/menambah foto menentukan posisi foto di galeri.</div>
                            <div class="p-2 bg-amber-50 dark:bg-amber-900/20 rounded border border-amber-100 dark:border-amber-800/50 text-xs">
                                💡 <strong>Sistem Urutan:</strong> Semakin <strong>KECIL</strong> angkanya (contoh: 1, 2, 3), foto akan <strong>tampil paling atas/awal</strong>. Jika dibiarkan kosong (angka 0), foto akan tampil secara default di urutan akhir.
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-3 pr-3 whitespace-nowrap align-top font-bold text-red-700 dark:text-red-400">⚠️ Hapus</td>
                        <td class="py-3">Foto yang dihapus <strong>tidak bisa dikembalikan</strong>. Pastikan dengan teliti sebelum menekan Hapus.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
