<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <title>Jafa Coffee &#8211; Roasted Coffee From The Origion</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel='stylesheet' href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i|Grand+Hotel|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900|Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i|Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=latin-ext" type='text/css' media='all' >
    <link rel='stylesheet' href='/js/vendor/revslider/settings.css' type='text/css' media='all' />
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
    <link rel='stylesheet' href='/js/vendor/comp/comp.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/css/custom.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/css/core.messages.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/css/core.portfolio.css' type='text/css' media='all' />
</head>

<body class="home page body_filled article_style_stretch scheme_original top_panel_show top_panel_above sidebar_hide sidebar_outer_hide preloader vc_responsive" id="app">
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
                        <span class="breadcrumbs_item current">@yield('sub_title')</span>
                    </div>
                </div>
            </div>
        </div>

      @yield('content')
   @include('inc.footer')
    </div>

</div>
 

<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
<div class="custom_html_section"></div>

<script type='text/javascript' src='/js/vendor/jquery/jquery.js'></script>
<script type='text/javascript' src='/js/vendor/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='/js/custom/custom.js'></script>
<script type='text/javascript' src='/js/vendor/esg/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='/js/vendor/revslider/jquery.themepunch.revolution.min.js'></script>
<script type="text/javascript" src="/js/vendor/revslider/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="/js/vendor/revslider/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="/js/vendor/revslider/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="/js/vendor/revslider/extensions/revolution.extension.parallax.min.js"></script>
<script type='text/javascript' src='/js/vendor/modernizr.min.js'></script>
<script type='text/javascript' src='/js/vendor/ui/core.min.js'></script>
<script type='text/javascript' src='/js/vendor/superfish.js'></script>
<script type='text/javascript' src='/js/custom/jquery.slidemenu.js'></script>
<script type='text/javascript' src='/js/custom/core.utils.js'></script>
<script type='text/javascript' src='/js/custom/core.init.js'></script>
<script type='text/javascript' src='/js/custom/init.js'></script>
<script type='text/javascript' src='/js/custom/embed.min.js'></script>
<script type='text/javascript' src='/js/custom/shortcodes.js'></script>
<script type='text/javascript' src='/js/custom/core.messages.js'></script>
<script type='text/javascript' src='/js/vendor/comp/comp_front.min.js'></script>
<script type='text/javascript' src='/js/vendor/isotope.pkgd.min.js'></script>
<script type='text/javascript' src='/js/vendor/jquery.hoverdir.js'></script>

<script>
    var qnt=1;
    function getqnt(){
        qnt = document.getElementById("qtybutton").value;
    }
    function getquantity(){
        return qnt;
    }
    $( ".add-to-cart" ).click(function() {
        var itemid=$(this).attr("itemid");
        var cbtn=$(this);
        var itemqnt=$(this).attr('qnt')
        $.get("/multipleaddtocart/"+itemid+"/"+qnt, function(data){
            // Display the returned data in browser
            cbtn.animate({
                opacity: 0.25,
                left: "+=5000",
                top: "-=5000",
                height: "toggle"
            }, 50, function() {
                // Animation complete.
            });
            $('#cartCount').html(data);
        });
    });
</script>
@yield('js')
</body>

</html>
