@extends('frontend.layouts.app')

@section('content')
    <!-- ======================= breadcrumb Start  ============================ -->
    <div class="breadcrumb_sec py-3">
        <div class="container">
            <nav>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">{{ $blog->title }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- ======================= breadcrumb End  ============================ -->
    <!-- banner advertisement start -->
    <div class="blog_section bg-white overflow-hidden pt-4 pb-4">
        <div class="container">
            <div class="row g-4">
                <div class="col-12">
                    <a href="#">
                        <div class="ad-banner">
                            <img src="{{ asset('frontend') }}/assets//images/banner.png" alt="Advertisement"
                                class="ad-image">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- banner advertisement end -->
        <!-- ======================= Blog Details Start  ============================ -->
        <div class="blog_details_section bg-white overflow-hidden pt-4 pb-4">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-3 order-xl-2">
                        @include('frontend.layouts.partials.sidebar')
                    </div>
                    <div class="col-xl-9 order-xl-1">
                        <div class="single_post blog_wrapper border p-3 p-xl-4 rounded">
                            <div class="single_photo mb-3">
                                <img src="{{ asset('frontend') }}/assets//images/blog/car.jpg" class="rounded w-100"
                                    alt="Health & Wellness">
                            </div>
                            <div class="short_info d-sm-flex align-items-center mb-3">
                                <div class="mb-2 mb-sm-0 me-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon me-1">
                                            <img src="{{ asset('frontend') }}/assets//images/tag.svg" alt="Tag">
                                        </div>
                                        <div class="date"><span>{{ ucwords($blog->category->title) }}</span></div>
                                    </div>
                                </div>
                                <div class="mb-2 mb-sm-0 me-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon me-1">
                                            <img src="{{ asset('frontend') }}/assets//images/calendar.svg" alt="Date">
                                        </div>
                                        <div class="date"><span>{{ $blog->created_at->format('d F Y') }}</span></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex align-items-center">
                                        <div class="icon me-1">
                                            <img src="{{ asset('frontend') }}/assets//images/eye.svg" alt="View">
                                        </div>
                                        <div class="date"><span>{{ $blog->views }}</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="title mb-3">
                                <h1>{{ $blog->title }}</h1>
                            </div>
                            <div class="desc">
                                {!! $blog->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ======================= Blog Details End  ============================ -->

        <!-- ======================= Related Post Start  ============================ -->
        <div class="related_section pt-4 pb-4 border-top">
            <div class="container">
                <div class="section_heading pb-4">
                    <h1 class="section_title">You may also like</h1>
                </div>
                @forelse ($relatedPost as $item)
                    <div class="related_posts owl-theme owl-carousel">
                        <div class="blog_post p-3 p-lg-4 card h-100 bg-transparent shadow-sm border-opacity-10">
                            <div class="blog_img mb-4 position-relative">
                                <a href="{{ route('blogs.show', $item->slug) }}">
                                    <img class="img-fluid rounded z-3"
                                        src="{{ asset('frontend') }}/assets//images/blog/car.jpg" alt="Health & Wellness">
                                </a>
                            </div>
                            <div class="short_info d-sm-flex align-items-center mb-3">
                                <div class="mb-2 mb-sm-0 me-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon me-1">
                                            <img src="{{ asset('frontend') }}/assets//images/tag.svg" alt="Tag">
                                        </div>
                                        <div class="date"><span>{{ ucwords($item->category->title) }}</span></div>
                                    </div>
                                </div>
                                <div class="mb-2 mb-sm-0 me-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon me-1">
                                            <img src="{{ asset('frontend') }}/assets//images/calendar.svg" alt="Date">
                                        </div>
                                        <div class="date"><span>{{ $item->created_at->format('d F Y') }}</span></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex align-items-center">
                                        <div class="icon me-1">
                                            <img src="{{ asset('frontend') }}/assets//images/eye.svg" alt="View">
                                        </div>
                                        <div class="date"><span>{{ $item->views }}</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog_content card-body p-0">
                                <h3 class="mb-3">
                                    <a
                                        href="{{ route('blogs.show', $item->slug) }}">{{ \Illuminate\Support\Str::limit($item->title, 70) }}</a>
                                </h3>
                                <div class="blog_desc mb-2">
                                    {!! \Illuminate\Support\Str::limit($item->description, 80) !!}
                                </div>
                            </div>
                            <hr>
                            <div class="card-footer mt-2 bg-transparent border-0 blog_content p-0">
                                <a class="learn_more" href="{{ route('blogs.show', $item->slug) }}">Read More</a>
                            </div>
                        </div>

                </div>@empty
                    <h3>no related</h3>
                @endforelse
            </div>
        </div>
    </div>
    <!-- ======================= Related Post End  ============================ -->
@endsection
