<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    @vite('resources/scss/app.scss', 'resources/js/app.js')
    
    @yield("head")

</head>

<body>

@include('partial.header')

    @yield("content")

</body>

</html>