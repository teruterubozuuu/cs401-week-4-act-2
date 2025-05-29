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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment_content')->comment('Content of a comment.');
            $table->timestamp('comment_date')->comment('Date of comment.')->nullable();
            $table->string('reviewer_name')->comment('Name of reviewer.');
            $table->string('reviewer_email')->comment('Email of reviewer.');
            $table->boolean('is_hidden')->comment('Visibility of a comment.')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
