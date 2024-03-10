<?php

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid container">
            <a class="" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse container-fluid" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto w-100">
                    <li class="nav-item inline">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item inline">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>

                    <div class="navbar-nav ml-auto" id="navvvv">
                        <style>
                            #navvvv {
                                margin-left: auto;
                            }

                            @media(max-width: 700px) {
                                #navvvv {
                                    margin-left: unset;
                                }
                            }
                        </style>
                        <li class="nav-item inline">
                            <a class="nav-link active" aria-current="page" href="/login">Login</a>
                        </li>
                        <li class="nav-item inline">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                    </div>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container mx-auto">
        {{ content }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>