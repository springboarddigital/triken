<?php
    $title = 'Todays Cut - Triken ';
    $description = 'The only thing we stock is the packages we use to deliver the meat.';
    $pageRobots = 'index,nofollow';
    $image = ' '; 
    $pageCanonical = '';
    $url = ' '; 
    include('header.php');
?> 

<body class="home">
    <div class="page-wrapper">
    	<div class="main">
			<?php include('menu.php'); ?>

<!-- banner section -->
<div class="intro-wrapper homebanner">
    <div class="swiper-container swiper-theme nav-inner swiper-nav-md animation-slider" data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 1,
                    'loop':true,
                    'autoplay': {
                            'delay': 8000,
                            'disableOnInteraction': false
                        }
                }">
        <div class="swiper-wrapper row cols-1 gutter-no">
            <div class="swiper-slide banner " style="background: url(assets/images/home_banner.jpg);">
            </div>
            <div class="swiper-slide banner " style="background: url(assets/images/home_banner.jpg);">
            </div>
            <div class="swiper-slide banner " style="background: url(assets/images/home_banner.jpg);">
            </div>
        </div>
        <button class="swiper-button-next"></button>
        <button class="swiper-button-prev"></button>
    </div>
</div>
                <!-- End of Intro Wrapper -->
                <div class="swiper-container swiper-theme intro-banner appear-animate" data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 1,
                    'loop':true,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2,
                            'spaceBetween': 15
                        },
                        '992': {
                            'slidesPerView': 3
                        }
                    }
                }">
                    <div class="swiper-pagination"></div>
                </div>
<!-- End of banner -->

<?php include('dealoftheday.php'); ?>
			
<?php include('bestseller.php'); ?>


<?php include('whytodays.php'); ?>


<section class="explore appear-animate">
	<div class="container">
		<h1 class="title text-center appear-animate"> Explore by Categories </h1>
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<a href="#">
					<div class="swiper-slide slide-animate" data-animation-options="{'name': 'fadeInDownShorter', 'duration': '.8s', 'delay': '.4s'}" >
	                    <figure class="category-media">
	                            <img src="assets/images/countrychicken.jpg" alt="Categroy" />
	                    </figure>
	                    <div class="category-content">
	                        <h4 class="category-name"> <a href="#">Country Chicken</a> </h4>
	                    </div>
	                </div>
                </a>
			</div>
			<div class="col-lg-3 col-sm-6">
				<a href="#">
					<div class="swiper-slide">
	                    <figure class="category-media">
	                            <img src="assets/images/chicken.jpg" alt="Categroy" />
	                    </figure>
	                    <div class="category-content">
	                        <h4 class="category-name"> <a href="#">Chicken</a> </h4>
	                    </div>
	                </div>
                </a>
			</div>
			<div class="col-lg-3 col-sm-6">
				<a href="#">
					<div class="swiper-slide">
	                    <figure class="category-media">
	                            <img src="assets/images/mutton.jpg" alt="Categroy" />
	                    </figure>
	                    <div class="category-content">
	                        <h4 class="category-name"> <a href="#">Mutton</a> </h4>
	                    </div>
	                </div>
                </a>
			</div>
			<div class="col-lg-3 col-sm-6">
				<a href="#">
					<div class="swiper-slide">
	                    <figure class="category-media">
	                            <img src="assets/images/fish.jpg" alt="Categroy" />
	                    </figure>
	                    <div class="category-content">
	                        <h4 class="category-name"> <a href="#">Fish/Sea Food</a> </h4>
	                    </div>
	                </div>
                </a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<a href="#">
					<div class="swiper-slide">
	                    <figure class="category-media">
	                            <img src="assets/images/egg.jpg" alt="Categroy" />
	                    </figure>
	                    <div class="category-content">
	                        <h4 class="category-name"> <a href="#">Eggs</a> </h4>
	                    </div>
	                </div>
                </a>
			</div>
			<div class="col-lg-3 col-sm-6">
				<a href="#">
					<div class="swiper-slide">
	                    <figure class="category-media">
	                            <img src="assets/images/combo.jpg" alt="Categroy" />
	                    </figure>
	                    <div class="category-content">
	                        <h4 class="category-name"> <a href="#">Combos</a> </h4>
	                    </div>
	                </div>
                </a>
			</div>
			<div class="col-lg-3 col-sm-6">
				<a href="#">
					<div class="swiper-slide">
	                    <figure class="category-media">
	                            <img src="assets/images/party.jpg" alt="Categroy" />
	                    </figure>
	                    <div class="category-content">
	                        <h4 class="category-name"> <a href="#">Party Packs</a> </h4>
	                    </div>
	                </div>
                </a>
			</div>
			<div class="col-lg-3 col-sm-6">
			</div>
		</div>

