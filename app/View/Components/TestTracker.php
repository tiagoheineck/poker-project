<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TestTracker extends Component
{
    public $showNewOrderNotification = false;
 
    // Special Syntax: ['echo:{channel},{event}' => '{method}']
    protected $listeners = ['echo-private:tests,TestEcho' => 'notifyNewTest'];
 
    public function notifyNewOrder()
    {
        $this->showNewOrderNotification = true;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.test-tracker');
    }
}
