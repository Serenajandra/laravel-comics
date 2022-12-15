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
