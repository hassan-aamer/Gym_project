<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="icon" href="images/g.png">
    <title>@yield('title')</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="/"><b>FITNESS ツ</b><img src="images/55.jpg" width="70px" height="30px"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link"  href="/"><b>Home</b></a>
                <a class="nav-link"  href="gym"><b>The Gym</b></a>
                <a class="nav-link"  href="groups"><b>Groups</b></a>
                <a class="nav-link"  href="supplements"><b>Supplements</b></a>
                <a class="nav-link" href="news"><b>Offers</b></a>
                <a class="nav-link" href="contact"><b>Register</b></a>
            </div>
        </div>
        </div>
    </nav>
    @yield('body')
    <section class="flex-container">
        <div class="soshel">
            <br>
            <br>
            <h1>Follow us social for exclusive! </h1>
            <h4>Get exclusive deals , offers rewards! </h4>
            <div class="imag">
                <img src="images/facebook.png" alt="" width="30px" height="30px">
                <img src="images/twitter.png" alt=""  width="30px" height="30px">
                <img src="images/instagram.png" alt=""  width="30px" height="30px">
            </div>
        </div>
        <div class="logoo">
            <img class="logo" src="images/g.png" width="100px" height="100px">
        </div>
</section>
</body>
</html>
