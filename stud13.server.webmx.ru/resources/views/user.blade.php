@extends('layouts.app')

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
                                                    src="/images/Users/{{$User->Image}}"
                                                    class="tm-entity-image__pic"></div>
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
                                    <p class="tm-user-card__short-info tm-user-card__short-info">{{$User->Description}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="tm-tabs tm-user__tabs tm-tabs">
                            <div class="tm-tabs__padding-area"><span class="tm-tabs__tab-item"><a
                                        href="/user/{{$User->UserId}}" aria-current="page"
                                        class="tm-tabs__tab-link router-link-exact-active  tm-tabs__tab-link_active"
                                        data-test-id="tab-link-active">
                                        Профиль
                                        
                                    </a></span><span class="tm-tabs__tab-item"><a href="/user/{{$User->UserId}}/posts"
                                        class="tm-tabs__tab-link">
                                        Публикации
                                        <span class="tm-tabs__tab-counter">
                                            {{$User->Posts->Count()}}
                                        </span></a></span></div>
                        </div>
                        
                        
                    </section>
                    
                    <div class="tm-profile__body">
                        <dl class="tm-description-list tm-description-list tm-description-list_variant-base">
                            <dt
                                class="tm-description-list__title tm-description-list__title tm-description-list__title_variant-base">
                                О себе</dt>
                            <dd
                                class="tm-description-list__body tm-description-list__body tm-description-list__body_variant-base">
                                <div class="tm-user-profile__content"><span>{{$User->AboutSelf}}</span></div>
                            </dd>
                        </dl>
                        
                        
                        <dl class="tm-description-list tm-description-list tm-description-list_variant-base">
                            <dt
                                class="tm-description-list__title tm-description-list__title tm-description-list__title_variant-base">
                                Состоит в хабах</dt>
                            <dd
                                class="tm-description-list__body tm-description-list__body tm-description-list__body_variant-base">
                                <div class="tm-show-more-handler">
                                    <div class="tm-show-more-handler__content">
                                        <div class="tm-user-hubs">
                                            <div>
                                                @foreach ($User->UserHubs as $hub)
                                                <div class="tm-user-hubs__item">
                                                    <div class="tm-hub-link-popup">
                                                        <div class="tm-hub-link-popup__link"><a href="/hub/{{$hub->Hub->HubId}}"
                                                                class="tm-user-hubs__hub"><span>{{$hub->Hub->Name}}</span></a></div>
                                                        
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </dd>
                        </dl>
                        
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
                                            <time>{{$User->RegDate}}</time></dd>
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