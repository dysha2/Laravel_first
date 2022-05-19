@extends('layouts.app')

@section('content')
<div class="tm-page">
    <div class="tm-page-width">
        <div class="tm-page__wrapper">
            <div class="tm-page__main tm-page__main_has-sidebar">

                <article id="{{$post->PostId}}" data-navigatable="" tabindex="0" class="tm-articles-list__item">
                                <div class="tm-article-snippet">
                                    <div class="tm-article-snippet__meta-container">
                                        <div class="tm-article-snippet__meta">
                                            <span class="tm-user-info tm-article-snippet__author">
                                                <a href="/user/{{$post->User->UserId}}" title="{{$post->User->Login}}" class="tm-user-info__userpic">
                                                    <div class="tm-entity-image">
                                                        <img height="24" src="/images/Users/{{$post->User->Image}}" width="24" class="tm-entity-image__pic">
                                                    </div>
                                                </a> 
                                                <span class="tm-user-info__user">
                                                    <a href="/user/{{$post->User->UserId}}" class="tm-user-info__username">
                                                        {{$post->User->Login}}
                                                    </a> 
                                                </span>
                                            </span>
                                            <span class="tm-article-snippet__datetime-published">
                                                <time datetime="2022-05-13T06:39:47.000Z" title="2022-05-13, 09:39">{{$post->Date}}</time>
                                            </span>
                                        </div>
                                    </div>
                                    <h2 class="tm-article-snippet__title tm-article-snippet__title_h2">
                                        <a href="/post/{{$post->PostId}}" data-article-link="" class="tm-article-snippet__title-link">
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
                                            <img src="/images/Posts/{{$post->Image}}" class="tm-article-snippet__lead-image" style="object-position:0% 0%;">
                                        </div>
                                        @endif
                                        <div>
                                            <div>
                                                {!!$post->Content!!}
                                            </div>
                                            <DIV class="v-portal" style="display:none;">
                                            </DIV>
                                        </div> 
                                    </div>
                                </div>
                                </article>
            </div>
            <div class="tm-page__sidebar">

            </div>
        </div>
    </div>
</div>
@endsection