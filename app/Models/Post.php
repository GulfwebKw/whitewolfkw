<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


/**
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $subTitle
 * @property string $content
 * @property string $image
 * @property bool $is_active
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'subTitle',
        'content',
        'image',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
