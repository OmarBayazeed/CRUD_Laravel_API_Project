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
                                All Coupons:
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{route('admin.addcoupon')}}" class="btn btn-success">Add coupon</a>
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
                                        <th>Coupon Code</th>
                                        <th>Coupon Type</th>
                                        <th>Coupon Value</th>
                                        <th>Cart Value</th>
                                        <th>Expiry Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($coupons as $coupon )
                                        <tr>
                                            <td>
                                                {{$coupon->id}}
                                            </td>
                                            <td>{{$coupon->code}}</td>
                                            <td>{{$coupon->type}}</td>
                                            @if ($coupon->type == 'fixed')
                                                <td>${{$coupon->value}}</td>
                                            @else
                                                <td>%{{$coupon->value}}</td>
                                            @endif
                                            <td>{{$coupon->cart_value}}</td>
                                            <td>{{$coupon->expiry_date}}</td>
                                            <td>
                                                <a href="{{route('admin.editcoupon',['coupon_id' => $coupon->id])}}" ><i class="fa fa-edit fa-2x"></i></a>
                                                <a href="" onclick="confirm('Are You Sure?') || event.stopImmediatePropagation()" style="margin-left: 10px" wire:click.prevent='deleteCoupon({{$coupon->id}})'><i class="fa fa-times fa-2x text-danger"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
