@extends('layouts.app')

@section('content')
<div class="tm-page">
    <div class="tm-page-width">
        <div class="tm-page__wrapper">
            <div class="tm-page__main tm-page__main_has-sidebar">
                <div class="pull-down">
                    <div>
                        @include("Console.postform");
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection