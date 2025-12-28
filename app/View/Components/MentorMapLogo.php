<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MentorMapLogo extends Component
{
    public string $phase;
    public string $class;

    /**
     * Create a new component instance.
     */
    public function __construct(string $phase = 'color', string $class = '')
    {
        $this->phase = $phase;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.mentor-map-logo');
    }
}
