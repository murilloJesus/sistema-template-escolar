<header id="header">
    <nav id="nav">
        <ul>
            <li><a href="/">Home</a></li>
            @foreach ($configs->structure as $menu)
            @continue($menu->title == "Home")
            <li>
                <a href="/{{ $menu->alias }}">{{ $menu->title }}</a>
            </li>
            @endforeach
        </ul>
    </nav>
</header>
