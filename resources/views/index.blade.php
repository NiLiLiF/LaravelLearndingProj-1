@extends('main/main',['id' => 'home'])

@section('content')

    <div id="templatemo_middle">
        <img src="images/templatemo_image_01.png" alt="Image 01" />
        <h1>Introducing Web Store</h1>
        <p>Web Store is a free css template for your personal or commercial websites. Feel free to download, edit and use this template for any purpose.</p>
        <a href="#" class="buy_now">Browse All Products</a>
    </div> <!-- END of middle -->

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

            <?php
            $count = 1;
            foreach ($products as $product):?>
            @include('card',['model'=>$product,'number'=>$count])
                <?php
                $count++;
                if($count>3) $count=1;
            endforeach;?>
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->

@endsection

