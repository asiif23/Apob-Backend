@extends('web.layouts.app')
@section('content')
@include('web.layouts.breadcrumbs')

        <!-- Blog Section Start -->
        <section class="section">
            <div class="container" style="margin-top: 20px;">
                <div class="row">
                    @foreach ($post as $item )
                    <div class="col-md-12 pb--60">

                        <!-- Post Item Start -->
                        <div class="post--item text-center">
                            <!-- Post Image Start -->
                            <div class="post--img">
                                <a href="{{ url('/post/' . $item->id) }}"><img src="{{ url('storage/' . $item->image) }}" alt=""></a>
                            </div>
                            <!-- Post Image End -->

                            <!-- Post Category Start -->
                            <div class="post--cat">
                                <a href="#" data-overlay="0.5" data-overlay-color="primary">{{ $item->category->name }}</a>
                            </div>
                            <!-- Post Category End -->

                            <!-- Post Title Start -->
                            <div class="post--title">
                                <h2 class="h3"><a href="{{ url('/post/' . $item->id) }}" class="btn-link">{{ $item->title }}</a></h2>
                            </div>
                            <!-- Post Title End -->

                            <!-- Post Excerpt Start -->
                            <div class="post--excerpt">
                                <p>{{ $item->kutipan }}</p>
                            </div>
                            <!-- Post Excerpt End -->

                            <!-- Post Action Start -->
                            <div class="post--action">
                                <a href="{{ url('/post/' . $item->id) }}" class="btn btn-default">Read More</a>
                            </div>
                            <!-- Post Action End -->

                            <!-- Post Meta Start -->
                            <div class="post--meta clearfix">
                                <p class="float--left">
                                    <i class="fa fa-clock-o text-primary"></i>
                                    <span>
                                        @php
                                            $created = $item->created_at->isoFormat('dddd, D MMM Y');
                                            echo $created;
                                        @endphp 
                                    </span>
                                    <a href="#">Admin APOB</a>
                                </p>

                                <p class="float--right">
                                    <i class="fa fa-heart-o text-primary"></i>
                                    <span>112</span>
                                </p>

                                <p class="float--right">
                                    <a href="{{ url('/post/' . $item->id) }}#comments" class="btn-link">
                                        <i class="fa fa-comments-o text-primary"></i>
                                        <span>52</span>
                                    </a>
                                </p>
                            </div>
                            <!-- Post Meta End -->
                        </div>
                        <!-- Post Item End -->
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Blog Section End -->
@endsection

