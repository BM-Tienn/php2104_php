<?php

namespace App\View\Components;

use Illuminate\View\Component;

class product_home extends Component
{
    public $products;
    public $sliders;
    public $banners;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($products,$sliders,$banners)
    {
    $this->products = $products;
    $this->sliders = $sliders;
    $this->banners = $banners;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product_home');
    }
}
