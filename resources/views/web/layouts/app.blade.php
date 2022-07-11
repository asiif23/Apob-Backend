<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scheme_original">

<head>
    <title>APOB &#8211; {{ $title }}</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="{{ asset('web/js/vendor/esg/settings.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Average|Droid+Serif:400,700|Libre+Baskerville:400,400i,700|Open+Sans:300,400,600,700,800|Oswald:300,400,700|Raleway:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('web/css/layout.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('web/js/vendor/revslider/settings.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('web/js/vendor/woo/woocommerce-layout.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('web/js/vendor/woo/woocommerce-smallscreen.css')}}" type="text/css" media="only screen and (max-width: 768px)" />
    <link rel="stylesheet" href="{{ asset('web/js/vendor/woo/woocommerce.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('web/css/fontello/css/fontello.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('web/css/style.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('web/css/core.animation.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('web/css/shortcodes.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('web/css/theme.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('web/js/vendor/woo/plugin.woocommerce.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('web/css/custom.css')}}" type="text/css" media="all" /> 
    <link rel="stylesheet" href="{{ asset('web/js/vendor/swiper/swiper.css')}}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('web/css/responsive.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('web/js/vendor/comp/comp.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('web/js/vendor/esg/lightbox.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/youtube.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('web/js/vendor/prettyPhoto/prettyPhoto.css')}}" type="text/css" media="all" />
    @if (request()->is('allPosts'))
        <link rel="stylesheet" href="{{ asset('artikel/css/bootstrap.min.css') }}" type="text/css" media="all" />
            <!-- ==== Google Font ==== -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7CPlayfair+Display:400,700">

        <!-- ==== Font Awesome ==== -->
        <link rel="stylesheet" href="{{ asset('artikel/css/font-awesome.min.css') }}">
        
        <!-- ==== Bootstrap Framework ==== -->
        <link rel="stylesheet" href="{{ asset('artikel/css/bootstrap.min.css') }}">
        
        <!-- ==== Owl Carousel Plugin ==== -->
        <link rel="stylesheet" href="{{ asset('artikel/css/owl.carousel.min.css') }}">
        
        <!-- ==== Magnific Popup Plugin ==== -->
        <link rel="stylesheet" href="{{ asset('artikel/css/magnific-popup.min.css') }}">
        
        <!-- ==== Main Stylesheet ==== -->
        <link rel="stylesheet" href="{{ asset('artikel/style.css') }}">
        
        <!-- ==== Responsive Stylesheet ==== -->
        <link rel="stylesheet" href="{{ asset('artikel/css/responsive-style.css') }}">
        
        <!-- ==== Color Scheme Stylesheet ==== -->
        <link rel="stylesheet" href="{{ asset('artikel/css/colors/color-1.css') }}" id="changeColorScheme">
        
        <!-- ==== Custom Stylesheet ==== -->
        <link rel="stylesheet" href="{{ asset('artikel/css/custom.css') }}">
    @endif


    <style>
        .plyr .plyr__control--overlaid {
          background: #fff;
          width: 71px;
          height: 71px;
          z-index: 20;
        }
        
        .plyr .plyr__control--overlaid svg {
          fill: #000;
          left: 0;
          right: 0;
          margin:0 auto;
        }
        .plyr__video-embed iframe {
          top: -50% !important;
          height: 200% !important;
        }
        </style>
        <style scoped>
        .button-trigger {
          width: 71px;
          height: 71px;
          cursor: pointer;
          @apply rounded-full;
        }
        </style>
</head>

<body class="page home3 body_style_wide body_filled article_style_stretch layout_single-standard template_single-standard scheme_original top_panel_show top_panel_above sidebar_hide sidebar_outer_hide vc_responsive">

<a id="toc_home" class="sc_anchor" title="Home" data-description="&lt;i&gt;Return to Home&lt;/i&gt; - &lt;br&gt;navigate to home page of the site" data-icon="icon-home" data-url="{{ url('/') }}" data-separator="yes"></a>
<a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-double-up" data-url="" data-separator="yes"></a>

<div class="body_wrap">
    <div class="page_wrap">
        <div class="top_panel_fixed_wrap"></div>
    @include('web.layouts.header')
    @yield('content')
        <footer class="footer_wrap widget_area scheme_original">
            <div class="footer_wrap_inner widget_area_inner">
                <div class="content_wrap">
                    <div class="columns_wrap">
                        <aside class="column-1_4 widget widget_socials">
                            <div class="widget_inner">
                                <div class="logo">
                                    <a href="{{ url('/') }}"><img src="{{ asset('web/images/logo.png') }}" class="logo_main" alt="" width="74" height="74"></a>
                                </div>
                            </div>
                        </aside>
                        <aside class="column-1_4 widget widget_text">
                            <div class="textwidget">Betokan RT.04 RW.01, Jenengan, Sawit, 
                                Boyolali, Jawa Tengah (57374)
                                <br>
                                <a href="https://wa.me/6287737787194/"><span class="accent1">Phone : 0877 3778 7194</span></a>
                                <br> Email: admin@petaniapob.co.id</div>
                        </aside>
                        <aside class="column-1_4 widget widget_text">
                            <div class="textwidget"></div>
                        </aside>
                        <aside class="column-1_4 widget widget_socials">
                            <div class="widget_inner">
                                <div class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny">
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
                                        <a href="#" target="_blank" class="social_icons social_gplus-1">
                                            <span class="icon-gplus-1"></span>
                                        </a>
                                    </div>
                                    <div class="sc_socials_item">
                                        <a href="#" target="_blank" class="social_icons social_linkedin">
                                            <span class="icon-linkedin"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </aside>
                    </div>
                </div>
            </div>
        </footer>

        <div class="copyright_wrap copyright_style_menu scheme_original">
            <div class="copyright_wrap_inner">
                <div class="content_wrap">
                    <ul id="menu_footer" class="menu_footer_nav">
                        <li class="menu-item"><a href="{{url('gallery')}}"><span>Gallery</span></a></li>
                        <li class="menu-item"><a href="{{ url('produk') }}"><span>Product</span></a></li>
                        <li class="menu-item"><a href="{{ url('contacts') }}"><span>Contact Us</span></a></li>
                    </ul>
                    <div class="copyright_text">
                        <p>Look Creative © 2022 All Rights Reserved
                            <a href="https://lookcreative.id">Terms of Use</a> and
                            <a href="https://lookcreative.id">Privacy Policy</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>
<div class="custom_html_section"></div>
<script type="text/javascript" src="{{ asset('web/js/vendor/jquery/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/jquery/jquery-migrate.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/custom/custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/esg/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/revslider/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/revslider/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/revslider/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/revslider/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/revslider/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/modernizr.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/jquery/js.cookie.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/superfish.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/custom/core.utils.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/custom/core.init.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/custom/init.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/custom/core.debug.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/custom/embed.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/custom/shortcodes.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/comp/comp_front.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/ui/core.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/ui/widget.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/ui/tabs.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/swiper/swiper.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/esg/lightbox.js') }}"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyD2kAys0nQx6OcXQ2JprIctKaXHsYnPFoo"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/core.googlemap.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/custom/core.messages.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/esg/jquery.themepunch.essential.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/prettyPhoto/jquery.prettyPhoto.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('web/js/custom/social-share.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/custom/comment-reply.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/custom/core.reviews.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/comp/comp_front.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('web/js/vendor/isotope.pkgd.min.js') }}"></script>
<script src="https://cdn.plyr.io/3.7.2/plyr.polyfilled.js"></script>
<script>
  // const player = new Plyr('#player');
  const player = new Plyr(document.getElementById("player"));
</script>
</body>

</html>