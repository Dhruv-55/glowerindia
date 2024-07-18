<?php

namespace App\Http\Livewire\Website\Product;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{

    public $products,$categories,$category_input=[];
    public $search;

    protected $queryString = [
        'category_input' => ['except','as' => 'category'],
        'search' => ['except','as' => 'search']
    ];


    public function mount($products,$categories,$search=null){
        $this->products = $products;
        $this->categories = $categories;
        $this->search = $search;
    }

    public function render()
    {

        $this->products = Product::when($this->category_input,function($q){
            $q->whereIn('category_id',$this->category_input);
        })
        ->when($this->search,function($q){
            $q->where('name','LIKE',"%{$this->search}%")
            ->orWhereHas('category',function($q){
                $q->where('name','LIKE',"%{$this->search}%");;
            });
        })
        ->get();

        return view('livewire.website.product.index',[
            'products' => $this->products,
            'categories' => $this->categories
        ]);
    }
}
