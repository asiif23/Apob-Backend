@extends('web.layouts.app')

@section('content')
    @include('web.layouts.breadcrumbs')
    <div class="page_content_wrap page_paddings_yes">
        <div class="content_wrap">
            <div class="content">
                @foreach ($articles as $item)
                    <article
                        class="post_item post_item_single post_featured_default post_format_standard post type-post format-standard has-post-thumbnail hentry">
                        <section class="post_featured">
                            {{-- <h1>{{ $item->title }}</h1> --}}
                            <div class="post_thumb" data-image="{{ url('storage/' . $item->image) }}"
                                data-title="{{ $item->title }}">
                                <a class="hover_icon hover_icon_view" href="{{ url('storage/' . $item->image) }}"
                                    title="{{ $item->title }}">
                                    <img alt="{{ $item->title }}" src="{{ url('storage/' . $item->image) }}">
                                </a>
                            </div>
                        </section>
                        <section class="post_content">
                            <div class="post_info">
                                <span class="post_info_item post_info_posted">
                                    <a href="#" class="post_info_date date updated"
                                        content="2016-09-28 08:44:54">
                                        @php
                                            $created = $item->created_at->isoFormat('dddd, D MMM Y');
                                            echo $created;
                                        @endphp
                                    </a>
                                </span>
                                <span class="post_info_item icon-user-1 post_info_posted_by vcard">
                                    <a href="#" class="post_info_author">Admin APOB</a>
                                </span>
                                <span class="post_info_item post_info_counters">
                                    <span class="post_counters_item post_counters_views icon-eye-1" title="Views - 551">
                                        <span class="post_counters_number">551</span>
                                    </span>
                                    <a class="post_counters_item post_counters_comments icon-comment-1" title="Comments - 3"
                                        href="#">
                                        <span class="post_counters_number">3</span>
                                    </a>
                                </span>
                            </div>
                            {!! $item->konten !!}
                            <div class="post_info post_info_bottom">
                                <div class="post_info post_info_bottom post_info_share post_info_share_horizontal">
                                    <div
                                        class="sc_socials sc_socials_type_icons sc_socials_shape_round sc_socials_size_tiny sc_socials_share sc_socials_dir_horizontal">
                                        <span class="share_caption">Share:</span>
                                        <div class="sc_socials_item social_item_popup">
                                            <a href="#" class="social_icons social_twitter"
                                                data-link="https://twitter.com/intent/tweet?text=Dairy+Nutrition+and+Profitability+Optimization&#038;url=http%3A%2F%2Fdairy-farm.ancorathemes.com%2Fdairy-nutrition-and-profitability-optimization%2F">
                                                <span class="icon-twitter"></span>
                                            </a>
                                        </div>
                                        <div class="sc_socials_item social_item_popup">
                                            <a href="#" class="social_icons social_facebook"
                                                data-link="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fdairy-farm.ancorathemes.com%2Fdairy-nutrition-and-profitability-optimization%2F">
                                                <span class="icon-facebook"></span>
                                            </a>
                                        </div>
                                        <div class="sc_socials_item social_item_popup">
                                            <a href="#" class="social_icons social_gplus-1" data-link="">
                                                <span class="icon-gplus-1"></span>
                                            </a>
                                        </div>
                                        <div class="sc_socials_item social_item_popup">
                                            <a href="#" class="social_icons social_rss" data-link="">
                                                <span class="icon-rss"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <span class="post_info_item post_info_cat">
                                    <span class="b-tag">Kategori: </span>
                                    <a class="category_link" href="#">{{ $item->category->name }}</a>
                                </span>
                                <br>
                            </div>

                        </section>
                        <section class="related_wrap related_wrap_empty"></section>
                        <section class="related_wrap related_wrap_empty"></section>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
    @endsection
