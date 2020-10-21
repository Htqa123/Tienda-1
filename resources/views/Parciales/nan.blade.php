
<nav>
    <ul>
        <li class="{{ request()->routeIs('welcome') ? 'active' : '' }}"><a href="/"></a>welcome</a></li>
        <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="/home"></a>home</a></li>
    </ul>
</nav>