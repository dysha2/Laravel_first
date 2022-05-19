@extends('layouts.app')

@section('content')>
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
                                    class="tm-tabs__tab-link" >
                                        Статьи
                                    </a>
                                </span>
                                <span class="tm-tabs__tab-item">
                                    <a href="/news" class="tm-tabs__tab-link">
                                        Новости
                                    </a>
                                </span>
                                <span class="tm-tabs__tab-item">
                                    <a href="/hubs" class="tm-tabs__tab-link">
                                        Хабы
                                    </a>
                                </span>
                                <span class="tm-tabs__tab-item">
                                    <a href="/users" class="tm-tabs__tab-link tm-tabs__tab-link_active">
                                        Авторы
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="tm-users-list__sorting-panel">
                            <div class="tm-navigation-sorting">
                                <div class="tm-navigation-sorting__row-option">
                                    Имя

                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="tm-users-list">
                            @foreach($Users as $User)
                            <div class="tm-users-list__item">
                                <div class="tm-users-list__user-wrapper">
                                    <div class="tm-user-snippet"><a href="/user/{{$User->UserId}}"
                                            class="tm-user-snippet__userpic-link">
                                            <div class="tm-entity-image"><img alt=""
                                                    src="/images/Users/{{$User->Image}}"
                                                    class="tm-entity-image__pic"></div>
                                        </a>
                                        <div class="tm-user-snippet__info"><a href="/user/{{$User->UserId}}"
                                                class="tm-user-snippet__title">{{$User->Fullname}}</a> <a
                                                href="/user/{{$User->UserId}}" class="tm-user-snippet__nickname">
                                                @ {{$User->Login}}
                                            </a>
                                            <div class="tm-user-snippet__description">
                                                {{$User->Description}}
                                            </div>
                                            <?php $post=$User->Posts->sortByDesc("Date")->first();?>
                                            @if (isset($post))
                                            <div class="tm-user-snippet__last-post"><a href="/post/{{$post->PostId}}"
                                                    class="tm-user-snippet__last-post-link">
                                                    <?php 
                                                    echo $post->Title;
                                                    ?>
                                                </a> <time datetime="2022-05-07T18:41:30.000Z"
                                                    title="2022-05-07, 23:41"
                                                    class="tm-user-snippet__last-post-datetime"><?php echo $post->Date;?></time>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
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
                                    <h2 class="tm-block__title">Статистика</h2>
                                </div>
                                
                            </header>
                            <div class="tm-block__body tm-block__body">
                                <dl
                                    class="tm-description-list tm-description-list tm-description-list_variant-columns-numbers">
                                    <dt
                                        class="tm-description-list__title tm-description-list__title tm-description-list__title_variant-columns-numbers">
                                        Всего</dt>
                                    <dd
                                        class="tm-description-list__body tm-description-list__body tm-description-list__body_variant-columns-numbers">
                                        <span>{{$Users->Count()}}</span></dd>
                                </dl>
                                
                            </div>
                            
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection