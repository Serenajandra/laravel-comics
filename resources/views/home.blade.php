@extends('Layouts.app')

@section('home-content')
    <section>
        @include('Layouts.partials.header')
        <div class="banner-container">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="banner">
        </div>
    </section>

    <section>
        <div class="cards-container">
            <div class="title">
                <h3>current series</h3>
            </div>

            <ul class="row">
                @foreach ($comics as $comic)
                    <li class="card"><img src="{{ $comic['thumb'] }}" :alt="{{ $comic['title'] }}">
                        <p>{{ $comic['title'] }}</p>
                    </li>
                @endforeach

            </ul>

            <div class="btn">
                <a href="/details">Load more</a>
            </div>

        </div>
    </section>
    <section>
        <div class="container">
            <nav>
                <ul>
                    <li>
                        <img src="{{}}">
                        <a href=""></a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
@endsection
