<ul class="cs-footer_links cs-mp0">
    @foreach ($pages as $page)
        <li>
            <a href="{{ route('page', $page->page_title_slug) }}">{{ $page->page_title }}</a>
        </li>
    @endforeach
</ul>
