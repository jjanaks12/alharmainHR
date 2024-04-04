<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Partner extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partner')->with([
            'partners' => $this->getPartners(),
        ]);
    }

    public function getPartners()
    {
        $partners = get_field('Partners', 'option');
        return collect($partners);
    }
}
