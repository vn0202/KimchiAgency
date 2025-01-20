<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class StaticInfo extends Model
{
    protected $table = 'static_infos';
    protected $guarded = [];


    public function background(): BelongsTo{
        return $this->belongsTo(Attachment::class, 'background_id');
    }
    public function favicon():BelongsTo{
        return $this->belongsTo(Attachment::class, 'favicon_id');
    }
    public function logo():BelongsTo{
        return $this->belongsTo(Attachment::class, 'logo_id');
    }

}
