@extends('layouts.app')

@section('title','My Order Details')

@section('content')

  <div class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shadow bg-white p-3">
                        <h4 class="text-dark">
                            <i class="fa fa-shopping-cart text-dark"></i>My Order Details
                            <a href="{{ url('orders')}}" class="btn btn-danger btn-sm float-end" style="border-radius: 28px">Back</a>
                            <!-- <a href="{{ url('admin/invoice/'.$order->id.'/generate') }}" class="btn btn-primary btn-sm float-end mx-1" style="border-radius: 28px">
                               Download Invoice
                            </a> -->
                        </h4>
                        <hr>

                         <div class="row">
                            <div class="col-md-6">
                                <h5>Order Details<h5>
                                <hr>
                                <h6>Order Id: {{ $order->id}}</h6>
                                <h6>Tracking Id/No.: {{ $order->tracking_no }}</h6>
                                <h6>Order Created Date: {{ $order->created_at->format('d-m-Y h:i A')}}</h6>
                                <h6>Payment Mode: {{ $order->payment_mode }}</h6>
                                <h6 class="border p-2 text-success">
                                    Order Status Message: <span class="text-uppercase">{{ $order->status_message }}</span>
                                </h6>
                            </div>
                            <div class="col-md-6">
                                <h5>User Details<h5>
                                <hr>
                                <h6>Full Name: {{ $order->fullname }}</h6>
                                <h6>Email Id: {{ $order->email }}</h6>
                                <h6>Phone: {{ $order->phone }}</h6>
                                <h6>Address: {{ $order->address }}</h6>
                                <h6>Pin code: {{ $order->pincode }}</h6>
                            </div>
                         </div>

                          <br/>
                          <h5>Order Items</h5>
                          <hr>
                          <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Item ID</th>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $totalPrice = 0;
                                @endphp
                                @foreach ($order->orderItems as $orderItem)
                                <tr>
                                    <td width="10%">{{ $orderItem->id }}</td>
                                    <td width="10%">
                                    @if ($orderItem->product->productImages)
                                                    <img src="{{ asset($orderItem->product->productImages[0]->image) }}" style="width: 50px; height: 50px" alt="">
                                                @else
                                                    <img src="" style="width: 50px; height: 50px" alt="">
                                                @endif
                                                </td>
                                                <td>
                                                {{ $orderItem->product->name }}
                                                @if ($orderItem->productColor)
                                                    @if ($orderItem->productColor->color)
                                                    <span>- Color: {{ $orderItem->productColor->color->name }}</span>
                                                    @endif
                                                    @endif
                                                </td>
                                                <td width="10%">Rs{{ $orderItem->price }}</td>
                                                <td width="10%">{{ $orderItem->quantity }}</td>
                                                <td width="10%" class="fw-bold">Rs{{ $orderItem->quantity * $orderItem->price }}</td>
                                                @php
                                                    $totalPrice += $orderItem->quantity * $orderItem->price;
                                                @endphp
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="5" class="fw-bold">Total Amount:</td>
                                                <td colspan="1" class="fw-bold">Rs{{ $totalPrice }}</td>
                                            </tr>
                                        </tbody>
                                    </table>    
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            @endsection