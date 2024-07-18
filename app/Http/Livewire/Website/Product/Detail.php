<?php
namespace App\Http\Livewire\Website\Product;

use App\Models\Cart;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class Detail extends Component
{
    public $product, $related_products, $user, $cart_qty;
    public $qty = 1;

    public function __construct()
    {
        $this->user = Session::get('user');
    }

    public function decrementQty()
    {
        if ($this->qty > 1) {
            $this->qty--;
        } else {
            $this->qty = 1;
        }
    }

    public function incrementQty()
    {
        $this->qty++;
    }

    public function addToCart($product_id)
    {
        if ($this->user) {
            if ($this->product->where('id', $product_id)->exists()) {
                if ($this->product->quantity > 0 && $this->product->quantity >= $this->qty) {
                    Cart::updateOrCreate(
                        [
                            'user_id' => $this->user->id,
                            'product_id' => $product_id,
                        ],
                        [
                            'qty' => $this->qty
                        ]
                    );

                    session()->flash('success', 'Product has been added');
                    $this->dispatchBrowserEvent('message', [
                        'text' => 'Product has been added',
                        'type' => 'success'
                    ]);

                    // Update cart_qty
                    $this->cart_qty = Cart::where('product_id', $product_id)
                        ->where('user_id', $this->user->id)
                        ->first()->qty;
                } else {
                    session()->flash('error', $this->product->quantity . " available");
                    $this->dispatchBrowserEvent('message', [
                        'text' => $this->product->quantity . " available",
                        'type' => 'error'
                    ]);
                }
            } else {
                session()->flash('error', 'Product not found');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Product not found',
                    'type' => 'error'
                ]);
            }
        } else {
            session()->flash('error', 'Please login to add to cart');
            $this->dispatchBrowserEvent('message', [
                'text' => 'Please login to add to cart',
                'type' => 'error'
            ]);
        }
    }

    public function addToWishlist($product_id)
    {
        if ($this->user) {
            if (Wishlist::where('product_id', $product_id)->where('user_id', $this->user->id)->exists()) {
                session()->flash('error', 'Item already added to wishlist');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Item already added to wishlist',
                    'type' => 'error'
                ]);
                return false;
            } else {
                Wishlist::create([
                    'product_id' => $product_id,
                    'user_id' => $this->user->id
                ]);

                session()->flash('success', 'Item has been added');
                $this->dispatchBrowserEvent('message', [
                    'text' => 'Item has been added',
                    'type' => 'success'
                ]);
                return true;
            }
        } else {
            return redirect()->route('user-login')->with(['error' => 'Please login first']);
        }
    }

    public function mount($product, $related_products)
    {
        $this->product = $product;
        $this->related_products = $related_products;
        $cartItem =null;
        if($this->user){
        $cartItem = Cart::where('product_id', $this->product->id)
            ->where('user_id', $this->user->id)
            ->first();
    }
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
        return view('livewire.website.product.detail', [
            'product' => $this->product,
            'related_products' => $this->related_products,
            'cart_qty' => $this->cart_qty
        ]);
    }
}
