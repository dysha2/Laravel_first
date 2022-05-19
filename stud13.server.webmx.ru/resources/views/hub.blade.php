@extends('layouts.app')

@section('content')
<div class="tm-page">
    <div class="tm-page-width">
        
        <div class="tm-page__wrapper">
            <div class="tm-page__main tm-page__main_has-sidebar">
                <div class="pull-down">
                    <div class="tm-page__top">
                        
                        <div class="tm-hub-card tm-hub-card tm-hub-card_variant-base">
                            <div class="tm-hub-card__header tm-hub-card__header tm-hub-card__header_variant-base">
                                <div class="tm-hub-card__data">
                                    <div class="tm-hub-card__avatar">
                                        <div class="tm-entity-image"><img alt=""
                                                src="/images/Hubs/{{$Hub->Image}}"
                                                class="tm-entity-image__pic"></div>
                                    </div>
                                </div>
                                <div></div>
                            </div>
                            <h1 class="tm-hub-card__name tm-hub-card__name tm-hub-card__name_variant-base">
                                <span>{{$Hub->Name}}</span> 
                            </h1>
                            <p
                                class="tm-hub-card__description tm-hub-card__description tm-hub-card__description_variant-base">
                                {{$Hub->Description}}</p>
                            <div></div>
                            
                            
                        </div>
                        <div class="tm-tabs tm-tabs_page-header tm-tabs">
                            <div class="tm-tabs__scroll-area"><span class="tm-tabs__tab-item"><a href="/hub/{{$Hub->HubId}}"
                                        aria-current="page"
                                        class="tm-tabs__tab-link router-link-exact-active  tm-tabs__tab-link_active"
                                        data-test-id="tab-link-active">
                                        Статьи
                                        
                                    </a></span></div>
                            
                        </div>
                    </div>
                    <div class="tm-articles-subpage">
                        <div>
                            <div class="tm-articles-list">
                            @foreach($Hub->HubPosts as $post)
                                <article id="{{$post->Post->PostId}}" data-navigatable="" tabindex="0"
                                    class="tm-articles-list__item">
                                    <div class="tm-article-snippet">
                                        <div class="tm-article-snippet__meta-container">
                                            <div class="tm-article-snippet__meta">
                                                <span class="tm-user-info tm-article-snippet__author">
                                                    <a href="/user/{{$post->Post->User->UserId}}"
                                                        title="{{$post->Post->User->Login}}" class="tm-user-info__userpic">
                                                        <div class="tm-entity-image">
                                                            <img height="24" src="/images/Users/{{$post->Post->User->Image}}"
                                                                width="24" class="tm-entity-image__pic">
                                                        </div>
                                                    </a>
                                                    <span class="tm-user-info__user">
                                                        <a href="/user/{{$post->Post->User->UserId}}"
                                                            class="tm-user-info__username">
                                                            {{$post->Post->User->Login}}
                                                        </a>
                                                    </span>
                                                </span>
                                                <span class="tm-article-snippet__datetime-published">
                                                    <time datetime="2022-05-13T06:39:47.000Z"
                                                        title="2022-05-13, 09:39">{{$post->Post->Date}}</time>
                                                </span>
                                            </div>
                                        </div>
                                        <h2 class="tm-article-snippet__title tm-article-snippet__title_h2">
                                            <a href="/post/{{$post->Post->PostId}}" data-article-link=""
                                                class="tm-article-snippet__title-link">
                                                <span>{{$post->Post->Title}}</span>
                                            </a>
                                        </h2>
                                        <div class="tm-article-snippet__hubs">
                                            @foreach($post->Post->HubPosts as $hub)
                                            <span class="tm-article-snippet__hubs-item">
                                                <a href="/hub/{{$hub->Hub->HubId}}" class="tm-article-snippet__hubs-item-link">
                                                    <span>{{$hub->Hub->Name}}</span>
                                                </a>
                                            </span>
                                            @endforeach
                                        </div>
                                        <div class="tm-article-body tm-article-snippet__lead">
                                            @if (isset($post->Post->Image))
                                            <div class="tm-article-snippet__cover tm-article-snippet__cover_cover">
                                                <img src="/images/Posts/{{$post->Post->Image}}"
                                                    class="tm-article-snippet__lead-image"
                                                    style="object-position:0% 0%;">
                                            </div>
                                            @endif
                                            <div>
                                                <div>
                                                    {!!$post->Post-> ShortContent!!}
                                                </div>
                                                <DIV class="v-portal" style="display:none;">
                                                </DIV>
                                            </div> <a href="/post/{{$post->Post->PostId}}"
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
                <div class="tm-layout-sidebar">
                    <div class="tm-layout-sidebar__ads tm-layout-sidebar__ads_stick-top">
                        <div class="tm-adfox-banner__container tm-layout-sidebar__banner tm-layout-sidebar__banner_top">
                            
                            <div id="adfox_164725680533065327"
                                class="tm-adfox-banner tm-adfox-banner tm-adfox-banner_variant-half-page"></div>
                        </div>
                    </div>
                    <div class="tm-sexy-sidebar tm-sexy-sidebar_stick-top" style="margin-top: 0px;">
                        
                        <section class="tm-block tm-block tm-block_spacing-bottom">
                            <header class="tm-block__header tm-block__header">
                                <div class="tm-block__header-container">
                                    <h2 class="tm-block__title">Вклад авторов</h2>
                                </div>
                                
                            </header>
                            <div class="tm-block__body tm-block__body">
                                <ul class="tm-contribution-list">
                                    @foreach ($Hub->HubUsers as $HubUser)
                                    <li class="tm-contribution-list__item">
                                        <aside class="tm-contribution-list__aside"><a href="/user/{{$HubUser->User->UserId}}" class="">
                                                <div class="tm-entity-image"><img alt="" height="36"
                                                        src="/images/Users/{{$HubUser->User->Image}}"
                                                        width="36" class="tm-entity-image__pic"></div>
                                            </a></aside>
                                        <div class="tm-contribution-list__main">
                                            <header class="tm-contribution-list__header"><a href="/user/{{$HubUser->User->UserId}}"
                                                    class="tm-authors-block__author-name">{{$HubUser->User->Login}}</a>
                                                <div class="tm-contribution-list__contribution">
                                                    <?php
                                                    $counter=0;
                                                    foreach ($HubUser->Hub->HubPosts as $HubPost){
                                                        if ($HubPost->Post->UserId==$HubUser->User->UserId) $counter++;
                                                    }
                                                    echo $counter;
                                                    ?>
                                                </div>
                                            </header>
                                            <div class="tm-contribution-list__progress-bar">
                                                <div class="tm-contribution-list__progress" style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                        </section>
                        <div
                            class="tm-adfox-banner__container tm-layout-sidebar__banner tm-layout-sidebar__banner_bottom">
                            
                            <div id="adfox_164725691003361602"
                                class="tm-adfox-banner tm-adfox-banner tm-adfox-banner_variant-medium-rectangle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection