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

            {{-- <li v-for="(link, index) in links" :key="index">
                <a :class="{ active: link.active }" :href="link.href">{{ link . title . toUpperCase() }}</a>
            </li> --}}
        </ul>
    </nav>
</header>
