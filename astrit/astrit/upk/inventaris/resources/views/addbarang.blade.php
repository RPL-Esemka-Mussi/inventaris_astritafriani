<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Barang Baru</title>
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
                        <a class="nav-link fw-bolder" href="{{ url('user')}}">User</a>
                    <li class="nav-item dropdown ms-3-md">
                    <li class="nav-item fw-bolder">
                        <a class="nav-link " href="{{ url('barang')}}">Barang</a>
                    <li class="nav-item fw-bolder">
                        <a class="nav-link" href="{{ url('laporan')}}">Laporan</a>
                    <li class="nav-item dropdown ms-3-md">
                        <a class="nav-link dropdown-toggle fw-bolder" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{auth()->user()->name}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item fw-bolder text-center fw-bolder" href="{{ url('/logout') }}">logout</a></li>
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
                <h5 class="text-center mt-3 fw-bold fs-2">Tambah Barang</h5>

                <form action="{{ url('barang/insert') }}" method="post">
                    @csrf

                    <table class="table">
                        <div class="form-gruop mt-5 fw-bold">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="nama_barang" name="nama_barang" id="nama_barang" class="form-control" placeholder="Nama Barang">
                        </div>


                        <div class="form-gruop mt-2 fw-bold">
                            <label for="satuan">Satuan</label>
                            <input type="number" name="satuan" id="number" class="form-control" placeholder="Satuan">
                        </div>


                        <div class="form-gruop mt-2 fw-bold">
                            <label for="jumlah">Jumlah</label>
                            <input type="number" name="jumlah" id="number" class="form-control" placeholder="Jumlah">
                        </div>


                        <div class="form-gruop mt-2 fw-bold">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan">
                        </div>

                        <div class="form-gruop mt-2 fw-bold">
                            <label for="lokasi">Lokasi</label>
                            <input type="text" name="lokasi" id="lokasi" class="form-control" placeholder="lokasi">
                        </div>


                        <div class="mt-3 float-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{url('barang')}}" class="btn btn-danger">Back</a>
                        </div>
            </div>

            </table>
            </form>

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