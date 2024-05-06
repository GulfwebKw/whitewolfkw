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
 * @property string $template
 * @property string $image1
 * @property string $image2
 * @property bool $is_active
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'subTitle',
        'content',
        'template',
        'image1',
        'image2',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
