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

    <section class="content-inner-1 pt-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <div class="sticky-xl-top">
                        <a href="javascript:void(0);" class="panel-close-btn">																	
                            <svg width="35" height="35" viewBox="0 0 51 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M37.748 12.5L12.748 37.5" stroke="white" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12.748 12.5L37.748 37.5" stroke="white" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <div class="shop-filter mt-xl-2 mt-0">
                            <aside>
                                <div class="d-flex align-items-center justify-content-between m-b30">
                                    <h6 class="title mb-0 fw-normal d-flex">
                                        <svg class="me-2" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5.95894 21.1655L5.95894 18.8857C7.61448 18.4358 8.5918 16.7289 8.14185 15.0734C7.85285 14.0101 7.02223 13.1795 5.95894 12.8905L5.95894 2.83399C5.95894 2.3738 5.58589 2.00075 5.1257 2.00075C4.66551 2.00075 4.29247 2.3738 4.29247 2.83399L4.29247 12.8905C2.63689 13.3404 1.65956 15.0473 2.10952 16.7028C2.39851 17.7661 3.22913 18.5967 4.29243 18.8857L4.29243 21.1655C4.29243 21.6257 4.66548 21.9987 5.12566 21.9987C5.58585 21.9987 5.95894 21.6257 5.95894 21.1655Z" fill="black"/>
                                            <path d="M11.3431 2.83423L11.3431 5.114C9.68775 5.56306 8.70988 7.26895 9.15889 8.92425C9.44758 9.9884 10.2789 10.8197 11.3431 11.1084L11.3431 21.1657C11.3431 21.6259 11.7161 21.999 12.1763 21.999C12.6365 21.999 13.0095 21.6259 13.0095 21.1657L13.0095 11.1084C14.6648 10.6594 15.6427 8.95347 15.1937 7.29816C14.905 6.23401 14.0737 5.40269 13.0095 5.114L13.0095 2.83423C13.0095 2.37404 12.6365 2.00099 12.1763 2.00099C11.7161 2.00099 11.3431 2.37404 11.3431 2.83423Z" fill="black"/>
                                            <path d="M18.3959 2.83423L18.3959 12.8907C16.7404 13.3407 15.7631 15.0475 16.213 16.703C16.502 17.7663 17.3327 18.597 18.3959 18.886L18.3959 21.1657C18.3959 21.6259 18.769 21.999 19.2292 21.999C19.6894 21.999 20.0624 21.6259 20.0624 21.1657L20.0624 18.886C21.718 18.436 22.6953 16.7292 22.2453 15.0736C21.9563 14.0103 21.1257 13.1797 20.0624 12.8907L20.0624 2.83423C20.0624 2.37404 19.6894 2.00099 19.2292 2.00099C18.769 2.00099 18.3959 2.37404 18.3959 2.83423Z" fill="black"/>
                                        </svg>
                                        Filter
                                    </h6>
                                </div>
                                <div class="widget widget_search">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input name="dzSearch" required="required" type="search" class="form-control" placeholder="Search Product">
                                            <div class="input-group-addon">
                                                <button name="submit" value="Submit" type="submit" class="btn">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M9.58366 17.5C13.9559 17.5 17.5003 13.9556 17.5003 9.58335C17.5003 5.2111 13.9559 1.66669 9.58366 1.66669C5.21141 1.66669 1.66699 5.2111 1.66699 9.58335C1.66699 13.9556 5.21141 17.5 9.58366 17.5Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M18.3337 18.3334L16.667 16.6667" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget widget_who">
                                    <h6 class="widget-title">For Who</h6>
                                    <ul>
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input" id="basic_checkbox_4">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_4">For Man</label>
                                            </div>	
                                        </li>
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_5">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_5">For Woman</label>
                                            </div>	
                                        </li>	
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_6">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_6">For Kids</label>
                                            </div>	
                                        </li>	
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h6 class="widget-title mb-4">Price</h6>
                                    <div class="price-slide range-slider">
                                        <div class="price">
                                            <div class="range-slider style-1">
                                                <div id="slider-tooltips" class="mb-3"></div>
                                                <span class="example-val" id="slider-margin-value-min"></span>
                                                <span class="example-val" id="slider-margin-value-max"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="widget widget_categories">
                                    <h6 class="widget-title">Category</h6>
                                    <ul>
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_7">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_7">Foundation</label>(10)
                                            </div>	
                                        </li>
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_8">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_8">Concealer</label>(5)
                                            </div>	
                                        </li>	
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_9">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_9">Powder</label>(17)
                                            </div>	
                                        </li>	
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_10">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_10">Blush</label>(13)
                                            </div>	
                                        </li>	
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_11">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_11">Bronzer</label>(06)
                                            </div>	
                                        </li>	
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_12">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_12">Highlighter</label>(17)
                                            </div>
                                        </li>	 
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_13">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_13">Mascara</label>(13)
                                            </div>	
                                        </li>	
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_14">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_14">Eyeshadow</label>(06)
                                            </div>	
                                        </li>	
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_15">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_15">Lip Gloss</label>(22)
                                            </div>	
                                        </li>	
                                    </ul>
                                </div>
                                <div class="widget widget_brands">
                                    <h6 class="widget-title">Brands</h6>
                                    <ul>
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_16">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_16">LuxeGlam</label>
                                            </div>	
                                        </li>
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_17">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_17">GlamourFusion</label>
                                            </div>	
                                        </li>	
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_18">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_18">VelvetVogue</label>
                                            </div>	
                                        </li>	
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_19">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_19">RadiantGlow</label>
                                            </div>	
                                        </li>	
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_20">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_20">CelestialCharm</label>
                                            </div>	
                                        </li>	
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_21">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_21">Glamorize</label>
                                            </div>
                                        </li>	 
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_22">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_22">DivaDazzle</label>
                                            </div>	
                                        </li>	
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" class="form-check-input square" id="basic_checkbox_23">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_23">IconicBeauty</label>
                                            </div>	
                                        </li>	
                                    </ul>
                                </div>

                                <div class="widget widget_tag_cloud">
                                    <h6 class="widget-title">Tags</h6>
                                    <div class="tagcloud"> 
    <a href="post-link.html">Mascara</a>
    <a href="post-link.html">Cosmetic</a>
    <a href="post-link.html">Serum</a>
    <a href="post-link.html">Primer</a>
    <a href="post-link.html">Makeup </a>
    <a href="post-link.html">Contour</a>
    <a href="post-link.html">Blush</a>
    <a href="post-link.html">Highlighter</a>
