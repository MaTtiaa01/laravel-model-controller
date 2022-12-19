<header class="">
    <ul class="nav justify-content-center bg-dark py-2">
        <li class="nav-item">
            <a class="nav-link text-uppercase {{Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{route('home')}}">home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-uppercase {{Route::currentRouteName() === 'about' ? 'active' : ''}}" href="{{route('about')}}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-uppercase {{Route::currentRouteName() === 'contacts' ? 'active' : ''}}" href="{{route('contacts')}}">Contacts</a>
        </li>
    </ul>
</header>