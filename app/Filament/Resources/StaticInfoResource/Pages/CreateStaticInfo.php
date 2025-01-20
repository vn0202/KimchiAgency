<?php

namespace App\Filament\Resources\StaticInfoResource\Pages;

use App\Filament\Resources\StaticInfoResource;
use App\Services\Attachments\File;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateStaticInfo extends CreateRecord
{
    protected static string $resource = StaticInfoResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {

        if($file = $data['background_id']){
            $file = new File($file);
            $media_id= $file->load();
            $data['background_id'] = $media_id->id;
        }
        if($file = $data['favicon_id']){
            $file = new File($file);
            $media_id= $file->load();
            $data['favicon_id'] = $media_id->id;
        }
        if($file = $data['logo_id']){
            $file = new File($file);
            $media_id= $file->load();
            $data['logo_id'] = $media_id->id;
        }

        return $data;
    }
}
