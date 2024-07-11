<div class="wrap-icon-section wishlist">
    <a href="{{route('product.wishlist')}}" class="link-direction">
        <i class="fa fa-heart" aria-hidden="true" style="color: red"></i>
        <div class="left-info">
            <span class="index" style="background-color: red">{{Cart::instance('wishlist')->count()}} items</span>
            <span class="title">Wishlist</span>
        </div>
    </a>
</div>
