        <header class="header">
            <div class="header-middle sticky-content fix-top sticky-header border-no">
                <div class="container">
                    <div class="header-left mr-md-4">
                        <a href="#" class="mobile-menu-toggle  w-icon-hamburger"></a>
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo.png" alt="logo">
                        </a>
                        <form method="get" action="#"
                            class="input-wrapper header-search hs-expanded hs-round d-none d-md-flex">
                            <div class="select-box">
                                <select id="category" name="category">
                                    <option value=""><i class="fa fa-map-marker"></i> VOC Colony, Peelamedu</option>
                                </select>
                            </div>
                            <button class="btn btn-search" type="submit">
                                <i class="w-icon-search"></i>
                            </button>
                            <input type="text" class="form-control pt-0 pb-0" name="search" id="search"
                                placeholder="Search your delicious product" required />
                            
                        </form>
                    </div>
                    <div class="header-right">
                        <div class="header-call d-xs-show d-lg-flex align-items-center">
                                    <a href="about.php">About</a>
                        </div>
                        <a href="#" class="">Log In/Sign Up</a>
                        <div class="dropdown cart-dropdown mr-0 mr-lg-2">
                            <div class="cart-overlay"></div>
                            <a href="#" class="cart-toggle label-down link">
                                <i class="fa fa-shopping-cart" aria-hidden="true">
                                    <span class="cart-count">2</span>
                                </i>
                                <span class="cart-label">Cart</span>
                            </a>
                            <div class="dropdown-box">
                                <div class="products">
                                    <div class="product product-cart">
                                        <figure class="product-media">
                                            <a href="#">
                                                 <a href="#"><img src="assets/images/products/currycut.jpg" alt="Product"/> </a>
                                            </a>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="#" class="product-name">Country Chicken Curry cuts Small
(varuval) with skin 500 gms</a>
                                            <div class="product-qty-form mb-2 mr-2">
                                                <div class="input-group">
                                                    <input class="quantity form-control" type="number" min="1" max="10000000">
                                                    <button class="quantity-plus w-icon-plus"></button>
                                                    <button class="quantity-minus w-icon-minus"></button>
                                                </div>
                                                <div class="price-box">
                                                    <span class="product-price"><ins class="new-price">150</ins></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button class="btn btn-link btn-close" aria-label="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>

                                    <hr class="product-divider">

                                    <div class="product product-cart">
                                        <figure class="product-media">
                                            <a href="#">
                                                 <a href="#"><img src="assets/images/products/catla.jpg" alt="Product"/> </a>
                                            </a>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="#" class="product-name">Baasa Fish</a>
                                            <div class="product-qty-form mb-2 mr-2">
                                                <div class="input-group">
                                                    <input class="quantity form-control" type="number" min="1" max="10000000">
                                                    <button class="quantity-plus w-icon-plus"></button>
                                                    <button class="quantity-minus w-icon-minus"></button>
                                                </div>
                                                <div class="price-box">
                                                    <span class="product-price"><ins class="new-price">150</ins></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button class="btn btn-link btn-close" aria-label="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="subtotal">58.67</span>
                                </div>

                                <div class="cart-action">
                                    <a href="cart.php" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                    <a href="checkout.php" class="btn btn-primary  btn-rounded">Checkout</a>
                                </div>
                            </div>
                            <!-- End of Dropdown Box -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Header Middle -->
        </header>
        <!-- End of Header -->

<main class="main">
            <div class="container submenu">
                <div class="category-wrapper row cols-12">
                    <div class="category <?php if ($page=='Country Chicken') {echo "active";}?>"  >
                            <figure class="category-media">
                                <a href="country_chicken.php">
                                    <img src="assets/images/countrychicken.svg" alt="Country Chicken" >
                                        <h4 class="category-name"> Country Chicken </h4>
                                </a>
                            </figure>
                    </div>
                    <div class="category">
                        <figure class="category-media">
                            <a href="#">
                                <img src="assets/images/chicken.svg" alt="Country Chicken" >
                                    <h4 class="category-name"> Chicken </h4>
                            </a>
                        </figure>
                    </div>
                    <div class="category">
                        <figure class="category-media">
                            <a href="#">
                                <img src="assets/images/mutton.svg" alt="Country Chicken" >
                                    <h4 class="category-name"> Mutton </h4>
                            </a>
                        </figure>
                    </div>
                    <div class="category">
                        <figure class="category-media">
                            <a href="#">
                                <img src="assets/images/fish.svg" alt="Country Chicken" >
                                    <h4 class="category-name"> Fish/Sea Food </h4>
                            </a>
                        </figure>
                    </div>
                    <div class="category">
                        <figure class="category-media">
                            <a href="#">
                                <img src="assets/images/egg.svg" alt="Country Chicken" >
                                    <h4 class="category-name"> Eggs </h4>
                            </a>
                        </figure>
                    </div>
                    <div class="category">
                        <figure class="category-media">
                            <a href="#">
                                <img src="assets/images/combos.svg" alt="Country Chicken" >
                                    <h4 class="category-name"> Combos </h4>
                            </a>
                        </figure>
                    </div>
                    <div class="category">
                        <figure class="category-media">
                            <a href="#">
                                <img src="assets/images/party.svg" alt="Country Chicken" >
                                    <h4 class="category-name"> Party Packages </h4>
                            </a>
                        </figure>
                    </div>
                </div> 
            </div>
