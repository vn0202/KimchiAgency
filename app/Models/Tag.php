<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Spatie\Tags\HasTags;

class Tag extends Model
{
    protected $table = 'tags';
    protected $guarded = [];
    public function posts(): MorphMany
    {
        return $this->morphMany(Post::class, 'taggable');
    }

    public static function findFromString(string $name, string $type = null)
    {
        return static::query()
            ->updateOrCreate(['slug'=> Str::slug($name)],
            [
                'name' => $name
            ]);
    }

    public static function from(string|array $tags, $reg_split = '/[,;|]/ui'): Collection
    {
        if (is_string($tags)) {
            $tags = preg_split($reg_split, $tags);
        }
        $result = collect();
        foreach ($tags as $tag) {
            $result->push(self::findFromString($tag));
        }

        return $result;
    }

    public function getNameTextAttribute(): string
    {
        return Arr::get(json_decode($this->name,true), 'en');
    }

}
