<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <style>
        body {
            background-image: url('https://unsplash.com/photos/C8VWyZhcIIU/download?force=true');
            background-size: cover;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        p {
            color: whitesmoke;
            font-size: 2rem;
        }

        h1 {
            color: whitesmoke;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
            font-size: 2rem;
        }

        nav ul li a {
            text-decoration: none;
            color: whitesmoke;
        }
    </style>
</head>

<body>
    <h1>{{ $body }}</h1>

    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
        </ul>
    </nav>

    <p>Pagina di Benvenuto!</p>



</body>

</html>
