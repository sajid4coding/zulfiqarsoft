<section class="cs-shape_wrap_4 cs-parallax">
    <div class="cs-shape_4 cs-to_up"></div>
    <div class="cs-shape_4 cs-to_right"></div>
    <div class="cs-height_150 cs-height_lg_80"></div>
    <div class="container">
    <div class="cs-slider cs-style1 cs-gap-24">
        <div class="cs-slider_left">
        <div class="cs-section_heading cs-style1">
            <h3 class="cs-section_subtitle">Our Blog</h3>
            <h2 class="cs-section_title">Explore recent publication</h2>
            <div class="cs-height_45 cs-height_lg_20"></div>
            <a href=" {{ route('blog') }} " class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
            <span>View More Blog</span>
            <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"></path>
            </svg>
            </a>
        </div>
        </div>
        <div class="cs-slider_right">
        <div class="cs-post_wrap">
            <div class="cs-slider_container" data-autoplay="1" data-loop="1" data-speed="1000" data-center="0" data-variable-width="1" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="2" data-lg-slides="2" data-add-slides="3">
            <div class="cs-slider_wrapper">
                @foreach ($blogs as $blog)
                    <div class="cs-slide">
                        <div class="cs-post cs-style1">
                            <a href="{{ route('blog.details',$blog->id) }}" class="cs-post_thumb">
                            <img src="@if ($blog->blogThumbnail == NULL) {{ asset('nullImage') }}/nullImage.jpg @else {{ asset('storage') }}/blog_thumbnail/{{ $blog->blogThumbnail }} @endif" alt="Post" />
                            <div class="cs-post_overlay"></div>
                            </a>
                            <div class="cs-post_info">
                            <div class="cs-posted_by">{{ $blog->created_at->format('d M Y') }}</div>
                            <h2 class="cs-post_title">
                                <a href="{{ route('blog.details',$blog->id) }}">{{ $blog->blogTitle }}</a>
                            </h2>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- .cs-slide -->
                {{-- <div class="cs-slide">
                    <div class="cs-post cs-style1">
                        <a href="blog-details.html" class="cs-post_thumb">
                        <img src="{{ asset('frontend_assets') }}/img/post_2.jpeg" alt="Post" />
                        <div class="cs-post_overlay"></div>
                        </a>
                        <div class="cs-post_info">
                        <div class="cs-posted_by">10 Feb 2022</div>
                        <h2 class="cs-post_title">
                            <a href="blog-details.html">Artistic mind will be great for creation anything</a>
                        </h2>
                        </div>
                    </div>
                </div>
                <!-- .cs-slide -->
                <div class="cs-slide">
                    <div class="cs-post cs-style1">
                        <a href="blog-details.html" class="cs-post_thumb">
                        <img src="{{ asset('frontend_assets') }}/img/post_3.jpeg" alt="Post" />
                        <div class="cs-post_overlay"></div>
                        </a>
                        <div class="cs-post_info">
                        <div class="cs-posted_by">05 Apr 2022</div>
                        <h2 class="cs-post_title">
                            <a href="blog-details.html">A.I will take over all job for human within next year</a>
                        </h2>
                        </div>
                    </div>
                </div>
                <!-- .cs-slide -->
                <div class="cs-slide">
                    <div class="cs-post cs-style1">
                        <a href="blog-details.html" class="cs-post_thumb">
                        <img src="{{ asset('frontend_assets') }}/img/post_1.jpeg" alt="Post" />
                        <div class="cs-post_overlay"></div>
                        </a>
                        <div class="cs-post_info">
                        <div class="cs-posted_by">07 Mar 2022</div>
                        <h2 class="cs-post_title">
                            <a href="blog-details.html">How to keep fear from ruining your art business with confident</a>
                        </h2>
                        </div>
                    </div>
                </div>
                <!-- .cs-slide -->
                <div class="cs-slide">
                    <div class="cs-post cs-style1">
                        <a href="blog-details.html" class="cs-post_thumb">
                        <img src="{{ asset('frontend_assets') }}/img/post_2.jpeg" alt="Post" />
                        <div class="cs-post_overlay"></div>
                        </a>
                        <div class="cs-post_info">
                        <div class="cs-posted_by">10 Feb 2022</div>
                        <h2 class="cs-post_title">
                            <a href="blog-details.html">Artistic mind will be great for creation anything</a>
                        </h2>
                        </div>
                    </div>
                </div>
                <!-- .cs-slide -->
                <div class="cs-slide">
                    <div class="cs-post cs-style1">
                        <a href="blog-details.html" class="cs-post_thumb">
                        <img src="{{ asset('frontend_assets') }}/img/post_3.jpeg" alt="Post" />
                        <div class="cs-post_overlay"></div>
                        </a>
                        <div class="cs-post_info">
                        <div class="cs-posted_by">05 Apr 2022</div>
                        <h2 class="cs-post_title">
                            <a href="blog-details.html">A.I will take over all job for human within next year</a>
                        </h2>
                        </div>
                    </div>
                </div> --}}
                <!-- .cs-slide -->
            </div>
            </div>
            <!-- .cs-slider_container -->
            <div class="cs-pagination cs-style1 cs-hidden_desktop"></div>
        </div>
        </div>
    </div>
    <!-- .cs-slider -->
    </div>
    <div class="cs-height_125 cs-height_lg_70"></div>
</section>
