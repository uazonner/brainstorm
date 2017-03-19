<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Brainstorm blog</title>

    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" />
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap-theme.min.css') !!}" />
    <link rel="stylesheet" type="text/css" href="{!! asset('css/font-awesome.min.css') !!}" />
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}" />

    <script src="{!! asset('js/jquery.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('js/masonry.min.js') !!}"></script>
    <script src="{!! asset('js/script.js') !!}"></script>


</head>
<body>
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
            <div class="header-menu">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="{{ url('/login') }}"><i class="fa fa-user-o" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
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
<section id="breadcrumb">

</section>
<section id="main-content">
    <div class="container">
        <div class="row masonry-container">
            <div class="col-md-4 col-sm-6 masonry-item blog-item">
                <div class="thumbnail">
                    <img src="http://fakeimg.pl/1000x800/" class="img-responsive" alt="Image">
                    <div class="caption">
                        <h3>An amazing post title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem voluptate aut recusandae numquam dicta placeat in facilis voluptas dolorem vitae aliquam, voluptatem illo quo, saepe beatae cumque provident similique porro.</p>
                        <p>Tenetur labore fuga corporis tempore inventore minima itaque, veniam aliquid aliquam odit placeat tempora. Natus officia sit minima tempora.</p>
                        <hr class="dotted">
                        <span class="autor-post">
                        <img src="assets/img/demo/avatar100.jpg" alt="">
                        by <a href="#">adrigm</a>
                    </span>
                        <a href="#" class="btn btn-ar btn-primary pull-right" role="button">Read more &raquo;</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div> <!-- masonry-item  -->

            <div class="col-md-4 col-sm-6 masonry-item blog-item">
                <div class="thumbnail">
                    <div class="video">
                        <iframe src="http://player.vimeo.com/video/50061391?title=0&amp;byline=0&amp;portrait=0"></iframe>
                    </div>
                    <div class="caption">
                        <h3>An amazing post title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem voluptate aut recusandae numquam dicta placeat in facilis voluptas dolorem vitae aliquam, voluptatem illo quo, saepe beatae cumque provident similique porro.</p>
                        <hr class="dotted">
                        <span class="autor-post">
                        <img src="assets/img/demo/avatar100.jpg" alt="">
                        by <a href="#">adrigm</a>
                    </span>
                        <a href="#" class="btn btn-ar btn-primary pull-right" role="button">Read more &raquo;</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div> <!-- masonry-item  -->

            <div class="col-md-4 col-sm-6 masonry-item blog-item">
                <div class="thumbnail">
                    <img src="http://fakeimg.pl/1000x800/" class="img-responsive" alt="Image">
                    <div class="caption">
                        <h3>An amazing post title</h3>
                        <p>Tenetur labore fuga corporis tempore inventore minima itaque, veniam aliquid aliquam odit placeat tempora. Natus officia sit minima tempora.</p>
                        <hr class="dotted">
                        <span class="autor-post">
                        <img src="assets/img/demo/avatar100.jpg" alt="">
                        by <a href="#">adrigm</a>
                    </span>
                        <a href="#" class="btn btn-ar btn-primary pull-right" role="button">Read more &raquo;</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div> <!-- masonry-item  -->

            <div class="col-md-4 col-sm-6 masonry-item blog-item">
                <div class="thumbnail">
                    <img src="http://fakeimg.pl/1000x800/" class="img-responsive" alt="Image">
                    <div class="caption">
                        <h3>An amazing post title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem voluptate aut recusandae numquam dicta placeat in facilis voluptas dolorem vitae aliquam, voluptatem illo quo, saepe beatae cumque provident similique porro.</p>
                        <p>Tenetur labore fuga corporis tempore inventore minima itaque, veniam aliquid aliquam odit placeat tempora. Natus officia sit minima tempora Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, laudantium.</p>
                        <hr class="dotted">
                        <span class="autor-post">
                        <img src="assets/img/demo/avatar100.jpg" alt="">
                        by <a href="#">adrigm</a>
                    </span>
                        <a href="#" class="btn btn-ar btn-primary pull-right" role="button">Read more &raquo;</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div> <!-- masonry-item  -->

            <div class="col-md-4 col-sm-6 masonry-item blog-item">
                <div class="thumbnail">
                    <img src="http://fakeimg.pl/1000x800/" class="img-responsive" alt="Image">
                    <div class="caption">
                        <h3>An amazing post title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem voluptate aut recusandae numquam dicta placeat in facilis voluptas dolorem vitae aliquam, voluptatem illo quo, saepe beatae cumque provident similique porro.</p>
                        <p>Tenetur labore fuga corporis tempore inventore minima itaque, veniam aliquid aliquam odit placeat tempora. Natus officia sit minima tempora.</p>
                        <hr class="dotted">
                        <span class="autor-post">
                        <img src="assets/img/demo/avatar100.jpg" alt="">
                        by <a href="#">adrigm</a>
                    </span>
                        <a href="#" class="btn btn-ar btn-primary pull-right" role="button">Read more &raquo;</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div> <!-- masonry-item  -->

            <div class="col-md-4 col-sm-6 masonry-item blog-item">
                <div class="thumbnail">
                    <img src="http://fakeimg.pl/1000x800/" class="img-responsive" alt="Image">
                    <div class="caption">
                        <h3>An amazing post title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem voluptate aut recusandae numquam dicta placeat in facilis voluptas dolorem vitae aliquam, voluptatem illo quo, saepe beatae cumque provident similique porro.</p>
                        <p>Tenetur labore fuga corporis tempore inventore minima itaque, veniam aliquid aliquam odit placeat tempora. Natus officia sit minima tempora.</p>
                        <hr class="dotted">
                        <span class="autor-post">
                        <img src="assets/img/demo/avatar100.jpg" alt="">
                        by <a href="#">adrigm</a>
                    </span>
                        <a href="#" class="btn btn-ar btn-primary pull-right" role="button">Read more &raquo;</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div> <!-- masonry-item  -->

            <div class="col-md-4 col-sm-6 masonry-item blog-item">
                <div class="thumbnail">
                    <img src="http://fakeimg.pl/1000x800/" class="img-responsive" alt="Image">
                    <div class="caption">
                        <h3>An amazing post title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem voluptate aut recusandae numquam dicta placeat in facilis voluptas dolorem vitae aliquam, voluptatem illo quo, saepe beatae cumque provident similique porro.</p>
                        <p>Tenetur labore fuga corporis tempore inventore minima itaque, veniam aliquid aliquam odit placeat tempora. Natus officia sit minima tempora.</p>
                        <hr class="dotted">
                        <span class="autor-post">
                        <img src="assets/img/demo/avatar100.jpg" alt="">
                        by <a href="#">adrigm</a>
                    </span>
                        <a href="#" class="btn btn-ar btn-primary pull-right" role="button">Read more &raquo;</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div> <!-- masonry-item  -->

            <div class="col-md-4 col-sm-6 masonry-item blog-item">
                <div class="thumbnail">
                    <img src="http://fakeimg.pl/1000x800/" class="img-responsive" alt="Image">
                    <div class="caption">
                        <h3>An amazing post title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem voluptate aut recusandae numquam dicta placeat in facilis voluptas dolorem vitae aliquam, voluptatem illo quo, saepe beatae cumque provident similique porro.</p>
                        <p>Tenetur labore fuga corporis tempore inventore minima itaque, veniam aliquid aliquam odit placeat tempora. Natus officia sit minima tempora.</p>
                        <hr class="dotted">
                        <span class="autor-post">
                        <img src="assets/img/demo/avatar100.jpg" alt="">
                        by <a href="#">adrigm</a>
                    </span>
                        <a href="#" class="btn btn-ar btn-primary pull-right" role="button">Read more &raquo;</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div> <!-- masonry-item  -->

            <div class="col-md-4 col-sm-6 masonry-item blog-item">
                <div class="thumbnail">
                    <img src="http://fakeimg.pl/1000x800/" class="img-responsive" alt="Image">
                    <div class="caption">
                        <h3>An amazing post title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem voluptate aut recusandae numquam dicta placeat in facilis voluptas dolorem vitae aliquam, voluptatem illo quo, saepe beatae cumque provident similique porro.</p>
                        <p>Tenetur labore fuga corporis tempore inventore minima itaque, veniam aliquid aliquam odit placeat tempora. Natus officia sit minima tempora.</p>
                        <hr class="dotted">
                        <span class="autor-post">
                        <img src="assets/img/demo/avatar100.jpg" alt="">
                        by <a href="#">adrigm</a>
                    </span>
                        <a href="#" class="btn btn-ar btn-primary pull-right" role="button">Read more &raquo;</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div> <!-- masonry-item  -->

        </div> <!-- masonry-container  -->
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-md-11">
                <p>&copy; Brainstorm, 2016 - 2017.<br>
                    Копирование и размещение материалов на других сайтах разрешается только с обратной гиперссылкой.
                </p>
            </div>
        </div>
    </div>
</footer>
<script src="{!! asset('test/app.js') !!}"></script>

</body>
</html>