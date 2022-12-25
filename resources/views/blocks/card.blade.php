<div class="col col_14 product_gallery <?php if($number==3) echo 'no_margin_right';?>">
    <a href="{{route('productdetail',['id'=>$model->id])}}"><img  onclick="openProductCard()" src="{{$model->photo_link}}" alt="Product 033" /></a>
    <h3>{{$model->name}}</h3>
    <p class="product_price">$ {{$model->price}}</p>
    <a href="{{route('shoppingcart')}}" class="add_to_cart">Fuck off</a>
</div>

