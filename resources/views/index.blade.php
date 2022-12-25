@extends('main/main',['id' => 'home'])

@section('content')

    <div id="templatemo_middle">
        <img src="images/templatemo_image_01.png" alt="Image 01"/>
        <h1>Introducing Web Store</h1>
        <p>Web Store is a free css template for your personal or commercial websites. Feel free to download, edit and
            use this template for any purpose.</p>
        <a href="#" class="buy_now">Browse All Products</a>
    </div> <!-- END of middle -->

    <div id="templatemo_main_top"></div>

    <div id="templatemo_main">

        @include ('blocks.sidebar')

        <div id="content">

            <?php
            $count = 1;
            foreach ($products as $product): ?>
            @include('blocks.card',['model'=>$product,'number'=>$count])
                <?php
                $count++;
                if ($count > 3) $count = 1;
            endforeach; ?>
        </div> <!-- END of content -->
        <div class="cleaner"></div>
    </div> <!-- END of main -->

@endsection

