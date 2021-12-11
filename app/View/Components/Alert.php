<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $color;

    public function __construct($color = 'orange')
    {
        $this->color = $color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }

    // public function alertaPrueba(){
    //     if($this->color == "red"){
    //         return "ALERTA DE PELIGRO";
    //     }
    //     elseif ($this->color == "green"){
    //         return "ALERTA DE SUCCESS";
    //     }
    //     elseif ($this->color == "orange"){
    //         return "ALERTA DE ADVERTENCIA";
    //     }
    //     else{
    //         return "ALERTA";
    //     }
    // }
}
