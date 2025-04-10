<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('exhibitions', function (Blueprint $table) {
            if (!Schema::hasColumn('exhibitions', 'featured_flag')) {
                $table->tinyInteger('featured')
                    ->after('meta')
                    ->nullable()
                    ->default(0);
            }
            // else shout
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('featured', function (Blueprint $table) {
            $table->dropColumn('enabled');
        });
    }
};
