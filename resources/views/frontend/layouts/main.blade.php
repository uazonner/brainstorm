<!doctype html>
<html>
@include('frontend.includes.head')
<body>
<div id="app">
    @include('frontend.includes.header')

    <nav id="sub-menu">
        <div class="container">
            <div class="row">
                <div class="pull-right">
                    <a href="#" class="output-switcher"><i class="fa fa-globe" aria-hidden="true"></i></a>
                </div>
                <ul class="secondary">
                    <li>
                        <a class="active" href="#">Все материалы</a>
                    </li>
                    <li>
                        <a href="#">HTML & CSS</a>
                    </li>
                    <li>
                        <a href="#">PHP</a>
                    </li>
                    <li>
                        <a href="#">Java Script</a>
                    </li>
                    <li>
                        <a href="#">MOD X</a>
                    </li>
                    <li>
                        <a href="#">DRUPAL</a>
                    </li>
                    <li>
                        <a href="#">LARAVEL</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="main-content">
        <div class="container">
            @yield('content')
        </div>
    </section>
</div>
@include('frontend.includes.footer')
@include('frontend.includes.footer-js')
</body>
</html>