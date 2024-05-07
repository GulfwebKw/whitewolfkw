<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class DetailSettings extends Settings
{

    public string $title;
    public string $email;
    public string $phone;
    public string $officeAddress;
    public string $poBox ;
    public array $location ;
    public string $logo ;
    public static function group(): string
    {
        return 'default';
    }
}
