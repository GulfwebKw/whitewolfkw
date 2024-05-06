<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('default.slideshow', []);
        $this->migrator->add('default.aboutUsTitle', 'ABOUT US');
        $this->migrator->add('default.aboutUsContent', 'We use our avant-garde, deep and shallow water, offshore drilling, and installation fleets to support upstream developments during the preliminary assessments, exploration and production release of conventional and unconventional reserves. We add value to our resources, thanks to our specific know-how and intrinsic skills in complex, midstream and downstream infrastructures, e.g. gas treatment plants, compressor stations, LNG and degasification infrastructures, fertilizers, onshore and offshore gas pipes. We are a unique, global, industrial unit along the value chain of the various energy sources and a major player in decarbonization. We give a major boost to the reduction of emissions along that chain by providing our customers with innovative project design, engineering, and technological solutions. We strive to be the key in their companies\' energy transition, their bridge towards a sustainable future.');
        $this->migrator->add('default.aboutUsButtonLabel', 'About Us');
        $this->migrator->add('default.aboutUsButtonLink', 'https://whitewolfkw.com/about.html');
        $this->migrator->add('default.aboutUsImage1', 'https://whitewolfkw.com/assets/img/image-01.jpg');
        $this->migrator->add('default.aboutUsImage2', 'https://whitewolfkw.com/assets/img/image-2.jpg');
        $this->migrator->add('default.ourMissionTitle', 'OUR MISSION');
        $this->migrator->add('default.ourMissionContent', 'Our mission is focused on delivering world class, sustainable value to our clients through a highly collaborative portfolio of companies to provide better, more efficient, and superior asset management solutions. We believe our expertise; our innovative mindset and collaborative approach uniquely position us to improve.');
        $this->migrator->add('default.ourMissionButtonLabel', 'Read More');
        $this->migrator->add('default.ourMissionButtonLink', 'https://whitewolfkw.com/about.html');
        $this->migrator->add('default.ourMissionFrom', 'Mohammad Abu Raqabah');
        $this->migrator->add('default.ourMissionFromSubHeader', 'Chairman');
        $this->migrator->add('default.ourMissionSlideshow', []);
        $this->migrator->add('default.ourMissionProductions', []);
    }
};
