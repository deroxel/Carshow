<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/footer.css')}}">
        <link rel="stylesheet" href="{{asset('css/carousel.css')}}">       

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Carshow</title>
    </head>
    <body>
        <header>
            @include('inc.navbar')
        </header>
        <main role="main">
            <div class = "container">
                @include('inc.message')
                @yield('content')
            </div>

            <footer class="footer">
                <div class="container">
                    <p>&copy; 2017-2018 Company, Inc. &middot; <a href="/404">Privacy</a> &middot; <a href="/404">Terms</a></p>
                </div>
            </footer>
        </main>

        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script> CKEDITOR.replace( 'article-ckeditor' ); </script>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>