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
        Schema::create('posts', function (Blueprint $table) { 
            $table->id();
            $table->string('title')->comment('Title of post.'); //usually naglalagay ng comment to give more information although hindi required. it's still a good practice.
            $table->text('content')->comment('Content of a post.');  
            $table->string('slug')->comment('Url identified for post.'); 
            //sample-title
            $table->timestamp('publication_date')->comment('Date of publication.')->nullable();
            $table->timestamp('last_modified_date')->comment('Date of modification.')->nullable();
            $table->string('status')->commment('D - Draft, P - Published, I - Inactive');
            $table->string('featured_image_url')->comment('Url of featured image');
            $table->integer('views_count')->comment('Total view count.')->default(0); //usually nagseset ng default value instead of using nullable.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
