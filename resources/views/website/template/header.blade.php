
<!-- Header Start -->
<header class="site-header mo-left header header-transparent">		
    <!-- Main Header -->
    <div class="sticky-header main-bar-wraper navbar-expand-lg">
      <div class="main-bar clearfix">
        <div class="container-fluid clearfix d-lg-flex d-block">
          <!-- Website Logo -->
          <div class="logo-header logo-dark me-md-4">
            <a href="index.html"><img src="/website-assets/images/logo.png" alt="logo"></a>
          </div>
          
          <!-- Nav Toggle Button -->
          <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
          </button>
          
          <!-- Main Nav -->
        <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
          <div class="logo-header logo-dark">
            <a href="index.html"><img src="/website-assets/images/logo.svg" alt=""></a>
          </div>
          <ul class="nav navbar-nav dark-nav">
            <li class="has-mega-menu sub-menu-down">
              <a href="index.html"><span>Home</span></a>
            </li>
            <li class="has-mega-menu sub-menu-down">
              <a href="{{ route('website-product-view')}}"><span>Shop</span></a>
            </li>
          </ul>
          
          <div class="dz-social-icon">
            <ul>
              <li><a class="fab fa-facebook-f" target="_blank" href="https://www.facebook.com/indiankoder"></a></li>
              <li><a class="fab fa-twitter"  href="javascript:void(0);"></a></li>
              <li><a class="fab fa-linkedin-in"  href="javascript:void(0);"></a></li>
              <li><a class="fab fa-instagram"  href="javascript:void(0);"></a></li>
            </ul>
          </div>
        </div>
          <!-- EXTRA NAV -->
          <div class="extra-nav">
            <div class="extra-cell">						
              <ul class="header-right">
                <li class="nav-item login-link">
                  <a class="nav-link" href="registration.html">
                    Login / Register
                  </a>
                </li>
                <li class="nav-item search-link">
                  <a class="nav-link" href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17.5 17.5L13.875 13.875" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </a>
                </li>
                <li class="nav-item wishlist-link">
                  <a class="nav-link" href="javascript:void(0);" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M17.3666 3.84172C16.941 3.41589 16.4356 3.0781 15.8794 2.84763C15.3232 2.61716 14.727 2.49854 14.1249 2.49854C13.5229 2.49854 12.9267 2.61716 12.3705 2.84763C11.8143 3.0781 11.3089 3.41589 10.8833 3.84172L9.99994 4.72506L9.1166 3.84172C8.25686 2.98198 7.0908 2.49898 5.87494 2.49898C4.65907 2.49898 3.49301 2.98198 2.63327 3.84172C1.77353 4.70147 1.29053 5.86753 1.29053 7.08339C1.29053 8.29925 1.77353 9.46531 2.63327 10.3251L3.5166 11.2084L9.99994 17.6917L16.4833 11.2084L17.3666 10.3251C17.7924 9.89943 18.1302 9.39407 18.3607 8.83785C18.5912 8.28164 18.7098 7.68546 18.7098 7.08339C18.7098 6.48132 18.5912 5.88514 18.3607 5.32893C18.1302 4.77271 17.7924 4.26735 17.3666 3.84172Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </a>
                </li>
                <li class="nav-item cart-link">
                  <a href="javascript:void(0);" class="nav-link cart-btn"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <g clip-path="url(#clip0_67_234)">
                      <path d="M7.49984 18.3334C7.96007 18.3334 8.33317 17.9603 8.33317 17.5001C8.33317 17.0398 7.96007 16.6667 7.49984 16.6667C7.0396 16.6667 6.6665 17.0398 6.6665 17.5001C6.6665 17.9603 7.0396 18.3334 7.49984 18.3334Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M16.6668 18.3334C17.1271 18.3334 17.5002 17.9603 17.5002 17.5001C17.5002 17.0398 17.1271 16.6667 16.6668 16.6667C16.2066 16.6667 15.8335 17.0398 15.8335 17.5001C15.8335 17.9603 16.2066 18.3334 16.6668 18.3334Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M0.833496 0.833252H4.16683L6.40016 11.9916C6.47637 12.3752 6.68509 12.7199 6.98978 12.9652C7.29448 13.2104 7.67575 13.3407 8.06683 13.3333H16.1668C16.5579 13.3407 16.9392 13.2104 17.2439 12.9652C17.5486 12.7199 17.7573 12.3752 17.8335 11.9916L19.1668 4.99992H5.00016" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                    <defs>
                      <clipPath id="clip0_67_234">
                      <rect width="20" height="20" fill="white"></rect>
                      </clipPath>
                    </defs>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
            
          </div>
            <a class="extra-right-btn menu-btn" href="javascript:void(0);">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="13" viewBox="0 0 30 13" fill="none">
                <rect y="11" width="30" height="2" fill="black"/>
                <rect width="30" height="2" fill="black"/>
              </svg>
            </a>
        </div>
      </div>
    </div>
    <!-- Main Header End -->
    {{-- <div class="dz-loader">
      <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
          <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
      </svg>
  
      <div class="dz-loader-info">
          <div class="text-center">
              <img src="/website-assets/images/loader-logo.png" alt="" class="logo">
              <div class="load-text">
                  <span>L</span>
                  <span>o</span>
                  <span>a</span>
                  <span>d</span>
                  <span>i</span>
                  <span>n</span>
                  <span>g</span>
              </div>
          </div>
      </div> --}}
  </div>
  
  
  <!-- SearchBar -->
  <div class="dz-search-area dz-offcanvas offcanvas offcanvas-top bg-light" tabindex="-1" id="offcanvasTop">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
      &times;
    </button>
    <div class="container">
      <form class="header-item-search">
        <div class="input-group search-input">
          <select class="default-select">
            <option>All Categories</option>
            <option>Skicn Product </option>
            <option>Vogue Elegance</option>
            <option>Chic Harmony</option>
            <option>Flawless Allure</option>
            <option>Luxe Glam</option>
            <option>Divine Chic</option>
            <option>Svelte Styles</option>
            <option>Ethereal Glow</option>
            <option>Posh Trends</option>
            <option>Serene Glamour</option>
            <option>Elite Couture</option>
            <option>Opulent Charm</option>
          </select>
          <input type="search" class="form-control" placeholder="Search Product">
          <button class="btn" type="button">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.16679 15.8333C12.8487 15.8333 15.8335 12.8486 15.8335 9.16667C15.8335 5.48477 12.8487 2.5 9.16679 2.5C5.48489 2.5 2.50012 5.48477 2.50012 9.16667C2.50012 12.8486 5.48489 15.8333 9.16679 15.8333Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M17.5001 17.5L13.8751 13.875" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
  
          </button>
        </div>
        <ul class="recent-tag">
          <li class="pe-0"><span>Quick Search :</span></li>
          <li><a href="shop-list.html"></a>Skin Product</li>
          <li><a href="shop-list.html">Body Products</a></li>
          <li><a href="shop-list.html">Daily Products</a></li>
          <li><a href="shop-list.html">Cream Products</a></li>
        </ul>
      </form>
      <div class="row">
        <div class="col-xl-12">
          <h5 class="header-title mb-3">You May Also Like</h5>
          <div class="swiper category-swiper2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="shop-card style-8">
                  <div class="dz-media">
                    <img src="/website-assets/images/cosmetic/1.png" alt="image">
                  </div>
                  <div class="dz-content">
                    <h6 class="title"><a href="shop-list.html">Jewel Tone Nail Polish</a></h6>
                    <h6 class="price">$40.00</h6>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="shop-card style-8">
                  <div class="dz-media">
                    <img src="/website-assets/images/cosmetic/2.png" alt="image">
                  </div>
                  <div class="dz-content">
                    <h6 class="title"><a href="shop-list.html">Balancing Body Cream</a></h6>
                    <h6 class="price">$30.00</h6>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="shop-card style-8">
                  <div class="dz-media">
                    <img src="/website-assets/images/cosmetic/3.png" alt="image">
                  </div>
                  <div class="dz-content">
                    <h6 class="title"><a href="shop-list.html">Smoothing Body Butter</a></h6>
                    <h6 class="price">$35.00</h6>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="shop-card style-8">
                  <div class="dz-media">
                    <img src="/website-assets/images/cosmetic/4.png" alt="image">
                  </div>
                  <div class="dz-content">
                    <h6 class="title"><a href="shop-list.html">Repairing Body Gel</a></h6>
                    <h6 class="price">$20.00</h6>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="shop-card style-8">
                  <div class="dz-media">
                    <img src="/website-assets/images/cosmetic/5.png" alt="image">
                  </div>
                  <div class="dz-content">
                    <h6 class="title"><a href="shop-list.html">Skin Product</a></h6>
                    <h6 class="price">$70.00</h6>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="shop-card style-8">
                  <div class="dz-media">
                    <img src="/website-assets/images/cosmetic/6.png" alt="image">
                  </div>
                  <div class="dz-content">
                    <h6 class="title"><a href="shop-list.html">Skin Product</a></h6>
                    <h6 class="price">$45.00</h6>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="shop-card style-8">
                  <div class="dz-media">
                    <img src="/website-assets/images/cosmetic/7.png" alt="image">	
                  </div>
                  <div class="dz-content">
                    <h6 class="title"><a href="shop-list.html">Skin Product</a></h6>
                    <h6 class="price">$40.00</h6>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="shop-card style-8">
                  <div class="dz-media">
                    <img src="/website-assets/images/cosmetic/1.png" alt="image">	
                  </div>
                  <div class="dz-content">
                    <h6 class="title"><a href="shop-list.html">Calming Body Lotion</a></h6>
                    <h6 class="price">$60.00</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- SearchBar -->
  
  <!-- Sidebar cart -->
  <div class="offcanvas dz-offcanvas offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
      &times;
    </button>
    <div class="offcanvas-body">
      <div class="product-description">
        <div class="dz-tabs">
          <ul class="nav nav-tabs center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="shopping-cart" data-bs-toggle="tab" data-bs-target="#shopping-cart-pane" type="button" role="tab" aria-controls="shopping-cart-pane" aria-selected="true">Shopping Cart
                <span class="badge badge-light">5</span>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="wishlist" data-bs-toggle="tab" data-bs-target="#wishlist-pane" type="button" role="tab" aria-controls="wishlist-pane" aria-selected="false">Wishlist
                <span class="badge badge-light">2</span>
              </button>
            </li>
          </ul>
          <div class="tab-content pt-4" id="dz-shopcart-sidebar">
            <div class="tab-pane fade show active" id="shopping-cart-pane" role="tabpanel" aria-labelledby="shopping-cart" tabindex="0">
              <div class="shop-sidebar-cart">
                <ul class="sidebar-cart-list">
                  <li>
                    <div class="cart-widget">
                      <div class="dz-media me-3">
                        <img src="/website-assets/images/shop/shop-cart/pic1.jpg" alt="">
                      </div>
                      <div class="cart-content">
                        <h6 class="title"><a href="product-thumbnail.html">Soothing Body Cream</a></h6>
                        <div class="d-flex align-items-center">
                          <div class="btn-quantity light quantity-sm me-3">
                            <input type="text" value="1" name="demo_vertical2">
                          </div>
                          <h6 class="dz-price text-secondary mb-0">$50.00</h6>
                        </div>
                      </div>
                      <a href="javascript:void(0);" class="dz-close">
                        <i class="ti-close"></i>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="cart-widget">
                      <div class="dz-media me-3">
                        <img src="/website-assets/images/shop/shop-cart/pic2.jpg" alt="">
                      </div>
                      <div class="cart-content">
                        <h6 class="title"><a href="product-thumbnail.html">Body Toner</a></h6>
                        <div class="d-flex align-items-center">
                          <div class="btn-quantity light quantity-sm me-3">
                            <input type="text" value="1" name="demo_vertical2">
                          </div>
                          <h6 class="dz-price text-secondary mb-0">$40.00</h6>
                        </div>
                      </div>
                      <a href="javascript:void(0);" class="dz-close">
                        <i class="ti-close"></i> 
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="cart-widget">
                      <div class="dz-media me-3">
                        <img src="/website-assets/images/shop/shop-cart/pic3.jpg" alt="">
                      </div>
                      <div class="cart-content">
                        <h6 class="title"><a href="product-thumbnail.html">Brightening Serum</a></h6>
                        <div class="d-flex align-items-center">
                          <div class="btn-quantity light quantity-sm me-3">
                            <input type="text" value="1" name="demo_vertical2">
                          </div>
                          <h6 class="dz-price text-secondary mb-0">$65.00</h6>
                        </div>
                      </div>
                      <a href="javascript:void(0);" class="dz-close">
                        <i class="ti-close"></i>
                      </a>
                    </div>
                  </li>	
                  <li>
                    <div class="cart-widget">
                      <div class="dz-media me-3">
                        <img src="/website-assets/images/shop/shop-cart/pic1.jpg" alt="">
                      </div>
                      <div class="cart-content">
                        <h6 class="title"><a href="product-thumbnail.html">Soothing Body Cream</a></h6>
                        <div class="d-flex align-items-center">
                          <div class="btn-quantity light quantity-sm me-3">
                            <input type="text" value="1" name="demo_vertical2">
                          </div>
                          <h6 class="dz-price text-secondary mb-0">$50.00</h6>
                        </div>
                      </div>
                      <a href="javascript:void(0);" class="dz-close">
                        <i class="ti-close"></i>
                      </a>
                    </div>
                  </li>
                </ul>
                <div class="cart-total">
                  <h5 class="mb-0">Subtotal:</h5>
                  <h5 class="mb-0">300.00$</h5>
                </div>
                <div class="mt-auto">
                  <div class="shipping-time">													
                    <div class="dz-icon">
                      <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M35.1582 7.73438C36.3226 7.73438 37.2676 8.67937 37.2676 9.84375C37.2676 10.2319 37.5826 10.5469 37.9707 10.5469C38.3588 10.5469 38.6738 10.2319 38.6738 9.84375C38.6738 7.90313 37.0988 6.32812 35.1582 6.32812C34.7701 6.32812 34.4551 6.64312 34.4551 7.03125C34.4551 7.41937 34.7701 7.73438 35.1582 7.73438Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M27.3004 35.8594H26.721C25.5559 35.8594 24.6116 36.8037 24.6116 37.9688V40.7813C24.6116 41.9464 25.5559 42.8907 26.721 42.8907H29.5335C30.0735 42.8907 30.5664 42.6875 30.9398 42.3535C31.3131 42.6875 31.806 42.8907 32.346 42.8907H40.7835C41.9486 42.8907 42.8929 41.9464 42.8929 40.7813V32.3438C42.8929 31.1787 41.9486 30.2344 40.7835 30.2344H32.346C31.1809 30.2344 30.2366 31.1787 30.2366 32.3438V35.9797C30.0166 35.9016 29.7803 35.8594 29.5335 35.8594H28.8972L24.3002 27.3214L33.0491 18.5724V28.1251C33.0491 28.5132 33.3641 28.8282 33.7523 28.8282C34.1404 28.8282 34.4554 28.5132 34.4554 28.1251V27.5928L37.353 24.6945C38.1763 23.8719 38.1763 22.5345 37.353 21.7119C36.5577 20.9159 35.283 20.8892 34.4554 21.631V17.1662L40.0762 11.5454C40.96 10.6615 41.5619 9.53654 41.8073 8.3117C42.0041 7.32522 42.2559 6.06803 42.4654 5.01897C42.6039 4.32709 42.3873 3.61201 41.8888 3.1135C41.3903 2.61498 40.6752 2.39842 39.9834 2.53694C38.9343 2.74647 37.6771 2.99818 36.6906 3.19506C35.4658 3.44045 34.3408 4.04232 33.4569 4.92615L27.8362 10.5469H23.0198C23.7616 9.71936 23.7348 8.44459 22.9389 7.64935C22.1162 6.82599 20.7789 6.82599 19.9562 7.64935L17.058 10.5469H14.9338C15.6756 9.71936 15.6489 8.44459 14.853 7.64935C14.0303 6.82599 12.693 6.82599 11.8703 7.64935L8.97202 10.5469H4.22101C3.25492 10.5469 2.41187 11.2037 2.17562 12.1409C1.93937 13.0775 2.37039 14.0555 3.22117 14.5133L16.6424 21.7407L10.9612 27.4219H4.22101C3.2732 27.4219 2.44141 28.0547 2.18828 28.9681C1.93516 29.8822 2.32257 30.8525 3.13538 31.3397L6.11452 33.1271C5.30241 34.4665 4.64007 35.896 4.14155 37.3908L3.89827 38.1214L3.3618 38.6579C2.84782 39.1719 2.50539 39.8328 2.38235 40.5493C2.26492 41.2341 2.12148 42.0687 2.12148 42.0687C2.08281 42.2937 2.15593 42.5237 2.31765 42.6847C2.47867 42.8464 2.70859 42.9195 2.93359 42.8808L4.45303 42.62C5.16952 42.4969 5.83046 42.1545 6.34444 41.6405L6.88093 41.1047L7.61218 40.8608C9.10702 40.3622 10.5365 39.6999 11.8752 38.8885L13.6626 41.8669C14.1498 42.6797 15.1201 43.0672 16.0342 42.814C16.9476 42.5609 17.5804 41.7291 17.5804 40.7813V34.0412L23.2616 28.3599L27.3004 35.8594ZM38.6741 31.6407V32.9063C38.6741 33.3169 38.511 33.71 38.2213 34.0004C37.9309 34.2901 37.5372 34.4532 37.1273 34.4532H36.0023C35.5924 34.4532 35.1986 34.2901 34.9082 34.0004C34.6185 33.71 34.4554 33.3169 34.4554 32.9063V31.6407H32.346C31.9579 31.6407 31.6429 31.9557 31.6429 32.3438V40.7813C31.6429 41.1694 31.9579 41.4844 32.346 41.4844H40.7835C41.1716 41.4844 41.4866 41.1694 41.4866 40.7813V32.3438C41.4866 31.9557 41.1716 31.6407 40.7835 31.6407H38.6741ZM26.721 37.2657H29.5335C29.9216 37.2657 30.2366 37.5807 30.2366 37.9688V40.7813C30.2366 41.1694 29.9216 41.4844 29.5335 41.4844H26.721C26.3329 41.4844 26.0179 41.1694 26.0179 40.7813V37.9688C26.0179 37.5807 26.3329 37.2657 26.721 37.2657ZM16.1741 35.4474L15.8556 35.7659C14.9894 36.6322 14.0514 37.419 13.0537 38.1193L14.8684 41.1434C15.0309 41.4141 15.3543 41.5435 15.6587 41.4591C15.9632 41.3747 16.1741 41.097 16.1741 40.7813V35.4474ZM4.21539 41.2341L3.67609 41.3262L3.76819 40.7869C3.84202 40.3566 4.04733 39.9608 4.356 39.6521L9.3489 34.6592C9.62312 34.385 10.0689 34.385 10.3431 34.6592C10.6173 34.9334 10.6173 35.3792 10.3431 35.6534L5.35022 40.6463C5.04155 40.955 4.6457 41.1603 4.21539 41.2341ZM9.32077 38.6649C11.3732 37.6995 13.2491 36.3833 14.8614 34.771L39.0819 10.5512C39.7689 9.86349 40.2372 8.98881 40.4277 8.03608L41.0866 4.74334C41.133 4.51272 41.0605 4.27436 40.8946 4.10772C40.728 3.94178 40.4896 3.86936 40.259 3.91576L36.9663 4.57459C36.0135 4.76514 35.1388 5.23342 34.4512 5.92037L22.5873 17.7842C22.3131 18.0584 21.8673 18.0584 21.5931 17.7842C21.3189 17.51 21.3189 17.0642 21.5931 16.79L26.4299 11.9532H4.22101C3.89898 11.9532 3.61773 12.1719 3.53898 12.4847C3.46023 12.7969 3.60437 13.1225 3.88773 13.2751L17.6809 20.7022L19.6047 18.7784C19.8789 18.5042 20.3247 18.5042 20.5989 18.7784C20.8731 19.0526 20.8731 19.4984 20.5989 19.7726L10.2313 30.1402C8.61906 31.7525 7.3035 33.6284 6.33811 35.6815L8.35468 33.665C9.17734 32.8416 10.5147 32.8416 11.3373 33.665C12.1607 34.4876 12.1607 35.825 11.3373 36.6476L9.32077 38.6649ZM37.2679 31.6407V32.9063C37.2679 32.9436 37.2531 32.9794 37.2264 33.0062C37.2004 33.0322 37.1645 33.0469 37.1273 33.0469H36.0023C35.965 33.0469 35.9291 33.0322 35.9031 33.0062C35.8764 32.9794 35.8616 32.9436 35.8616 32.9063V31.6407H37.2679ZM9.55492 28.8282H4.22101C3.90531 28.8282 3.62758 29.0391 3.54321 29.3436C3.45883 29.648 3.58819 29.9715 3.85889 30.1339L6.88374 31.9487C7.58264 30.9516 8.37015 30.013 9.23711 29.146L9.55492 28.8282ZM34.4554 25.6037V23.6152L35.3645 22.7061C35.6387 22.4319 36.0845 22.4319 36.3587 22.7061C36.633 22.9803 36.633 23.4261 36.3587 23.7003L34.4554 25.6037ZM12.9496 10.5469H10.9612L12.8645 8.64357C13.1387 8.36936 13.5845 8.36936 13.8587 8.64357C14.133 8.91779 14.133 9.36358 13.8587 9.63779L12.9496 10.5469ZM21.0355 10.5469H19.0471L20.9505 8.64357C21.2247 8.36936 21.6705 8.36936 21.9447 8.64357C22.2189 8.91779 22.2189 9.36358 21.9447 9.63779L21.0355 10.5469Z" fill="black"/>
                      </svg>
  
                    </div>
                    <div class="shipping-content">
                      <h6 class="title pe-4">Congratulations , you've got free shipping!</h6>
                      <div class="progress">
                        <div class="progress-bar progress-animated border-0" style="width: 75%;" role="progressbar">
                          <span class="sr-only">75% Complete</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="shop-checkout.html" class="btn btn-outline-secondary btn-block m-b20">Checkout</a>	
                  <a href="shop-cart.html" class="btn btn-secondary btn-block">View Cart</a>	
                </div>	
              </div>	
            </div>
            <div class="tab-pane fade" id="wishlist-pane" role="tabpanel" aria-labelledby="wishlist" tabindex="0">
              <div class="shop-sidebar-cart">
                <ul class="sidebar-cart-list">
                  <li>
                    <div class="cart-widget">
                      <div class="dz-media me-3">
                        <img src="/website-assets/images/shop/shop-cart/pic1.jpg" alt="">
                      </div>
                      <div class="cart-content">
                        <h6 class="title"><a href="product-thumbnail.html">Soothing Body Cream</a></h6>
                        <div class="d-flex align-items-center">
                          <h6 class="dz-price text-secondary mb-0">$50.00</h6>
                        </div>
                      </div>
                      <a href="javascript:void(0);" class="dz-close">
                        <i class="ti-close"></i>
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="cart-widget">
                      <div class="dz-media me-3">
                        <img src="/website-assets/images/shop/shop-cart/pic2.jpg" alt="">
                      </div>
                      <div class="cart-content">
                        <h6 class="title"><a href="product-thumbnail.html">Body Toner</a></h6>
                        <div class="d-flex align-items-center">
                          <h6 class="dz-price text-secondary mb-0">$40.00</h6>
                        </div>
                      </div>
                      <a href="javascript:void(0);" class="dz-close">
                        <i class="ti-close"></i> 
                      </a>
                    </div>
                  </li>
                  <li>
                    <div class="cart-widget">
                      <div class="dz-media me-3">
                        <img src="/website-assets/images/shop/shop-cart/pic3.jpg" alt="">
                      </div>
                      <div class="cart-content">
                        <h6 class="title"><a href="product-thumbnail.html">Brightening Body Serum</a></h6>
                        <div class="d-flex align-items-center">
                          <h6 class="dz-price text-secondary mb-0">$65.00</h6>
                        </div>
                      </div>
                      <a href="javascript:void(0);" class="dz-close">
                        <i class="ti-close"></i>
                      </a>
                    </div>
                  </li>	
                </ul>
                <div class="mt-auto">
                  <a href="shop-wishlist.html" class="btn btn-secondary btn-block">Check Your Favourite</a>
                </div>	
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Sidebar cart -->
  
  </header>
  <!-- Header End -->