<!-- recipes start -->
		<div class="swiper-container recipe swiper-theme post-wrapper pb-2 pb-lg-0 mb-5 appear-animate"
                    data-swiper-options="{
                    'slidesPerView': 1,
                    'spaceBetween': 20,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '992': {
                            'slidesPerView': 4,
                            'dots': false
                        }
                    }
                }">
        <h1 class="title text-center appear-animate"> Recipes for your dishes </h1>
	        <div class="swiper-wrapper row ">
	        	<div class="col-lg-4 col-sm-12">
	        		<div class="swiper-slide post text-center overlay-zoom">
	                    <figure class="post-media">
	                        <a href="#">
	                            <img src="assets/images/garlic.jpg" alt="Recipes" />
	                        </a>
	                    </figure>
	                    <div class="post-details">
	                        <h4 class="post-title"><a href="#">Garlic Prawns</a></h4>
	                        <a href="#" class="btn btn-link btn-dark btn-underline"> View Recipe  <i class="w-icon-long-arrow-right"></i> </a>
	                    </div>
	                </div>
	        	</div>
	        	<div class="col-lg-4 col-sm-12">
	        		<div class="swiper-slide post text-center overlay-zoom">
	                    <figure class="post-media">
	                        <a href="#">
	                            <img src="assets/images/karahi.jpg" alt="Recipes" />
	                        </a>
	                    </figure>
	                    <div class="post-details">
	                        <h4 class="post-title"><a href="#">Chicken Karahi</a></h4>
	                        <a href="#" class="btn btn-link btn-dark btn-underline"> View Recipe  <i class="w-icon-long-arrow-right"></i> </a>
	                    </div>
	                </div>
	        	</div>
	        	<div class="col-lg-4 col-sm-12">
	        		<div class="swiper-slide post text-center overlay-zoom">
	                    <figure class="post-media">
	                        <a href="#">
	                            <img src="assets/images/pepperfry.jpg" alt="Recipes" />
	                        </a>
	                    </figure>
	                    <div class="post-details">
	                        <h4 class="post-title"><a href="#">Naatu Kozhi Pepperfry</a></h4>
	                        <a href="#" class="btn btn-link btn-dark btn-underline"> View Recipe  <i class="w-icon-long-arrow-right"></i> </a>
	                    </div>
	                </div>
	        	</div> 
	        </div>
        </div>
        <div class="viewall">
        	<a href="#" class="btn btn-dark"> View All Recipes </a>
        </div>
    <!-- recipes end -->
    </div>	
</section>

 <?php include('review.php'); ?>

<section class="featured">
	<div class="container">
		<h1 class="title text-center appear-animate"> Featured in </h1>
		<div class="row">
			<div class="col-lg-4 hidden-sm"> </div>
			<div class="col-lg-4 col-sm-12">
				<ul>
					<li> <img src="assets/images/hindu.jpg" class="img-responsive"> </li>
					<li> <img src="assets/images/covai.jpg" class="img-responsive"> </li>
				</ul>
				<p> Google Review: <span class="count"> 4.2 </span> <i class="fa fa-star" aria-hidden="true"></i>  </p>
			</div>
			<div class="col-lg-4 hidden-sm"> </div>
		</div>
	</div>	
</section>

   <!-- Start of Newsletter popup -->
    <div class="newsletter-popup mfp-hide">
        <div class="newsletter-content">
            <h2 class="ls-25">Select your city</h2>

            <div class="city">
                <ul>
                    <li> <div class="viewall"> <a href="#" class="btn btn-dark"> Coimbatore </a> </div> </li>
                    <li> <div class="viewall"> <a href="#" class="btn btn-dark"> Chennai </a> <span class="soon"> Coming Soon! </span> </div> </li>
                    <li> <div class="viewall"> <a href="#" class="btn btn-dark"> Tiruppur </a> <span class="soon"> Coming Soon! </span> </div> </li>
                </ul>
            </div>
             
            <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-round">
                <input type="text" class="form-control" name="text" id="text"
                    placeholder="Enter your area" required="">
                <button class="btn btn-dark" type="submit">Detect my location</button>
            </form>
            <p> Expansion of our delivery service into a wider
geography is underway.</p>
           <div class="form-checkbox d-flex align-items-center">
                <input type="checkbox" class="custom-checkbox" id="hide-newsletter-popup" name="hide-newsletter-popup"
                    required="">
                <label for="hide-newsletter-popup" class="font-size-sm text-light">Don't show this popup again.</label>
            </div> 
        </div>
    </div>
    <!-- End of Newsletter popup -->

<?php include('footer.php'); ?>