<div class="col-xl-3 col-lg-4 offset-xl-1">
    <div class="cs-height_0 cs-height_lg_80"></div>
    <div class="cs-sidebar cs-right_sidebar cs-accent_5_bg_2">
        <div class="cs-sidebar_item author_search text-center">
        <div class="cs-author_card">
            <img src="{{ asset('storage/about_page_images') }}/{{ $whychooseus->about_main_image }}" alt="Aauthor">
            <h4>About Our Agency</h4>
            <p>{{ \Illuminate\Support\Str::limit($whychooseus->about_team, 100) }}</p><a href="{{ route('about') }}" style="color: #FF4A17">Read More</a>
        </div>
        </div>
        <div class="cs-sidebar_item widget_categories">
        <h4 class="cs-sidebar_widget_title">Categories</h4>
        <ul>
            @foreach ($serviceCategories as $serviceCategory)
                <li class="cat-item">
                {{-- <a href="{{ route('blog.category', $serviceCategory->id) }}" style="{{ $serviceCategory->service_category_title==$selectCategoryName->service_category_title ? 'color: #FF4A17' : ''}}">{{ $serviceCategory->service_category_title }}</a> --}}
                <a href="{{ route('blog.category', ['id' => $serviceCategory->id, 'slug' => $serviceCategory->service_category_slug]) }}">{{ $serviceCategory->service_category_title }}</a>
                </li>
            @endforeach
        </ul>
        </div>
        <div class="cs-sidebar_item">
        <h4 class="cs-sidebar_widget_title">Recent Posts</h4>
        <ul class="cs-recent_posts">
            @foreach ($blogs as $blog)
                <li>
                <div class="cs-recent_post">
                    <a href="{{ route('blog.details',['id' => $blog->id, 'slug' => $blog->blogTitleSlug]) }}" class="cs-recent_post_thumb">
                    <div class="cs-recent_post_thumb_in cs-bg" data-src="@if ($blog->blogThumbnail == NULL) {{ asset('nullImage') }}/nullImage.jpg @else {{ asset('storage') }}/blog_thumbnail/{{ $blog->blogThumbnail }} @endif"></div>
                    </a>
                    <div class="cs-recent_post_info">
                    <h3 class="cs-recent_post_title">
                        <a href="{{ route('blog.details',['id' => $blog->id, 'slug' => $blog->blogTitleSlug]) }}">{{ $blog->blogTitle }}...</a>
                    </h3>
                    <div class="cs-recent_post_date cs-primary_40_color">{{ \Carbon\Carbon::parse($blog->created_at)->format('d M Y')}}</div>
                    </div>
                </div>
                </li>
            @endforeach
        </ul>
        </div>
    </div>
</div>
