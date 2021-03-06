@extends('main')

@section('page')
    <div class="container-fluid page-container">
        @if($news_item == 'index')
            <div class="news">
                <div class="news-logo"><span>News</span></div>
                <a class="rss-link" href="/rss/news" title="Archstrike News RSS Feed"><img src="/img/rss.png" alt="RSS" /></a>

                @foreach($news_items as $news_item)
                    @include('news.' . $news_item, [ 'include' => 'elements.news-item' ])
                @endforeach
            </div>
        @else
            <div class="news-page-container">
                @include('news.' . $news_item, [ 'include' => 'elements.news-page' ])
            </div>
        @endif
    </div>
@endsection
