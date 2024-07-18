@extends('website.template.layout')
@section('content')
<div class="page-content">
    <div class="dz-bnr-inr" style="background-image:url(website-assets/images/background/bg1.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Cart</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> Cart</a></li>
                        <li class="breadcrumb-item">Wish List</li>
                    </ul>
                </nav>
            </div>
        </div>	
    </div>
    <livewire:website.order.cart :cart_items="$cart_items" />
</div>
@stop