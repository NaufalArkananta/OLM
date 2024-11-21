<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public $type;
    public $size;
    public $color;
    public $class;

    public $onclick;

    /**
     * Buat instance komponen baru
     */
    public function __construct($type = 'button', $size = 'md', $color = 'primary', $class = '', $onclick = 'console.log(" ")')
    {
        $this->type = $type;
        $this->size = $size;
        $this->color = $color;
        $this->class = $class;
        $this->onclick = $onclick;
    }

    /**
     * Ambil view / konten yang mewakili komponen.
     */
    public function render()
    {
        return view('components.button');
    }
}