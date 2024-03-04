<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/img/zcode.png">
    <title>ZCODE</title>

    <meta name="description" content="ZCODE is a platform for creating, learning and discussing together about website programming. You will have a pleasant experience and can increase your insight and knowledge with us. We can help you create the website of your dreams. We can learn and discuss together to add insight and knowledge about web programming.">
    <meta name="keywords" content="HTML, CSS, JAVASCRIPT, JS, PHP, WEB DEVELOPMENT, ZCODE">

    <meta property="og:title" content="ZCODE">
    <meta property="og:description" content="ZCODE is a platform for creating, learning and discussing together about website programming. You will have a pleasant experience and can increase your insight and knowledge with us.">
    <meta property="og:image" content="/img/zcode.png">
</head>

<body>

    @include('partials.mainNav')
    @yield('container')

    <section class="footer pt-5 pb-5" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>ZCODE</h3>
                    <p>Web Development Beyond Boundaries</p>
                    <p>© {{ date('Y') }} ZCODE. All rights reserved.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>