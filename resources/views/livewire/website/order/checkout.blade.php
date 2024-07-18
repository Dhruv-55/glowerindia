<div>
    <div class="content-inner-1 bg-light">
        <div class="container">
            <div class="row shop-checkout">
                <div class="col-xl-8">
                    <h4 class="title m-b15">Billing details</h4>
                    <div class="accordion dz-accordion accordion-sm" id="accordionFaq">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <a href="shop-checkout.html#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Returning customer? &nbsp; <span>Click here to login</span>
                                    <span class="toggle-close"></span>
                                </a>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p class="m-b0">If your order has not yet shipped, you can contact us to change your shipping address</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <a href="shop-checkout.html#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                    Have a coupon? &nbsp; <span>Click here to enter your code</span>
                                    <span class="toggle-close"></span>
                                </a>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p class="m-b0">If your order has not yet shipped, you can contact us to change your shipping address</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group m-b15">
                                <label class="label-title">First Name</label>
                                <input name="dzName" required="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group m-b15">
                                <label class="label-title">Last Name</label>
                                <input name="dzName" required="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group m-b15">
                                <label class="label-title">Company name (optional)</label>
                                <input name="dzName" required="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="m-b15">
                                <label class="label-title">Country / Region *</label>
                                <select class="default-select form-select w-100">
                                    <option selected>India</option>
                                    <option value="1">Another option</option>
                                    <option value="2">UK</option>
                                    <option value="3">Iraq</option>
                                </select>	
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group m-b15">
                                <label class="label-title">Street address *</label>
                                <input name="dzName" required="" class="form-control m-b15" placeholder="House number and street name">
                                <input name="dzName" required="" class="form-control" placeholder="Apartment, suite, unit, etc. (optional)">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="m-b15">
                                <label class="label-title">Town / City *</label>
                                <select class="default-select form-select w-100">
                                    <option selected>Kota</option>
                                    <option value="1">Another option</option>
                                    <option value="2">Jaipur</option>
                                    <option value="3">Udaipur</option>
                                </select>	
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="m-b15">
                                <label class="label-title">State*</label>
                                <select class="default-select form-select w-100">
                                    <option selected>Rajasthan</option>
                                    <option value="1">Another option</option>
                                    <option value="2">Rajasthan</option>
                                    <option value="3">Rajasthan</option>
                                </select>	
                            </div>
                            
                        </div>
                        <div class="col-md-12">
                            <div class="form-group m-b15">
                                <label class="label-title">ZIP Code *</label>
                                <input name="dzName" required="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group m-b15">
                                <label class="label-title">Phone *</label>
                                <input name="dzName" required="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group m-b15">
                                <label class="label-title">Email address *</label>
                                <input name="dzName" required="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 m-b15">
                            <div class="form-group m-b5">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="basic_checkbox_2">
                                    <label class="form-check-label" for="basic_checkbox_2">Create an account?</label>
                                </div>
                            </div>
                            <div class="form-group">
                               <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="basic_checkbox_3">
                                    <label class="form-check-label" for="basic_checkbox_3">Ship to a different address?</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 m-b15">
                            <div class="form-group">
                                <label class="label-title">Order notes (optional)</label>
                                <textarea id="comments" placeholder="Notes about your order, e.g. special notes for delivery." class="form-control" name="comment" cols="90" rows="5" required="required"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-4 side-bar">
                    <h4 class="title m-b15">Your Order</h4>
                    <div class="order-detail sticky-top">
                        @foreach ($cart_items as $item)
                        <div class="cart-item style-1">
                            <div class="dz-media">
                                <img src="{{ env('PRODUCT_IMAGE_URL').$item->product->primary_image }}" alt="/">
                            </div>
                            <div class="dz-content">
                                <h6 class="title mb-0">{{  $item->product->name }}</h6>
                                <span class="price">₹{{  $item->product->selling_price }}</span>
                            </div>
                        </div>
                        @endforeach
                        @php
   
                        $total_amount = $cart_items->sum(function($item) {
                            return $item->total_amount;
                        });

                        $discount_amount = $cart_items->sum(function($item) {
                            return $item->discount_amount;
                        });
                  
                    @endphp
                        <table>
                            <tbody>
                                <tr class="subtotal">
                                    <td>Subtotal</td>
                                    <td class="price"> ₹ {{ $total_amount }}</td>
                                </tr>
                                {{-- <tr class="title">
                                    <td><h6 class="title font-weight-500">Shipping</h6></td>
                                    <td></td>
                                </tr> --}}
                                {{-- <tr class="shipping">
                                    <td>
                                        <div class="custom-control custom-checkbox">
                                          <input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                          <label class="form-check-label" for="flexRadioDefault1">
                                            Free shipping
                                          </label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                          <input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                          <label class="form-check-label" for="flexRadioDefault2">
                                            Flat Rate:
                                          </label>
                                        </div>
                                    </td>
                                    <td class="price fw-normal">25.75</td>
                                </tr> --}}
                                <tr class="total">
                                    <td>Total</td>
                                    <td class="price">₹ {{ $total_amount }}</td>
                                    
                                </tr>
                            </tbody>
                        </table>
                        
                        <div class="accordion dz-accordion accordion-sm" id="accordionFaq1">
                            <div class="accordion-item">
                                <div class="accordion-header" id="heading1">
                                    <div class="accordion-button collapsed custom-control custom-checkbox border-0" data-bs-toggle="collapse" data-bs-target="#collapse1" role="navigation"  aria-expanded="true" aria-controls="collapse1">
                                        <input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            Direct bank transfer
                                        </label>
                                    </div>
                                </div>
                                <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionFaq1">
                                    <div class="accordion-body">
                                        <p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="heading2">
                                    <div class="accordion-button collapsed custom-control custom-checkbox border-0" data-bs-toggle="collapse" data-bs-target="#collapse2" role="navigation" aria-expanded="true" aria-controls="collapse2">
                                        <input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                                        <label class="form-check-label" for="flexRadioDefault5">
                                            Cash on delivery
                                        </label>
                                    </div>
                                </div>
                                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="collapse2" data-bs-parent="#accordionFaq1">
                                    <div class="accordion-body">
                                        <p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="heading3">
                                    <div class="accordion-button collapsed custom-control custom-checkbox border-0" data-bs-toggle="collapse" data-bs-target="#collapse3" role="navigation" aria-expanded="true" aria-controls="collapse3">
                                        <input class="form-check-input radio" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            Paypal
                                        </label>
                                        <img src="/website-assets/images/shop/payment.jpg" alt="/">
                                        <a href="javascript:void(0);">What is PayPal?</a>
                                    </div>
                                </div>
                                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionFaq1">
                                    <div class="accordion-body">
                                        <p class="m-b0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="javascript:void(0);">privacy policy.</a></p>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox d-flex m-b15">
                                <input type="checkbox" class="form-check-input" id="basic_checkbox_4">
                                <label class="form-check-label" for="basic_checkbox_4">I have read and agree to the website terms and conditions </label>
                            </div>
                        </div>
                        <a href="shop-checkout.html" class="btn btn-secondary btn-lg w-100">PLACE ORDER</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
