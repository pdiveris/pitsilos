<?php

namespace App\Contracts;
use App\Models\SettingCached;
use Spatie\SchemaOrg\Schema as SpatieSchema;

trait HasSchema
{
    public function getSchema(): string
    {
        $schema = SpatieSchema::localBusiness()
            ->name(env('APP_NAME'))
            ->email(SettingCached::get('contact_email'))
            ->contactPoint(
                SpatieSchema::contactPoint()->areaServed(
                    SettingCached::get('schema_area_served')
                )
            );

        return $schema->toScript();
    }
}
