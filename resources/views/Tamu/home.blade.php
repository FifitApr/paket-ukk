<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{!! asset('dist/css/style.css') !!}">

    <title>HOTEL ENCT</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg shadow-sm p-3 mb-5 bg-body">
        <div class="container-fluid">
            <img src="dist/img/logobiru.png" class="logo" alt="">

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/tamu">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#facility">Facility</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#room">Room Type</a>
                    </li>
                </ul>
                <a href="/book" class="btn rounded-pill px-4 pt-2" type="submit">Book Now</a>
            </div>
        </div>
    </nav>
    <!-- END NAVBAR -->

    <!-- HEADER -->
    <center>
        <div class="header">
            <div class="box-header w-50 px-4 pt-4 opacity-75 position-absolute top-50 start-50 translate-middle">
                <h2 class="fw-lighter">YOUR BEST HOTEL</h2>
                <h1 class="header-text m-3">HOTEL ENCT</h1>
                <p class="mb-5 px-5">Providing the best service with the most complete facilities and accommodation.</p>
            </div>
        </div>
    </center>
    <!-- END HEADER -->


    <!-- ABOUT US -->
    <div class="box-about">
        <div class="about-text mb-5">
            <h2 class="fw-bold" id="about">ABOUT HOTEL ENCT</h2>
            <h4>Exclusive & Luxurious Hotel</h4>
        </div>
        <div class="d-flex">
            <div class="box-about-1">
                <div class="box-img">
                    <img src="dist/img/photo-lb2.jpeg" alt="">
                </div>
            </div>
            <div class="box-about-2">
                <p>Located on a beautiful stretch of beach, Hotel ENCT is the newest and most exclusive hotel in Labuan
                    Bajo, East Nusa Tenggara, Indonesia. Hotel ENCT is the perfect destination for anyone looking for a
                    peaceful and quiet island to relax on. People who live very simple and happy lives, fine white sandy
                    beaches and coral reefs. At night, you can contemplate the shimmering stars covering the sky and the
                    only sound you will hear is the crashing of the waves.</p>

                <p>At Hotel ENCT, guests will be immersed in lush serenity, where the elements connect and blend with
                    nature. This beachfront hotel has the best accommodations, all offering pool and sea views and
                    private two bedroom bungalows. All rooms are equipped with AC, balcony, hot water, high quality
                    bedding and beautifully decorated.</p>

                <p>Offering an unrivaled guest experience, ENCT is ready to cater to families, friends, couples and solo
                    travelers. If you prefer to enjoy the amenities, you can relax by the infinity pool, or by the
                    stunning beach.</p>
            </div>
        </div>

    </div>
    <!-- END ABOUT US -->


    <!-- FACILITY -->

    <div class="box-facility" id="facility">
        <div class="facility">
            <h2 class="fw-bold">FACILITY</h2>
            <div class="facility-img">
                <img src="dist/img/restoran.jpeg" alt="">
                <img src="dist/img/pool.jpeg" alt="">
                <img src="dist/img/fitness.jpeg" alt="">
                <img src="dist/img/spa.jpg" alt="">
                <img src="dist/img/sauna.jpg" alt="">
                <img src="dist/img/layanan.jpg" alt="">
            </div>
        </div>
    </div>

    <!-- END FACILITY -->


    <!-- ACCOMODATION -->


    <div class="tipe-room" id="room">
        <div class="room">
            <div class="card-room d-flex">
                <img src="dist/img/kamar2.jpeg" alt="">
                <div class="room-text">
                    <div class="room-flex d-flex">
                        <h3>Superior</h3>
                        <a href="/book" class="btn-2 px-4 pt-2" type="submit">Book Now</a>
                    </div>
                    <h5>Fasilitas:</h5>
                    <ul>
                        <li>Kamar berukuran luas 32 m2</li>
                        <li>Kamar mandi shower</li>
                        <li>Coffee Maker</li>
                        <li>AC</li>
                        <li>LED TV 32 inch</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="room mt-5">
            <div class="card-room d-flex">
                <img src="dist/img/kamar3.jpeg" alt="">
                <div class="room-text">
                    <div class="room-flex d-flex">
                        <h3>Deluxe</h3>
                        <a href="/book" class="btn-2 px-4 pt-2" type="submit">Book Now</a>
                    </div>
                    <h5>Fasilitas:</h5>
                    <ul>
                        <li>Kamar berukuran luas 45 m2</li>
                        <li>Kamar mandi shower dan Bath Tub</li>
                        <li>Coffee Maker</li>
                        <li>Sofa</li>
                        <li>AC</li>
                        <li>LED TV 40 inch</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- END ACCOMODATION -->


    <!-- FOOTER -->

    <div class="footer">
        <p class="opacity-75">F&Q 2005 Copyright.</p>
    </div>

    <!-- END FOOTER -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
