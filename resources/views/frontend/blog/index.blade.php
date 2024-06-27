@extends('layouts.frontendmaster')
@section('frontend_content')
<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="{{ asset('frontend_assets') }}/img/blog_hero_bg.jpeg">
    <div class="container">
      <div class="cs-page_heading_in">
        <h1 class="cs-page_title cs-font_50 cs-white_color">Our Blog</h1>
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item">
            <a href="{{ route('index') }}">Home</a>
          </li>
          <li class="breadcrumb-item active">Blog</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- End Hero -->
  <div class="cs-height_150 cs-height_lg_80"></div>
  <!-- Start Blogs -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          @foreach ($blogs as $blog)
            <div class="cs-post cs-style2">
              <a href="{{ route('blog.details',$blog->id) }}" class="cs-post_thumb cs-radius_15">
                <img src="@if ($blog->blogThumbnail == NULL) {{ asset('nullImage') }}/nullImage.jpg @else {{ asset('storage') }}/blog_thumbnail/{{ $blog->blogThumbnail }} @endif" alt="Post" class="w-100 cs-radius_15">
              </a>
              <div class="cs-post_info">
                <div class="cs-post_meta cs-style1 cs-ternary_color cs-semi_bold cs-primary_font">
                  <span class="cs-posted_by">{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y')}}</span>
                  <a href="{{ route('blog.category', $blog->serviceCategory) }}" class="cs-post_avatar">{{ $blog->relationshipwithServiceCategory->service_category_title }}</a>
                </div>
                <h2 class="cs-post_title">
                  <a href="{{ route('blog.details',$blog->id) }}">{{ $blog->blogTitle }}</a>
                </h2>
                {{-- <div class="cs-post_sub_title">{{ $blog->blogDescription }}</div> --}}
                <a href="{{ route('blog.details',$blog->id) }}" class="cs-text_btn">
                  <span>See More</span>
                  <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.5307 6.53033C25.8236 6.23744 25.8236 5.76256 25.5307 5.46967L20.7577 0.696699C20.4648 0.403806 19.99 0.403806 19.6971 0.696699C19.4042 0.989593 19.4042 1.46447 19.6971 1.75736L23.9397 6L19.6971 10.2426C19.4042 10.5355 19.4042 11.0104 19.6971 11.3033C19.99 11.5962 20.4648 11.5962 20.7577 11.3033L25.5307 6.53033ZM0.000366211 6.75H25.0004V5.25H0.000366211V6.75Z" fill="currentColor" />
                  </svg>
                </a>
              </div>
            </div>
            <div class="cs-height_95 cs-height_lg_60"></div>
          @endforeach
          <div class="cs-pagination_box cs-center cs-white_color cs-mp0 cs-semi_bold">{{ $blogs->links() }}</div>
          {{-- <ul class="cs-pagination_box cs-center cs-white_color cs-mp0 cs-semi_bold">
            <li>
              <a class="cs-pagination_item cs-center active" href="blog.html">1</a>
            </li>
            <li>
              <a class="cs-pagination_item cs-center" href="blog.html">2</a>
            </li>
            <li>
              <a class="cs-pagination_item cs-center" href="blog.html">3</a>
            </li>
            <li>
              <a class="cs-pagination_item cs-center" href="blog.html">4</a>
            </li>
            <li>
              <a href="#" class="cs-pagination_item cs-center">
                <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 1.272L4.55116 6L0 10.728L1.22442 12L7 6L1.22442 0L0 1.272Z" fill="currentColor" />
                </svg>
              </a>
            </li>
          </ul> --}}
        </div>
        <x-frontend.blog-side-bar.blog-side-bar/>
      </div>
    </div>
  </section>
  <!-- End Blogs -->
  <div class="cs-height_150 cs-height_lg_80"></div>
  <!-- Start CTA -->
  <x-frontend.contact.contact/>
  <!-- End CTA -->
@endsection
