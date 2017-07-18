<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" type="text/css" href='{{asset("css/bootstrap.css")}}'>
        <link rel="stylesheet" type="text/css" href='{{asset("css/style.css")}}'>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

      
    </head>
    <body>

    <div>
        @yield("main_content")
    </div>
       






    </body>
</html>
