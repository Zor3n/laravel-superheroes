<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CitiesGrid extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    /**
     * The alert message.
     *
     * @var array
     */
    public $cities = [];

    public function __construct($cit)
    {
        $this->cities = $cit;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cities-grid');
    }
}
