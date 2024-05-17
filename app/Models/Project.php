<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Project extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    public function registerMediaConversions(?Media $media = null): void
    {
        $width = getimagesize($media->getPath())[0];
        $height = getimagesize($media->getPath())[1];
        $this
            ->addMediaConversion('thumb')
            ->sharpen(0)
            ->width($width / 4)
            ->height($height / 4)
            ->nonQueued();
    }

    public function getThumbnail()
    {
        return $this->getFirstMediaUrl('Project', 'thumb');
    }

    protected $fillable = [
        'name',
        'description',
        'type',
        'stack',
        'url',
    ];

    protected $casts = [
        'stack' => 'array',
    ];
}
