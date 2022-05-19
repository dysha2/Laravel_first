@extends('layouts.app')

@section('content')
<div class="tm-page">
    <div class="tm-page-width">

        <div class="tm-page__wrapper">
            <div class="tm-page__main tm-page__main_has-sidebar">
                <div class="pull-down">
                    <div class="tm-page__top">
                        <div class="tm-section-name">
                            <h1 class="tm-section-name__text">
                                Все потоки
                            </h1>
                        </div>
                        <div class="tm-tabs tm-tabs_page-header tm-tabs">
                            <div class="tm-tabs__scroll-area">
                                <span class="tm-tabs__tab-item">
                                    <a href="/" data-test-id="tab-link-active" class="tm-tabs__tab-link">
                                        Статьи
                                    </a>
                                </span>
                                <span class="tm-tabs__tab-item">
                                    <a href="/news" class="tm-tabs__tab-link">
                                        Новости
                                    </a>
                                </span>
                                <span class="tm-tabs__tab-item">
                                    <a href="/hubs" class="tm-tabs__tab-link tm-tabs__tab-link_active">
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
                    <div>
                        <div class="tm-hubs-list__sorting-panel">
                            <div class="tm-navigation-sorting">
                                <div
                                    class="tm-navigation-sorting__row-option tm-navigation-sorting__row-option_sortable">
                                    Название
                                </div>
                            </div>
                        </div>
                        <div class="tm-hubs-list">
                            @foreach($Hubs as $Hub)
                            <div class="tm-hubs-list__category-wrapper" style="background-color:white">
                                <div class="tm-hubs-list__hub">
                                    <div class="tm-hub">
                                        <a href="/hub/{{$Hub->HubId}}" class="tm-hub__userpic-link">
                                            <div class="tm-entity-image"><img alt="" width="50px" height="50px"
                                                    src="/images/Hubs/{{$Hub->Image}}" class="tm-entity-image__pic">
                                            </div>
                                        </a>
                                        <div class="tm-hub__info">
                                            <div><a href="/hub/{{$Hub->HubId}}"
                                                    class="tm-hub__title"><span>{{$Hub->Name}}</span></a>

                                            </div>
                                            <div class="tm-hub__description">{{$Hub->Description}}</div>
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
                                            <img alt="" height="36" src="/images/Users/ava3.jpg" width="36"
                                                class="tm-entity-image__pic">
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