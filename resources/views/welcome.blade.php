<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Adward</title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
    <!-- progress barstle -->
    <link rel="stylesheet" href="/css/css-circular-prog-bar.css">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font wesome stylesheet -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="/css/responsive.css" rel="stylesheet" />

    <link rel="stylesheet" href="/css/css-circular-prog-bar.css">

</head>

<body>
    <div class="top_container">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="/index.html">
                        <img src="/images/logo.png" alt="">
                        <span>
                            Fuad Hailat
                        </span>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav  ">


                            <div class="cta-buttons">
    @auth
    <a href="{{ route('dashboard') }}" class="btn btn-success">Dashboard</a>
    @else
    <a href="{{ route('admin') }}" class="btn btn-success">Log in</a>
    @guest
    <a href="{{ route('register') }}" class="btn btn-success">Register</a>
    @endguest
    @endauth
</div>





                            </ul>
                            <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                            </form>
                        </div>
                </nav>
            </div>
        </header>
        <section class="hero_section ">
            <div class="hero-container container">
                <div class="hero_detail-box">
                    <h3>
                        Welcome to <br>
                        Best educations
                    </h3>
                    <h1>
                        school
                    </h1>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
                        some form, by injected humour, or randomised
                    </p>
                    <div class="hero_btn-continer">                        
                        </a>
                    </div>
                </div>
                <div class="hero_img-container">
                    <div>
                        <img src="/images/hero.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end header section -->

</body>

</html>
