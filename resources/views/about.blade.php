@extends('main/main',['id' => 'subpage'])

@section('content')


    <div class="cleaner h20"></div>
    <div id="templatemo_main_top"></div>
    <div id="templatemo_main">

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

            <h2>Company Overview</h2>
        <p>Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Donec sapien. Nam ac nunc. Aliquam fermentum cursus risus. Aliquam erat volutpat. Morbi a augue eget orci sodales blandit. Morbi et mi in mi eleifend adipiscing. Nullam id quam a ligula semper feugiat. Sed ultricies. Nulla et pede eu pede ultrices commodo. Nulla semper accumsan pede. Donec ut quam. Quisque egestas felis in diam.</p>
        <ul class="tmo_list">
        	<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
            <li>Pellentesque quis nulla id orci malesuada porta posuere quis massa.</li>
            <li>Nunc vitae purus non augue scelerisque ultricies vitae et velit quis.</li>
            <li>Aliquam fermentum cursus risus aliquam erat volutpat.</li>
            <li>Morbi a augue eget orci sodales blandit morbiet mi in mi eleifend adipiscing.</li>
		</ul>
        <div class="cleaner h20"></div>
        <h3>Praesent pede massa, feugiat auctor</h3>
		<p>Nam nec leo. Curabitur quis eros a arcu feugiat egestas. Nunc sagittis, dui non porttitor tincidunt, mi tortor tincidunt sem, et aliquet mi tortor eu turpis. Ut nisi ligula, viverra ac, placerat sed, ultricies vitae, neque. Morbi feugiat neque non odio eleifend pulvinar.</p>
        <div class="cleaner"></div>
        <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis nulla id orci malesuada porta posuere quis massa. Nunc vitae purus non augue scelerisque ultricies vitae et velit quis nulla id orci malesua.
        </blockquote>

        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->


@endsection
