<?php

namespace App\View\Components;

use Illuminate\View\Component;

class mylayout extends Component
{
    public $title;
    public $email;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $email)
    {
        $this->title = $title;
        $this->email = $email;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mylayout');
    }

    public function admin()
    {
        return 'Nguyễn Đình Hiếu';
    }

    public function users()
    {
        return [
            'Trần Kiên Giang',
            'Bùi Tiến Đạt'
        ];
    }
}
