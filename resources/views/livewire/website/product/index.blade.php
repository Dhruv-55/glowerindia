<div>
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
                                            <input name="search" type="search" wire:model="search" class="form-control" placeholder="Search Product">
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
                                {{-- <div class="widget">
                                    <h6 class="widget-title mb-4">Price</h6>
                                    <div class="price-slide range-slider">
                                        <div class="price">
                                            <div class="range-slider style-1">
                                                <span class="example-val" id="slider-margin-value-min"></span>
                                                <span class="example-val" id="slider-margin-value-max"></span>
                                                <div id="slider-tooltips"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                
                                <div class="widget widget_categories">
                                    <h6 class="widget-title">Category</h6>
                                    <ul>
                                        @foreach ($categories as $category)
                                        <li class="cat-item cat-item-26">
                                            <div class="custom-control custom-checkbox d-flex">
                                                <input type="checkbox" wire:model="category_input" value="{{ $category->id }}" class="form-check-input square" id="basic_checkbox_{{ $category->id }}">
                                                <label class="form-check-label text-start flex-1" for="basic_checkbox_{{ $category->id }}">{{ $category->name }}</label> ({{ $category->products_count }})
                                            </div>	
                                        </li>
                                    @endforeach
                                    
                                    
                                       
                                    </ul>
                                </div>
                            
                                <a href="javascript:void(0);" class="btn btn-lg font-14 btn-secondary btn-sharp w-100">RESET ALL FILTERS</a>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div class="row">
                        <div class="col-12 tab-content shop-" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="tab-list-list" role="tabpanel" aria-labelledby="tab-list-list-btn">
                                <div class="row">
                                    @foreach ($products as $product)
                                    <div class="col-md-12 col-sm-12">
                                        <div class="dz-shop-card style-2">
                                            <div class="dz-media media-overlay">
                                                <img src="{{ env('PRODUCT_IMAGE_URL').$product->primary_image }}" alt="image">
                                            </div>
                                            <div class="dz-content">
                                                <div class="dz-header">
                                                    <div>
                                                        <h4 class="title mb-0"><a href="{{ route('website-product-detail',['slug' => $product->slug])}}">{{ $product->name }}</a></h4>
                                                        <ul class="dz-tags">
                                                            <li><a href="{{ route('website-product-detail',['slug' => $product->slug])}}">{{ $product->category->name }}</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="dz-body">
                                                    <div class="dz-rating-box">
                                                        <div>
                                                            <p class="dz-para">{{ $product->short_description }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="rate m-b20">
                                                        <span class="price">₹{{ $product->selling_price}}<del>₹{{ $product->original_price}}</del></span>
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
                                    @endforeach
                                
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

{{-- @section('page-js')
<script>
    document.addEventListener('livewire:load', function () {
        var priceslider = function () {
            if (document.getElementById('slider-tooltips')) {
                var tooltipSlider = document.getElementById('slider-tooltips');

                var formatForSlider = {
                    from: function (formattedValue) {
                        return Number(formattedValue);
                    },
                    to: function (numericValue) {
                        return Math.round(numericValue);
                    }
                };

                noUiSlider.create(tooltipSlider, {
                    start: [19, 346], // Static initial values
                    connect: true,
                    format: formatForSlider,
                    tooltips: [wNumb({ decimals: 1 }), true],
                    range: {
                        'min': 0,
                        'max': 400
                    }
                });

                var formatValues = [
                    document.getElementById('slider-margin-value-min'),
                    document.getElementById('slider-margin-value-max')
                ];

                tooltipSlider.noUiSlider.on('update', function (values, handle) {
                    formatValues[0].innerHTML = "Min Price: ₹" + values[0];
                    formatValues[1].innerHTML = "Max Price: ₹" + values[1];
                    @this.set('min_price', values[0]);
                    @this.set('max_price', values[1]);
                });
            }
        };

        priceslider();
    });
</script>
@stop --}}