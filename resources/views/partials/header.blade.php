<header>
    <nav class="navbar">
        <div class="container d-flex">

            <ul class="d-flex gap-2">
                <li><a href="{{ route('man') }}">Uomini</a></li>
                <li><a href="{{ route('woman') }}">Donne</a></li>
                <li><a href="{{ route('kid') }}">Bambini</a></li>
            </ul>

            <a class="text-center" href="{{ route('home') }}">
                <img src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="Logo" class="w-25">
            </a>

            <ul class="d-flex gap-2">
                <li>
                    <a href="">
                        <i class="fa-solid fa-user"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-regular fa-heart"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                    </a><i class="fa-solid fa-bag-shopping"></i>
                </li>
            </ul>

        </div>
    </nav>
</header>
