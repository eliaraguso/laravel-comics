@extends('layout.base')

@section('pageContent')

    <section class="hero"></section>
    <div class="current-series">CURRENT SERIES</div>
    <div class="container">
        <section class="comics">
            @foreach ($fumetti as $fumetto)
                <div class="card">
                    <div class="card-image">
                        <img src="{{ $fumetto['thumb'] }}" alt="{{ $fumetto['title'] }} image">
                    </div>
                    <div class="card-title">
                        {{ $fumetto['title'] }}
                    </div>
                </div>
            @endforeach
        </section>
    </div>
    {{-- @dd($fumetti); --}}

@endsection
