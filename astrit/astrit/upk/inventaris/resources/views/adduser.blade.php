<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>User Baru</title>
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-info">
        <div class="container">
            <a class="navbar-brand fw-bolder" href="#">Inventario</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item fw-bolder">
                        <a class="nav-link active" aria-current="page" href="{{ url('dashboard')}}">Dashboard</a>
                    </li>
                    <li class="nav-item fw-bolder">
                        <a class="nav-link" href="{{ url('user')}}">User</a>
                    <li class="nav-item fw-bolder">
                        <a class="nav-link" href="{{ url('barang')}}">Barang</a>
                    <li class="nav-item fw-bolder">
                        <a class="nav-link" href="{{ url('laporan')}}">Laporan</a>
                    <li class="nav-item dropdown ms-3-md">
                        <a class="nav-link dropdown-toggle fw-bolder" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{auth()->user()->name}}
                        </a>
                        <ul class="dropdown-menu fw-bolder" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item text-center fw-bolder" href="{{ url('/logout') }}">logout</a></li>
                        </ul>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-6 mt-4">
                <h3 class="fw-bold mt-2 text-center fs-2">User Baru</h3>

                <form action="{{ url('user/insert') }}" method="post">
                    @csrf

                    <div class="form-gruop mt-4 fw-bold">
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nama">
                    </div>

                    <div class="form-gruop mt-2 fw-bold">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">

                    </div>

                    <div class="form-gruop mt-2 fw-bold">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>


                    <div class="form-gruop mt-2 fw-bold">
                        <label for="level">level</label>
                        <input type="text" name="level" id="level" class="form-control" placeholder="Level">
                    </div>

                    <div class="form-gruop mt-2 fw-bold">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat">
                    </div>

                    <div class="form-gruop mt-2 fw-bold">
                        <label for="telepon">Telepon</label>
                        <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Telepon">
                    </div>
                    <div class="mt-3 float-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{url('user')}}" class="btn btn-danger">Back</a>
                    </div>


                </form>
                </table>
            </div>
        </div>
    </div>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>