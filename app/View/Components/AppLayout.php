<?php

namespace App\View\Components;

use App\Models\Banner;
use App\Models\Metadata;
use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('front.layouts.app',[
            'favicon' => Banner::where('section', 1)->where('content', 3)->first(),
            'meta' => Metadata::first()
        ]);
    }
}
