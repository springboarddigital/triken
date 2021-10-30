<?php
    $title = 'Country Chicken - Triken ';
    $description = 'The only thing we stock is the packages we use to deliver the meat.';
    $pageRobots = 'index,nofollow';
    $image = ' '; 
    $pageCanonical = '';
    $url = ' '; 
    $page ="Personal Details";
    include('header.php');
    include('main.php');
?> 


<style type="text/css"> 
.submenu{padding: 10px 0; border-bottom: 1px solid #eee;}
</style>

<link rel="stylesheet" href="assets/css/style.css">

<div class="cartpage">
    <div class="container">
			
	<div class="multisteps-form">
        <!--progress bar-->
        <div class="row">
          <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="Cart"><span>Cart</span></button>
              <button class="multisteps-form__progress-btn" type="button" title="Personal Details"><span>Personal Details</span></button>
              <button class="multisteps-form__progress-btn" type="button" title="Payment Details"><span>Payment Details</span></button>
            </div>
          </div>
        </div>
        <!--form panels-->
        <div class="row">
          <div class="col-12 col-lg-12 m-auto">
            <form class="multisteps-form__form">
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                
                <div class="multisteps-form__content">
                  
				  <div class="cartpage">
    <div class="container">
        <div class="row gutter-lg">
            <div class="col-lg-8 pr-lg-4 mb-6">
                <table class="shop-table cart-table">
                    <thead> <tr> <th colspan="3" class="product-name"><span>Products</span></th> </tr> </thead>
                    <tbody>
                        <tr>
                             <td class="product-thumbnail">
                                <div class="p-relative">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/images/products/currycut.jpg" alt="product">
                                        </figure>
                                    </a>
                                </div>
                            </td>
                            <td class="product-name">
                                <a href="#"> Country Chicken Curry cuts Small (varuval) with skin </a>
                                <div  class="product-price">
	                               <ins class="new-price">650</ins>
								   <span class="gms"> 500 gms </span>
								</div>
                            </td>
                            <td class="product-quantity">
                                <div class="input-group">
                                    <input class="quantity form-control" type="number" min="1" max="100000">
                                                <button class="quantity-plus w-icon-plus"></button>
                                                <button class="quantity-minus w-icon-minus"></button>
                                </div>
                                <span class="remove"> <a href=""> Remove </a> </span>
                            </td>
                        </tr>
                        <tr>
                             <td class="product-thumbnail">
                                <div class="p-relative">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/images/products/currycut.jpg" alt="product">
                                        </figure>
                                    </a>
                                </div>
                            </td>
                            <td class="product-name">
                                <a href="#"> Baasa Fish </a>
                                <div  class="product-price">
                                   <ins class="new-price">1750</ins>
                                   <span class="gms"> 1100 gms</span>
                                </div>
                            </td>
                            <td class="product-quantity">
                                <div class="input-group">
                                    <input class="quantity form-control" type="number" min="1" max="100000">
                                                <button class="quantity-plus w-icon-plus"></button>
                                                <button class="quantity-minus w-icon-minus"></button>
                                </div>
                                <span class="remove"> <a href=""> Remove </a> </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="btn-continue">
                    <a href="#" class="btn btn-block "> <i class="w-icon-long-arrow-left"></i> Continue Shipping </a>
                </div>
            </div>
            <div class="col-lg-4 delivery">
                 <table class="shop-table cart-table cart_delivery order-summary">
                    <thead> <tr> <th colspan="1" class="product-name"><span>Delivery</span></th> </tr> </thead>
                    <tbody>
                        <tr>
                            <td>
                                  <div class="payment-methods" id="payment_method">
                                            <div class="accordion payment-accordion">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#payment" class="collapse">Deliver Now (120 mins)</a>
                                                    </div>
                                                    <div id="payment" class="card-body expanded">
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#cash-on-delivery" class="expand">Pickup Date & Time</a>
                                                    </div>
                                                    <div id="cash-on-delivery" class="card-body collapsed">
                                                        <form>
                                 <input placeholder="Select your delivery date" class="form-control" type="date"  id="date" required="required">
                                
                                
                                <div class="form-group">
                                                <div class="select-box">
                                                    <select name="state" class="form-control form-control-md">
                                                        <option value="default" selected="selected">Select your delivery time
                                                        </option>
                                                        <option value="slot1">7-9 AM</option>
                                                        <option value="slot2">9-11 AM</option>
                                                        <option value="slot3">11-01 PM</option>
                                                        <option value="slot4">1-3 PM</option>
                                                    </select>
                                                </div>
                                            </div>
                                </form>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="cart-subtotal align-items-center justify-content-between">
                                    <div class="csubtotal">
                                        <label class="ls-25">Subtotal  </label>
                                        <ins class="subtotal">2400</ins>
                                    </div>
                                        <p> Delivery, taxes, and discount codes
                                        calculated at checkout </p>
                                </div>

                                <button type="submit" class="btn btn-block btn-checkout"> Checkout </button> 
                            </td>
                        </tr>
                       <!-- <tr>
                            <td>
                                <ul class="shipping-methods mb-2">
                                        <li>
                                            <div class="custom-radio">
                                                <input type="radio" id="free-shipping" class="custom-control-input"
                                                    name="shipping">
                                                <label for="free-shipping"
                                                    class="custom-control-label color-dark">Deliver Now (120 mins)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-radio">
                                                <input type="radio" id="local-pickup" class="custom-control-input"
                                                    name="shipping">
                                                <label for="local-pickup"
                                                    class="custom-control-label color-dark">Pickup Date & Time</label>
                                            </div>
                                        </li>
                                    </ul>
                            </td>
                        </tr> -->
                       <!-- <tr>
                           <td> 
                                <form>
                                <label> Pickup Date & Time </label>
                                <input placeholder="Select your delivery date" class="form-control" type="text" onfocus="(this.type='date')" id="date" required="required">
                                <input placeholder="Select your delivery time" class="form-control" type="text" onfocus="(this.type='time')" id="time" required="required"> 

                                <div class="cart-subtotal align-items-center justify-content-between">
                                    <div class="csubtotal">
                                        <label class="ls-25">Subtotal  </label>
                                        <ins class="subtotal">2400</ins>
                                    </div>
                                        <p> Delivery, taxes, and discount codes
                                        calculated at checkout </p>
                                </div>

                                <button type="submit" class="btn btn-block btn-checkout"> Checkout </button> 
                                </form>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
				  
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
				  
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                
                <div class="multisteps-form__content">
                  
				  <div class="row cartpage gutter-lg">
		
			<div class="col-lg-4 delivery pr-0">
                 <table class="shop-table cart-table saved-address">
                    <thead> <tr> <th colspan="1" class="product-name"><span>Selected Saved Address</span></th> </tr> </thead>
                    <tbody>
                        <tr>
                           <td> 
                                <div class="ecommerce-address billing-address saved-address">
									<div class="radio-item address">
										<input type="radio" id="address1" name="address" value="address1" checked>
										<label for="address1">41/2,SRC Sunrise,2nd Floor, Post, Vivekanandha Nagar, Singanallur, Tamil Nadu 641005</label>
										<br>
										<a href="#" class="btn btn-link btn-underline btn-icon-right" style="color: #E0522D;text-transform: inherit;">Edit</a>
									</div>
										<hr>
									<div class="radio-item address">
										<input type="radio" id="address2" name="address" value="address2">
										<label for="address2">358 Pudur Coimbatore Coimbatore Tamil Nadu 641015 India</label>
										<br>
									</div>
									<div class="radio-item address">
										<input type="radio" id="address3" name="address" value="address3">
										<label for="address3">358 Pudur Coimbatore Coimbatore Tamil Nadu 641015 India</label>
										<br>
									</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
			<div class="col-lg-1 or_col">OR</div>
            <div class="col-lg-7 pl-0 mb-6 new_address">
                <table class="shop-table cart-table">
                    <thead> <tr> <th colspan="3" class="product-name"><span>Enter New Address</span></th> </tr> </thead>
                    <tbody>
                        <tr>
                             <td class="product-thumbnail">
                                <form class="form account-details-form" action="#" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" id="building-name" name="building-name" placeholder="Flat no / Building Name" class="form-control form-control-md" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" id="Street" name="street" placeholder="Street / Area"
                                                    class="form-control form-control-md" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" id="area" name="area" placeholder="Area" class="form-control form-control-md" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" id="city" name="city" placeholder="City"
                                                    class="form-control form-control-md" required>
                                            </div>
                                        </div>
                                    </div>
									
									<div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" id="pincode" name="pincode" placeholder="Pincode" class="form-control form-control-md" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" id="landmark" name="landmark" placeholder="Landmark"
                                                    class="form-control form-control-md" required>
                                            </div>
                                        </div>
                                    </div>
                                  <input type="checkbox" class="filled-in" id="filled-in-box" name="" checked>
								<label for="filled-in-box">Save Address</label>
                                </form>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
				
				<button type="submit" class="submit_btn btn btn-dark btn-rounded btn-sm mb-4 orange_btn">Proceed to Payment</button>
				
            </div>
            
        </div>
				  
				  
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
				  
				  
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                
                <div class="multisteps-form__content">
                  
				  <div class="cartpage">
    <div class="container">
	
        <div class="row gutter-lg">
            <div class="col-lg-8 pr-lg-4 mb-6">
                <table class="shop-table cart-table">
                    <thead> <tr> <th colspan="3" class="product-name"><span>Your Order</span></th> </tr> </thead>
                    <tbody>
                        <tr>
                             <td class="product-thumbnail col-xs-2 text-right">
                                <div class="p-relative">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/images/products/currycut.jpg" alt="product">
                                        </figure>
                                    </a>
                                </div>
                            </td>
                            <td class="product-name">
                                <a href="#"> Country Chicken Curry cuts Small (varuval) with skin </a>
								<span class="cross">x1</span>
                                <div  class="product-price">
	                               <ins class="new-price">650</ins>
								   <span class="gms"> 500 gms </span>
								</div>
                            </td>
                        </tr>
                        <tr>
                             <td class="product-thumbnail col-xs-2 text-right">
                                <div class="p-relative">
                                    <a href="#">
                                        <figure>
                                            <img src="assets/images/products/currycut.jpg" alt="product">
                                        </figure>
                                    </a>
                                </div>
                            </td>
                            <td class="product-name">
                                <a href="#"> Baasa Fish </a>
								<span class="cross">x1</span>
                                <div  class="product-price">
                                   <ins class="new-price">1750</ins>
                                   <span class="gms"> 1100 gms</span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
				
				<div class="row delivery_at">
					<div class="col-lg-6">
					<h4>Delivery at</h4>
					<p>41/2,SRC Sunrise,2nd Floor, Post, 
					Vivekanandha Nagar, Singanallur, 
					Tamil Nadu 641005</p>
					</div>
					<div class="col-lg-6">
					<h4>Delivery Slot</h4>
					<p>01/10/2021	<br>7-9 AM slot</p>
					</div>
				</div>
				
            </div>
            <div class="col-lg-4 delivery payment_col">
                 <table class="shop-table cart-table">
                    <thead> <tr> <th colspan="1" class="product-name"><span>Payments</span></th> </tr> </thead>
                    <tbody>
                        <tr>
                           <td class="border_all"> 
								<div class="coupon-content">
								<div class="input-wrapper-inline">
									<input type="text" name="coupon_code" class="coupon_code form-control form-control-md mb-2" placeholder="Gift card or discount code" id="coupon_code">
									<button type="submit" class="apply_coupon btn button btn-rounded btn-coupon mb-2" name="apply_coupon" value="Apply">Apply</button>
								</div>
								</div>
								<hr class="mt-2 mb-2">
								<div class="order-summary">
									<table class="order-table">
										<tbody>
											<tr class="bb-no">
												<td class="product-name">Subtotal</td>
												<td class="product-total text-right">₹2400</td>
											</tr>
											<tr class="bb-no">
												<td class="product-name">Discount</td>
												<td class="product-total text-right discount_amt">₹300</td>
											</tr>
											<tr class="bb-no">
												<td class="product-name">Delivery</td>
												<td class="product-total text-right">0</td>
											</tr>
										</tbody>
									</table>
									<hr class="mt-2">
									<table>
										<tbody>
											<tr class="cart-subtotal bb-no">
												<td class="product-name">Total</td>
												<td class="cart-price text-right">₹2400</td>
											</tr>
										</tbody>
									</table>
									<hr class="mt-2">
									<div class="payment-methods" id="payment_method">
                                        <div class="radio-item">
											<input type="radio" id="payment1" name="payment" value="payment1" checked>
											<label for="payment1">CC Avenue</label>
											<img src="assets/images/ccavenue.png" alt="">
										</div> 
										<div class="radio-item">	
											<input type="radio" id="payment2" name="payment" value="payment2">
											<label for="payment2">Cash on Delivery</label>
										</div> 
                                        
										<button type="submit" class="submit_btn btn btn-dark btn-rounded mb-4 orange_btn">Place Order</button>
                                    </div>
								</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> 
				
			  <div class="button-row d-flex mt-4">
				<button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
				<button class="btn btn-success ml-auto" type="button" title="Send">Send</button>
			  </div>  
				  
				  
                </div>
              </div>
              <!--single form panel-->
               
            </form>
          </div>
        </div>
      </div>
    </div>
</div> 

<div class="cspace"></div>


<script  src="assets/js/script.js"></script>

<?php include('footer.php'); ?>