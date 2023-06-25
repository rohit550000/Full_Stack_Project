<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardOfMovies extends Component
{
    public $movie;
    public function __construct($movie)
    {
        $this-> movie = $movie;
    }
    public function render(): View|Closure|string
    {
        return view('components.card-of-movies');
    }
}
