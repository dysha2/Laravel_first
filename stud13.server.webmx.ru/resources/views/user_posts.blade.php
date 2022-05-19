@extends('layouts.app')

@section('content')
@section('content')
<div class="tm-page tm-user">
    <div class="tm-page-width">
        <div class="tm-page__wrapper">
            <div class="tm-page__main tm-page__main_has-sidebar">
                <div class="pull-down">
                    <section class="tm-block tm-block tm-block_spacing-bottom">
                        <div class="tm-user-card tm-user__user-card tm-user-card">
                            <div class="tm-user-card__info-container">
                                <div class="tm-user-card__header">
                                    <div class="tm-user-card__header-data"><a href="/user/{{$User->UserId}}"
                                            aria-current="page"
                                            class="tm-user-card__userpic router-link-exact-active router-link-active tm-user-card__userpic_size-48">
                                            <div class="tm-entity-image"><img alt=""
                                                    src="/images/Users/{{$User->Image}}" class="tm-entity-image__pic">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="tm-user-card__info tm-user-card__info">
                                    <div class="tm-user-card__title tm-user-card__title"><span
                                            class="tm-user-card__name tm-user-card__name">{{$User->Fullname}}</span> <a
                                            href="/user/{{$User->UserId}}" aria-current="page"
                                            class="tm-user-card__nickname router-link-exact-active router-link-active tm-user-card__nickname">
                                            @ {{$User->Login}}
                                        </a>

                                    </div>
                                    <p class="tm-user-card__short-info tm-user-card__short-info">{{$User->Description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tm-tabs tm-user__tabs tm-tabs">
                            <div class="tm-tabs__padding-area"><span class="tm-tabs__tab-item"><a
                                        href="/user/{{$User->UserId}}" aria-current="page" class="tm-tabs__tab-link"
                                        data-test-id="tab-link-active">
                                        Профиль

                                    </a></span><span class="tm-tabs__tab-item"><a href="/user/{{$User->UserId}}/posts"
                                        class="tm-tabs__tab-link router-link-exact-active  tm-tabs__tab-link_active">
                                        Публикации
                                        <span class="tm-tabs__tab-counter">
                                            {{$User->Posts->Count()}}
                                        </span></a></span></div>
                        </div>
                    </section>
                    <div class="tm-articles-list">
                        @foreach($User->Posts as $post)
                        <article id="{{$post->PostId}}" data-navigatable="" tabindex="0" class="tm-articles-list__item">
                            <div class="tm-article-snippet">
                                <div class="tm-article-snippet__meta-container">
                                    <div class="tm-article-snippet__meta">
                                        <span class="tm-user-info tm-article-snippet__author">
                                            <a href="/user/{{$post->User->UserId}}" title="{{$post->User->Login}}"
                                                class="tm-user-info__userpic">
                                                <div class="tm-entity-image">
                                                    <img height="24" src="/images/Users/{{$post->User->Image}}"
                                                        width="24" class="tm-entity-image__pic">
                                                </div>
                                            </a>
                                            <span class="tm-user-info__user">
                                                <a href="/user/{{$post->User->UserId}}" class="tm-user-info__username">
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
                                        <img src="/images/Posts/{{$post->Image}}" class="tm-article-snippet__lead-image"
                                            style="object-position:0% 0%;">
                                    </div>
                                    @endif
                                    <div>
                                        <div>
                                            {!!$post-> ShortContent!!}
                                        </div>
                                        <DIV class="v-portal" style="display:none;">
                                        </DIV>
                                    </div> <a href="/post/{{$post->PostId}}" class="tm-article-snippet__readmore">
                                        <span>Читать далее</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tm-page__sidebar">
                <div class="tm-layout-sidebar">
                    <div class="tm-layout-sidebar__placeholder_stick-top"></div>
                    <div class="tm-sexy-sidebar tm-sexy-sidebar_stick-top" style="margin-top: 0px;">
                        <section class="tm-block tm-block tm-block_spacing-bottom">
                            <header class="tm-block__header tm-block__header">
                                <div class="tm-block__header-container">
                                    <h2 class="tm-block__title">Информация</h2>
                                </div>

                            </header>
                            <div class="tm-block__body tm-block__body">
                                <div class="tm-user-basic-info">
                                    <dl
                                        class="tm-description-list tm-description-list tm-description-list_variant-columns">
                                        <dt
                                            class="tm-description-list__title tm-description-list__title tm-description-list__title_variant-columns">
                                            Откуда</dt>
                                        <dd
                                            class="tm-description-list__body tm-description-list__body tm-description-list__body_variant-columns">
                                            {{$User->Address}}
                                        </dd>
                                    </dl>
                                    <dl
                                        class="tm-description-list tm-description-list tm-description-list_variant-columns">
                                        <dt
                                            class="tm-description-list__title tm-description-list__title tm-description-list__title_variant-columns">
                                            Зарегистрирован </dt>
                                        <dd
                                            class="tm-description-list__body tm-description-list__body tm-description-list__body_variant-columns">
                                            <time>{{$User->RegDate}}</time>
                                        </dd>
                                    </dl>
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
