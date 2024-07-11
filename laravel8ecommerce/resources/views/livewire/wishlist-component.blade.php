<div>
    <main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Wishlist</span></li>
				</ul>
			</div>
            <style>
                .product-wish{
                    position: absolute;
                    top: 10%;
                    left: 0;
                    z-index: 99;
                    right: 30px;
                    text-align: right;
                    padding-top: 0;
                }
                .product-wish .fa{
                    color: #cbcbcb;
                    font-size: 32px;
                }
                .product-wish .fa:hover{
                    color: red;
                }
                .fill-heart{
                    color: red !important;
                }
            </style>
            <div class="row">
                @if (Cart::instance('wishlist')->content()->count() > 0)
                <ul class="product-list grid-products equal-container">
                    @php
                        $witems = Cart::instance('wishlist')->content()->pluck('id');
                        $citems = Cart::instance('cart')->content()->pluck('id');
                    @endphp
                    @foreach (Cart::instance('wishlist')->content() as $item )
                        <li class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ">
                            <div class="product product-style-3 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="{{route('product.details',['slug' => $item->model->slug])}}" title="{{$item->model->name}}">
                                        <figure><img src="{{ asset('assets/images/products')}}/{{$item->model->image}}" alt="{{$item->model->name}}"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="{{route('product.details',['slug' => $item->model->slug])}}" class="product-name"><span>{{$item->model->name}}</span></a>
                                    <div class="wrap-price"><span class="product-price">{{$item->model->regular_price}}</span></div>
                                    @if ($citems->contains($item->model->id))
                                    <a href="{{route('product.cart')}}" class="btn add-to-cart">Added To Cart successfully</a>
                                    @else
                                        <a href="javascript:void(0);" class="btn add-to-cart" wire:click.prevent="store({{$item->model->id}},'{{$item->model->name}}',{{$item->model->regular_price}})">Add To Cart</a>
                                    @endif
                                    <div class="product-wish">
                                        <a href="javascript:void(0);" wire:click.prevent='removeFromWishlist({{$item->model->id}})'><i class="fa fa-heart fill-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                @else
                <h4>There is no Items In the Wishlist</h4>
                @endif
            </div>
        </div>
    </main>
</div>
