@extends('main/main',['id' => 'subpage'])

@section('content')
    <div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">
    	<div id="product_slider">
    		<div id="SlideItMoo_outer">
                <div id="SlideItMoo_inner">
                    <div id="SlideItMoo_items">
                        <div class="SlideItMoo_element">
                                <a href="#1" target="_parent">
                                <img src="images/gallery/01.jpg" alt="product 1" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#2" target="_parent">
                                <img src="images/gallery/02.jpg" alt="product 1" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#3" target="_parent">
                                 <img src="images/gallery/03.jpg" alt="product 1" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#4" target="_parent">
                                <img src="images/gallery/04.jpg" alt="product 1" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#5" target="_parent">
                               <img src="images/gallery/05.jpg" alt="product 1" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#6" target="_parent">
                                <img src="images/gallery/06.jpg" alt="product 1" /></a>
                        </div>
                        <div class="SlideItMoo_element">
                                <a href="#7" target="_parent">
                                <img src="images/gallery/07.jpg" alt="product 1" /></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cleaner"></div>
        </div>

        <div id="sidebar">
        	<h3>Categories</h3>
            <ul class="sidebar_menu">
			    <li><a href="#">Aenean et dolor diam</a></li>
                <li><a href="#">Aenean pulvinar</a></li>
                <li><a href="#">Cras bibendum auctor</a></li>
                <li><a href="#">Donec sodales bibendum</a></li>
            	<li><a href="#">Etiam in tellus</a></li>
                <li><a href="#">Hendrerit justo</a></li>
                <li><a href="#">Integer interdum</a></li>
                <li><a href="#">Maecenas a diam</a></li>
				<li><a href="#">Nullam in semper</a></li>
				<li><a href="#">Posuere in commodo</a></li>
				<li><a href="#">Tincidunt leo</a></li>
                <li><a href="#">Vestibulum blandit</a></li>
			</ul>
            <h3>Newsletter</h3>
            <p>Praesent aliquam mi id tellus pretium pulvinar in vel ligula.</p>
            <div id="newsletter">
                <form action="#" method="get">
                  <input type="text" value="Subscribe" name="email_newsletter" id="email_newsletter" title="email_newsletter" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  <input type="submit" name="subscribe" value="Subscribe" alt="Subscribe" id="subscribebtn" title="Subscribe" class="subscribebtn"  />
                </form>
                <div class="cleaner"></div>
            </div>
        </div> <!-- END of sidebar -->

        <div id="content">
        	<h2>Etiam In Tellus</h2>
        	<div class="col col_14 product_gallery">
            	<a href="{{route('productdetail')}}"><img src="images/product/01.jpg" alt="Product 01" /></a>
                <h3>Ut eu feugiat</h3>
                <p class="product_price">$ 100</p>
                <a href="{{route('shoppingcart')}}" class="add_to_cart">Add to Cart</a>
            </div>
            <div class="col col_14 product_gallery">
            	<a href="{{route('productdetail')}}"><img src="images/product/02.jpg" alt="Product 02" /></a>
                <h3>Curabitur et turpis</h3>
                <p class="product_price">$ 200</p>
                <a href="{{route('shoppingcart')}}" class="add_to_cart">Add to Cart</a>
            </div>
            <div class="col col_14 product_gallery no_margin_right">
            	<a href="{{route('productdetail')}}"><img src="images/product/03.jpg" alt="Product 03" /></a>
                <h3>Mauris consectetur</h3>
                <p class="product_price">$ 120</p>
                <a href="{{route('shoppingcart')}}" class="add_to_cart">Add to Cart</a>
            </div>
            <a href="#" class="more float_r">View all</a>
			<div class="cleaner h50"></div>

            <h2>Hendrerit Justo</h2>
            <div class="col col_14 product_gallery">
            	<a href="{{route('productdetail')}}"><img src="images/product/04.jpg" alt="Product 04" /></a>
                <h3>Proin volutpat</h3>
                <p class="product_price">$ 260</p>
                <a href="{{route('shoppingcart')}}" class="add_to_cart">Add to Cart</a>
            </div>
            <div class="col col_14 product_gallery">
            	<a href="{{route('productdetail')}}"><img src="images/product/05.jpg" alt="Product 05" /></a>
                <h3>Aenean tempus</h3>
                <p class="product_price">$ 80</p>
                <a href="{{route('shoppingcart')}}" class="add_to_cart">Add to Cart</a>
            </div>
            <div class="col col_14 product_gallery no_margin_right">
            	<a href="{{route('productdetail')}}"><img src="images/product/06.jpg" alt="Product 06" /></a>
                <h3>Nulla luctus urna</h3>
                <p class="product_price">$ 193</p>
                <a href="{{route('shoppingcart')}}" class="add_to_cart">Add to Cart</a>
            </div>
            <a href="#" class="more float_r">View all</a>
            <div class="cleaner h50"></div>

            <h2>Maecenas A Diam</h2>
            <div class="col col_14 product_gallery">
            	<a href="{{route('productdetail')}}"><img src="images/product/07.jpg" alt="Product 07" /></a>
                <h3>Pellentesque egestas</h3>
                <p class="product_price">$ 30</p>
                <a href="{{route('shoppingcart')}}" class="add_to_cart">Add to Cart</a>
            </div>
            <div class="col col_14 product_gallery">
            	<a href="{{route('productdetail')}}"><img src="images/product/08.jpg" alt="Product 08" /></a>
                <h3>Suspendisse porttitor</h3>
                <p class="product_price">$ 220</p>
                <a href="{{route('shoppingcart')}}" class="add_to_cart">Add to Cart</a>
            </div>
            <div class="col col_14 product_gallery no_margin_right">
            	<a href="{{route('productdetail')}}"><img src="images/product/09.jpg" alt="Product 09" /></a>
                <h3>Nam vehicula</h3>
                <p class="product_price">$ 65</p>
                <a href="{{route('shoppingcart')}}" class="add_to_cart">Add to Cart</a>
            </div>
            <a href="#" class="more float_r">View all</a>
            <div class="cleaner"></div>
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
@endsection
