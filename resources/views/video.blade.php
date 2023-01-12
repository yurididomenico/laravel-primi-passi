<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>

    <h1>Ciao!</h1>

    <p>Sono {{$nome}} {{$cognome}}!</p>

    <h3>Menu</h3>
    <ul>
        <li><a href="/">Homepage</a></li>
        <li><a href="/foto">Foto</a></li>
        <li><a href="/video">Video</a></li>
        <li><a href="/tutorial">Tutorial</a></li>
    </ul>

    <h2>{{$tipoPage}}</h2>

</body>
</html>