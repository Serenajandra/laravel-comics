<div class="container">
    @foreach ($comics as $comic)
        <li class="card"><img src="{{ $comic['thumb'] }}" :alt="{{ $comic['title'] }}">
            <h3>{{ $comic['title'] }}</h3>
            <p>{{ $comic['series'] }}</p>
            <p>{{ $comic['description'] }}</p>
            <p>{{ $comic['sale_date'] }}</p>
            {{-- <p>{{ $comic['artists'] }}</p>
            <p>{{ $comic['writers'] }}</p> --}}
        </li>
    @endforeach
</div>
