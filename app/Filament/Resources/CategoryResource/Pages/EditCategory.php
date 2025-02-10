<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use App\Services\Attachments\File;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategory extends EditRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function mutateFormDataBeforeSave(array $data): array
    {
        if($file = $data['thumbnail_id'] ?? null){
            $file = new File($file);
            $media_id= $file->load();
            $data['thumbnail_id'] = $media_id->id;
        }else{
            unset($data['thumbnail_id']);
    }
        return $data;
    }
}
