<!-- Header -->
<header id="header">
    <div class="inner">
        <!-- Nav -->
        <nav>
            <ul>
                <li><a href="#menu">Menu</a></li>
            </ul>
        </nav>

    </div>
</header>

<!-- Menu -->
<nav id="menu">
    <h2>Menu</h2>
    <ul>
        <li><a href="/">Home</a></li>
        @foreach ($configs->structure as $menu)
            @continue( $menu->title == 'Home')
            <li><a href="/{{ $menu->alias }}">{{ $menu->title }}</a></li>
        @endforeach
    </ul>
</nav>
