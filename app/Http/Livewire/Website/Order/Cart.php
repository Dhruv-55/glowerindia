<?php

namespace App\Http\Livewire\Website\Order;

use App\Models\Cart as ModelsCart;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Cart extends Component
{
    public $cart_items,$user,$cart_qty;

    public $qty =1;
    
    public function __construct()
    {
        $this->user = Session::get('user');
    }
  
    public function decrementQty($id){

        $item = ModelsCart::where('id',$id)->first();
        if($item->qty == 0){
            $item->delete();
            $this->cart_items = ModelsCart::where('user_id',$this->user->id)->get();
            session()->flash('success', "Item has been removed");
            $this->dispatchBrowserEvent('message', [
                'text' => "Item has been removed",
                'type' => 'error'
            ]);
        }else{
            $item->decrement('qty');
            $this->cart_items = ModelsCart::where('user_id',$this->user->id)->get();
            session()->flash('success', "Quantity has been decreased");
            $this->dispatchBrowserEvent('message', [
                'text' => "Quantity has been updated",
                'type' => 'success'
            ]);
        }
        // dd($item);

    }

    public function incrementQty($id){
        $item = ModelsCart::where('id',$id)->first();
        $product = Product::where('id',$item->product_id)->first();
        if($item->qty > $product->quantity ){
            session()->flash('error', $product->quantity . " available");
            $this->dispatchBrowserEvent('message', [
                'text' => $product->quantity . " available",
                'type' => 'error'
            ]);
        }else{
            $item->increment('qty');
            $this->cart_items = ModelsCart::where('user_id',$this->user->id)->get();
            session()->flash('success', "Quantity has been updated");
            $this->dispatchBrowserEvent('message', [
                'text' => "Quantity has been updated",
                'type' => 'success'
            ]);
        }
    }


    public function removeItem($id){
        $item = ModelsCart::where('id',$id)->delete();

            $this->cart_items = ModelsCart::where('user_id',$this->user->id)->get();
            session()->flash('success', "Item has been removed");
            $this->dispatchBrowserEvent('message', [
                'text' => "Item has been removed",
                'type' => 'error'
            ]);
    }

    public function mount()
    {
   
        $cartItem = ModelsCart::where('product_id', $this->id)
            ->where('user_id', $this->user->id)
            ->first();

        if ($cartItem) {
            $this->cart_qty = $cartItem->qty;
            $this->qty = $cartItem->qty; // Set the initial quantity to the cart quantity
        } else {
            $this->cart_qty = 1;
            $this->qty = 1;
        }
    }
    public function render()
    {
        return view('livewire.website.order.cart',[
            'cart_items' => $this->cart_items
        ]);
    }
}
