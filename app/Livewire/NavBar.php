<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Lazy;

class NavBar extends Component
{

  #[Lazy]
  
// плесфолдер - коли перезавантажується сайт, стає видно сіру смугу  
    public function placeholder(){
      return <<<'HTML'
        <div class="placeholder-glow">
          <div class="placeholder col-12">
          </div>
        </div>
      HTML;
    }



    public function render()
    {
        // sleep(3);
        return view('livewire.nav-bar');
    }

    public $mode=false; 
    public $type='light';
    function UpdateMode(){
      dd($this->mode);
    }
}
