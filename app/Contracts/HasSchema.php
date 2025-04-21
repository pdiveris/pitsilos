<?php

namespace App\Contracts;
use Spatie\SchemaOrg\Schema as SpatieSchema;

trait HasSchema
{
    public function getSchema() {
        $schema = SpatieSchema::localBusiness()
            ->name(env('APP_NAME'))
            ->email('info@spatie.be')
            ->contactPoint(
                SpatieSchema::contactPoint()->areaServed('Worldwide')
            );

        return $schema;
    }
}
