<!DOCTYPE html>
<html lang="id"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title }}</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="{{ asset('assets/vendor/perfect-scrollbar.css') }}"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="{{ asset('assets/css/app.css') }}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('assets/css/app.rtl.css') }}"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="{{ asset('assets/css/vendor-material-icons.css') }}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('assets/css/vendor-material-icons.rtl.css') }}"
              rel="stylesheet">

        <!-- Font Awesome FREE Icons -->
        <link type="text/css"
              href="{{ asset('assets/css/vendor-fontawesome-free.css') }}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('assets/css/vendor-fontawesome-free.rtl.css') }}"
              rel="stylesheet">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async
                src="https://www.googletagmanager.com/gtag/js?id=UA-133433427-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-133433427-1');
        </script>

        
        <!-- Flatpickr -->
        <link type="text/css"
              href="{{ asset('assets/css/vendor-flatpickr.css') }}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('assets/css/vendor-flatpickr.rtl.css') }}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('assets/css/vendor-flatpickr-airbnb.css') }}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('assets/css/vendor-flatpickr-airbnb.rtl.css') }}"
              rel="stylesheet">

        <!-- Quill Theme -->
        <link type="text/css"
              href="{{ asset('assets/css/vendor-quill.css') }}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('assets/css/vendor-quill.rtl.css') }}"
              rel="stylesheet">

        <!-- Dropzone -->
        <link type="text/css"
              href="{{ asset('assets/css/vendor-dropzone.css') }}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('assets/css/vendor-dropzone.rtl.css') }}"
              rel="stylesheet">

        <!-- Select2 -->
        <link type="text/css"
              href="{{ asset('assets/css/vendor-select2.css') }}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('assets/css/vendor-select2.rtl.css') }}"
              rel="stylesheet">
        <link type="text/css"
              href="{{ asset('assets/vendor/select2/select2.min.css') }}"
              rel="stylesheet">

        {{-- Rich Editor SummerNote --}}
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
          

    </head>

    <body class="layout-default">

        <div class="preloader"></div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <div id="header"
                 class="mdk-header js-mdk-header m-0"
                 data-fixed>
                <div class="mdk-header__content">

                    <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-dark  pr-0"
                         id="navbar"
                         data-primary>
                        <div class="container-fluid p-0">

                            <!-- Navbar toggler -->

                            <button class="navbar-toggler navbar-toggler-right d-block d-lg-none"
                                    type="button"
                                    data-toggle="sidebar">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <!-- Navbar Brand -->
                            <a href="{{ route('admin.dashboard') }}"
                               class="navbar-brand ">
                                
                                <span>APOB Dashboard</span>
                            </a>

                            <form class="search-form d-none d-sm-flex flex"
                                  action="{{ route('admin.dashboard') }}">
                                <button class="btn"
                                        type="submit"><i class="material-icons">search</i></button>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Search">
                            </form>

                            <ul class="nav navbar-nav ml-auto d-none d-md-flex">
                                <li class="nav-item dropdown">
                                    <a href="{{ url('/') }}"
                                       class="nav-link"
                                       data-caret="false">
                                        <i class="material-icons nav-icon">home</i>
                                    </a>
                                </li>
                            </ul>

                            <ul class="nav navbar-nav d-none d-sm-flex border-left navbar-height align-items-center">
                                <li class="nav-item dropdown">
                                    <a href="#account_menu"
                                       class="nav-link dropdown-toggle"
                                       data-toggle="dropdown"
                                       data-caret="false">
                                        <span class="mr-1 d-flex-inline">
                                            <span class="text-light">{{ auth()->user()->name }}</span>
                                        </span>
                                        <img src="{{ asset('web/images/logo_1.png') }}"
                                             class="rounded-circle"
                                             width="32"
                                             alt="Frontted">
                                    </a>
                                    <div id="account_menu"
                                         class="dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-item-text dropdown-item-text--lh">
                                            <div><strong>{{ auth()->user()->name }}</strong></div>
                                            <div class="text-muted">{{ auth()->user()->email }}</div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item"
                                           href="{{ route('admin.dashboard') }}"><i class="material-icons">dvr</i> Dashboard</a>
                                        {{-- <a class="dropdown-item"
                                           href="profile.html"><i class="material-icons">account_circle</i> My profile</a>
                                        <a class="dropdown-item"
                                           href="edit-account.html"><i class="material-icons">edit</i> Edit account</a>
                                        <div class="dropdown-divider"></div> --}}
                                        <a class="dropdown-item"
                                           href="{{ route('logout') }}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i> Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content">

                <div class="mdk-drawer-layout js-mdk-drawer-layout"
                    data-push
                    data-responsive-width="992px">
                    <div class="mdk-drawer-layout__content page">
                        <div class="container-fluid page__heading-container">
                            <div class="page__heading d-flex align-items-end">
                                <div class="flex">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb mb-0">
                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb }}</li>
                                        </ol>
                                    </nav>
                                    <h1 class="m-0">{{ $title_breadcrumb }}</h1>
                                </div>
                            </div>
                        </div>
                        @yield('navbar')
                    </div>
                <!-- // END drawer-layout -->

            </div>
            <!-- // END header-layout__content -->

        </div>
        <!-- // END header-layout -->

        <!-- App Settings FAB -->
        <div>
            <div id="app-settings">
                <app-settings layout-active="default"
                              :layout-location="{}">
                </app-settings>
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{ asset('assets/vendor/jquery.min.js') }}"></script>

        <!-- Bootstrap -->
        <script src="{{ asset('assets/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap.min.js') }}"></script>

        <!-- Perfect Scrollbar -->
        <script src="{{ asset('assets/vendor/perfect-scrollbar.min.js') }}"></script>

        <!-- DOM Factory -->
        <script src="{{ asset('assets/vendor/dom-factory.js') }}"></script>

        <!-- MDK -->
        <script src="{{ asset('assets/vendor/material-design-kit.js') }}"></script>

        <!-- App -->
        <script src="{{ asset('assets/js/toggle-check-all.js') }}"></script>
        <script src="{{ asset('assets/js/check-selected-row.js') }}"></script>
        <script src="{{ asset('assets/js/dropdown.js') }}"></script>
        <script src="{{ asset('assets/js/sidebar-mini.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>

        <!-- App Settings (safe to remove) -->
        <script src="{{ asset('assets/js/app-settings.js') }}"></script>

        <!-- Flatpickr -->
        <script src="{{ asset('assets/vendor/flatpickr/flatpickr.min.js') }}"></script>
        <script src="{{ asset('assets/js/flatpickr.js') }}"></script>

        <!-- Global Settings -->
        <script src="{{ asset('assets/js/settings.js') }}"></script>

        <!-- Moment.js -->
        <script src="{{ asset('assets/vendor/moment.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/moment-range.js') }}"></script>

        <!-- Chart.js -->
        <script src="{{ asset('assets/vendor/Chart.min.js') }}"></script>

        <!-- App Charts JS -->
        <script src="{{ asset('assets/js/charts.js') }}"></script>
        <script src="{{ asset('assets/js/chartjs-rounded-bar.js') }}"></script>

        <!-- Chart Samples -->
        <script src="{{ asset('assets/js/page.dashboard.js') }}"></script>
        <script src="{{ asset('assets/js/progress-charts.js') }}"></script>

        <!-- Vector Maps -->
        <script src="{{ asset('assets/vendor/jqvmap/jquery.vmap.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
        <script src="{{ asset('assets/js/vector-maps.js') }}"></script>

        <!-- List.js -->
        <script src="{{ asset('assets/vendor/list.min.js') }}"></script>
        <script src="{{ asset('assets/js/list.js') }}"></script>
        
        <!-- jQuery Mask Plugin -->
        <script src="{{ asset('assets/vendor/jquery.mask.min.js') }}"></script>

        <!-- Quill -->
        <script src="{{ asset('assets/vendor/quill.min.js') }}"></script>
        <script src="{{ asset('assets/js/quill.js') }}"></script>

        <!-- Dropzone -->
        <script src="{{ asset('assets/vendor/dropzone.min.js') }}"></script>
        <script src="{{ asset('assets/js/dropzone.js') }}"></script>

        <!-- Select2 -->
        <script src="{{ asset('assets/vendor/select2/select2.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2.js') }}"></script>

        {{-- Summernote --}}
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
            $('#summernote').summernote({
              placeholder: 'Tulis Artikel Disini',
            //   tabsize: 2,
            //   height: 200,
              maxHeight: null,
              minHeight: 400,
              dialogsInBody: true,
              toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['codeview']]
              ]
            });
          </script>
        {{-- <script>
            $('#summernote-deskripsi').summernote({
              placeholder: 'Tulis Artikel Disini',
            //   tabsize: 2,
            //   height: 200,
              maxHeight: null,
              minHeight: 400,
              dialogsInBody: true,
              toolbar: [
                ['para', []]]
            });
          </script> --}}
                
        <!-- Tambah Modal Kategori -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>   
                            </div>
                            <div class="form-group">
                                <label for="keywords">Keywords</label>
                                <input type="text" name="keywords" class="form-control" id="keywords" required>   
                            </div>
                            <div class="form-group">
                                <label for="meta_desc">Meta Description</label>
                                <input type="text" name="meta_desc" class="form-control" id="meta_desc" required>   
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div> 
                </div>
            </div>
        </div>

    </body>

</html>