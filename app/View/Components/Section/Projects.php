<?php

namespace App\View\Components\Section;

use Closure;
use App\Models\Project;
use Illuminate\View\Component;
use Illuminate\Support\Collection;
use Illuminate\Contracts\View\View;

class Projects extends Component
{
    /**
     * Create a new component instance.
     */
    public Collection $projects;

    public function __construct()
    {
        $this->projects = Project::latest()->take(3)->get();
    }

    public function render(): View
    {
        return view('components.section.projects');
    }
}
