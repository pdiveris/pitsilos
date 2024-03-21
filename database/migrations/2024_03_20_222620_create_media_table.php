<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description')
                ->nullable();

            $table->unsignedBigInteger('gallery_id');

            $table->index('gallery_id');
            $table->foreign('gallery_id')
                ->references('id')
                ->on('galleries')
                ->onDelete('cascade');

            $table->string('type');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
