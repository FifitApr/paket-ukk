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

    <link rel="stylesheet" type="text/css" href="{!! asset('dist/css/style2.css') !!}">

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
                        <a class="nav-link" href="#room">Room Type</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#review">Contact Us</a>
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
            <div class="box-header opacity-75 position-absolute start-50 translate-middle">
                <h2>BOOK NOW</h2>
            </div>
        </div>
    </center>
    <!-- END HEADER -->

    <!-- BOOK -->
    <center>
        <div class="box-book">
            <form action="{{ route('save-book') }}" method="POST" class="form py-4">
                {{ csrf_field() }}
                <div class="box-book1 d-flex">
                    <div class="mb-3 mx-3">
                        <label class="form-label">Check-In</label>
                        <input type="date" class="form-control" name="tgl_cekin">
                    </div>
                    <div class="mb-3 mx-3">
                        <label class="form-label">Check-Out</label>
                        <input type="date" class="form-control" name="tgl_cekout">
                    </div>
                    <div class="mx-3">
                        <label class="form-label">Number of Room</label>
                        <input type="number" class="form-control" name="jml_kamar">
                    </div>
                </div>

                <div class="box-form">
                    <div class="mb-3 mx-3">
                        <label class="form-label">Customer Name</label>
                        <input type="text" class="form-control" name="nm_pemesan">
                    </div>
                    <div class="mb-3 mx-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="mb-3 mx-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" class="form-control" name="no_hp">
                    </div>
                    <div class="mb-3 mx-3">
                        <label class="form-label">Guest Name</label>
                        <input type="text" class="form-control" name="nm_tamu">
                    </div>
                    <div class="mb-3 mx-3">
                        <label class="form-label">Room Type</label>
                        <select name="tipekamar" class="form-select form-control" id="">
                            <option selected>Room Type</option>
                            <option value="Superior">Superior</option>
                            <option value="Deluxe">Deluxe</option>
                        </select>
                    </div>
                    <button type="submit" class="btn mb-3">Booking Confirmation</button>
                </div>
            </form>
        </div>
    </center>
    <!-- END BOOK -->

    <!-- TABLE -->

    <center>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Check In</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Number of Room</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Guest Name</th>
                    <th scope="col">Room Type</th>
                    <th scope="col">Option</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tamu as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->tgl_cekin }}</td>
                    <td>{{ $item->tgl_cekout }}</td>
                    <td>{{ $item->jml_kamar }}</td>
                    <td>{{ $item->nm_pemesan }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->no_hp }}</td>
                    <td>{{ $item->nm_tamu }}</td>
                    <td>{{ $item->tipekamar }}</td>
                    <td>
                        <form action="{{ url('delete-book',$item->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btnnn">Delete</button></form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </center>
    <!-- END TABLE -->

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
