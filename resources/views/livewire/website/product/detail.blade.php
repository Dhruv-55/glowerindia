<div>

		
		<section class="content-inner py-0 bg-light">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
						<div class="dz-product-detail style-1 sticky-top">
							<div class="swiper-btn-center-lr">
								<div class="swiper product-gallery-swiper2" >
									<div class="swiper-wrapper" id="lightgallery">
										@foreach ($product->images as $image)											
											<div class="swiper-slide">
												<div class="dz-media DZoomImage">
													<a class="mfp-link lg-item" href="images/products/product-detail4/product1.png" data-src="images/products/product-detail4/product1.png">
														<i class="feather icon-maximize dz-maximize top-left"></i>
													</a>
													<img src="{{ env('PRODUCT_IMAGE_URL').$image->image }}" alt="image">
												</div>
											</div>
										@endforeach
									</div>
								</div>
								<div class="swiper product-gallery-swiper thumb-swiper-lg">
									<div class="swiper-wrapper">
										@foreach ($product->images as $image)											
										<div class="swiper-slide">
											<img src="{{ env('PRODUCT_IMAGE_URL').$image->image }}" alt="image">
										</div>
										@endforeach
									</div>
								</div>
							</div>							
						</div>	
					</div>
					<div class="col-xl-5 col-lg-6 col-md-6">
						<div class="dz-product-detail style-4 pt-md-5 pt-0 bg-transparent">
							<div class="dz-content">
								<div class="dz-content-footer">
									<div class="dz-content-start m-b5">
										<span class="badge mb-2">SALE {{ $product->discount }}% Off</span>
										<h4 class="title mb-0"><a href="javascript:void(0);">{{ $product->name }}</a></h4>
										<div class="review-num">
											<ul class="dz-rating me-2">
												<li>
													<svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#000"></path>
													</svg>
												</li>	
												<li>
													<svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#000"></path>
													</svg>
												</li>
												<li>
													<svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#000"></path>
													</svg>
												</li>
												<li>
													<svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.2" d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#5E626F"></path>
													</svg>

												</li>
												<li>
													<svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.2" d="M6.74805 0.234375L8.72301 4.51608L13.4054 5.07126L9.9436 8.27267L10.8625 12.8975L6.74805 10.5944L2.63355 12.8975L3.5525 8.27267L0.090651 5.07126L4.77309 4.51608L6.74805 0.234375Z" fill="#5E626F"></path>
													</svg>
												</li>	
											</ul>
											<span class="text-secondary me-2">4.7 Rating</span>
											<a href="javascript:void(0);">(5 customer reviews)</a>
										</div>
									</div>
								</div>
								<p class="para-text m-b25">
									{{ $product->description }}
								</p>
								<div class="meta-content m-b20 d-flex align-items-end">
									<div class="me-3">
										<span class="price-name">Price</span>
										<span class="price">₹{{  $product->selling_price }} <del>₹{{ $product->original_price }}</del></span>
									</div>
								</div>
								@if($product->quantity > 0)
								<div class="product-num">
									<div class="input-group" style="width:50%">
										
										<button class="btn btn-outline-secondary" type="button" wire:click="decrementQty()">-</button>
										<input type="text" value="{{ $cart_qty ?? $qty  }}" wire:model="qty"  name="demo_vertical2"  class="form-control" disabled>
										<button class="btn btn-outline-secondary" type="button" wire:click="incrementQty()">+</button>
									</div>
								</div>
								<div class="btn-group cart-btn">
									<a type="button"  wire:click="addToCart({{ $product->id }})" class="btn bnt-lg btn-secondary text-uppercase me-md-4">Add To Cart</a>
									<button type="button" wire:click="addToWishlist({{$product->id}})" class="btn btn-outline-secondary btn-lg btn-icon">
										<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M9 16.9986C8.74374 16.9986 8.49669 16.9058 8.30415 16.7371C7.577 16.1013 6.87593 15.5038 6.2574 14.9767L6.25424 14.974C4.44081 13.4286 2.87485 12.094 1.78528 10.7794C0.567307 9.30968 0 7.9162 0 6.39391C0 4.91487 0.507156 3.55037 1.42795 2.55157C2.35973 1.54097 3.63826 0.984375 5.02844 0.984375C6.06747 0.984375 7.01903 1.31287 7.8566 1.96065C8.2793 2.28763 8.66245 2.68781 9 3.15459C9.33769 2.68781 9.7207 2.28763 10.1435 1.96065C10.9811 1.31287 11.9327 0.984375 12.9717 0.984375C14.3617 0.984375 15.6404 1.54097 16.5722 2.55157C17.493 3.55037 18 4.91487 18 6.39391C18 7.9162 17.4328 9.30968 16.2149 10.7792C15.1253 12.094 13.5595 13.4285 11.7463 14.9737C11.1267 15.5016 10.4245 16.1001 9.69571 16.7374C9.50331 16.9058 9.25612 16.9986 9 16.9986ZM5.02844 2.03879C3.93626 2.03879 2.93294 2.47467 2.20303 3.26624C1.46228 4.06975 1.05428 5.18047 1.05428 6.39391C1.05428 7.67422 1.53012 8.81927 2.59703 10.1066C3.62823 11.3509 5.16206 12.658 6.938 14.1715L6.9413 14.1743C7.56216 14.7034 8.26598 15.3033 8.99849 15.9438C9.7354 15.302 10.4403 14.7012 11.0624 14.1713C12.8382 12.6578 14.3719 11.3509 15.4031 10.1066C16.4699 8.81927 16.9457 7.67422 16.9457 6.39391C16.9457 5.18047 16.5377 4.06975 15.797 3.26624C15.0672 2.47467 14.0637 2.03879 12.9717 2.03879C12.1716 2.03879 11.437 2.29312 10.7884 2.79465C10.2104 3.24179 9.80777 3.80704 9.5717 4.20255C9.4503 4.40593 9.23662 4.52733 9 4.52733C8.76338 4.52733 8.5497 4.40593 8.4283 4.20255C8.19237 3.80704 7.78972 3.24179 7.21156 2.79465C6.56296 2.29312 5.82838 2.03879 5.02844 2.03879Z" fill="black"/>
											</svg>
										<span>Add To Wishlist</span>
									</button>
								</div>
								@else
								<h6 class="title text-danger">Out of stock</h6>
								@endif
								<div class="dz-info">
									{{-- <ul>
										<li><strong>SKU:</strong></li>
										<li>PRT584E63A</li>
									</ul> --}}
									<ul>
										<li><strong>Category:</strong></li>
										<li><a href="javascript:void(0)">{{ $product->category->name}}</a></li>												
											
									</ul>
									{{-- <ul>
										<li><strong>Tags:</strong></li>
										<li><a href="shop-standard.html">Skincare,</a></li>												
										<li><a href="shop-standard.html">Makeup,</a></li>												
										<li><a href="shop-standard.html">Makeup,</a></li>												
										<li><a href="shop-standard.html">Accessories</a></li>												
									</ul> --}}
									<ul class="shop-social-icon">
										<li><strong>Share:</strong></li>
										<li>
											<a href="https://www.facebook.com/indiankoder" target="_blank">
												<i class="fa-brands fa-facebook-f"></i>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												<i class="fa-brands fa-linkedin-in"></i>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												<i class="fa-brands fa-instagram"></i>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												<i class="fa-brands fa-x-twitter"></i>
											</a>
										</li>
									</ul>
									<div class="d-flex product-icon-box">
										<div class="shop-box d-flex align-items-center">
											<div class="shop-icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M35.1562 7.73438C36.3206 7.73438 37.2656 8.67937 37.2656 9.84375C37.2656 10.2319 37.5806 10.5469 37.9688 10.5469C38.3569 10.5469 38.6719 10.2319 38.6719 9.84375C38.6719 7.90313 37.0969 6.32812 35.1562 6.32812C34.7681 6.32812 34.4531 6.64312 34.4531 7.03125C34.4531 7.41937 34.7681 7.73438 35.1562 7.73438Z" fill="black"/>
												<path fill-rule="evenodd" clip-rule="evenodd" d="M27.2984 35.8597H26.7191C25.554 35.8597 24.6097 36.804 24.6097 37.9691V40.7816C24.6097 41.9466 25.554 42.8909 26.7191 42.8909H29.5316C30.0716 42.8909 30.5644 42.6877 30.9378 42.3537C31.3112 42.6877 31.8041 42.8909 32.3441 42.8909H40.7816C41.9466 42.8909 42.8909 41.9466 42.8909 40.7816V32.3441C42.8909 31.179 41.9466 30.2347 40.7816 30.2347H32.3441C31.179 30.2347 30.2347 31.179 30.2347 32.3441V35.9799C30.0146 35.9019 29.7784 35.8597 29.5316 35.8597H28.8952L24.2982 27.3216L33.0472 18.5726V28.1253C33.0472 28.5134 33.3622 28.8284 33.7503 28.8284C34.1384 28.8284 34.4534 28.5134 34.4534 28.1253V27.593L37.351 24.6948C38.1744 23.8721 38.1744 22.5348 37.351 21.7121C36.5558 20.9162 35.281 20.8894 34.4534 21.6312V17.1664L40.0742 11.5456C40.958 10.6618 41.5599 9.53679 41.8053 8.31194C42.0022 7.32546 42.2539 6.06827 42.4634 5.01921C42.6019 4.32733 42.3854 3.61226 41.8869 3.11374C41.3883 2.61523 40.6733 2.39866 39.9814 2.53718C38.9323 2.74671 37.6751 2.99843 36.6887 3.1953C35.4638 3.44069 34.3388 4.04257 33.455 4.92639L27.8342 10.5472H23.0178C23.7596 9.7196 23.7329 8.44483 22.9369 7.6496C22.1143 6.82624 20.7769 6.82624 19.9543 7.6496L17.056 10.5472H14.9319C15.6737 9.7196 15.6469 8.44483 14.851 7.6496C14.0284 6.82624 12.691 6.82624 11.8684 7.6496L8.97007 10.5472H4.21906C3.25296 10.5472 2.40992 11.2039 2.17367 12.1412C1.93742 13.0777 2.36843 14.0558 3.21922 14.5135L16.6405 21.7409L10.9592 27.4222H4.21906C3.27125 27.4222 2.43945 28.055 2.18633 28.9683C1.9332 29.8824 2.32062 30.8527 3.13343 31.34L6.11257 33.1273C5.30046 34.4668 4.63812 35.8962 4.1396 37.3911L3.89631 38.1216L3.35985 38.6581C2.84587 39.1721 2.50344 39.833 2.38039 40.5495C2.26297 41.2344 2.11953 42.069 2.11953 42.069C2.08086 42.294 2.15398 42.5239 2.3157 42.6849C2.47671 42.8466 2.70664 42.9198 2.93164 42.8811L4.45108 42.6202C5.16756 42.4972 5.8285 42.1548 6.34249 41.6408L6.87897 41.105L7.61023 40.861C9.10507 40.3625 10.5345 39.7001 11.8733 38.8887L13.6606 41.8672C14.1479 42.68 15.1182 43.0674 16.0323 42.8143C16.9456 42.5612 17.5784 41.7294 17.5784 40.7816V34.0414L23.2597 28.3601L27.2984 35.8597ZM38.6722 31.6409V32.9066C38.6722 33.3172 38.509 33.7102 38.2194 34.0006C37.929 34.2903 37.5352 34.4534 37.1253 34.4534H36.0003C35.5904 34.4534 35.1966 34.2903 34.9063 34.0006C34.6166 33.7102 34.4534 33.3172 34.4534 32.9066V31.6409H32.3441C31.9559 31.6409 31.6409 31.9559 31.6409 32.3441V40.7816C31.6409 41.1697 31.9559 41.4847 32.3441 41.4847H40.7816C41.1697 41.4847 41.4847 41.1697 41.4847 40.7816V32.3441C41.4847 31.9559 41.1697 31.6409 40.7816 31.6409H38.6722ZM26.7191 37.2659H29.5316C29.9197 37.2659 30.2347 37.5809 30.2347 37.9691V40.7816C30.2347 41.1697 29.9197 41.4847 29.5316 41.4847H26.7191C26.3309 41.4847 26.0159 41.1697 26.0159 40.7816V37.9691C26.0159 37.5809 26.3309 37.2659 26.7191 37.2659ZM16.1722 35.4476L15.8537 35.7662C14.9874 36.6324 14.0495 37.4192 13.0517 38.1195L14.8665 41.1437C15.0289 41.4144 15.3523 41.5437 15.6568 41.4594C15.9612 41.375 16.1722 41.0973 16.1722 40.7816V35.4476ZM4.21344 41.2344L3.67414 41.3265L3.76624 40.7872C3.84006 40.3569 4.04538 39.961 4.35405 39.6523L9.34695 34.6594C9.62117 34.3852 10.0669 34.3852 10.3412 34.6594C10.6154 34.9337 10.6154 35.3794 10.3412 35.6537L5.34827 40.6466C5.0396 40.9552 4.64375 41.1605 4.21344 41.2344ZM9.31882 38.6651C11.3712 37.6998 13.2472 36.3835 14.8594 34.7712L39.08 10.5514C39.7669 9.86374 40.2352 8.98905 40.4258 8.03632L41.0846 4.74359C41.131 4.51296 41.0586 4.2746 40.8926 4.10796C40.726 3.94202 40.4877 3.8696 40.257 3.91601L36.9643 4.57483C36.0116 4.76538 35.1369 5.23366 34.4492 5.92061L22.5854 17.7844C22.3112 18.0587 21.8654 18.0587 21.5912 17.7844C21.3169 17.5102 21.3169 17.0644 21.5912 16.7902L26.428 11.9534H4.21906C3.89703 11.9534 3.61578 12.1721 3.53703 12.485C3.45828 12.7972 3.60242 13.1227 3.88578 13.2753L17.679 20.7024L19.6027 18.7787C19.8769 18.5044 20.3227 18.5044 20.5969 18.7787C20.8712 19.0529 20.8712 19.4987 20.5969 19.7729L10.2294 30.1405C8.61711 31.7527 7.30155 33.6287 6.33616 35.6818L8.35273 33.6652C9.17538 32.8419 10.5127 32.8419 11.3354 33.6652C12.1587 34.4879 12.1587 35.8252 11.3354 36.6479L9.31882 38.6651ZM37.2659 31.6409V32.9066C37.2659 32.9438 37.2512 32.9797 37.2245 33.0064C37.1984 33.0324 37.1626 33.0472 37.1253 33.0472H36.0003C35.9631 33.0472 35.9272 33.0324 35.9012 33.0064C35.8744 32.9797 35.8597 32.9438 35.8597 32.9066V31.6409H37.2659ZM9.55296 28.8284H4.21906C3.90335 28.8284 3.62563 29.0394 3.54125 29.3438C3.45688 29.6483 3.58623 29.9717 3.85694 30.1341L6.88178 31.9489C7.58069 30.9519 8.3682 30.0132 9.23515 29.1462L9.55296 28.8284ZM34.4534 25.6039V23.6155L35.3626 22.7063C35.6368 22.4321 36.0826 22.4321 36.3568 22.7063C36.631 22.9805 36.631 23.4263 36.3568 23.7005L34.4534 25.6039ZM12.9477 10.5472H10.9592L12.8626 8.64382C13.1368 8.3696 13.5826 8.3696 13.8568 8.64382C14.131 8.91804 14.131 9.36382 13.8568 9.63804L12.9477 10.5472ZM21.0336 10.5472H19.0452L20.9485 8.64382C21.2227 8.3696 21.6685 8.3696 21.9427 8.64382C22.2169 8.91804 22.2169 9.36382 21.9427 9.63804L21.0336 10.5472Z" fill="black"/>
												</svg>
											</div>
											<div class="shop-content">
												<h6 class="small-title">FREE</h6> 
												<span class="text">Shipping</span> 
											</div>
										</div>

										<div class="shop-box d-flex align-items-center m-0">
											<div class="shop-icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50" fill="none">
												<path d="M47.9152 37.3125C47.9568 38.875 47.5401 40.3542 46.7901 41.625C46.3735 42.375 45.811 43.0626 45.186 43.6251C43.7485 44.9584 41.8526 45.7709 39.7485 45.8334C36.7068 45.8959 34.0193 44.3334 32.5401 41.9376C31.7485 40.7084 31.2693 39.2293 31.2485 37.6668C31.186 35.0418 32.3526 32.6667 34.2276 31.1042C35.6443 29.9375 37.436 29.2084 39.3943 29.1667C43.9985 29.0626 47.811 32.7083 47.9152 37.3125Z" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M36.332 37.5625L38.4362 39.5624L42.7904 35.354" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M6.60547 15.5005L25.0013 26.1463L43.2721 15.5629" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M25 45.0213V26.1255" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												<path d="M45.0221 19.1045V30.8962C45.0221 31.0004 45.0221 31.0836 45.0013 31.1878C43.5429 29.917 41.6679 29.167 39.5846 29.167C37.6263 29.167 35.8138 29.8545 34.3763 31.0004C32.4596 32.5212 31.2513 34.8754 31.2513 37.5004C31.2513 39.0629 31.6887 40.542 32.4596 41.792C32.6471 42.1254 32.8763 42.4379 33.1263 42.7296L29.3138 44.8337C26.9388 46.1671 23.0638 46.1671 20.6888 44.8337L9.56376 38.667C7.04293 37.2712 4.98047 33.7712 4.98047 30.8962V19.1045C4.98047 16.2295 7.04293 12.7295 9.56376 11.3337L20.6888 5.16699C23.0638 3.83366 26.9388 3.83366 29.3138 5.16699L40.4388 11.3337C42.9596 12.7295 45.0221 16.2295 45.0221 19.1045Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
												</svg>
											</div>
											<div class="shop-content">
												<h6 class="small-title">Easy Returns</h6> 
												<span class="text">30 Days</span> 
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="content-inner-3 pb-0 bg-light"> 
			<div class="container">
				<div class="product-description">
					<div class="dz-tabs">					
						<ul class="nav nav-tabs center" id="myTab1" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Description</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Reviews (12)</button>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
								<div class="detail-bx text-center">
									<h5 class="title">Eco-friendly Beauty Revolution</h5>
									<p class="para-text">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
									</p>
									<ul class="feature-detail">
										<li>
											<i class="icon feather icon-check"></i>
											<h5>Transform Your Look with Confidence</h5>
										</li>
										<li>
											<i class="icon feather icon-check"></i>
											<h5>Timeless Beauty Secrets Revealed</h5>
										</li>
										<li>
											<i class="icon feather icon-check"></i>
											<h5>Radiate Confidence Through Timeless Beauty</h5>
										</li>
									</ul>
								</div>
								<div class="row g-lg-4 g-3">
									<div class="col-xl-3 col-md-12 col-sm-12">
										<div class="row">
											<div class="col-xl-12 col-md-4 m-b20">
												<div class="related-content">
													<h4 class="title">Glamify Me</h4>
													<p class="text">This service focuses on enhancing the product detail pages to make each item shine. It includes professionally written.</p>
												</div>
											</div>
											<div class="col-xl-12 col-md-4 m-b20">
												<div class="related-content">
													<h4 class="title">Style Concierge</h4>
													<p class="text">Offer personalized assistance to customers by providing a virtual stylist service. This includes product recommendations,</p>
												</div>
											</div>
											<div class="col-xl-12 col-md-4">
												<div class="related-content">
													<h4 class="title">My Perfect Pick</h4>
													<p class="text">Allow customers to customize their products and add special features. This service includes personalized recommendations,</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-5 col-md-8 col-sm-12">
										<div class="related-img dz-media h-100">
											<img src="/website-assets/images/feature/product-feature-4/1.png" class="h-100 object-fit-cover" alt="/">
										</div>
									</div>
									<div class="col-xl-4 col-md-4 col-sm-12">
										<div class="related-img dz-media related-box">
											<img src="/website-assets/images/feature/product-feature-4/2.png" alt="/">
											<h3 class="title m-t20">Glower Experience</h3>
											<p class="text">Elevate the shopping journey with LuxCart Experience, where each product detail page is meticulously crafted for an immersive experience. This service ensures a seamless transition from product exploration to a hassle-free</p>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
								<div class="clear" id="comment-list">
									<div class="post-comments comments-area style-1 clearfix">
										<h4 class="comments-title mb-2">Comments (02)</h4>
										<p class="dz-title-text">There are many variations of passages of Lorem Ipsum available.</p>
										<div id="comment">
											<ol class="comment-list">
												<li class="comment even thread-even depth-1 comment" id="comment-2">
													<div class="comment-body">
													  <div class="comment-author vcard">
															<img src="/website-assets/images/profile4.jpg" alt="/" class="avatar">
															<cite class="fn">Michel Poe</cite> 
													  </div>
												  <div class="comment-content dz-page-text">
													 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
												  </div>
												  <div class="reply">
													 <a rel="nofollow" class="comment-reply-link" href="javascript:void(0);">Reply</a>
												  </div>
											   </div>
											   <ol class="children">
												  <li class="comment byuser comment-author-w3itexpertsuser bypostauthor odd alt depth-2 comment" id="comment-3">
													 <div class="comment-body" id="div-comment-3">
														<div class="comment-author vcard">
														   <img src="/website-assets/images/profile3.jpg" alt="/" class="avatar">
														   <cite class="fn">Celesto Anderson</cite>
														</div>
														<div class="comment-content dz-page-text">
														   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
														</div>
														<div class="reply">
														   <a class="comment-reply-link" href="javascript:void(0);"> Reply</a>
														</div>
													 </div>
												  </li>
											   </ol>
											</li>
											<li class="comment even thread-odd thread-alt depth-1 comment" id="comment-4">
												<div class="comment-body" id="div-comment-4">
													<div class="comment-author vcard">
														<img src="/website-assets/images/profile2.jpg" alt="/" class="avatar">
														<cite class="fn">Monsur Rahman Lito</cite>
													</div>
													<div class="comment-content dz-page-text">
														<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
													</div>
													<div class="reply">
														<a class="comment-reply-link" href="javascript:void(0);"> Reply</a>
													</div>
												</div>
											</li>
										 </ol>
									  </div>
									<div class="default-form comment-respond style-1" id="respond">
										<h4 class="comment-reply-title mb-2" id="reply-title">Good Comments</h4>
										<p class="dz-title-text">There are many variations of passages of Lorem Ipsum available.</p>
										<div class="clearfix">
											<form method="post" id="comments_form" class="comment-form" novalidate>
											   <p class="comment-form-author"><input id="name" placeholder="Author" name="author" type="text" value=""></p>
											   <p class="comment-form-email"><input id="email" required="required" placeholder="Email" name="email" type="email" value=""></p>
											   <p class="comment-form-comment"><textarea id="comments" placeholder="Type Comment Here" class="form-control4" name="comment" cols="45" rows="3" required="required"></textarea></p>
											   <p class="col-md-12 col-sm-12 col-xs-12 form-submit">
												  <button id="submit" type="submit" class="submit btn btn-secondary btnhover3 filled">
												  Submit Now
												  </button>
											   </p>
											</form>
										</div>
									  </div>
								   </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		<section class="content-inner-1 overflow-hidden">
			@if(count($related_products) > 0)
				<div class="container">
					<div class="section-head style-2 m-b30 d-flex justify-content-between">
						<div class="left-content">
							<h2 class="left-title mb-0">Related products</h2>
						</div>
						<a href="shop-list.html" class="text-secondary font-14 d-flex align-items-center gap-1">See all products
							<i class="icon feather icon-chevron-right font-18"></i>
						</a>			
					</div>
					<div class="swiper-btn-center-lr">
						<div class="swiper swiper-four">
							<div class="swiper-wrapper">
								@foreach($related_products as $products)
								<div class="swiper-slide">
									<div class="shop-card">
										<div class="dz-media media-overlay">
											<img src="{{ env('PRODUCT_IMAGE_URL').$product->primary_image }}" alt="image">
											<div class="shop-meta">
												{{-- <a href="javascript:void(0);" class="btn btn-secondary btn-icon" data-bs-toggle="modal" data-bs-target="#exampleModal">
													<i class="fa-solid fa-eye d-md-none d-block"></i>
													<span class="d-md-block d-none">Quick View</span>
												</a> --}}
											
												<div class="btn btn-primary meta-icon dz-carticon">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M20.531 5.47097L17.531 2.47097C17.238 2.17797 16.763 2.17797 16.47 2.47097C16.177 2.76397 16.177 3.23897 16.47 3.53197L18.19 5.25197H6.00098C4.48398 5.25197 3.25098 6.48497 3.25098 8.00197V11.001C3.25098 11.415 3.58698 11.751 4.00098 11.751C4.41498 11.751 4.75098 11.415 4.75098 11.001V8.00197C4.75098 7.31297 5.31198 6.75197 6.00098 6.75197H18.19L16.47 8.47197C16.177 8.76497 16.177 9.23997 16.47 9.53297C16.616 9.67897 16.808 9.75297 17 9.75297C17.192 9.75297 17.384 9.67997 17.53 9.53297L20.53 6.53297C20.823 6.23997 20.823 5.76497 20.53 5.47197L20.531 5.47097Z" fill="black"/>
														<path d="M18.9998 12.25C18.5858 12.25 18.2498 12.586 18.2498 13V15.999C18.2498 16.688 17.6888 17.249 16.9998 17.249H5.81075L7.53075 15.529C7.82375 15.236 7.82375 14.761 7.53075 14.468C7.23775 14.175 6.76275 14.175 6.46975 14.468L3.46975 17.468C3.17675 17.761 3.17675 18.236 3.46975 18.529L6.46975 21.529C6.61575 21.675 6.80775 21.749 6.99975 21.749C7.19175 21.749 7.38375 21.676 7.52975 21.529C7.82275 21.236 7.82275 20.761 7.52975 20.468L5.80975 18.748H16.9988C18.5158 18.748 19.7488 17.515 19.7488 15.998V12.999C19.7488 12.585 19.4128 12.249 18.9988 12.249L18.9998 12.25Z" fill="black"/>
													</svg>
												</div>
											</div>		
										</div>
										<div class="dz-content">
											<h5 class="title"><a href="shop-list.html">Hydrating Body Lotion</a></h5>
											<h6 class="price">
												₹{{  $product->selling_price }}
												<del>₹{{  $product->original_price }}</del>
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
								@endforeach
							</div>
						</div>
					</div>
				</div>
			@endif
		</section>
	</div>
</div>
