<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body class="bg-dark">
<main>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link fw-bold" href="#">{{$home}}</a>
                    <a class="nav-link fw-bold" href="#">{{$booleaners}}</a>
                    <a class="nav-link fw-bold" href="#">{{$about}}</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="text-center text-white">
        <h1>Hello World</h1>
        <h2>{{ $title }}</h2>
    </div>
</main>
</body>

</html>
