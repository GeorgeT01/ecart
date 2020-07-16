@extends('layout')
@section('title', 'Cart')


@section('content')


{{-- @if(Session::has('cart'))

    <h3> Your Order</h3>

    <div class="table-responsive-sm">

        <table class="table table-hover table-bordered">

            <tbody>

                @foreach ($cart_items as $item)

                    <tr>

                    <th class="h4"> {{$item['product']['name']}} </th>

                    <td> x{{$item['qty']}} </td>

                    <td> {{ $item['price']}} {{config('app.currency')}}</td>

                    <td> <a href="{{url('cart/remove')}}/{{$item['product']['id']}} " class="btn btn-outline-danger btn-circle-sm btn-remove"> <i class="fa fa-times mb-1"></i> </a> </td>

                  </tr>

                @endforeach


            </tbody>

          </table>

        </div>

        <div class="row">

            <div class="col-md-6"></div>

            <div class="col-md-6">

                <a href="{{url('checkout')}}" class="btn btn-lg h4 w-100 btn-danger mt-5 shadow-sm">Checkout <i class="fas fa-arrow-circle-right"></i></a>

            </div>

        </div>


    @else

        <div class="text-center mt-5 mb-5">

            <br><img src="{{asset('images/emptycart.webp')}}" alt="empty_cart" class="img-fluid">

        </div>

    @endif --}}

    <cart-component currency="{{ config('app.currency') }}"></cart-component>

@endsection
