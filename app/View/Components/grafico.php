<?php

namespace App\View\Components;

use Illuminate\View\Component;

class grafico extends Component
{
    public $columna;
    public $title;
    public $identidad;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($columna, $title, $identidad)
    {
        $this->columna = $columna;
        $this->title = $title;            
        $this->identidad = $identidad;        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.grafico');
    }
}
