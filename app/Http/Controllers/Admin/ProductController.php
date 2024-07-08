<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(Request $request){
    return view('admin.product.index',[
        'products' => Product::paginate(30)
    ]);
   }

   public function create(Request $request){

    if($request->isMethod('post')){
        $this->validate($request,[
            'name' => 'required',
            'slug' => 'required',
            'category_id' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'original_price' => 'required',
            'selling_price' => 'required',
        ]);

        
        Product::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'original_price' => $request->original_price,
            'selling_price' => $request->selling_price,
            'trending' => $request->trending ?? 2,
            'quantity' => $request->quantity
        ]);

        return redirect()->route('admin-product-view')->with(['error' => 'Product Created Successfully']);

    }

    return view('admin.product.create');
   }

   public function update(Request $request){
        if(! $product = Product::where('id',$request->id)->first())
            return redirect()->back()->with(['error' => 'Product Not Found']);

        if($request->isMethod('post')){
            $this->validate($request,[
                'name' => 'required',
                'slug' => 'required',
                'category_id' => 'required',
                'short_description' => 'required',
                'description' => 'required',
                'original_price' => 'required',
                'selling_price' => 'required',
            ]);


           
               $product->name = $request->name;
               $product->slug = $request->slug;
               $product->category_id = $request->category_id;
               $product->brand_id = $request->brand_id;
               $product->short_description = $request->short_description;
               $product->description = $request->description;
               $product->original_price = $request->original_price;
               $product->selling_price = $request->selling_price;
               $product->trending = $request->trending ?? 2;
               $product->quantity = $request->quantity;
               $product->status = $request->status;
               $product->save();

            return redirect()->route('admin-product-view')->with(['error' => 'Product Updated Successfully']);

           
        }

        return view('admin.product.update',[
            'product' => $product
        ]);
   }
}
