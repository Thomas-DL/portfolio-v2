<?php

namespace App\View\Components\Section;

use Closure;
use Illuminate\View\Component;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;
use Nody\NodyBlog\Models\Post;

class Hero extends Component
{

    public Collection $post;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->post = Post::latest()->where('is_published', true)->take(1)->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.section.hero');
    }
}
