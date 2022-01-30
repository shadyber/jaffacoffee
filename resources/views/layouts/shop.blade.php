<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">

    <link rel="icon" type="image/x-icon" href="/images/favicon.png" />
    <title>JafaCoffee  &#8211; @yield('title')</title>
    <link rel="alternate" type="application/rss+xml" title="Hot Coffee &raquo;@yield('title')" href="/item/" />
    <meta property="og:image" content="@yield('image')" />

    <link rel='stylesheet' href='/js/vendor/magnific/magnific-popup.css' type='text/css' media='all' />
    <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Grand+Hotel|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i|Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=latin-ext" type='text/css' media='all' >
    <link rel='stylesheet' href='/js/vendor/prettyPhoto/prettyPhoto.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/js/vendor/woo/woocommerce-layout.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/js/vendor/woo/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' href='/js/vendor/woo/woocommerce.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/css/fontello/css/fontello.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/css/core.animation.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/css/shortcodes.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/js/vendor/woo/plugin.woocommerce.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/css/skin.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/css/doc-style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/css/responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/css/skin.responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/css/custom.css' type='text/css' media='all' />
</head>

<body id="app" class="single single-product woocommerce woocommerce-page body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_show sidebar_right sidebar_outer_hide preloader vc_responsive">
<div id="page_preloader"></div>
<a id="toc_home" class="sc_anchor" title="Home" data-description="&lt;i&gt;Return to Home&lt;/i&gt; - &lt;br&gt;navigate to home page of the site" data-icon="icon-home" data-url="index.html" data-separator="yes"></a>
<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>

<div class="body_wrap">

    <div class="page_wrap">
        <div class="top_panel_fixed_wrap"></div>
      @include('inc.header')

        <div class="top_panel_title top_panel_style_3 title_present breadcrumbs_present scheme_original">
            <div class="top_panel_title_inner top_panel_inner_style_3 title_present_inner breadcrumbs_present_inner breadcrumbs_1">
                <div class="content_wrap">
                    <h1 class="page_title">@yield('title')</h1>
                    <div class="breadcrumbs">
                        <a class="breadcrumbs_item home" href="/">Home</a>
                        <span class="breadcrumbs_delimiter"></span>
                        <a class="breadcrumbs_item all" href="/item">Shop</a>
                        <span class="breadcrumbs_delimiter"></span>
                        <a class="breadcrumbs_item cat_post" href="#">Category</a>
                        <span class="breadcrumbs_delimiter"></span>
                        <span class="breadcrumbs_item current">@yield('sub_title')</span>
                    </div>
                </div>
            </div>
        </div>

       @yield('content')


    @include('inc.footer')
          
    </div>
</div>
<div id="popup_registration" class="popup_wrap popup_registration bg_tint_light">
    <a href="#" class="popup_close"></a>
    <div class="form_wrap">
        <form name="registration_form" method="post" class="popup_form registration_form">
            <input type="hidden" name="redirect_to" value="#" />
            <div class="form_left">
                <div class="popup_form_field login_field iconed_field icon-user">
                    <input type="text" id="registration_username" name="registration_username" value="" placeholder="User name (login)">
                </div>
                <div class="popup_form_field email_field iconed_field icon-mail">
                    <input type="text" id="registration_email" name="registration_email" value="" placeholder="E-mail">
                </div>
                <div class="popup_form_field agree_field">
                    <input type="checkbox" value="agree" id="registration_agree" name="registration_agree">
                    <label for="registration_agree">I agree with</label>
                    <a href="#">Terms &amp; Conditions</a>
                </div>
                <div class="popup_form_field submit_field">
                    <input type="submit" class="submit_button" value="Sign Up">
                </div>
            </div>
            <div class="form_right">
                <div class="popup_form_field password_field iconed_field icon-lock">
                    <input type="password" id="registration_pwd" name="registration_pwd" value="" placeholder="Password">
                </div>
                <div class="popup_form_field password_field iconed_field icon-lock">
                    <input type="password" id="registration_pwd2" name="registration_pwd2" value="" placeholder="Confirm Password">
                </div>
                <div class="popup_form_field description_field">Minimum 6 characters</div>
            </div>
        </form>
        <div class="result message_block"></div>
    </div>
</div>
<div id="popup_login" class="popup_wrap popup_login bg_tint_light">
    <a href="#" class="popup_close"></a>
    <div class="form_wrap">
        <div class="form_left">
            <form action="#" method="post" name="login_form" class="popup_form login_form">
                <input type="hidden" name="redirect_to" value="#">
                <div class="popup_form_field login_field iconed_field icon-user">
                    <input type="text" id="log" name="log" value="" placeholder="Login or Email">
                </div>
                <div class="popup_form_field password_field iconed_field icon-lock">
                    <input type="password" id="password" name="pwd" value="" placeholder="Password">
                </div>
                <div class="popup_form_field remember_field">
                    <a href="#" class="forgot_password">Forgot password?</a>
                    <input type="checkbox" value="forever" id="rememberme" name="rememberme">
                    <label for="rememberme">Remember me</label>
                </div>
                <div class="popup_form_field submit_field">
                    <input type="submit" class="submit_button" value="Login">
                </div>
            </form>
        </div>
        <div class="form_right">
            <div class="login_socials_title">You can login using your social profile</div>
            <div class="login_socials_list">
                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_facebook">
                            <span class="icon-facebook"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_twitter">
                            <span class="icon-twitter"></span>
                        </a>
                    </div>
                    <div class="sc_socials_item">
                        <a href="#" target="_blank" class="social_icons social_gplus">
                            <span class="icon-gplus"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="login_socials_problem">
                <a href="#">Problem with login?</a>
            </div>
            <div class="result message_block"></div>
        </div>
    </div>
</div>

<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
<div class="custom_html_section"></div>

<script type='text/javascript' src='/js/vendor/jquery/jquery.js'></script>
<script type='text/javascript' src='/js/vendor/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='/js/custom/custom.js'></script>
<script type='text/javascript' src='/js/vendor/woo/add-to-cart.min.js'></script>
<script type='text/javascript' src='/js/vendor/woo/woocommerce-add-to-cart.js'></script>
<script type='text/javascript' src='/js/vendor/modernizr.min.js'></script>
<script type='text/javascript' src='/js/vendor/magnific/jquery.magnific-popup.min.js'></script>
<script type='text/javascript' src='/js/vendor/ui/core.min.js'></script>
<script type='text/javascript' src='/js/vendor/ui/datepicker.min.js'></script>
<script type='text/javascript' src='/js/vendor/prettyPhoto/jquery.prettyPhoto.min.js'></script>
<script type='text/javascript' src='/js/vendor/prettyPhoto/jquery.prettyPhoto.init.min.js'></script>
<script type='text/javascript' src='/js/vendor/woo/single-product.min.js'></script>
<script type='text/javascript' src='/js/vendor/woo/jquery.blockUI.min.js'></script>
<script type='text/javascript' src='/js/vendor/woo/woocommerce.min.js'></script>
<script type='text/javascript' src='/js/vendor/woo/jquery.cookie.min.js'></script>
<script type='text/javascript' src='/js/vendor/woo/cart-fragments.min.js'></script>
<script type='text/javascript' src='/js/vendor/superfish.js'></script>
<script type='text/javascript' src='/js/custom/jquery.slidemenu.js'></script>
<script type='text/javascript' src='/js/custom/core.reviews.js'></script>
<script type='text/javascript' src='/js/custom/core.utils.js'></script>
<script type='text/javascript' src='/js/custom/core.init.js'></script>
<script type='text/javascript' src='/js/custom/init.js'></script>
</body>

</html>