</div>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-lg font-14 btn-secondary btn-sharp w-100">RESET ALL FILTERS</a>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="filter-wrapper">
                        <div class="filter-left-area">		
                            <span>Showing 1–5 Of 50 Results</span>						
                            <ul class="filter-tag">
                                <li>
                                    <a href="javascript:void(0);" class="tag-btn">Makeup
                                        <i class="icon feather icon-x tag-close"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="filter-right-area">
                            <a href="javascript:void(0);" class="panel-btn">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="20" height="20"><g id="Layer_28" data-name="Layer 28"><path d="M2.54,5H15v.5A1.5,1.5,0,0,0,16.5,7h2A1.5,1.5,0,0,0,20,5.5V5h2.33a.5.5,0,0,0,0-1H20V3.5A1.5,1.5,0,0,0,18.5,2h-2A1.5,1.5,0,0,0,15,3.5V4H2.54a.5.5,0,0,0,0,1ZM16,3.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z"></path><path d="M22.4,20H18v-.5A1.5,1.5,0,0,0,16.5,18h-2A1.5,1.5,0,0,0,13,19.5V20H2.55a.5.5,0,0,0,0,1H13v.5A1.5,1.5,0,0,0,14.5,23h2A1.5,1.5,0,0,0,18,21.5V21h4.4a.5.5,0,0,0,0-1ZM17,21.5a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5v-2a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5Z"></path><path d="M8.5,15h2A1.5,1.5,0,0,0,12,13.5V13H22.45a.5.5,0,1,0,0-1H12v-.5A1.5,1.5,0,0,0,10.5,10h-2A1.5,1.5,0,0,0,7,11.5V12H2.6a.5.5,0,1,0,0,1H7v.5A1.5,1.5,0,0,0,8.5,15ZM8,11.5a.5.5,0,0,1,.5-.5h2a.5.5,0,0,1,.5.5v2a.5.5,0,0,1-.5.5h-2a.5.5,0,0,1-.5-.5Z"></path></g></svg>
                                Filter
                            </a>
                            <div class="form-group border-0">
                                <select class="default-select">
                                    <option>Default sorting</option>
                                    <option>1 Day</option>
                                    <option>1 Week</option>
                                    <option>3 Weeks</option>
                                    <option>1 Month</option>
                                    <option>3 Months</option>
                                </select>
                            </div>
                            <div class="form-group Category">
                                <select class="default-select">
                                    <option>Categories</option>
                                    <option>1 Day</option>
                                    <option>1 Week</option>
                                    <option>3 Weeks</option>
                                    <option>1 Month</option>
                                    <option>3 Months</option>
                                </select>
                            </div>
                            <div class="shop-tab">
                                <ul class="nav" role="tablist" id="dz-shop-tab">
                                    <li class="nav-item" role="presentation">
                                        <a href="shop-list.html#tab-list-list" class="nav-link active" id="tab-list-list-btn" data-bs-toggle="pill" data-bs-target="#tab-list-list" role="tab" aria-controls="tab-list-list" aria-selected="true">
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="1">
                                                <path d="M0 8.00002H5V13H0V8.00002ZM20 8.00002H6.66667V13H20V8.00002ZM6.66667 6.33335H20V4.66669C20 3.28835 18.8783 2.16669 17.5 2.16669H6.66667V6.33335ZM5 6.33335V2.16669H2.5C1.12167 2.16669 0 3.28835 0 4.66669V6.33335H5ZM6.66667 14.6667V18.8334H20V14.6667H6.66667ZM5 14.6667H0V18.8334H5V14.6667Z" fill="black"/>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="shop-list.html#tab-list-column" class="nav-link" id="tab-list-column-btn" data-bs-toggle="pill" data-bs-target="#tab-list-column" role="tab" aria-controls="tab-list-column" aria-selected="false">
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3.33332 0.5H5.83332C7.67426 0.5 9.16664 1.99238 9.16664 3.83332V6.33332C9.16664 8.17426 7.67426 9.66664 5.83332 9.66664H3.33332C1.49238 9.66668 0 8.1743 0 6.33332V3.83332C0 1.99238 1.49238 0.5 3.33332 0.5Z" fill="black"/>
                                                <path d="M14.1673 0.5H16.6673C18.5082 0.5 20.0006 1.99238 20.0006 3.83332V6.33332C20.0006 8.17426 18.5082 9.66664 16.6673 9.66664H14.1673C12.3264 9.66664 10.834 8.17426 10.834 6.33332V3.83332C10.8339 1.99238 12.3263 0.5 14.1673 0.5Z" fill="black"/>
                                                <path d="M3.33332 11.3333H5.83332C7.67426 11.3333 9.16664 12.8257 9.16664 14.6666V17.1666C9.16664 19.0076 7.67426 20.5 5.83332 20.5H3.33332C1.49238 20.5 0 19.0076 0 17.1667V14.6667C0 12.8257 1.49238 11.3333 3.33332 11.3333Z" fill="black"/>
                                                <path d="M14.1673 11.3333H16.6673C18.5082 11.3333 20.0006 12.8257 20.0006 14.6666V17.1666C20.0006 19.0076 18.5082 20.5 16.6673 20.5H14.1673C12.3264 20.5 10.834 19.0076 10.834 17.1667V14.6667C10.8339 12.8257 12.3263 11.3333 14.1673 11.3333Z" fill="black"/>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a href="shop-list.html#tab-list-grid" class="nav-link" id="tab-list-grid-btn" data-bs-toggle="pill" data-bs-target="#tab-list-grid" role="tab" aria-controls="tab-list-grid" aria-selected="false">
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_836_12985)">
                                                <path d="M4.16667 0.5H0.833333C0.373333 0.5 0 0.873333 0 1.33333V4.66667C0 5.12667 0.373333 5.5 0.833333 5.5H4.16667C4.62667 5.5 5 5.12667 5 4.66667V1.33333C5 0.873333 4.62667 0.5 4.16667 0.5Z" fill="black"/>
                                                <path d="M4.16667 8H0.833333C0.373333 8 0 8.37333 0 8.83333V12.1667C0 12.6267 0.373333 13 0.833333 13H4.16667C4.62667 13 5 12.6267 5 12.1667V8.83333C5 8.37333 4.62667 8 4.16667 8Z" fill="black"/>
                                                <path d="M4.16667 15.5H0.833333C0.373333 15.5 0 15.8733 0 16.3333V19.6667C0 20.1267 0.373333 20.5 0.833333 20.5H4.16667C4.62667 20.5 5 20.1267 5 19.6667V16.3333C5 15.8733 4.62667 15.5 4.16667 15.5Z" fill="black"/>
                                                <path d="M11.6667 0.5H8.33333C7.87333 0.5 7.5 0.873333 7.5 1.33333V4.66667C7.5 5.12667 7.87333 5.5 8.33333 5.5H11.6667C12.1267 5.5 12.5 5.12667 12.5 4.66667V1.33333C12.5 0.873333 12.1267 0.5 11.6667 0.5Z" fill="black"/>
                                                <path d="M11.6667 8H8.33333C7.87333 8 7.5 8.37333 7.5 8.83333V12.1667C7.5 12.6267 7.87333 13 8.33333 13H11.6667C12.1267 13 12.5 12.6267 12.5 12.1667V8.83333C12.5 8.37333 12.1267 8 11.6667 8Z" fill="black"/>
                                                <path d="M11.6667 15.5H8.33333C7.87333 15.5 7.5 15.8733 7.5 16.3333V19.6667C7.5 20.1267 7.87333 20.5 8.33333 20.5H11.6667C12.1267 20.5 12.5 20.1267 12.5 19.6667V16.3333C12.5 15.8733 12.1267 15.5 11.6667 15.5Z" fill="black"/>
                                                <path d="M19.1667 0.5H15.8333C15.3733 0.5 15 0.873333 15 1.33333V4.66667C15 5.12667 15.3733 5.5 15.8333 5.5H19.1667C19.6267 5.5 20 5.12667 20 4.66667V1.33333C20 0.873333 19.6267 0.5 19.1667 0.5Z" fill="black"/>
                                                <path d="M19.1667 8H15.8333C15.3733 8 15 8.37333 15 8.83333V12.1667C15 12.6267 15.3733 13 15.8333 13H19.1667C19.6267 13 20 12.6267 20 12.1667V8.83333C20 8.37333 19.6267 8 19.1667 8Z" fill="black"/>
                                                <path d="M19.1667 15.5H15.8333C15.3733 15.5 15 15.8733 15 16.3333V19.6667C15 20.1267 15.3733 20.5 15.8333 20.5H19.1667C19.6267 20.5 20 20.1267 20 19.6667V16.3333C20 15.8733 19.6267 15.5 19.1667 15.5Z" fill="black"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0_836_12985">
                                                <rect width="20" height="20" fill="white" transform="translate(0 0.5)"/>
                                                </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 tab-content shop-" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="tab-list-list" role="tabpanel" aria-labelledby="tab-list-list-btn">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="dz-shop-card style-2">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/1.png" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <div class="dz-header">
                                                    <div>
                                                        <h4 class="title mb-0"><a href="https://glower.indiankoder.com/xhtml/shop-with-category.html">Hydrating Body Lotion</a></h4>
                                                        <ul class="dz-tags">
                                                            <li><a href="https://glower.indiankoder.com/xhtml/shop-with-category.html">Accessories,</a></li>
                                                            <li><a href="https://glower.indiankoder.com/xhtml/shop-with-category.html">Clocks</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="review-num">
                                                        <ul class="dz-rating">
                                                            <li class="star-fill">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>										
                                                            <li class="star-fill">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li class="star-fill">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                        </ul>
                                                        <span><a href="javascript:void(0);"> 370 Review</a></span>
                                                    </div>
                                                </div>
                                                <div class="dz-body">
                                                    <div class="dz-rating-box">
                                                        <div>
                                                            <p class="dz-para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                        </div>
                                                    </div>
                                                    <div class="rate m-b20">
                                                        <span class="price">$66<del>$89</del></span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="shop-cart.html" class="btn btn-secondary btn-md btn-icon">
                                                            <i class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                                            <span class="d-md-block d-none">Add to cart</span>
                                                        </a>
                                                        <div class="bookmark-btn style-1">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault1">
                                                            <label class="form-check-label" for="flexCheckDefault1">
                                                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.39387 10.053C1.49971 7.2613 2.54471 4.07046 5.47554 3.1263C7.01721 2.6288 8.71887 2.92213 10.0005 3.8863C11.213 2.9488 12.9772 2.63213 14.5172 3.1263C17.448 4.07046 18.4997 7.2613 17.6064 10.053C16.2147 14.478 10.0005 17.8863 10.0005 17.8863C10.0005 17.8863 3.83221 14.5296 2.39387 10.053Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    </svg>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="dz-shop-card style-2">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/3.png" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <div class="dz-header">
                                                    <div>
                                                        <h4 class="title mb-0"><a href="https://glower.indiankoder.com/xhtml/shop-with-category.html">Nourishing Body Butter</a></h4>
                                                        <ul class="dz-tags">
                                                            <li><a href="https://glower.indiankoder.com/xhtml/shop-with-category.html">Accessories,</a></li>
                                                            <li><a href="https://glower.indiankoder.com/xhtml/shop-with-category.html">Clocks</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="review-num">
                                                        <ul class="dz-rating">
                                                            <li class="star-fill">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>										
                                                            <li class="star-fill">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li class="star-fill">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                        </ul>
                                                        <span><a href="javascript:void(0);"> 255 Review</a></span>
                                                    </div>
                                                </div>
                                                <div class="dz-body">
                                                    <div class="dz-rating-box">
                                                        <div>
                                                            <p class="dz-para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                        </div>
                                                    </div>
                                                    <div class="rate m-b20">
                                                        <span class="price">$50<del>$89</del></span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="shop-cart.html" class="btn btn-secondary btn-md btn-icon">
                                                            <i class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                                            <span class="d-md-block d-none">Add to cart</span>
                                                        </a>
                                                        <div class="bookmark-btn style-1">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault2">
                                                            <label class="form-check-label" for="flexCheckDefault2">
                                                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.39387 10.053C1.49971 7.2613 2.54471 4.07046 5.47554 3.1263C7.01721 2.6288 8.71887 2.92213 10.0005 3.8863C11.213 2.9488 12.9772 2.63213 14.5172 3.1263C17.448 4.07046 18.4997 7.2613 17.6064 10.053C16.2147 14.478 10.0005 17.8863 10.0005 17.8863C10.0005 17.8863 3.83221 14.5296 2.39387 10.053Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="dz-shop-card style-2">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/1.png" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <div class="dz-header">
                                                    <div>
                                                        <h4 class="title mb-0"><a href="https://glower.indiankoder.com/xhtml/shop-with-category.html">Exfoliating Body Scrub</a></h4>
                                                        <ul class="dz-tags">
                                                            <li><a href="https://glower.indiankoder.com/xhtml/shop-with-category.html">Accessories,</a></li>
                                                            <li><a href="https://glower.indiankoder.com/xhtml/shop-with-category.html">Clocks</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="review-num">
                                                        <ul class="dz-rating">
                                                            <li class="star-fill">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>										
                                                            <li class="star-fill">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li class="star-fill">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                        </ul>
                                                        <span><a href="javascript:void(0);"> 455 Review</a></span>
                                                    </div>
                                                </div>
                                                <div class="dz-body">
                                                    <div class="dz-rating-box">
                                                        <div>
                                                            <p class="dz-para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                        </div>
                                                    </div>
                                                    <div class="rate m-b20">
                                                        <span class="price">$80<del>$89</del></span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="shop-cart.html" class="btn btn-secondary btn-md btn-icon">
                                                            <i class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                                            <span class="d-md-block d-none">Add to cart</span>
                                                        </a>
                                                        <div class="bookmark-btn style-1">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault3">
                                                            <label class="form-check-label" for="flexCheckDefault3">
                                                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.39387 10.053C1.49971 7.2613 2.54471 4.07046 5.47554 3.1263C7.01721 2.6288 8.71887 2.92213 10.0005 3.8863C11.213 2.9488 12.9772 2.63213 14.5172 3.1263C17.448 4.07046 18.4997 7.2613 17.6064 10.053C16.2147 14.478 10.0005 17.8863 10.0005 17.8863C10.0005 17.8863 3.83221 14.5296 2.39387 10.053Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                    </svg>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="dz-shop-card style-2">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/13.png" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <div class="dz-header">
                                                    <div>
                                                        <h4 class="title mb-0"><a href="https://glower.indiankoder.com/xhtml/shop-with-category.html">Crystal Clear Cleanser</a></h4>
                                                        <ul class="dz-tags">
                                                            <li><a href="https://glower.indiankoder.com/xhtml/shop-with-category.html">Accessories,</a></li>
                                                            <li><a href="https://glower.indiankoder.com/xhtml/shop-with-category.html">Clocks</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="review-num">
                                                        <ul class="dz-rating">
                                                            <li class="star-fill">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>										
                                                            <li class="star-fill">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li class="star-fill">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                        </ul>
                                                        <span><a href="javascript:void(0);"> 370 Review</a></span>
                                                    </div>
                                                </div>
                                                <div class="dz-body">
                                                    <div class="dz-rating-box">
                                                        <div>
                                                            <p class="dz-para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                        </div>
                                                    </div>
                                                    <div class="rate m-b20">
                                                        <span class="price">$40<del>$89</del></span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="shop-cart.html" class="btn btn-secondary btn-md btn-icon">
                                                            <i class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                                            <span class="d-md-block d-none">Add to cart</span>
                                                        </a>
                                                        <div class="bookmark-btn style-1">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault4">
                                                            <label class="form-check-label" for="flexCheckDefault4">
                                                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M2.39387 10.053C1.49971 7.2613 2.54471 4.07046 5.47554 3.1263C7.01721 2.6288 8.71887 2.92213 10.0005 3.8863C11.213 2.9488 12.9772 2.63213 14.5172 3.1263C17.448 4.07046 18.4997 7.2613 17.6064 10.053C16.2147 14.478 10.0005 17.8863 10.0005 17.8863C10.0005 17.8863 3.83221 14.5296 2.39387 10.053Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="dz-shop-card style-2">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/8.png" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <div class="dz-header">
                                                    <div>
                                                        <h4 class="title mb-0"><a href="https://glower.indiankoder.com/xhtml/shop-with-category.html">Revitalizing Body Oil</a></h4>
                                                        <ul class="dz-tags">
                                                            <li><a href="https://glower.indiankoder.com/xhtml/shop-with-category.html">Accessories,</a></li>
                                                            <li><a href="https://glower.indiankoder.com/xhtml/shop-with-category.html">Clocks</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="review-num">
                                                        <ul class="dz-rating">
                                                            <li class="star-fill">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>										
                                                            <li class="star-fill">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li class="star-fill">
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                            <li>
                                                                <i class="flaticon-star-1"></i>
                                                            </li>
                                                        </ul>
                                                        <span><a href="javascript:void(0);"> 370 Review</a></span>
                                                    </div>
                                                </div>
                                                <div class="dz-body">
                                                    <div class="dz-rating-box">
                                                        <div>
                                                            <p class="dz-para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                        </div>
                                                    </div>
                                                    <div class="rate m-b20">
                                                        <span class="price">$66<del>$89</del></span>
                                                    </div>
                                                    <div class="d-flex">
                                                        <a href="shop-cart.html" class="btn btn-secondary btn-md btn-icon">
                                                            <i class="icon feather icon-shopping-cart d-md-none d-block"></i>
                                                            <span class="d-md-block d-none">Add to cart</span>
                                                        </a>
                                                        <div class="bookmark-btn style-1">
                                                            <input class="form-check-input" type="checkbox" id="flexCheckDefault5">
                                                            <label class="form-check-label" for="flexCheckDefault5">
                                                                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.39387 10.053C1.49971 7.2613 2.54471 4.07046 5.47554 3.1263C7.01721 2.6288 8.71887 2.92213 10.0005 3.8863C11.213 2.9488 12.9772 2.63213 14.5172 3.1263C17.448 4.07046 18.4997 7.2613 17.6064 10.053C16.2147 14.478 10.0005 17.8863 10.0005 17.8863C10.0005 17.8863 3.83221 14.5296 2.39387 10.053Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-list-column" role="tabpanel" aria-labelledby="tab-list-column-btn">
                                <div class="row gx-xl-4 g-3 mb-xl-0 mb-md-0 mb-3">
                                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/1.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Cleansing Body Wash</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/2.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Soothing Body Cream</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/3.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Refreshing Body Mist</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/4.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Rejuvenating Body Serum</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                    <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/5.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Detoxifying Body Mask</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/6.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Illuminating Body Spray</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/7.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Protecting Body Sunscreen</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/8.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Firming Body Gel</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/14.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Brightening Body Serum</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-xl-6 col-lg-6 col-md-6 col-sm-6 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/13.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Moisturizing Body Mist</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-list-grid" role="tabpanel" aria-labelledby="tab-list-grid-btn">
                                <div class="row gx-xl-4 g-3 mb-xl-0 mb-md-0 mb-3">
                                    <div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-4 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/1.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Balancing Body Toner</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-4 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/2.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Softening Body Butter</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-4 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/3.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Smoothing Body Scrub</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-4 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/4.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Repairing Body Cream</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-4 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/5.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Energizing Body Spray</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>	
                                    </div>
                                    <div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-4 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/6.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Calming Body Lotion</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-4 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/7.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Hydrating Body Wash</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-4 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/8.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Nourishing Body Oil</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-xl-4 col-lg-4 col-md-4 col-sm-4 m-md-b15 m-sm-b0 m-b30">
                                        <div class="shop-card">
                                            <div class="dz-media media-overlay">
                                                <img src="website-assets/images/shop/product/13.png" alt="image">
                                                <div class="shop-meta">
                                                    <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa-solid fa-eye d-md-none d-block"></i>
                                                        <span class="d-md-block d-none">Quick View</span>
                                                    </a>
                                                
                                                    <div class="btn btn-primary meta-icon dz-carticon">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
