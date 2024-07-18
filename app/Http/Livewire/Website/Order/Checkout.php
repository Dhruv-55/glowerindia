<?php

namespace App\Http\Livewire\Website\Order;

use Livewire\Component;

class Checkout extends Component
{
    public $cart_items;
    public function render()
    {
        return view('livewire.website.order.checkout',[
            'cart_items' => $this->cart_items
        ]);
    }
}
