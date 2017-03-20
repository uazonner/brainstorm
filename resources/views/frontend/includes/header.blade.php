    <header id="main">
        <div class="container">
            <div id="blog-info">
                <div class="blog-name">
                    <a href="/">Brainstorm</a>
                </div>
                <div class="blog-slogan">
                    <span>create your own web</span>
                </div>
            </div>

            <div id="main-menu">
                <div class="search-header">
                    <form id="search-form">
                        <input type="text" class="form-control" maxlength="64" placeholder="Поиск по блогу" />
                        <a href="#" onclick="document.getElementById('search-form').submit()"><i class="fa fa-search fa-fw" aria-hidden="true"></i></a>
                    </form>
                </div>
                <div class="header-menu">
                    <ul>
{{--                        <li>
                            <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </li>--}}
                        <li>
                            <a href="{{ url('/login') }}"><i class="fa fa-user-o fa-fw" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="{{ url('/login') }}"><i class="fa fa-rss-square fa-fw" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="{{ url('/login') }}"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>