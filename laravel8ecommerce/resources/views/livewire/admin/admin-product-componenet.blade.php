<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All The Products:
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{route('admin.addproduct')}}" class="btn btn-success">Add Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Sale Price</th>
                                        <th>Category</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product )
                                        <tr>
                                            <td>
                                                {{$product->id}}
                                            </td>

                                            <td><a href="{{route('product.details',['slug' => $product->slug])}}" title="{{$product->name}}"><figure><img src="{{ asset('assets/images/products')}}/{{$product->image}}" alt="{{$product->name}}" width="60"></figure></a></td>
                                            <td><a href="{{route('product.details',['slug' => $product->slug])}}" class="product-name"><span>{{$product->name}}</span></a></td>
                                            <td>{{$product->stock_status}}</td>
                                            <td>{{$product->regular_price}}</td>
                                            <td>{{$product->sale_price}}</td>
                                            <td>{{$product->category->name}}</td>
                                            <td>{{$product->created_at}}</td>
                                            <td>
                                                <a href="{{route('admin.editproduct',['product_slug' => $product->slug])}}" ><i class="fa fa-edit fa-2x"></i></a>
                                                <a href="" onclick="confirm('Are You Sure?') || event.stopImmediatePropagation()" style="margin-left: 10px" wire:click.prevent='deleteProduct({{$product->id}})'><i class="fa fa-times fa-2x text-danger"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{$products->links('pagination::bootstrap-4')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
