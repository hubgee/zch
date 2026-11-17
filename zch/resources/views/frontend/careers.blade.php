@extends('layouts.app')
@section('content')
@php
    $pageData = $page?->content_data ?? [];
    $heroTitle = data_get($pageData, 'hero_title', 'Career Opportunities at Zomba Central Hospital');
    $heroDescription = data_get($pageData, 'hero_description', 'Explore current job openings, view shortlisted candidates, appointment notices, and access archived vacancies from the Health Service Commission.');
@endphp
<style>
    /* ── Section wrapper ── */
    .career-section {
        margin-top: 36px;
        padding-top: 28px;
        border-top: 1px solid #e5eef8;
    }
    .career-section:first-of-type {
        margin-top: 0;
        padding-top: 0;
        border-top: 0;
    }

    /* ── Section heading ── */
    .career-section__title {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0 0 18px;
        color: #0a2f5a;
        font-size: 20px;
        font-weight: 800;
        line-height: 1.2;
    }
    .career-section__title::before {
        content: "";
        width: 4px;
        height: 22px;
        border-radius: 999px;
        background: #00a8cc;
        flex: 0 0 auto;
    }

    /* ── Filter bar ── */
    .career-filter {
        background: #f4f8ff;
        border: 1px solid #e5eef8;
        border-radius: 10px;
        padding: 14px 18px;
    }
    .career-filter__grid {
        display: grid;
        grid-template-columns: minmax(0, 1fr) 180px 160px 140px;
        gap: 10px;
    }
    .career-filter__field,
    .career-filter__select {
        width: 100%;
        height: 40px;
        border: 1px solid #d0d5dd;
        border-radius: 6px;
        padding: 0 12px;
        font-size: 13px;
        color: #2d3640;
        background: #fff;
        outline: none;
        transition: border-color .2s;
    }
    .career-filter__field:focus,
    .career-filter__select:focus {
        border-color: #00a8cc;
        box-shadow: 0 0 0 3px rgba(0,168,204,.12);
    }
    .career-filter__field::placeholder { color: #98a2b3; }
    .career-filter__select {
        background: #fff;
        color: #333;
        cursor: pointer;
        appearance: auto;
    }
    .career-filter__button {
        width: 100%;
        height: 40px;
        border: 0;
        border-radius: 6px;
        background: #00a8cc;
        color: #fff;
        font-size: 13px;
        font-weight: 700;
        cursor: pointer;
        transition: background .2s;
    }
    .career-filter__button:hover { background: #0b3d91; }

    /* ── Results area ── */
    .career-results { min-height: 60px; }

    .career-empty {
        padding: 44px 16px 24px;
        text-align: center;
        color: #667085;
        font-size: 14px;
        background: #fbfdff;
        border: 1px dashed #c7d7ec;
        border-radius: 10px;
    }
    .career-empty i {
        display: block;
        font-size: 32px;
        color: #c7d7ec;
        margin-bottom: 10px;
    }
    .career-empty.is-hidden { display: none; }

    /* ── Cards grid ── */
    .career-items {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 18px;
        margin-top: 18px;
    }

    .career-card {
        background: #fff;
        border: 1px solid #e5eef8;
        border-top: 3px solid #0b3d91;
        border-radius: 12px;
        box-shadow: 0 4px 14px rgba(15,23,42,.04);
        padding: 20px 20px 22px;
        display: flex;
        flex-direction: column;
        transition: box-shadow .25s, transform .25s;
    }
    .career-card:hover {
        box-shadow: 0 12px 28px rgba(0,168,204,.12);
        transform: translateY(-3px);
    }

    .career-card__title {
        margin: 0 0 14px;
        color: #0f1724;
        font-size: 15px;
        line-height: 1.45;
        font-weight: 800;
    }
    .career-card__title a {
        color: inherit;
        text-decoration: none;
        transition: color .2s;
    }
    .career-card__title a:hover { color: #00a8cc; }

    .career-card__meta {
        display: grid;
        gap: 7px;
        margin-bottom: 16px;
        color: #475467;
        font-size: 12.5px;
        line-height: 1.4;
        flex: 1;
    }
    .career-card__meta span {
        display: flex;
        align-items: flex-start;
        gap: 7px;
    }
    .career-card__meta i {
        margin-top: 2px;
        width: 14px;
        text-align: center;
        color: #00a8cc;
        font-size: 12px;
        flex-shrink: 0;
    }

    .career-card__actions {
        display: flex;
        gap: 8px;
        margin-top: auto;
        padding-top: 14px;
        border-top: 1px solid #edf2f7;
    }

    .career-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex: 1 1 0;
        height: 34px;
        border-radius: 6px;
        font-size: 12px;
        font-weight: 600;
        text-decoration: none;
        border: 0;
        cursor: pointer;
        transition: background .2s, color .2s;
    }
    .career-btn--view {
        background: #f0f4f8;
        color: #344054;
    }
    .career-btn--view:hover {
        background: #e4e8ee;
        color: #0b3d91;
    }
    .career-btn--download {
        background: #00a8cc;
        color: #fff;
    }
    .career-btn--download:hover {
        background: #0b3d91;
    }

    /* ── Intro hero inside content ── */
    .career-hero {
        background: linear-gradient(120deg, #0b3d91 0%, #00a8cc 100%);
        border-radius: 12px;
        padding: 28px 32px;
        margin-top: 30px;
        margin-bottom: 10px;
    }
    .career-hero h2 {
        margin: 0 0 8px;
        font-size: 22px;
        font-weight: 700;
        color: #fff;
    }
    .career-hero p {
        margin: 0;
        color: rgba(255,255,255,.92);
        font-size: 14px;
        line-height: 1.6;
    }

    /* ── Responsive ── */
    @media (max-width: 1199px) {
        .career-filter__grid {
            grid-template-columns: 1fr 1fr;
        }
        .career-filter__button {
            grid-column: span 2;
        }
    }
    @media (max-width: 767px) {
        .career-section { margin-top: 24px; padding-top: 20px; }
        .career-filter__grid { grid-template-columns: 1fr; }
        .career-filter__button { grid-column: auto; }
        .career-items { grid-template-columns: 1fr; }
        .career-hero { padding: 20px 22px; margin-top: 20px; }
        .career-hero h2 { font-size: 18px; }
    }
</style>

<section class="page-title text-center" style="background-image:url(images/background/3a.jpg?v=20260602);">
    <div class="container">
        <div class="title-text">
            <h1>VIEW VACANCIES</h1>
            <ul class="title-menu clearfix">
                <li><a href="{{ route('home') }}">home &nbsp;/</a></li>
                <li>Vacancies</li>
            </ul>
        </div>
    </div>
</section>

<section class="section-padding" style="background:#fff;">
    <div class="container">
        <div class="career-hero">
            <h2>{{ $heroTitle }}</h2>
            <p>{{ $heroDescription }}</p>
        </div>

        {{-- Advertised Jobs --}}
        <div class="career-section" data-career-section="advertised">
            <h3 class="career-section__title">Advertised Jobs</h3>
            <div class="career-filter">
                <div class="career-filter__grid">
                    <input class="career-filter__field" type="text" placeholder="Search Keyword..." data-career-search>
                    <select class="career-filter__select" data-career-sort-field>
                        <option value="publishDate" selected>Publish Date</option>
                        <option value="title">Title</option>
                        <option value="downloads">Downloads</option>
                    </select>
                    <select class="career-filter__select" data-career-sort-order>
                        <option value="desc" selected>Descending</option>
                        <option value="asc">Ascending</option>
                    </select>
                    <button class="career-filter__button" type="button" data-career-apply>Apply Filter</button>
                </div>
            </div>
            <div class="career-results">
                <div class="career-empty" data-career-empty>
                    <i class="far fa-folder-open"></i>
                    No advertised jobs available at the moment.
                </div>
                <div class="career-items" data-career-items>
                    @foreach($careersJson->where('section', 'advertised') as $item)
                    <article class="career-card" data-career-card data-title="{{ $item['title'] }}" data-search="{{ $item['search'] ?? '' }}" data-publish-date="{{ $item['publishDate'] ?? '' }}" data-downloads="{{ $item['downloads'] ?? 0 }}">
                        <h4 class="career-card__title">
                            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($item, 'file_url', '#')) }}">{{ $item['title'] }}</a>
                        </h4>
                        <div class="career-card__meta">
                            <span><i class="fa fa-map-marker-alt"></i> {{ $item['location'] ?? '' }}</span>
                            <span><i class="fa fa-briefcase"></i> {{ $item['grade'] ?? '' }}</span>
                            <span><i class="far fa-calendar-alt"></i> {{ isset($item['publishDate']) ? \Carbon\Carbon::parse($item['publishDate'])->format('d M, Y') : '' }}</span>
                            <span><i class="fas fa-download"></i> {{ $item['downloads'] ?? 0 }} downloads</span>
                        </div>
                        <div class="career-card__actions">
                            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($item, 'file_url', '#')) }}" class="career-btn career-btn--view"><i class="far fa-eye" style="margin-right:4px"></i> View</a>
                            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($item, 'file_url', '#')) }}" class="career-btn career-btn--download"><i class="fas fa-download" style="margin-right:4px"></i> Download</a>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Shortlisted Candidates --}}
        <div class="career-section" data-career-section="shortlisted">
            <h3 class="career-section__title">Shortlisted Candidates</h3>
            <div class="career-filter">
                <div class="career-filter__grid">
                    <input class="career-filter__field" type="text" placeholder="Search Keyword..." data-career-search>
                    <select class="career-filter__select" data-career-sort-field>
                        <option value="publishDate" selected>Publish Date</option>
                        <option value="title">Title</option>
                        <option value="downloads">Downloads</option>
                    </select>
                    <select class="career-filter__select" data-career-sort-order>
                        <option value="desc" selected>Descending</option>
                        <option value="asc">Ascending</option>
                    </select>
                    <button class="career-filter__button" type="button" data-career-apply>Apply Filter</button>
                </div>
            </div>
            <div class="career-results">
                <div class="career-empty" data-career-empty>
                    <i class="far fa-folder-open"></i>
                    No shortlisted candidates information available at the moment.
                </div>
                <div class="career-items" data-career-items>
                    @foreach($careersJson->where('section', 'shortlisted') as $item)
                    <article class="career-card" data-career-card data-title="{{ $item['title'] }}" data-search="{{ $item['search'] ?? '' }}" data-publish-date="{{ $item['publishDate'] ?? '' }}" data-downloads="{{ $item['downloads'] ?? 0 }}">
                        <h4 class="career-card__title">
                            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($item, 'file_url', '#')) }}">{{ $item['title'] }}</a>
                        </h4>
                        <div class="career-card__meta">
                            <span><i class="fa fa-map-marker-alt"></i> {{ $item['location'] ?? '' }}</span>
                            <span><i class="fa fa-briefcase"></i> {{ $item['grade'] ?? '' }}</span>
                            <span><i class="far fa-calendar-alt"></i> {{ isset($item['publishDate']) ? \Carbon\Carbon::parse($item['publishDate'])->format('d M, Y') : '' }}</span>
                            <span><i class="fas fa-download"></i> {{ $item['downloads'] ?? 0 }} downloads</span>
                        </div>
                        <div class="career-card__actions">
                            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($item, 'file_url', '#')) }}" class="career-btn career-btn--view"><i class="far fa-eye" style="margin-right:4px"></i> View</a>
                            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($item, 'file_url', '#')) }}" class="career-btn career-btn--download"><i class="fas fa-download" style="margin-right:4px"></i> Download</a>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Appointments --}}
        <div class="career-section" data-career-section="appointments">
            <h3 class="career-section__title">Appointments</h3>
            <div class="career-filter">
                <div class="career-filter__grid">
                    <input class="career-filter__field" type="text" placeholder="Search Keyword..." data-career-search>
                    <select class="career-filter__select" data-career-sort-field>
                        <option value="publishDate" selected>Publish Date</option>
                        <option value="title">Title</option>
                        <option value="downloads">Downloads</option>
                    </select>
                    <select class="career-filter__select" data-career-sort-order>
                        <option value="desc" selected>Descending</option>
                        <option value="asc">Ascending</option>
                    </select>
                    <button class="career-filter__button" type="button" data-career-apply>Apply Filter</button>
                </div>
            </div>
            <div class="career-results">
                <div class="career-empty" data-career-empty>
                    <i class="far fa-folder-open"></i>
                    No appointments information available at the moment.
                </div>
                <div class="career-items" data-career-items>
                    @foreach($careersJson->where('section', 'appointments') as $item)
                    <article class="career-card" data-career-card data-title="{{ $item['title'] }}" data-search="{{ $item['search'] ?? '' }}" data-publish-date="{{ $item['publishDate'] ?? '' }}" data-downloads="{{ $item['downloads'] ?? 0 }}">
                        <h4 class="career-card__title">
                            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($item, 'file_url', '#')) }}">{{ $item['title'] }}</a>
                        </h4>
                        <div class="career-card__meta">
                            <span><i class="fa fa-map-marker-alt"></i> {{ $item['location'] ?? '' }}</span>
                            <span><i class="fa fa-briefcase"></i> {{ $item['grade'] ?? '' }}</span>
                            <span><i class="far fa-calendar-alt"></i> {{ isset($item['publishDate']) ? \Carbon\Carbon::parse($item['publishDate'])->format('d M, Y') : '' }}</span>
                            <span><i class="fas fa-download"></i> {{ $item['downloads'] ?? 0 }} downloads</span>
                        </div>
                        <div class="career-card__actions">
                            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($item, 'file_url', '#')) }}" class="career-btn career-btn--view"><i class="far fa-eye" style="margin-right:4px"></i> View</a>
                            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($item, 'file_url', '#')) }}" class="career-btn career-btn--download"><i class="fas fa-download" style="margin-right:4px"></i> Download</a>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Instructions --}}
        <div class="career-section" data-career-section="instructions">
            <h3 class="career-section__title">Instructions</h3>
            <div class="career-filter">
                <div class="career-filter__grid">
                    <input class="career-filter__field" type="text" placeholder="Search Keyword..." data-career-search>
                    <select class="career-filter__select" data-career-sort-field>
                        <option value="publishDate" selected>Publish Date</option>
                        <option value="title">Title</option>
                        <option value="downloads">Downloads</option>
                    </select>
                    <select class="career-filter__select" data-career-sort-order>
                        <option value="desc" selected>Descending</option>
                        <option value="asc">Ascending</option>
                    </select>
                    <button class="career-filter__button" type="button" data-career-apply>Apply Filter</button>
                </div>
            </div>
            <div class="career-results">
                <div class="career-empty" data-career-empty>
                    <i class="far fa-folder-open"></i>
                    No instructions available at the moment.
                </div>
                <div class="career-items" data-career-items>
                    @foreach($careersJson->where('section', 'instructions') as $item)
                    <article class="career-card" data-career-card data-title="{{ $item['title'] }}" data-search="{{ $item['search'] ?? '' }}" data-publish-date="{{ $item['publishDate'] ?? '' }}" data-downloads="{{ $item['downloads'] ?? 0 }}">
                        <h4 class="career-card__title">
                            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($item, 'file_url', '#')) }}">{{ $item['title'] }}</a>
                        </h4>
                        <div class="career-card__meta">
                            <span><i class="fa fa-map-marker-alt"></i> {{ $item['location'] ?? '' }}</span>
                            <span><i class="fa fa-briefcase"></i> {{ $item['grade'] ?? '' }}</span>
                            <span><i class="far fa-calendar-alt"></i> {{ isset($item['publishDate']) ? \Carbon\Carbon::parse($item['publishDate'])->format('d M, Y') : '' }}</span>
                            <span><i class="fas fa-download"></i> {{ $item['downloads'] ?? 0 }} downloads</span>
                        </div>
                        <div class="career-card__actions">
                            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($item, 'file_url', '#')) }}" class="career-btn career-btn--view"><i class="far fa-eye" style="margin-right:4px"></i> View</a>
                            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($item, 'file_url', '#')) }}" class="career-btn career-btn--download"><i class="fas fa-download" style="margin-right:4px"></i> Download</a>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Archived Jobs --}}
        <div class="career-section" data-career-section="archived">
            <h3 class="career-section__title">Archived Jobs</h3>
            <div class="career-filter">
                <div class="career-filter__grid">
                    <input class="career-filter__field" type="text" placeholder="Search Keyword..." data-career-search>
                    <select class="career-filter__select" data-career-sort-field>
                        <option value="archivedDate" selected>Archived Date</option>
                        <option value="title">Title</option>
                        <option value="downloads">Downloads</option>
                    </select>
                    <select class="career-filter__select" data-career-sort-order>
                        <option value="desc" selected>Descending</option>
                        <option value="asc">Ascending</option>
                    </select>
                    <button class="career-filter__button" type="button" data-career-apply>Apply Filter</button>
                </div>
            </div>
            <div class="career-results">
                <div class="career-empty is-hidden" data-career-empty>
                    <i class="far fa-folder-open"></i>
                    No archived jobs matched your filter.
                </div>
                <div class="career-items" data-career-items>
                    @foreach($careersJson->where('section', 'archived') as $item)
                    <article class="career-card" data-career-card data-title="{{ $item['title'] }}" data-search="{{ $item['search'] ?? '' }}" data-publish-date="{{ $item['publishDate'] ?? '' }}" data-archived-date="{{ $item['archivedDate'] ?? '' }}" data-downloads="{{ $item['downloads'] ?? 0 }}">
                        <h4 class="career-card__title">
                            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($item, 'file_url', '#')) }}">{{ $item['title'] }}</a>
                        </h4>
                        <div class="career-card__meta">
                            <span><i class="fa fa-map-marker-alt"></i> {{ $item['location'] ?? '' }}</span>
                            <span><i class="fa fa-briefcase"></i> {{ $item['grade'] ?? '' }}</span>
                            <span><i class="far fa-calendar-alt"></i> {{ isset($item['publishDate']) ? \Carbon\Carbon::parse($item['publishDate'])->format('d M, Y') : '' }}</span>
                            <span><i class="fas fa-download"></i> {{ $item['downloads'] ?? 0 }} downloads</span>
                        </div>
                        <div class="career-card__actions">
                            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($item, 'file_url', '#')) }}" class="career-btn career-btn--view"><i class="far fa-eye" style="margin-right:4px"></i> View</a>
                            <a href="{{ \App\Models\HomePage::resolveUrl(data_get($item, 'file_url', '#')) }}" class="career-btn career-btn--download"><i class="fas fa-download" style="margin-right:4px"></i> Download</a>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(function () {
        $('.career-section').each(function () {
            var $section = $(this);
            var $cards = $section.find('[data-career-card]');
            var $empty = $section.find('[data-career-empty]');
            var $search = $section.find('[data-career-search]');
            var $sortField = $section.find('[data-career-sort-field]');
            var $sortOrder = $section.find('[data-career-sort-order]');
            var $items = $section.find('[data-career-items]');
            var $apply = $section.find('[data-career-apply]');

            function applyFilter() {
                if (!$cards.length) return;

                var keyword = $.trim(($search.val() || '').toString().toLowerCase());
                var sortField = $sortField.val();
                var sortOrder = $sortOrder.val();
                var matches = [];

                $cards.each(function () {
                    var $card = $(this);
                    var haystack = ($card.data('search') || $card.text()).toString().toLowerCase();
                    if (!keyword || haystack.indexOf(keyword) !== -1) {
                        matches.push($card);
                    }
                });

                matches.sort(function (a, b) {
                    var aVal = a.data(sortField) || '';
                    var bVal = b.data(sortField) || '';

                    if (sortField === 'downloads') {
                        aVal = parseInt(aVal, 10) || 0;
                        bVal = parseInt(bVal, 10) || 0;
                        return sortOrder === 'asc' ? aVal - bVal : bVal - aVal;
                    }

                    aVal = aVal.toString();
                    bVal = bVal.toString();
                    return sortOrder === 'asc' ? aVal.localeCompare(bVal) : bVal.localeCompare(aVal);
                });

                $items.empty();
                if (matches.length) {
                    $.each(matches, function (_, $card) { $items.append($card); });
                    $empty.addClass('is-hidden');
                } else {
                    $empty.removeClass('is-hidden');
                }
            }

            $apply.on('click', applyFilter);
            $search.on('keyup', function (e) {
                if (e.key === 'Enter') applyFilter();
            });

            applyFilter();
        });
    });
</script>
@endsection
