<?php
namespace App\Http\Livewire\Website\Product;

use App\Models\Wishlist as ModelsWishlist;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Wishlist extends Component
{
    public $wishlist_items, $user;

    public function __construct()
    {
        $this->user = Session::get('user');
    }

    public function removeItem($id)
    {
        if ($this->user) {
            if (ModelsWishlist::where('product_id', $id)->where('user_id', $this->user->id)->delete()) {
                session()->flash('success', 'Item has been deleted');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Item has been deleted',
                    'type' => 'success'
                ]);
                $this->wishlist_items = ModelsWishlist::where('user_id', $this->user->id)->get();
                return true;
            }
        }
    }

    public function mount($wishlist_items)
    {
        $this->wishlist_items = $wishlist_items;
    }

    public function render()
    {
        $wishlist_items = ModelsWishlist::where('user_id', $this->user->id)->get();
        return view('livewire.website.product.wishlist', [
            'wishlist_items' => $wishlist_items
        ]);
    }
}
