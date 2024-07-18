@extends('website.template.layout')
@section('content')
<div class="page-content bg-light">
		
    <div class="d-flex justify-content-between container-fluid py-3 bg-light">
        <nav aria-label="breadcrumb" class="breadcrumb-row style-1">
            <ul class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html"> Home</a></li>
                <li class="breadcrumb-item">product-full-width</li>
            </ul>
        </nav>
    </div>
    <livewire:website.product.detail :product="$product" :related_products="$related_products"/>
</div>
@stop