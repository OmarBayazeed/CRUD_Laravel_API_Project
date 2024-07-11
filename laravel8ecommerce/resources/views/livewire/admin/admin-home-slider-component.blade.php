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
                                All Sliders:
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{route('admin.addhomeslider')}}" class="btn btn-success">Add slider</a>
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
                                        <th>Title</th>
                                        <th>Subtitle</th>
                                        <th>Price</th>
                                        <th>Link</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders as $slider )
                                        <tr>
                                            <td>
                                                {{$slider->id}}
                                            </td>
                                            <td><img src="{{ asset('assets/images/sliders')}}/{{$slider->image}}" alt="{{$slider->name}}" width="60"></td>
                                            <td>{{$slider->title}}</td>
                                            <td>{{$slider->subtitle}}</td>
                                            <td>{{$slider->price}}</td>
                                            <td>{{$slider->link}}</td>
                                            <td>{{$slider->status == 1 ? 'Active' : 'Inactiv'}}</td>
                                            <td>{{$slider->created_at}}</td>
                                            <td>
                                                <a href="{{route('admin.edithomeslider',['slider_id' => $slider->id])}}" ><i class="fa fa-edit fa-2x"></i></a>
                                                <a href="" onclick="confirm('Are You Sure?') || event.stopImmediatePropagation()" style="margin-left: 10px" wire:click.prevent='deleteSlider({{$slider->id}})'><i class="fa fa-times fa-2x text-danger"></i></a>
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
