<!doctype html>
<!-- Prepared By -->
<!-- 
    Manuel A. Restrepo
    https://github.com/53rv1d0r
    Bootstrap v5.3
    PHP 8.0.1
    26 April 2024
-->
<html lang="en" data-bs-theme="auto">

<head>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon.ico">
    <script src="assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Tekknia.com</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>


    <!-- Custom styles for main page and carousel -->
    <link href="assets/main/carousel.css" rel="stylesheet">
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>
    <!-- /Custom styles for main page and carousel-->
    <!-- Custom styles for navbar-->
    <link href="assets/main/headers.css" rel="stylesheet">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
        </symbol>
    </svg>
    <!-- /Custom styles for navbar-->


    <!-- Nav Menu-->
    <div class="container">
        <header data-bs-theme="dark" class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <!--<svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <img src="URL_DE_TU_IMAGEN" alt="Nombre de tu imagen" width="40" height="32">-->
                    <img src="data:image/png;base64,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">
                    <span class="fs-4 ms-2 mt-5 text-warning">[ T e k k n i a ]</span>
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house-door-fill d-block mx-auto mb-1" viewBox="0 0 16 16">
                            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5" />
                        </svg>
                        Home</a></li>
                <li><a href="#" class="nav-link px-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil-square d-block mx-auto mb-1" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                        </svg>
                        Services</a></li>
                <li><a href="#" class="nav-link px-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-terminal-fill d-block mx-auto mb-1" viewBox="0 0 16 16">
                            <path d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9.5 5.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1m-6.354-.354a.5.5 0 1 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2a.5.5 0 1 0-.708.708L4.793 6.5z" />
                        </svg>Team</a></li>
                <li><a href="#" class="nav-link px-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-question-square d-block mx-auto mb-1" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                            <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94" />
                        </svg>About</a></li>
                <li><a href="#" class="nav-link px-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-heart-fill d-block mx-auto mb-1" viewBox="0 0 16 16">
                            <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9 9 0 0 0 8 15m0-9.007c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132" />
                        </svg>Pricing</a></li>
                <li><a href="#" class="nav-link px-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-book d-block mx-auto mb-1" viewBox="0 0 16 16">
                            <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                        </svg>Blog</a></li>
                <li><a href="#" class="nav-link px-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-heart d-block mx-auto mb-1" viewBox="0 0 16 16">
                            <path d="M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4m13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276Z" />
                        </svg>Contact</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
                <button type="button" class="btn btn-warning">Sign-up</button>
            </div>
        </header>
    </div>
    <!-- /Nav Menu-->


    <main>
        <!-- Carousel-->
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <!-- Slider 1-->
                <div class="carousel-item active">
                    <!--<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>-->
                    <img src="assets/img/carousel/detection1.jpg" class="bd-placeholder-img" width="1366" height="512" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Computer Vision">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 class="text-light bg-light-subtle d-inline px-3">Computer Vision</h1>
                            <br>
                            <br>
                            <p class="text-warning bg-light-subtle d-inline px-3">Objects Detection, Facial Recognition, Image Segmentation, Pattern Recognition. </p>
                            <br>
                            <br>
                            <p><a class="btn btn-lg btn-warning" href="#">Want to Know More?</a></p>
                        </div>
                    </div>
                </div>
                <!-- slider 2-->
                <div class="carousel-item">
                    <img src="assets/img/carousel/development1.jpg" class="bd-placeholder-img" width="1366" height="512" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Computer Vision">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Web Development</h1>
                            <p>Sites and Movile Apps Development</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <!-- Slider 3-->
                <div class="carousel-item">
                    <img src="assets/img/carousel/training1.jpg" class="bd-placeholder-img" width="1366" height="512" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Computer Vision">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1 class="text-light bg-light-subtle d-inline px-3">Teams Training</h1>
                            <br>
                            <br>
                            <p class="text-warning bg-light-subtle d-inline px-3">Scrum methodologies, Software Projects Management and Scheduling.</p>
                            <br>
                            <br>
                            <p><a class="btn btn-lg btn-warning" href="#">Learn More</a></p>
                        </div>
                    </div>
                </div>
                <!-- -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- /Carousel-->

        <!-- Body -->

        <!-- Wrap the rest of the page in another container to center all the content. -->
        <!-- Services intro -->
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="assets/img/services/serviceS1.jpg" class="d-block mx-lg-auto img-fluid" alt="T E K K N I A services" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">OUR PASSION</h1>
                    <p class="lead">At <span class="text-warning">[T E K K N I A]</span>, we specialize in providing innovative and high-quality technological solutions to meet the needs of our clients in the digital world. With over 10 years of experience in the industry, we have established ourselves as leaders in the fields of web development, computer vision, and software project management.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-warning btn-lg px-4 me-md-2">Learn More...</button>
                        <!--<button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- /Services intro-->
        <!-- Services -->
        <div class="container marketing">
            <!-- Three columns of text -->
            <!--<a href="#" class="nav-link px-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-book d-block mx-auto mb-1" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                </svg>Blog</a>
            <hr class="featurette-divider">-->
            <div class="row">
                <div class="col-lg-4">
                    <!--<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>-->
                    <img src="assets/img/services/services2.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Computer Vision">
                    <h2 class="fw-normal text-warning">Computer Vision</h2>
                    <p>At <span class="text-warning">[T E K K N I A]</span>, we apply computer vision technology to develop intelligent and automated solutions that enable machines to "see" and understand the world around them. From object detection to facial recognition and image segmentation, we offer computer vision services that open up new possibilities in a variety of industries.</p>
                    <p><a class="btn btn-warning" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="assets/img/services/services3.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Web Development">
                    <h2 class="fw-normal text-warning">Web Development</h2>
                    <p>Our team of highly skilled and experienced developers creates custom websites and web applications that stand out for their functionality, attractive design, and optimal performance. We use the latest technologies and development practices to ensure that our products meet the highest standards in the market.</p>
                    <p><a class="btn btn-warning" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="assets/img/services/services4.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false" alt="Agile Methodologies">
                    <h2 class="fw-normal text-warning">Training and Coaching in Agile Methodologies</h2>
                    <p>Our team of experts in agile methodologies, especially Scrum, offers personalized training and coaching for software development teams. We help organizations adopt effective agile practices that improve collaboration, productivity, and the quality of the final product.</p>
                    <p><a class="btn btn-warning" href="#">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
            <!-- /Three columns of text -->
            <!-- /END THE FEATURETTES -->
            <hr class="featurette-divider">
        </div><!-- /.container -->
        <!-- /Services -->
        <!-- /END THE FEATURETTES -->

        <!-- FOOTER -->
        <div class="container">

            <footer>
                <!-- Footer menu -->
                <div class="row">
                    <div class="col-6 col-md-2 mb-3">
                        <h5>Services</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Services</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Blog</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Blog</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>About</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Team</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Contact</a></li>
                        </ul>
                    </div>
                    <!-- /Footer menu -->
                    <!-- Subscribe -->
                    <div class="col-md-5 offset-md-1 mb-3">
                        <form>
                            <h5>Subscribe to our newsletter</h5>
                            <p>Monthly digest of what's new and exciting from us.</p>
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                <button class="btn btn-warning" type="button">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="py-4 my-4">
                    <p class="float-end"><a class="float-end text-warning" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
                                <path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0" />
                            </svg></a></p>
                </div>
                <!-- /subscribe -->
                <!-- Footer subline -->
                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p>&copy; 2011–2024 Tekknia &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> &middot; Hecho por Alejandroid con &lt;3 en Medellín &#59; &#41;</p>
                    <ul class="list-unstyled d-flex">
                        <!-- <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#twitter" />
                                </svg></a></li> -->
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                </svg></a></li>
                    </ul>
                </div>
                <!-- /Footer subline -->
                <!-- <div class="py-4 my-4 "><p class="float-end"><a href="#">Back to top</a></p></div> -->
            </footer>
        </div>
    </main>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>