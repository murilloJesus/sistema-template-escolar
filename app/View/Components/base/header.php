<?php

namespace App\View\Components\base;

use Illuminate\View\Component;

class header extends Component
{

    public $configs;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($configs)
    {
        $this->configs = $configs;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.base.header');
    }
}
