@extends('layouts.shop')
@section('content')

    <div class="page_content_wrap page_paddings_yes">
        <div class="content_wrap">
            <div class="row">



                <div class="row">
                    <article class="post_item post_item_single post_item_product">
                        <nav class="woocommerce-breadcrumb">
                            <a href="/">Home</a>&nbsp;/&nbsp;
                            <a href="#">Drinks</a>&nbsp;/&nbsp;{{$item->name}}
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
                                <h1 class="product_title entry-title">Americano</h1>
                                <div>
                                    <p class="price">
                                        <del>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>10.00
                                            </span>
                                        </del>
                                        <ins>
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">$</span>7.00
                                            </span>
                                        </ins>
                                    </p>
                                </div>
                                <div>
                                    <p>Maecenas et nunc augue. Duis convallis nulla augue, vel pretium quam mattis nec. Pellentesque dapibus faucibus lacus quis feugiat.</p>
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
                                        <a href="#" rel="tag">Drinks</a>
                                    </span>
                                    <span class="product_id">Product ID:
                                        <span>140</span>
                                    </span>
                                </div>
                            </div>
                            <div class="woocommerce-tabs wc-tabs-wrapper">
                                <ul class="tabs wc-tabs">
                                    <li class="description_tab active">
                                        <a href="#tab-description">Description</a>
                                    </li>
                                    <li class="reviews_tab">
                                        <a href="#tab-reviews">Reviews (0)</a>
                                    </li>
                                </ul>
                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" style="display: block;">
                                    <h2>Product Description</h2>
                                    <p>
                                        Suspendisse in nulla lacinia, auctor ligula quis, ultrices eros. Maecenas iaculis sit amet tortor ut cursus. Etiam tempor libero a tristique hendrerit.
                                        Proin rutrum dolor at nibh volutpat dictum. Fusce sem justo, congue fermentum gravida in, rhoncus in ex.
                                    </p>
                                    <p>
                                        Maecenas in tempus lorem. Integer pretium tortor quis arcu convallis, non efficitur odio porta. Donec auctor molestie rutrum.
                                        In dolor est, aliquet ut turpis varius, luctus sollicitudin arcu. Nam nec lacinia magna. Fusce placerat est blandit dui mollis convallis eget eu quam.
                                        Sed quis ligula vitae dui condimentum ultrices nec in sapien.
                                    </p>
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
                                                        <p class="stars"><span><a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a></span></p><select name="rating" id="rating" aria-required="true" required="" style="display: none;">
                                                            <option value="">Rate…</option>
                                                            <option value="5">Perfect</option>
                                                            <option value="4">Good</option>
                                                            <option value="3">Average</option>
                                                            <option value="2">Not that bad</option>
                                                            <option value="1">Very Poor</option>
                                                        </select>
                                                        </p>
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
                                <ul class="products">
                                    <li class="product has-post-thumbnail column-1_3 first">
                                        <a href="single-product.html" class="woocommerce-LoopProduct-link"> </a>
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
                                                        <span class="woocommerce-Price-currencySymbol">$</span>4.00
                                                    </span>
                                                </span>
                                                <a href="#"></a>
                                                <a rel="nofollow" href="#" data-quantity="1" data-product_id="139" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>


            </div>
        </div>
    </div>
@endsection
