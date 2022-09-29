<section id="{{ $page->alias }}" class="main style2 {{ $index % 2 == 0 ? 'right' : 'left' }} dark fullscreen">
    <div class="content box style2">
        <header>
            <h2>{{ $page->name }}</h2>
        </header>
        {{ $page->html ?? '' }}
    </div>
    @if ($configs->structure[$index + 1])
        <a href="#{{ $configs->structure[$index + 1]->alias }}" class="button style2 down anchored">Next</a>
    @endif
</section>
