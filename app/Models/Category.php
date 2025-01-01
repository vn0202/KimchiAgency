<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model
{

    protected $table = 'categories';
    protected $guarded = [];

    public function parent():BelongsTo{
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
