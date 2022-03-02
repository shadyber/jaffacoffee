@extends('layouts.app')
@section('title','Cart')
@section('sub_title','My Cart')
@section('content')
    <div class="shop-cart padding-tb">
        <div class="container">
            <div class="section-wrapper mb-15">
                <div class="cart-top">
                    <div class="wpb_wrapper">
                        <div class="sc_section margin_bottom_medium aligncenter">
                            <div class="sc_section_inner">
                                <div class="sc_table container" >
                                    <table>
                                        <tbody class="bg-green">
                                        <tr>
                                            <td>Item</td>
                                            <td>Item</td>
                                            <td>Price X Qty</td>
                                            <td>Total</td>
                                        </tr>
                                        @foreach(\App\Models\Cart::myCart() as $cart)
                                        <tr>
                                            <td><img src="{{$cart['thumb']}}" alt="{{$cart['name']}}" alt="{{$cart['name']}}" width="32px"></td>
                                            <td>{{$cart['name']}}</td>
                                            <td>${{$cart['price']}} * {{ $cart['quantity']}}</td>

                                            <td>${{$cart['price'] * $cart['quantity']}}</td>
                                        </tr>
                                        @endforeach

                                        </tbody>
                                    </table>
                                    <p>
                                    </p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-bottom">
                    <div class="cart-checkout-box">
                      <div class=" col-md-4">
                      <div class="row">
                          <div class="col-md-4"> </div>
                          <div class="col-md-4 offset-4">

                              <a href="/checkout" class="sc_button sc_button_square sc_button_style_border_1 sc_button_size_large margin_top_medium margin_bottom_small"> Checkout</a>
                          </div>
                      </div>

                      </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
