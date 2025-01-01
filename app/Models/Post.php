<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Http\Request;
use Orchid\Attachment\Models\Attachment;
use Orchid\Platform\Dashboard;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Tags\HasTags;

class Post extends Model
{
    use HasTags;
    protected $casts = [
        'attachments' => 'array',
    ];

    protected $table = 'posts';
    protected $guarded = [];



    public function save(array $options = [])
    {

        $this->type = "post";
        parent::save($options);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function featureMedia(): BelongsTo
    {
        return $this->belongsTo(\App\Models\Attachment::class, 'featured_media_id');
    }


    public function attachment(?string $group = null): MorphToMany
    {
        return $this->morphToMany(
            Attachment::class,
            'attachmentable',
            'attachmentable',
            'attachmentable_id',
            'attachment_id'
        )
            ->when($group !== null, fn ($query) => $query->where('group', $group))
            ->orderBy('sort');
    }


}
