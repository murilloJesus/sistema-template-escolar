<section id="{{ $page->alias }}" class="main style1 dark fullscreen">
    <div class="content">
        <header>
            <h2>{{ ___('institutional.name', $configs) }}</h2>
        </header>
        <p>{{ ___('institutional.description', $configs) }}</p>
        @if ($configs->structure[$index + 1])
            <footer>
                <a href="#{{ $configs->structure[$index + 1]->alias }}" class="button style2 down">More</a>
            </footer>
        @endif
    </div>
</section>
