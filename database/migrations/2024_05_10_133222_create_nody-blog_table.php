<?php

use Nody\NodyBlog\Models\Category;
use Nody\NodyBlog\Models\Post;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('slug');

            $table->timestamps();
        });

        Schema::create('tags', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('slug');

            $table->timestamps();
        });

        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class)->constrained()->onDelete('cascade');
            $table->foreignIdFor(Category::class)->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('slug');
            $table->text('content');
            $table->text('excerpt');
            $table->boolean('is_published')->default(false);

            $table->timestamps();
        });

        Schema::create('post_tag', function (Blueprint $table) {
            $table->id();

            $table->foreignId('post_id')->constrained()->onDelete('cascade');
            $table->foreignId('tag_id')->constrained()->onDelete('cascade');

            $table->timestamps();
        });

        Schema::create('post_like', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class)->index();
            $table->foreignIdFor(Post::class)->index();

            $table->timestamps();
        });

        Schema::create('post_comments', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class);
            $table->foreignIdFor(Post::class);
            $table->string('comment');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('post_like');
    }
};