</svg>

                                                    </div>
                                                </div>		
                                            </div>
                                            <div class="dz-content">
                                                <h5 class="title"><a href="shop-list.html">Revitalizing Body Scrub</a></h5>
                                                <h6 class="price">
                                                    $80
                                                    <del>$89</del>
                                                </h6>
                                                <div class="shop-cart-btn"><a href="shop-cart.html"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M21 9.24995H18.401L14.624 3.58395C14.394 3.23895 13.927 3.14495 13.584 3.37595C13.239 3.60595 13.146 4.07095 13.376 4.41595L16.599 9.24995H7.401L10.624 4.41595C10.854 4.07095 10.761 3.60595 10.416 3.37595C10.071 3.14595 9.606 3.23895 9.376 3.58395L5.599 9.24995H3C2.586 9.24995 2.25 9.58595 2.25 9.99995C2.25 10.4139 2.586 10.7499 3 10.7499H3.385L4.943 18.5389C5.199 19.8199 6.333 20.7499 7.64 20.7499H16.361C17.668 20.7499 18.801 19.8199 19.058 18.5389L20.616 10.7499H21.001C21.415 10.7499 21.751 10.4139 21.751 9.99995C21.751 9.58595 21.414 9.24995 21 9.24995ZM17.586 18.245C17.469 18.827 16.954 19.2499 16.36 19.2499H7.64C7.046 19.2499 6.531 18.827 6.414 18.245L4.915 10.7499H19.085L17.586 18.245Z" fill="white"/>
                                                    <path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="white"/>
                                                    </svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-tag">
                                                <div class="badge-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row page mt-0">
                        <div class="col-md-6">
                            <p class="page-text">Showing 1–5 Of 50 Results</p>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="Blog Pagination">
                            <ul class="pagination style-1 p-t20">
                                <li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a class="page-link next" href="javascript:void(0);">Next</a></li>
                            </ul>
                        </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop