@extends('layouts.shop')
@section('title','Detail')
@section('sub_title',$item->name)
@section('content')
    <div class="page_content_wrap page_paddings_yes">
        <div class="content_wrap">
            <div class="content">
                <article class="post_item post_item_single post_item_product">
                    <nav class="woocommerce-breadcrumb">
                        <a href="/">Home</a>&nbsp;/&nbsp;
                        <a href="#"> C</a>&nbsp;/&nbsp;{{$item->name}}
                    </nav>
                    <div id="product-140" class="post-140 product has-post-thumbnail first sale">
                        <span class="onsale">Sale!</span>
                        <div class="images">
                            <a href="/images/2000x2000.png" class="woocommerce-main-image zoom hover_icon hover_icon_view" title="" data-rel="prettyPhoto[product-gallery]" rel="magnific">
                                <img src="/images/2000x2000.png" class="attachment-shop_single size-shop_single" alt="americano" title="americano">
                            </a>
                            <div class="thumbnails columns-4">
                                <a href="/images/2000x2000.png" class="zoom first" title="" data-rel="prettyPhoto[product-gallery]" rel="magnific">
                                    <img src="/images/2000x2000.png" class="attachment-shop_thumbnail size-shop_thumbnail" alt="croissant" title="croissant"></a>
                                <a href="/images/2000x2000.png" class="zoom" title="" data-rel="prettyPhoto[product-gallery]" rel="magnific">
                                    <img src="/images/2000x2000.png" class="attachment-shop_thumbnail size-shop_thumbnail" alt="panini" title="panini">
                                </a>
                            </div>
                        </div>
                        <div class="summary entry-summary">
                            <h1 class="product_title entry-title">{{$item->name}}</h1>
                            <div>
                                <p class="price">
                                    <del>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>{{$item->price}}
                                            </span>
                                    </del>
                                    <ins>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>{{$item->price}}
                                            </span>
                                    </ins>
                                </p>
                            </div>
                            <div>
                                <p>
                                    {{$item->detail}}
                                </p>
                            </div>
                            <form class="cart" method="post" enctype="multipart/form-data">
                                <div class="quantity">
                                    <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                    <span class="q_inc"></span><span class="q_dec"></span></div>
                                <input type="hidden" name="add-to-cart" value="140">
                                <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>
                            </form>
                            <div class="product_meta">
                                    <span class="posted_in">Category:
                                        <a href="#" rel="tag">reoast type</a>
                                    </span>
                                <span class="product_id">Product ID:
                                        <span>Item-{{$item->id}}</span>
                                    </span>
                            </div>
                        </div>
                        <div class="woocommerce-tabs wc-tabs-wrapper">
                            <ul class="tabs wc-tabs">
                                <li class="description_tab active">
                                    <a href="#tab-description">Description</a>
                                </li>
                                <li class="reviews_tab">
                                    <a href="#tab-reviews">Reviews ({{count($item->Reviews)}})</a>
                                </li>
                            </ul>
                            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" style="display: block;">
                                <h2>Product Description</h2>
                                {{$item->detail}}
                            </div>
                            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" style="display: none;">
                                <div id="reviews" class="woocommerce-Reviews">
                                    <div id="comments">
                                        <h2 class="woocommerce-Reviews-title">Reviews</h2>
                                        <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                    </div>
                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">
                                                <h3 id="reply-title" class="comment-reply-title">Be the first to review “Americano”
                                                    <small>
                                                        <a rel="nofollow" id="cancel-comment-reply-link" href="#respond">Cancel reply</a>
                                                    </small>
                                                </h3>
                                                <form action="#" method="post" id="commentform" class="comment-form">
                                                    <p class="comment-notes">
                                                        <span id="email-notes">Your email address will not be published.</span> Required fields are marked
                                                        <span class="required">*</span>
                                                    </p>
                                                    <p class="comment-form-rating">
                                                        <label for="rating">Your Rating</label>

                                                    <p class="comment-form-comment">
                                                        <label for="comment">Your Review
                                                            <span class="required">*</span>
                                                        </label>
                                                        <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required=""></textarea>
                                                    </p>
                                                    <p class="comment-form-author">
                                                        <label for="author">Name
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input id="author" name="author" type="text" value="" size="30" aria-required="true" required="">
                                                    </p>
                                                    <p class="comment-form-email">
                                                        <label for="email">Email
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input id="email" name="email" type="email" value="" size="30" aria-required="true" required="">
                                                    </p>
                                                    <p class="form-submit">
                                                        <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                                        <input type="hidden" name="comment_post_ID" value="140" id="comment_post_ID">
                                                        <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                                    </p>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="related products">
                            <h2>Related Products</h2>
                            <ul class="products row">
                                @foreach(\App\Models\Item::lastN(3) as $ri)
                                    <li class="product has-post-thumbnail column-1_3">
                                        <a href="/item/{{$ri->slug}}" class="woocommerce-LoopProduct-link"> </a>
                                        <div class="post_item_wrap">
                                            <div class="post_featured">
                                                <div class="post_thumb">
                                                    <a class="hover_icon hover_icon_link" href="={{$ri->photo}}">
                                                        <img src="{{$ri->thumb}}" class="attachment-shop_catalog size-shop_catalog" alt="{{$ri->name}}" title="{{$ri->name}}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post_content">
                                                <h3>
                                                    <a href="/item/{{$ri->slug}}">{{$ri->name}}</a>
                                                </h3>
                                                <span class="price">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>{{$ri->price}}
                                                    </span>
                                                </span>
                                                <a href="#"></a>
                                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="139" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
            <div class="sidebar widget_area scheme_original" role="complementary">
                <div class="sidebar_inner widget_area_inner">
                    <aside class="widget woocommerce widget_product_categories">
                        <h5 class="widget_title">Categories</h5>

                    </aside>
                    <aside class="widget woocommerce widget_top_rated_products">
                        <h5 class="widget_title">Top Rated Products</h5>
                        <ul class="product_list_widget">
                            <li>
                                <a href="single-product.html" title="Smooth Iced Coffee">
                                    <img src="/images/2000x2000.png" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" />
                                    <span class="product-title">Smooth Iced Coffee</span>
                                </a>
                                <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">&#36;</span>15.00</span>
                            </li>

                        </ul>
                    </aside>

                </div>
            </div>
        </div>
    </div>
@endsection
