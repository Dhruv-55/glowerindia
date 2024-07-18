@extends('website.template.layout')
@section('content')
<div class="page-content ">
		
    <div class="dz-bnr-inr" style="background-image:url(images/background/bg8.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Wish List</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> Home</a></li>
                        <li class="breadcrumb-item">Wish List</li>
                    </ul>
                </nav>
            </div>
        </div>	
    </div>
    <livewire:website.product.wishlist  :wishlist_items="$wishlist_items"/>
</div>
@stop