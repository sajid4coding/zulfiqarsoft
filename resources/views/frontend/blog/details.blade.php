@extends('layouts.frontendmaster')
@section('frontend_content')
<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="{{ asset('frontend_assets') }}/img/blog_details_hero_bg.jpeg">
    <div class="container">
    <div class="cs-page_heading_in">
        <h1 class="cs-page_title cs-font_50 cs-white_color">Blog Single</h1>
        <ol class="breadcrumb text-uppercase">
        <li class="breadcrumb-item">
            <a href="{{ route('index') }}">Home</a>
        </li>
        <li class="breadcrumb-item active">Blog Single</li>
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
        <div class="cs-post cs-style2">
            <div class="cs-post_thumb cs-radius_15">
                <img src="@if ($blog->blogThumbnail == NULL) {{ asset('nullImage') }}/nullImage.jpg @else {{ asset('storage') }}/blog_thumbnail/{{ $blog->blogThumbnail }} @endif" alt="Post" class="w-100 cs-radius_15">
            </div>
            <div class="cs-post_info">
                <div class="cs-post_meta cs-style1 cs-ternary_color cs-semi_bold cs-primary_font">
                <span class="cs-posted_by">{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y')}}</span>
                <a href="{{ route('blog.category', ['id' => $blog->serviceCategory, 'slug' => $blog->relationshipwithServiceCategory->service_category_slug]) }}" class="cs-post_avatar">{{ $blog->relationshipwithServiceCategory->service_category_title }}</a>
                </div>
                <h2 class="cs-post_title">{{ $blog->blogTitle }}</h2>
                <p><?=$blog->blogDescription?></p>
            </div>
        </div>
        <div class="cs-height_30 cs-height_lg_30"></div>
        @if ($blog->blogComment == 'on')
            <h2 class="cs-font_50 cs-m0">Leave A Reply</h2>
            <div class="cs-height_5 cs-height_lg_5"></div>
            <p class="cs-m0">Your email address will not be published. Required fields are marked *</p>
            <div class="cs-height_40 cs-height_lg_30"></div>
            @if ($comment_exists)
                <div class="row mb-5">
                    <div class="col-12">
                        @foreach ($comments as $comment)
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon7">{{$comment->commentUserName}}</span>
                            </div>
                            <input type="text" disabled class="form-control" style="background-color: #000;" placeholder="{{$comment->userComment}}">
                        </div>
                        @endforeach
                    </div>
                </div>
            @endif
            <form action="{{route('blog.comment', $blog->id)}}" method="POST" enctype="multipart/form-data" class="row">
            @csrf
                <div class="col-lg-6">
                    <label>Full Name*</label>
                    <input name="commentUserName" type="text" class="cs-form_field">
                    <div class="cs-height_20 cs-height_lg_20"></div>
                </div>
                <div class="col-lg-6">
                    <label>Email*</label>
                    <input name="commentUserEmail" type="email" class="cs-form_field">
                    <div class="cs-height_20 cs-height_lg_20"></div>
                </div>
                <div class="col-lg-12">
                    <label>Write Your Comment*</label>
                    <textarea name="userComment" cols="30" rows="7" class="cs-form_field"></textarea>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-lg-12">
                    <button class="cs-btn cs-style1">
                    <span>Send Message</span>
                    <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor" />
                    </svg>
                    </button>
                </div>
            </form>
        @endif
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
