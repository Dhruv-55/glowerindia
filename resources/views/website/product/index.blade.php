@extends('website.template.layout')
@section('content')
<div class="page-content">
    <!--banner-->
    <div class="dz-bnr-inr" style="background-image:url(website-assets/images/background/bg2.jpg);">
        <div class="container">
            <div class="dz-bnr-inr-entry">
                <h1>Shop List</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-row">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> Home</a></li>
                        <li class="breadcrumb-item">Shop List</li>
                    </ul>
                </nav>
            </div>
        </div>	
    </div>

    <livewire:website.product.index :products="$products" :categories="$categories"/>
</div>
@stop