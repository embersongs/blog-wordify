<!doctype html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">

    <link rel="stylesheet" href="/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>


<div class="wrap">

    <header role="banner">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-9 social">
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-instagram"></span></a>
                        <a href="#"><span class="fa fa-youtube-play"></span></a>
                    </div>
                    <div class="col-3 search-top">
                        <form action="{{ route('find') }}" class="search-top-form" method="post">
                            @csrf
                            <span style="cursor: pointer" class="icon fa fa-search" id="search-icon"></span>
                            <input type="text" name="find" id="submit-find" placeholder="Найти текст...">
                        </form>
                        <script>
                            document.getElementById('submit-find').addEventListener('keypress', function(e) {
                                if (e.key === 'Enter') {
                                    e.preventDefault();
                                    document.querySelector('.search-top-form').submit();
                                }
                            });


                            document.getElementById('search-icon').addEventListener('click', function() {
                                document.querySelector('.search-top-form').submit();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <div class="container logo-wrap">
            <div class="row pt-5">
                <div class="col-12 text-center">
                    <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                    <h1 class="site-logo"><a href="{{ route('home') }}">Блог</a></h1>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-md  navbar-light bg-light">
            <div class="container">


                <div class="collapse navbar-collapse" id="navbarMenu">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Бизнес</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="category.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Путешествия</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="category.html">Азия</a>
                                <a class="dropdown-item" href="category.html">Европа</a>
                                <a class="dropdown-item" href="category.html">Дубай</a>
                                <a class="dropdown-item" href="category.html">Африка</a>
                                <a class="dropdown-item" href="category.html">Юзная Америка</a>
                            </div>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Категории</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown05">
                                <a class="dropdown-item" href="category.html">Образ жизни</a>
                                <a class="dropdown-item" href="category.html">Еда</a>
                                <a class="dropdown-item" href="category.html">Приключения</a>
                                <a class="dropdown-item" href="category.html">Путешествия</a>
                                <a class="dropdown-item" href="category.html">Бизнес</a>
                            </div>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Контакты</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

@yield('content')

    <footer class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3>About Us</h3>
                    <p class="mb-4">
                        <img src="/images/img_1.jpg" alt="Image placeholder" class="img-fluid">
                    </p>

                    <p>Lorem ipsum dolor sit amet sa ksal sk sa, consectetur adipisicing elit. Ipsa harum inventore reiciendis. <a href="#">Read More</a></p>
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="row">
                        <div class="col-md-7">
                            <h3>Latest Post</h3>
                            <div class="post-entry-sidebar">
                                <ul>
                                    <li>
                                        <a href="{{ route('post.show') }}">
                                            <img src="/images/img_6.jpg" alt="Image placeholder" class="mr-4">
                                            <div class="text">
                                                <h4>How to Find the Video Games of Your Youth</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">March 15, 2018 </span> &bullet;
                                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('post.show') }}">
                                            <img src="/images/img_3.jpg" alt="Image placeholder" class="mr-4">
                                            <div class="text">
                                                <h4>How to Find the Video Games of Your Youth</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">March 15, 2018 </span> &bullet;
                                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('post.show') }}">
                                            <img src="/images/img_4.jpg" alt="Image placeholder" class="mr-4">
                                            <div class="text">
                                                <h4>How to Find the Video Games of Your Youth</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">March 15, 2018 </span> &bullet;
                                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-1"></div>

                        <div class="col-md-4">

                            <div class="mb-5">
                                <h3>Quick Links</h3>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Adventure</a></li>
                                    <li><a href="#">Courses</a></li>
                                    <li><a href="#">Categories</a></li>
                                </ul>
                            </div>

                            <div class="mb-5">
                                <h3>Social</h3>
                                <ul class="list-unstyled footer-social">
                                    <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                                    <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                                    <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                                    <li><a href="#"><span class="fa fa-vimeo"></span> Vimeo</a></li>
                                    <li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                                    <li><a href="#"><span class="fa fa-snapchat"></span> Snapshot</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="small">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy; All Rights Reserved | This template is made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- END footer -->

</div>

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/js/jquery-migrate-3.0.0.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.stellar.min.js"></script>


<script src="/js/main.js"></script>
</body>
</html>
