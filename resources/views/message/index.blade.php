@extends('base')

@section('content')

    <div class="jumbotron mb-0 pt-4 pb-4">
        @include('message.partials._form')
    </div>

    <div class="jumbotron pt-4 bg-white">
        @include('message.partials._list')
    </div>

@endsection
