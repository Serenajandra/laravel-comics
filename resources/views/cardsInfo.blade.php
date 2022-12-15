<div class="container ms_container">
    <ul>
        @foreach ($comics as $comic)
            <li class="card"><img src="{{ $comic['thumb'] }}" :alt="{{ $comic['title'] }}">
                <p class="mb-0">{{ $comic['series'] }}</p>
                <h3 class="text-center mt-0 mb-3">{{ $comic['title'] }}</h3>

                <p>{{ $comic['description'] }}</p>
                <p>{{ $comic['sale_date'] }}</p>




                @if (count($comic['artists']) > 1)
                    @php
                        echo '<h5>Artisti:</h5>';
                    @endphp
                @else
                    @php
                        echo '<h5>Artista:</h5>';
                    @endphp
                @endif

                <ul>
                    @foreach ($comic['artists'] as $artist)
                        <li>{{ $artist }}</li>
                    @endforeach

                </ul>
                <h5>Scritto da:</h5>
                <ul>
                    @foreach ($comic['writers'] as $writer)
                        <li>{{ $writer }}</li>
                    @endforeach

                </ul>
            </li>
        @endforeach
    </ul>
    <a href="/">Torna alla homepage</a>
</div>
