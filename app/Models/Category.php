<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{

    protected $table = 'categories';
    protected $guarded = [];

    public function parent():BelongsTo{
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function posts():HasMany{
        return $this->hasMany(Post::class, 'category_id');
    }

    public function thumbnail():belongsTo{
        return $this->belongsTo(Attachment::class, 'thumbnail_id');
    }

    public function getThumbnailUrlAttribute():string
    {
        return $this->thumbnail->url();
    }

    public function url()
    {
        return route('works', ['cat' => $this->slug]);
    }
}
