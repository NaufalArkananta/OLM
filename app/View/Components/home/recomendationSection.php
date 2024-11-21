<?php 

namespace App\View\Components\home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class recomendationSection extends Component
{
    public $recomendation_property;


    /**
     * Create a new component instance.
     */
    public function __construct(array $recomendation_property = [])
    {
        $this->recomendation_property = $recomendation_property;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.recomendation-section');
    }
}


?>