<header class="top_panel_wrap top_panel_style_1 scheme_original">
    <div class="top_panel_wrap_inner top_panel_inner_style_1 top_panel_position_above">
        <div class="top_panel_top">
            {{-- <div class="content_wrap clearfix">
                <div class="top_panel_top_contact_area icons icon-phone-1">  0877 3778 7194 </div>
                <div class="top_panel_top_open_hours icons icon-clock-1">Mn-Fr: 8am - 8pm, St-Sn: 8am - 4pm</div>
                <div class="top_panel_top_user_area">
                    <div class="top_panel_top_socials">
                        <div class="sc_socials sc_socials_type_icons sc_socials_shape_square sc_socials_size_tiny">
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
                    <ul id="menu_user" class="menu_user_nav"></ul>
                </div>
            </div> --}}
        </div>
        <div class="top_panel_middle">
            <div class="content_wrap">
                <div class="columns_wrap columns_fluid">
                    <div class="column-4_5 contact_logo">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('web/images/logo.png') }}" class="logo_main" alt="" width="239" height="80">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top_panel_bottom">
            <div class="content_wrap clearfix">
                <nav class="menu_main_nav_area menu_hover_fade">
                    <ul id="menu_main" class="menu_main_nav">
                        <li class="menu-item{{ request()->is('/') ? ' current-menu-ancestor' : '' }}"><a href="{{ url('/') }}"><span>Home</span></a>
                        </li>
                        <li class="menu-item{{ request()->is('about') ? ' current-menu-ancestor' : '' }}"><a href="{{ route('about') }}"><span>About us</span></a>
                        </li>
                        <li class="menu-item{{ request()->is('produk') ? ' current-menu-ancestor' : '' }}"><a href="{{ route('produk') }}"><span>Produk</span></a></li>
                        <li class="menu-item{{ request()->is('gallery') ? ' current-menu-ancestor' : '' }}"><a href="{{ route('gallery') }}"><span>Gallery</span></a></li>
                        <li class="menu-item{{ request()->is('contacts') ? ' current-menu-ancestor' : '' }}"><a href="{{ route('contacts') }}"><span>Contacts</span></a></li>
                        @if (Route::has('login'))
                            @auth
                                <li class="menu-item"><a href="{{ url('/admin/dashboard') }}"><span style="color: wheat">Dashboard</span></a></li>
                            @else
                            @endauth
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
<div class="header_mobile">
    <div class="content_wrap">
        <div class="menu_button icon-menu"></div>
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('web/images/logo.png') }}" class="logo_main" alt="" width="239" height="59">
            </a>
        </div>
    </div>
    <div class="side_wrap">
        <div class="close">Close</div>
        <div class="panel_top">
            <nav class="menu_main_nav_area">
                <ul id="menu_mobile" class="menu_main_nav">
                    <li class="menu-item{{ request()->is('/') ? ' current-menu-ancestor' : '' }}"><a href="{{ url('/') }}"><span>Home</span></a>
                    </li>
                    <li class="menu-item{{ request()->is('about') ? ' current-menu-ancestor' : '' }}"><a href="{{ route('about') }}"><span>About us</span></a>
                    </li>
                    <li class="menu-item{{ request()->is('produk') ? ' current-menu-ancestor' : '' }}"><a href="{{ route('produk') }}"><span>Produk</span></a></li>
                    <li class="menu-item{{ request()->is('gallery') ? ' current-menu-ancestor' : '' }}"><a href="{{ route('gallery') }}"><span>Gallery</span></a></li>
                    <li class="menu-item{{ request()->is('contacts') ? ' current-menu-ancestor' : '' }}"><a href="{{ route('contacts') }}"><span>Contacts</span></a></li>
                    @if (Route::has('login'))
                    @auth
                        <li class="menu-item"><a href="{{ url('/admin/dashboard') }}"><span style="color: wheat">Dashboard</span></a></li>
                    @else
                    @endauth
                @endif
                </ul>
            </nav>
        </div>
        <div class="panel_bottom">
        </div>
    </div>
    <div class="mask"></div>
</div>