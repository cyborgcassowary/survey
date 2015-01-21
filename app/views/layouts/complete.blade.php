<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

    <title>Chocolate Survey</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="100 packages of chocolate on the wall, 100 packages of chocolate on the wall. Take one down, pass it around, 99 packages of chocolate on the wall." />

    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />





</head>
<body>




<div class="container">



    @yield('content')




</div>





{{ HTML::script( '/js/jquery.js', [], false ) }}
{{ HTML::script( '//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js', [], false )}}
{{-- HTML::script( '/js/parallax.min.js', [], false ) --}}
{{ HTML::script( '/js/survey.js', [], false ) }}



</body>
</html>
