@extends('web.layouts.app')
@section('content')
@include('web.layouts.breadcrumbs')
<div class="page_content_wrap page_paddings_no">
    <div class="content_wrap">
        <div class="content">
            <article class="post_item post_item_single post_featured_default post_format_standard page type-page hentry">
                <section class="post_content">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="sc_section margin_bottom_huge">
                                        <div class="sc_section_inner">
                                            <h2 class="sc_section_title sc_item_title sc_item_title_without_descr">Our
                                                Produk<span></span></h2>
                                            <div class="sc_section_content_wrap">
                                                <article class="myportfolio-container minimal-light"
                                                    id="esg-grid-3-1-wrap">
                                                    <div id="esg-grid-3-1" class="esg-grid">
                                                        <ul>
                                                            @foreach ($katalog as $item)
                                                            <li id="eg-3-post-id-284"
                                                                class="filterall filter-dairy-herd-management filter-cheese filter-organic eg-dairyfarm-wrapper eg-post-id-284"
                                                                data-date="1464951101" data-cobblesw="1"
                                                                data-cobblesh="1">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media esg-pressback"
                                                                        data-delay="0">
                                                                        <img src="{{ url('storage/' . $item->image) }}"
                                                                            alt="" width="2400"
                                                                            height="1738" />
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade"
                                                                        data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-dairyfarm-container"
                                                                            data-delay="0"></div>
                                                                        <div class="esg-center eg-post-284 eg-dairyfarm-element-0-a esg-zoomfront"
                                                                            data-delay="0.3">
                                                                            <a class="eg-dairyfarm-element-0 eg-post-284 esgbox"
                                                                                href="{{ url('storage/' . $item->image) }}"
                                                                                lgtitle="{{ $item->name }}"  data-title="{{ $item->name }}">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-post-284 eg-dairyfarm-element-0-a esg-zoomfront"
                                                                            data-delay="0.3">
                                                                            <a class="eg-dairyfarm-element-0 eg-post-284 esgbox"
                                                                                href="https://wa.me/6287737787194?text={{urlencode('Hallo Admin APOB,
                                                                                saya ingin menanykan tentang produk ' . '*' . $item->name . '*') }}" target="_self"
                                                                                lgtitle="{{ $item->name }}"  data-title="{{ $item->name }}">
                                                                                <i class="icons icon-phone-1"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-post-284"
                                                                            data-delay="0.3" style="margin-top: 20px;">
                                                                            <div class="post_info" style="color: white;">
                                                                                <span class="">
                                                                                    {{ strtoupper($item->name) }}
                                                                                </span> <br>
                                                                                    <div class="">
                                                                                        <p class="" style="margin-top: 10px; font-size: 12px;">
                                                                                            {!! $item->deskripsi !!}
                                                                                        </p>
                                                                                    </div>
                                                                                <span class="post_info_item post_info_posted">
                                                                                    <strong style="font-size: 25px; font-weight: bold;">{{ moneyFormat($item->price) }}</strong>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            @endforeach
                                                        </ul>                                                 
                                                    </div>
                                                </article>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </article>
            <section class="related_wrap related_wrap_empty"></section>
        </div>
    </div>
</div>
@endsection