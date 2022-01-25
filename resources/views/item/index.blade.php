@extends('layouts.app')
@section('title','Shop')
@section('sub_title','All Items')
@section('content')

    <div class="page_content_wrap page_paddings_yes">
        <div class="content_wrap">
            <div class="content">
                <div class="list_products shop_mode_thumbs">
                    <nav class="woocommerce-breadcrumb">
                        <a href="index.html">Home</a>&nbsp;/&nbsp;Shop
                    </nav>
                    <div class="mode_buttons">
                        <form action="#" method="post">
                            <a href="shop.html" class="woocommerce_thumbs icon-th" title="Show products as thumbs"></a>
                            <a href="shop-list.html" class="woocommerce_list icon-th-list" title="Show products as list"></a>
                        </form>
                    </div>
                    <p class="woocommerce-result-count"> Showing 1–4 of 8 results</p>
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
                        <li class="product has-post-thumbnail column-1_2 first sale">
                            <a href="single-product.html" class="woocommerce-LoopProduct-link"></a>
                            <div class="post_item_wrap">
                                <div class="post_featured">
                                    <div class="post_thumb">
                                        <a class="hover_icon hover_icon_link" href="single-product.html">
                                            <span class="onsale">Sale!</span>
                                            <img src="images/2000x2000.png" class="attachment-shop_catalog size-shop_catalog" alt="americano" title="americano">
                                        </a>
                                    </div>
                                </div>
                                <div class="post_content">
                                    <h3>
                                        <a href="single-product.html">Americano</a>
                                    </h3>
                                    <span class="price">
                                            <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>10.00</span>
                                            </del>
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>7.00
                                                </span>
                                            </ins>
                                        </span>
                                    <a href="#"></a>
                                    <a rel="nofollow" href="#" data-quantity="1" data-product_id="140" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                </div>
                            </div>
                        </li>
                        <li class="product has-post-thumbnail column-1_2 last">
                            <a href="single-product.html" class="woocommerce-LoopProduct-link"></a>
                            <div class="post_item_wrap">
                                <div class="post_featured">
                                    <div class="post_thumb">
                                        <a class="hover_icon hover_icon_link" href="single-product.html">
                                            <img src="images/2000x2000.png" class="attachment-shop_catalog size-shop_catalog" alt="cappuccino" title="cappuccino">
                                        </a>
                                    </div>
                                </div>
                                <div class="post_content">
                                    <h3>
                                        <a href="single-product.html">Cappuccino</a>
                                    </h3>
                                    <span class="price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>4.00</span>
                                            </span>
                                    <a href="#"></a>
                                    <a rel="nofollow" href="#" data-quantity="1" data-product_id="139" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                </div>
                            </div>
                        </li>
                        <li class="product has-post-thumbnail column-1_2 first sale">
                            <a href="single-product.html" class="woocommerce-LoopProduct-link"></a>
                            <div class="post_item_wrap">
                                <div class="post_featured">
                                    <div class="post_thumb">
                                        <a class="hover_icon hover_icon_link" href="single-product.html">

                                            <span class="onsale">Sale!</span>
                                            <img src="images/2000x2000.png" class="attachment-shop_catalog size-shop_catalog" alt="waffles" title="waffles">
                                        </a>
                                    </div>
                                </div>
                                <div class="post_content">
                                    <h3>
                                        <a href="single-product.html">Lemon Waffles</a>
                                    </h3>
                                    <span class="price">
                                            <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>27.00
                                                </span>
                                            </del>
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>18.00
                                                </span>
                                            </ins>
                                        </span>
                                    <a href="#"></a>
                                    <a rel="nofollow" href="#" data-quantity="1" data-product_id="138" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                </div>
                            </div>
                        </li>
                        <li class="product has-post-thumbnail column-1_2 last">
                            <a href="single-product.html" class="woocommerce-LoopProduct-link"></a>
                            <div class="post_item_wrap">
                                <div class="post_featured">
                                    <div class="post_thumb">
                                        <a class="hover_icon hover_icon_link" href="single-product.html">
                                            <img src="images/2000x2000.png" class="attachment-shop_catalog size-shop_catalog" alt="panini" title="panini">
                                        </a>
                                    </div>
                                </div>
                                <div class="post_content">
                                    <h3>
                                        <a href="single-product.html">Mac&amp;Cheese Panini</a>
                                    </h3>
                                    <span class="price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>14.00
                                            </span>
                                        </span>
                                    <a href="#"></a>
                                    <a rel="nofollow" href="#" data-quantity="1" data-product_id="137" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <nav id="pagination" class="pagination_wrap pagination_pages">
                        <span class="pager_current active ">1</span>
                        <a href="#" class="">2</a>
                        <a href="#" class="pager_next"></a>
                        <a href="#" class="pager_last"></a>
                    </nav>
                </div>
            </div>
            <div class="sidebar widget_area scheme_original" role="complementary">
                <div class="sidebar_inner widget_area_inner">
                    <aside class="widget woocommerce widget_product_categories">
                        <h5 class="widget_title">Categories</h5>
                        <ul class="product-categories">
                            <li class="cat-item">
                                <a href="#">Desserts</a>
                            </li>
                            <li class="cat-item">
                                <a href="#">Drinks</a>
                            </li>
                            <li class="cat-item">
                                <a href="#">Events</a>
                            </li>
                            <li class="cat-item">
                                <a href="#">Recipes</a>
                            </li>
                            <li class="cat-item">
                                <a href="#">Restaurants</a>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget woocommerce widget_top_rated_products">
                        <h5 class="widget_title">Top Rated Products</h5>
                        <ul class="product_list_widget">
                            <li>
                                <a href="single-product.html" title="Smooth Iced Coffee">
                                    <img src="images/2000x2000.png" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
                                    <span class="product-title">Smooth Iced Coffee</span>
                                </a>
                                <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>15.00</span>
                            </li>
                            <li>
                                <a href="single-product.html" title="Mac&amp;Cheese Panini">
                                    <img src="images/2000x2000.png" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
                                    <span class="product-title">Mac&amp;Cheese Panini</span>
                                </a>
                                <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>14.00</span>
                            </li>
                            <li>
                                <a href="single-product.html" title="Americano">
                                    <img src="images/2000x2000.png" class="attachment-shop_thumbnail size-shop_thumbnail" alt="">
                                    <span class="product-title">Americano</span>
                                </a>
                                <del>
                                        <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>10.00</span>
                                </del>
                                <ins>
                                        <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>7.00</span>
                                </ins>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget widget_socials">
                        <h5 class="widget_title">follow us</h5>
                        <div class="widget_inner">
                            <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_small">
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_twitter">
                                        <span class="icon-twitter"></span>
                                    </a>
                                </div>
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_facebook">
                                        <span class="icon-facebook"></span>
                                    </a>
                                </div>
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_gplus">
                                        <span class="icon-gplus"></span>
                                    </a>
                                </div>
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_linkedin">
                                        <span class="icon-linkedin"></span>
                                    </a>
                                </div>
                                <div class="sc_socials_item">
                                    <a href="#" target="_blank" class="social_icons social_skype">
                                        <span class="icon-skype"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget widget_text">
                        <h5 class="widget_title">newsletter</h5>
                        <div class="textwidget">
                            <form class="mc4wp-form mc4wp-form-422" method="post" data-id="422" data-name="">
                                <div class="mc4wp-form-fields">
                                    <p>
                                        <label>Enter your email below and be the first to know news from us!</label>
                                        <input type="email" name="EMAIL" placeholder="E-mail address" required="">
                                    </p>
                                    <p>
                                        <input type="submit" value="Subscribe">
                                    </p>
                                    <div class="hideblock">
                                        <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off">
                                    </div>
                                    <input type="hidden" name="_mc4wp_timestamp" value="1497855810">
                                    <input type="hidden" name="_mc4wp_form_id" value="422">
                                    <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1">
                                </div>
                                <div class="mc4wp-response"></div>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection
