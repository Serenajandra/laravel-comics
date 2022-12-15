<header>
    <div class="logo">
        <a href="">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dcLogo"></a>
    </div>
    <nav>
        <ul>
            @foreach ($links as $link)
                <li>{{ $link }}</li>
            @endforeach

        </ul>
    </nav>

</header>
