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
        	<h2>Contact Information</h2>

            <div class="col col_13">
            <p>Etiam eget leo nisl. Morbi magna enim, lobortis vitae condimentum. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p>
            <div id="contact_form">
               <form method="post" name="contact" action="#">

                    <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                    <div class="cleaner h10"></div>

                    <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                    <div class="cleaner h10"></div>

                    <label for="subject">Subject:</label> <input type="text" name="subject" id="subject" class="input_field" />
                    <div class="cleaner h10"></div>

                    <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                    <div class="cleaner h10"></div>

					<input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
					<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />

                </form>
            </div>
		</div>
        <div class="col col_13">
        	<h5>Location One</h5>
            111-303 Fusce nec ante at odio blandit, <br />
            In vitae lacus in purus interdum, 10640<br />
            Nam rhoncus, diam a mollis tempor<br /><br />
			<strong>Phone:</strong> 010-225-1800<br />
            <strong>Email:</strong> <a href="mailto:info@company.com">info@company.com</a> <br />
            <div class="cleaner divider"></div>

			<div class="cleaner h30"></div>

            <h5>Location Two</h5>
            120-300 Duis lacinia dictum, <br />
            Ullamcorper mattis magna non, 15520<br />
            Maecenas a diam, a mollis magna<br /><br />
			<strong>Phone:</strong> 010-226-1200<br />
            <strong>Email:</strong> <a href="mailto:contact@company.com">contact@company.com</a> <br />
        </div>

        <div class="cleaner h30"></div>

        <iframe width="660" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=new+york+central+park&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=60.158465,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=&amp;hnear=Central+Park,+New+York&amp;t=m&amp;ll=40.769606,-73.973372&amp;spn=0.014284,0.033023&amp;z=14&amp;output=embed"></iframe>

        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->
@endsection
