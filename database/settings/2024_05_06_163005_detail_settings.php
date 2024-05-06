<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('default.title', 'white wolf kw');
        $this->migrator->add('default.email', 'info@whitewolfkw.com');
        $this->migrator->add('default.phone', '+965 2227 2212');
        $this->migrator->add('default.officeAddress', 'Mahboula - Coastal Road – Block 4 Compound 54 - Villa 4');
        $this->migrator->add('default.poBox', '9337 Ahmadi - 61004 Kuwait');
        $this->migrator->add('default.logo', '');
    }
};
