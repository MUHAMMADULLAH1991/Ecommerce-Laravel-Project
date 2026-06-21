@extends('customer.master')

@section('content')
    <div class="body flex-grow-1">
        <div class="container-lg px-4">
            <div class="card-body">
                <div class="example">
                    <div class="card mb-4">
                        <div class="tab-content rounded-bottom">
                            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1002">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Invoice</th>
                                            <th scope="col">Customer Info</th>
                                            <th scope="col">Product Info</th>
                                            <th scope="col">Delivery Charge</th>
                                            <th scope="col">Total Price</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>{{ $order->invoice_number }}</td>
                                                <td>
                                                    Name: {{ $order->name }} <br>
                                                    phone:{{ $order->phone }}
                                                    Address: {{ $order->address }}
                                                </td>
                                                <td>
                                                   @foreach ($order->orderDetails as $detail)
                                                        <img src="{{$detail->product->image}}" height="100" width="100">
                                                        {{$detail->qty}}x{{$detail->product->name}}<br>
                                                        Color: {{$detail->color}}<br>
                                                        Size: {{$detail->size}}<br>
                                                   @endforeach
                                                </td>
                                                <td>{{ $order->charge }}</td>
                                                <td>{{ $order->price }}</td>
                                                <td>
                                                    <span class="badge badge-warning"
                                                        style="color:rgb(5, 127, 5)">{{ $order->status }}</span>
                                                </td>
                                                <td>
                                                    @if ($order->status == 'pending' || $order->status == 'confirmed')
                                                        <a href="{{url('/customer/order-cancel/'.$order->id)}}" class="btn btn-danger">Cancel</a>
                                                    @else
                                                        <a class="btn btn-danger">{{ $order->status }}</a>
                                                    @endif
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
@endsection
