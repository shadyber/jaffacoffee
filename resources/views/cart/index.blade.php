@extends('layouts.app')
@section('title','Cart')
@section('sub_title','My Cart')
@section('content')
    <div class="shop-cart padding-tb">
        <div class="container">
            <div class="section-wrapper mb-15">
                <div class="cart-top">
                    <table>
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Models\Cart::myCart() as $cart)
                            <tr>
                                <td class="product-item">
                                    <div class="p-thumb">
                                        <a href="#"><img src="{{$cart['thumb']}}" alt="{{$cart['name']}}"></a>
                                    </div>
                                    <div class="p-content">
                                        <a href="/item/{{$cart['slug']}}">{{$cart['name']}}</a>
                                    </div>
                                </td>
                                <td>${{$cart['price']}}</td>
                                <td>
                                    <div class="cart-plus-minus"><div class="dec qtybutton">-</div>
                                        <div class="dec qtybutton">-</div>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="{{$cart['quantity']}}">
                                        <div class="inc qtybutton">+</div>
                                        <div class="inc qtybutton">+</div></div>
                                </td>
                                <td>$ {{$cart['price'] * $cart['quantity']}}</td>
                                <td>
                                    <a href="#"><img src="/assets/images/del.png" alt="{{$cart['name']}}"></a>
                                </td>
                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                </div>
                <div class="cart-bottom">
                    <div class="cart-checkout-box">
                        <form action="/" class="coupon">
                            <input type="text" name="coupon" placeholder="Coupon Code..." class="cart-page-input-text">
                            <input type="submit" value="Apply Coupon">
                        </form>
                        <form action="/" class="cart-checkout">
                            <input type="submit" value="Update Cart">
                            <input type="submit" value="Proceed to Checkout">
                        </form>
                    </div>
                    <div class="shiping-box">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="calculate-shiping w-100">
                                    <h4>Calculate Shipping</h4>
                                    <div class="outline-select">
                                        <select>
                                            <option value="volvo">United Kingdom (UK)</option>
                                            <option value="saab">Bangladesh</option>
                                            <option value="saab">Pakisthan</option>
                                            <option value="saab">India</option>
                                            <option value="saab">Nepal</option>
                                        </select>
                                        <span class="select-icon"><i class="icofont-caret-down"></i></span>
                                    </div>
                                    <div class="outline-select shipping-select">
                                        <select>
                                            <option value="volvo">State/Country</option>
                                            <option value="saab">Dhaka</option>
                                            <option value="saab">Benkok</option>
                                            <option value="saab">Kolkata</option>
                                            <option value="saab">Kapasia</option>
                                        </select>
                                        <span class="select-icon"><i class="icofont-caret-down"></i></span>
                                    </div>
                                    <input type="text" name="coupon" placeholder="Postcode/ZIP" class="cart-page-input-text">
                                    <button type="submit" class="lab-btn"><span>Update Total</span></button>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="cart-overview">
                                    <h4>Cart Totals</h4>
                                    <ul>
                                        <li>
                                            <span class="pull-left">Cart Subtotal</span>
                                            <p class="pull-right">$ 0.00</p>
                                        </li>
                                        <li>
                                            <span class="pull-left">Shipping and Handling</span>
                                            <p class="pull-right">Free Shipping</p>
                                        </li>
                                        <li>
                                            <span class="pull-left">Order Total</span>
                                            <p class="pull-right">$ 2940.00</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
