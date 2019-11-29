<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Test de recrutement MHK DIGITAL</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>

    <body>


        <header class="container-fluid">
            <div class="container">
                <div class="row">
                    @section('header')
                    <div class="col-auto logo">
                        <a href="{{ URL::to('/') }}"></a>
                        {{-- <img src="{{ URL::to('/') }}/images/logo.svg" alt=""> --}}
                    </div>
                    <div class="col menu">
                        <ul class="nav justify-content-end">
                            <li class="nav-item"><a class="nav-link" href="{{ URL::to('/') }}">Contactez-nous</a></li>
                        </ul>
                    </div>
                    @show
                </div>
            </div>
        </header>



        <div id="content" class="container-fluid">
            @section('content') @show
        </div>

        <footer class="container-fluid">
            <div class="row">
                <div class="col">
                        <p>Test de recrutement <a href="https://www.dkgroup.fr/">DKGROUP</a></p>
                </div>
            </div>
        </footer>


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
    </body>

</html>