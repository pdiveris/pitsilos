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
        Schema::create('exhibitions', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug');
            $table->mediumText('content')
                ->nullable();

            $table->tinyText('meta')
                ->nullable();

            $table->string('image')
                ->nullable();

            $table->timestamp('published_at')
                ->nullable()
                ->useCurrent();

            $table->tinyInteger('enabled')
                ->default(1)
                ->nullable();

            $table->unsignedBigInteger('user_id');

            $table->index('user_id');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');


            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exhibitions');
    }
};
