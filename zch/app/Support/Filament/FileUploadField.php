<?php

namespace App\Support\Filament;

use Filament\Forms\Components\BaseFileUpload;
use Filament\Forms\Components\FileUpload;
use Illuminate\Support\Facades\Storage;

class FileUploadField
{
    public static function make(string $name, string $directory): FileUpload
    {
        return FileUpload::make($name)
            ->disk('public_assets')
            ->directory($directory)
            ->visibility('public')
            ->deletable()
            ->maxSize(20480)
            ->acceptedFileTypes([
                'application/pdf',
                'application/msword',
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                'application/vnd.ms-excel',
                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'text/plain',
                'text/csv',
                'application/zip',
                'application/x-rar-compressed',
                'image/jpeg',
                'image/png',
                'image/gif',
                'image/webp',
                'image/svg+xml',
            ])
            ->getUploadedFileUsing(function (BaseFileUpload $component, string $file, string|array|null $storedFileNames): ?array {
                if (blank($file)) {
                    return null;
                }

                $path = ltrim($file, '/');
                $disk = Storage::disk('public_assets');

                if (! $disk->exists($path)) {
                    return null;
                }

                return [
                    'name' => is_string($storedFileNames) ? $storedFileNames : basename($path),
                    'size' => $disk->size($path),
                    'type' => $disk->mimeType($path) ?: 'application/octet-stream',
                    'url' => url($path),
                ];
            })
            ->getOpenableFileUrlUsing(fn (string $file): string => url(ltrim($file, '/')))
            ->getDownloadableFileUrlUsing(fn (string $file): string => url(ltrim($file, '/')))
            ->deleteUploadedFileUsing(function (BaseFileUpload $component, string $file): void {
                if (blank($file)) {
                    return;
                }

                $path = ltrim($file, '/');
                $disk = $component->getDisk() ?? Storage::disk('public_assets');

                if ($disk->exists($path)) {
                    $disk->delete($path);
                }
            });
    }
}
