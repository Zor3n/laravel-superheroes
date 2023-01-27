<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeroesGrid extends Component
{    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    /**
     * The alert type.
     *
     * @var array
     */
    public $marvel_heroes = [];
    /**
     * The alert message.
     *
     * @var array
     */
    public $dc_heroes = [];

    public function __construct($dc = [], $marvel = [])
    {
        $this->dc_heroes = $dc;
        $this->marvel_heroes = $marvel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.heroes-grid');
    }
}
