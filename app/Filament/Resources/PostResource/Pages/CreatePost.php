<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use App\Services\Attachments\File;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Http\UploadedFile;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {

        if($file = $data['featured_media_id']){
            $file = new File($file);
           $media_id= $file->load();
            $data['featured_media_id'] = $media_id->id;
        }

        return $data;
    }
}
