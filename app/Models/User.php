<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Nody\NodyBlog\Models\Post;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Nody\NodyBlog\Livewire\PostComments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getProfileAvatar(): string
    {
        if ($this->profile_photo_path) {
            return $this->profile_photo_path;
        } else {
            return 'https://ui-avatars.com/api/?name=' . $this->name . '&color=7F9CF5&background=EBF4FF';
        }
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function likes()
    {
        return $this->belongsToMany(Post::class, 'post_like')->withTimestamps();
    }

    public function hasLiked(Post $post)
    {
        return $this->likes()->where('post_id', $post->id)->exists();
    }

    public function comments()
    {
        return $this->hasMany(PostComments::class);
    }
}
