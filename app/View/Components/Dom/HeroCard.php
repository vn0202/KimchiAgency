<?php

namespace App\View\Components\Dom;

use Illuminate\View\Component;

class HeroCard extends Component
{

    public function __construct(
        public ?string $title = null,
        public ?string $thumbnail = null,
        public ?array $links = null,
    ){

        $this->title = fake()->word;


    }
    public function render(){
        return view('components.dom.hero-card');
    }
}
