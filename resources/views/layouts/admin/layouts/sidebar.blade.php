@extends('layouts.admin.layouts.app')

@section('navbar')
@yield('content')
    <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-light sidebar-left sidebar-p-t" data-perfect-scrollbar>
                <div class="sidebar-heading">Menu</div>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item{{ request()->is('admin/dashboard') || request()->is('admin/categories') || request()->is('admin/artikel*') || request()->is('admin/*/artikel') ? ' active open' : '' }}">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#dashboards_menu">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i>
                            <span class="sidebar-menu-text">Dashboard</span>
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse{{ request()->is('admin*') ? ' show ' : '' }}" id="dashboards_menu">
                            <li class="sidebar-menu-item{{ request()->is('admin/dashboard') ? ' active' : '' }}">
                                <a class="sidebar-menu-button" href="/admin/dashboard">
                                    <span class="sidebar-menu-text">Overview</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item{{request()->is('admin/artikel*') || request()->is('admin/*/artikel') ? ' active' : '' }}">
                                <a class="sidebar-menu-button" href="/admin/artikel">
                                    <span class="sidebar-menu-text">Artikel</span>
                                </a>
                            </li>
                            <li class="sidebar-menu-item{{ request()->is('admin/categories*') || request()->is('admin/*/categories') ? ' active' : '' }}">
                                <a class="sidebar-menu-button" href="/admin/categories">
                                    <span class="sidebar-menu-text">Kategori</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-menu-item{{ request()->is('admin/katalog*') || request()->is('admin/*/katalog') ? ' active open' : '' }}">
                        <a class="sidebar-menu-button" data-toggle="collapse" href="#apps_menu">
                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">slideshow</i>
                            <span class="sidebar-menu-text">Konten</span>
                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                        </a>
                        <ul class="sidebar-submenu collapse{{ request()->is('admin/katalog*') || request()->is('admin/*/katalog') ? ' show ' : '' }}" id="apps_menu">
                            <li class="sidebar-menu-item{{ request()->is('admin/katalog*') || request()->is('admin/*/katalog') ? ' active' : '' }}">
                                <a class="sidebar-menu-button" href="{{ route('katalog.index') }}">
                                    <span class="sidebar-menu-text">Katalog</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
