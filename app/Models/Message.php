<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $ip
 * @property string $message
 * @property bool $is_read
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'message',
        'ip',
        'is_read',
    ];

    protected $casts = [
        'is_read' => 'boolean',
    ];
}
