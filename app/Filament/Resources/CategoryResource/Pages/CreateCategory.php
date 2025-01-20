<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use App\Services\Attachments\File;
use Filament\Actions;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {

        if($file = $data['thumbnail_id'] ?? null){
            $file = new File($file);
            $media_id= $file->load();
            $data['thumbnail_id'] = $media_id->id;
        }

        return $data;
    }

}
