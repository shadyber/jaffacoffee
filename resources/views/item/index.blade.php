@extends('layouts.shop')
@section('content')

        <div class="page_content_wrap page_paddings_yes">
          <div class="content_wrap">
            <div class="row">
                <div class="list_products shop_mode_thumbs">
                    <nav class="woocommerce-breadcrumb">
                        <a href="/">Home</a>&nbsp;/&nbsp;Shop
                    </nav>
                    <div class="mode_buttons">
                        <form action="#" method="post">
                            <a href="/item" class="woocommerce_thumbs icon-th" title="Show products as thumbs"></a>

                        </form>
                    </div>
                    <p class="woocommerce-result-count"> results</p>
                    <form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby">
                            <option value="menu_order" selected="selected">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                        <input type="hidden" name="q" value="#">
                    </form>
                    <ul class="products">
                        @foreach($items as $item)
                        <li class="product has-post-thumbnail column-1_3 {{$item->badge}}">
                            <a href="/item/{{$item->slug}}" class="woocommerce-LoopProduct-link"></a>
                            <div class="post_item_wrap">
                                <div class="post_featured">
                                    <div class="post_thumb">
                                        <a class="hover_icon hover_icon_link" href="/item/{{$item->slug}}">
                                            <span class="onsale">Sale!</span>
                                            <img src="{{$item->thumb}}" class="attachment-shop_catalog size-shop_catalog" alt="{{$item->name}}" title="{{$item->name}}">
                                        </a>
                                    </div>
                                </div>
                                <div class="post_content">
                                    <h3>
                                        <a href="/item/{{$item->slug}}">{{$item->name}}</a>
                                    </h3>
                                    <span class="price">
                                            <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>{{$item->price}}</span>
                                            </del>
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>{{$item->price}}
                                                </span>
                                            </ins>
                                        </span>
                                    <a href="#"></a>
                                    <button data-product_id="140" itemid="{{$item->id}}" qnt="1"  class="button product_type_simple add_to_cart_button add-to-cart">Add to cart</button>
                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                    <nav id="pagination" class="pagination_wrap pagination_pages">
                        <span class="pager_current active ">1</span>
                        <a href="#" class="">2</a>
                        <a href="#" class="pager_next"></a>
                        <a href="#" class="pager_last"></a>
                    </nav>
                </div>
            </div>
        </div>
        </div>
@endsection
