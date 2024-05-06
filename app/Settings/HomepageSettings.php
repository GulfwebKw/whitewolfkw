<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class HomepageSettings extends Settings
{
    public array $slideshow ;
    public string $aboutUsTitle;
    public string $aboutUsContent;
    public string $aboutUsButtonLabel;
    public string $aboutUsButtonLink;
    public string $aboutUsImage1;
    public string $aboutUsImage2;
    public string $ourMissionTitle;
    public string $ourMissionContent;
    public string $ourMissionButtonLabel;
    public string $ourMissionButtonLink;
    public string $ourMissionFrom;
    public string $ourMissionFromSubHeader;
    public array $ourMissionSlideshow ;
    public array $ourMissionProductions;
    public static function group(): string
    {
        return 'default';
    }
}
