<header class="main__header">
    <ul class="header__nav">
        <li class="nav__item"><a href="{{route("main")}}" class="nav__link">Главная</a></li>
        <li class="nav__item"><a href="#" class="nav__link nav__item--burger">Статьи</a></li>
        <li class="nav__item"><a href="#" class="nav__link">Обо мне</a></li>
        <li class="nav__item"><a href="{{route("stories.create")}}" class="nav__link">Реклама</a></li>
    </ul>
    <a href="#" class="header__profile-link">Профиль</a>
    <form action="" method="get" class="header__search-form">
        <input type="search" name="search-blog" id="search-blog" class="haeder__search-input" placeholder="Поиск по блогу">
    </form>
</header>