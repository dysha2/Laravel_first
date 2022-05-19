@extends('layouts.app')

@section('content')
<div class="tm-page">
    <div class="tm-page-width">
        <div class="tm-page__wrapper">
            <div class="tm-page__main tm-page__main_has-sidebar">
                <div class="pull-down">
                    <div>
                        <div class="tm-users-list">
                            @foreach($Users as $User)
                            <div class="tm-users-list__item">
                                <div class="tm-users-list__user-wrapper">
                                    <div class="tm-user-snippet"><a href="/console/userupdate/{{$User->UserId}}"
                                            class="tm-user-snippet__userpic-link">
                                            <div class="tm-entity-image"><img alt=""
                                                    src="/images/Users/{{$User->Image}}" class="tm-entity-image__pic">
                                            </div>
                                        </a>
                                        <div class="tm-user-snippet__info"><a href="/console/userupdate/{{$User->UserId}}"
                                                class="tm-user-snippet__title">{{$User->Fullname}}</a> <a
                                                href="/console/userupdate/{{$User->UserId}}" class="tm-user-snippet__nickname">
                                                @ {{$User->Login}}
                                            </a>
                                            <div class="tm-user-snippet__description">
                                                {{$User->Description}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tm-users-list__score-counters"><span
                                        class="tm-users-list__score-counter tm-users-list__score-counter_rating">
                                        <button><a href="/console/userdelete/{{$User->UserId}}">Отменить</a></button>
                                    </span> <span
                                        class="tm-users-list__score-counter tm-users-list__score-counter_karma tm-users-list__score-counter_karma-positive">
                                        <button><a href="/console/userupdate/{{$User->UserId}}">Edit</a></button>
                                    </span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <button><a href="/console/useradd"><h1>Add</h1></a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection