@extends('layouts.app')

@section('content')
<div class="tm-page">
    <div class="tm-page-width">
        <div class="tm-page__wrapper">
            <div class="tm-page__main tm-page__main_has-sidebar">
                <div class="pull-down">
                    <div>
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
                                            <div>
                                                <button><a href="/console/hubupdate/{{$Hub->HubId}}">Редачить</a></button>
                                                <button><a href="/console/hubdelete/{{$Hub->HubId}}">Отменить</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        <button><a href="/console/hubadd"><h1>Add</h1></a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection