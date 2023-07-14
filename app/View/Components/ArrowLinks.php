<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ArrowLinks extends Component
{
    public $previousNewbie;
    public $nextNewbie;

    public function __construct($previousNewbie, $nextNewbie)
    {
        $this->previousNewbie = $previousNewbie;
        $this->nextNewbie = $nextNewbie;
    }

    public function render()
    {
        return view('components.arrow-links');
    }
}
