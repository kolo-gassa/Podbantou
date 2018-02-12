<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title> {{ page_title($title ?? '') }} </title>
        
        {{--Afin avoir quelque chose de responsive--}}
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{--Bootstrap core CSS--}}
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        {{--le theme--}}
        <link href="../../dist/css/bootstrap-theme.min.css" rel="stylesheet">

        {{--Font awesone pour les icones--}}
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        {{--Google Font--}}
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    </head>

    <body>

        {{--inclusion du menu--}}
        @include('layouts/partials/_nav')

        

        @yield('content')


        {{--inclusion du pied de page--}}
        @include('layouts/partials/_footer')
        
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../../../assets/js/vendor/popper.min.js"></script>

        <!-- Chargement du bootstrap-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    </body>
</html>
