@extends('layouts.app')

@section('content')

<div class="tm-page">
    <div class="tm-page-width">
        <div class="tm-page__wrapper">
            <div class="tm-page__main tm-page__main_has-sidebar">
                <div class="pull-down">
                    <div class="pull-down__header" style="height:0px;">
                        <div class="pull-down__content" style="bottom:10px;">
                            <svg height="24" width="24" class="tm-svg-img pull-down__arrow">
                                <title>Обновить</title>
                                <use xlink:href="/img/megazord-v25.29545111.svg#pull-arrow">
                                </use>
                            </svg>
                        </div>
                    </div>
                    <div class="tm-page__top">
                        <div class="tm-section-name">
                            <h1 class="tm-section-name__text">
                                Все потоки
                            </h1>
                        </div>
                        <div class="tm-tabs tm-tabs_page-header tm-tabs">
                            <div class="tm-tabs__scroll-area">
                                <span class="tm-tabs__tab-item">
                                    <a href="/" data-test-id="tab-link-active"
                                    class="tm-tabs__tab-link">
                                        Статьи
                                    </a>
                                </span>
                                <span class="tm-tabs__tab-item">
                                    <a href="/news" 
                                    class="tm-tabs__tab-link tm-tabs__tab-link_active">
                                        Новости
                                    </a>
                                </span>
                                <span class="tm-tabs__tab-item">
                                    <a href="/hubs" class="tm-tabs__tab-link">
                                        Хабы
                                    </a>
                                </span>
                                <span class="tm-tabs__tab-item">
                                    <a href="/users" class="tm-tabs__tab-link">
                                        Авторы
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div data-async-called="true" class="tm-articles-subpage">
                        <div>
                            <div class="tm-articles-list">
                                @foreach($posts as $post)
                                <article id="{{$post->PostId}}" data-navigatable="" tabindex="0"
                                    class="tm-articles-list__item">
                                    <div class="tm-article-snippet">
                                        <div class="tm-article-snippet__meta-container">
                                            <div class="tm-article-snippet__meta">
                                                <span class="tm-user-info tm-article-snippet__author">
                                                    <a href="/user/{{$post->User->UserId}}"
                                                        title="{{$post->User->Login}}" class="tm-user-info__userpic">
                                                        <div class="tm-entity-image">
                                                            <img height="24" src="/images/Users/{{$post->User->Image}}"
                                                                width="24" class="tm-entity-image__pic">
                                                        </div>
                                                    </a>
                                                    <span class="tm-user-info__user">
                                                        <a href="/user/{{$post->User->UserId}}"
                                                            class="tm-user-info__username">
                                                            {{$post->User->Login}}
                                                        </a>
                                                    </span>
                                                </span>
                                                <span class="tm-article-snippet__datetime-published">
                                                    <time datetime="2022-05-13T06:39:47.000Z"
                                                        title="2022-05-13, 09:39">{{$post->Date}}</time>
                                                </span>
                                            </div>
                                        </div>
                                        <h2 class="tm-article-snippet__title tm-article-snippet__title_h2">
                                            <a href="/post/{{$post->PostId}}" data-article-link=""
                                                class="tm-article-snippet__title-link">
                                                <span>{{$post->Title}}</span>
                                            </a>
                                        </h2>
                                        <div class="tm-article-snippet__hubs">
                                            @foreach($post->HubPosts as $hub)
                                            <span class="tm-article-snippet__hubs-item">
                                                <a href="/hub/{{$hub->Hub->HubId}}" class="tm-article-snippet__hubs-item-link">
                                                    <span>{{$hub->Hub->Name}}</span>
                                                </a>
                                            </span>
                                            @endforeach
                                        </div>
                                        <div class="tm-article-body tm-article-snippet__lead">
                                            @if (isset($post->Image))
                                            <div class="tm-article-snippet__cover tm-article-snippet__cover_cover">
                                                <img src="/images/Posts/{{$post->Image}}"
                                                    class="tm-article-snippet__lead-image"
                                                    style="object-position:0% 0%;">
                                            </div>
                                            @endif
                                            <div>
                                                <div>
                                                    {!!$post-> ShortContent!!}
                                                </div>
                                                <DIV class="v-portal" style="display:none;">
                                                </DIV>
                                            </div> <a href="/post/{{$post->PostId}}"
                                                class="tm-article-snippet__readmore">
                                                <span>Читать далее</span>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-page__sidebar">
                <div data-async-called="true" class="tm-layout-sidebar">
                    <div class="tm-layout-sidebar__ads tm-layout-sidebar__ads_initial">
                        <div class="tm-adfox-banner__container tm-layout-sidebar__banner tm-layout-sidebar__banner_top">
                            <div id="adfox_164725680533065327"
                                class="tm-adfox-banner tm-adfox-banner tm-adfox-banner_variant-half-page">
                            </div>
                        </div>
                    </div>
                    <div class="tm-sexy-sidebar tm-sexy-sidebar_initial" style="margin-top:0px;">
                        <section class="tm-block tm-block tm-block_spacing-bottom">
                            <header class="tm-block__header tm-block__header">
                                <div class="tm-block__header-container">
                                    <h2 class="tm-block__title">Лучшие люди, гордость сайта</h2>
                                </div>
                            </header>
                            <div class="tm-block__body tm-block__body">
                                <div class="tm-companies-rating">
                                    <a href="/user/1" class="tm-companies-rating__item">
                                        <div class="tm-entity-image tm-companies-rating__avatar">
                                            <img alt="" height="36"
                                                src="/images/Users/ava3.jpg"
                                                width="36" class="tm-entity-image__pic">
                                        </div> <span class="tm-companies-rating__name">Dysha</span>
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
