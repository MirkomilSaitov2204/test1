<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('front/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <title>Circula navbar</title>
</head>
    <body class="body">
            <nav class="navbar navbar-expand-lg navbar-light" style="background: #f273ba;">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                                  </li>
                                  <li class="nav-item">
                                  <a class="nav-link" href="{{route('question')}}">Savollar</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ route('about') }}">Men haqimda</a>
                                  </li>

                                  <li class="nav-item">
                                      <a class="nav-link" href="#">Contact</a>
                                  </li>

                      </ul>

                    </div>
                  </nav>

         <div class="container">
                <div id="stapel">
                        <figure>
                            <img width="100%" height="100%" src="{{ asset('front/about me/html.jpg') }}" alt="">
                            <figcaption>Mening Html Certificatim</figcaption>
                        </figure>
                        <figure>
                            <img width="100%" height="100%" src="{{ asset('front/about me/css.jpg') }} " alt="">
                            <figcaption>Mening Css Certificatim</figcaption>
                        </figure>
                        <figure>
                            <img width="100%" height="100%" src="{{ asset('front/about me/api.jpg') }}" alt="">
                            <figcaption>Mening API Certificatim</figcaption>
                        </figure>
                        <figure>
                            <img width="100%" height="100%" src="{{ asset('front/about me/php.jpg') }}" alt="">
                            <figcaption>Mening PHP Certificatim</figcaption>
                        </figure>
                        <figure>
                            <img width="100%" height="100%" src="{{ asset('front/about me/udemy_bootstrap.jpg') }}" alt="">
                            <figcaption>Mening bootstrap Certificatim</figcaption>
                        </figure>
                        <figure>
                            <img width="100%" height="100%" src="{{ asset('front/about me/udemy_html.jpg') }}" alt="">
                            <figcaption>Mening Html Certificatim</figcaption>
                        </figure>
                        <figure>
                            <img width="100%" height="100%" src="{{ asset('front/about me/udemy_html_css_master.jpg') }}" alt="">
                            <figcaption>Mening Html CSS MASTER Certificatim</figcaption>
                        </figure>
                        <figure>
                            <img width="100%" height="100%" src="{{ asset('front/about me/udemy_javascript.jpg') }}" alt="">
                            <figcaption>Mening JS Certificatim</figcaption>
                        </figure>
                        <figure>
                            <img width="100%" height="100%" src="{{ asset('front/about me/udemy_js.jpg') }}" alt="">
                            <figcaption>Mening JS Certificatim</figcaption>
                        </figure>
                        <figure>
                            <img width="100%" height="100%" src="{{ asset('front/about me/udemy_responsive.jpg') }}" alt="">
                            <figcaption>Mening bootstrap Certificatim</figcaption>
                        </figure>
                    </div>
         </div>

         <footer>
                <div class="jumbotron mb-0" style="background: #f273ba;">
                        <div class="container text-center">
                          <h1 class="display-4 " style="color: #fff;">Mirkomil Saitov</h1>
                          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae harum assumenda error nam sit? Soluta nemo quam odit magni, quidem commodi, perspiciatis ducimus dolores ratione quis error impedit dignissimos! Aspernatur?</p>
                        </div>
                      </div>
         </footer>









        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="{{ asset('front/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>


</body>
</html>
