{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Design with Bootstrap</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS for 3D effect */
        .card {
            transition: all 0.3s ease;
            transform-style: preserve-3d;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
        }
        .card:hover {
            transform: rotateY(10deg) rotateX(10deg);
        }
        .bg-3d {
            background: linear-gradient(45deg, #dfeaef 50%, #b3e0e9 50%);
            background-size: 400% 400%;
            animation: gradient-animation 4s infinite alternate;
        }
        @keyframes gradient-animation {
            0% {
                background-position: 0% 50%;
            }
            100% {
                background-position: 100% 50%;
            }
        }

        /* Custom CSS for list item hover effect */
        .list-unstyled li {
            transition: color 0.3s ease, font-size 0.3s ease;
        }

        .list-unstyled li:hover {
            color: #ff7f0f; /* Change to the specified color on hover */
            font-size: 1.1rem; /* Increase the font size on hover */
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Fixed navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<section id="contact" class="section bg-color-grey bg-3d border-0 py-0 m-0">
    <div class="container-fluid" --}}{{--

--}}
{{--style="background-color:#dfeaef;"--}}{{--
--}}
{{--
>
        <div class="row py-5">
            <div class="col-md-6 col-lg-3 col-xs-12 mb-4 mb-lg-0">
                <div class="p-5 card">
                    <div class="ps-lg-4 text-start">
                        <p><b>ABOUT BAF</b></p>
                        <ul class="list-unstyled">
                            <li>History</li>
                            <li>BAF Recruitment Portal</li>
                            <li>Contact No: BAF Med Offrs</li>
                            <li>BAF Freedom Fighters</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xs-12 mb-4 mb-lg-0">
                <div class="p-5 card">
                    <div class="ps-lg-4 text-start">
                        <p><b>IMPORTANT LINKS</b></p>
                        <ul class="list-unstyled">
                            <li>E-Tender</li>
                            <li>BSMRAAU</li>
                            <li>FSI Portal</li>
                            <li>ATI Portal</li>
                            <li>Officers Payslip</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xs-12 mb-4 mb-lg-0">
                <div class="p-5 card">
                    <div class="ps-lg-4 text-start">
                        <p><b>BAF PUBLICATIONS</b></p>
                        <ul class="list-unstyled">
                            <li>Eagle</li>
                            <li>Bimansena</li>
                            <li>Blue Angel</li>
                            <li>Congo Chronicles</li>
                            <li>CSTI e-Journal 2019</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 col-xs-12 mb-4 mb-lg-0">
                <div class="p-5 card">
                    <div class="ps-lg-4 text-start">
                        <p><b>FOLLOW BAF</b></p>
                        <ul class="list-unstyled">
                            <li>Links</li>
                            <li>Links Two</li>
                            <li>Links Three</li>
                            <li>Links Four</li>
                            <li>Links Five</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Repeat similar structure for other columns -->
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
--}}{{--

    <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Application Soft</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Air HQ Info Panel</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Guest Pass</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Organization</a></li>
                <li class="nav-item"><a class="nav-link" href="#">BAF Arenas</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Recruitment</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Training</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Flight Safety</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Miscellaneous</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Download</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Webmail</a></li>
            </ul>

        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>
--}}
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangladesh Air Force</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<header class="bg-gray-900 text-white">
    <div class="container flex justify-between items-center py-4 px-6">
        <div class="flex items-center">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Bangladesh_Air_Force_roundel.svg/1200px-Bangladesh_Air_Force_roundel.svg.png" alt="Bangladesh Air Force Logo" class="w-10 h-10 mr-4">
            <span class="text-xl font-bold">Bangladesh Air Force</span>
        </div>
        <div class="hidden md:flex space-x-4">
            <a href="#" class="hover:text-gray-300">Home</a>
            <a href="#" class="hover:text-gray-300">About BAF</a>
            <a href="#" class="hover:text-gray-300">Recruitment</a>
            <a href="#" class="hover:text-gray-300">Contact</a>
        </div>
    </div>
</header>
<main class="container mx-auto py-12 px-6">
    <section class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-xl font-bold mb-4">Latest News</h3>
            <p>Replace this text with your latest news content.</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-xl font-bold mb-4">Important Links</h3>
            <ul>
                <li><a href="#" class="hover:text-blue-500">E-Tender</a></li>
                <li><a href="#" class="hover:text-blue-500">BSMRAAU</a></li>
                <li><a href="#" class="hover:text-blue-500">FSI Portal</a></li>
                <li><a href="#" class="hover:text-blue-500">ATI Portal</a></li>
            </ul>
        </div>
    </section>
</main>
<footer class="bg-gray-900 text-white text-center py-4">
    <p>&copy; Copyright 2023. All Rights Reserved.</p>
</footer>
</body>
</html>
