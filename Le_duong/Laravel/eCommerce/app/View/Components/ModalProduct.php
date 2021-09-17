<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ModalProduct extends Component
{
    public $productModal;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($productModal)
    {
        $this->productModal = $productModal;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal-product');
    }
}
