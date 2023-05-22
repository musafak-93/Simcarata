<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{!! asset('storage/Muhammadiyah.png') !!}" />
    <title>SIMCARATA</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>

<body>

    @include('component.navbar')


    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col col-sm-1">
                {{-- sidebar --}}
            </div>
            <div class="col-md-auto">
                <div class="p-5 mb-4  rounded-3">
                    <div class="container-fluid py-5">
                        <h5 class="display-6 fw-bold">Selamat datang di SIMCARATA</h5>
                        <h5>SIMCARATA merupakan Sistem Informasi Cabang Ranting Tegalrejo (SIMCARATA) dengan tujuan
                        </h5>
                    </div>
                    <div class="col align-items-md-stretch">
                        <div class="col-md-15">
                            <div class="h-100 p-5 text-white bg-dark rounded-3">
                                <h4 style="text-align: center;">1. Mewujudkan tertib administrasi diwilayah Pimpinan Cabang Muhammadiyah Tegalrejo.
                                </h4>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-15">
                            <div class="h-100 p-5 bg-light border rounded-3">
                                <h4 style="text-align: center;">2. Membuat maping digital warga muhammadiyah diwilayah Pimpinan Cabang Muhammadiyah
                                    Tegalrejo.
                                </h4>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col align-items-md-stretch">
                        <div class="col-md-15">
                            <div class="h-100 p-5 text-white bg-dark rounded-3">
                                <h4 style="text-align: center;">3. Penyediaan database warga muhammadiyah diwilayah Pimpinan Cabang Muhammadiyah
                                    Tegalrejo.</h4>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-15">
                            <div class="h-100 p-5 bg-light border rounded-3">
                                <h4 style="text-align: center;">4. Terwujudnya pengelolaan sistem informasi Cabang dan Ranting Muhammadiyah
                                    Tegalrejo.
                                    Mulai data warga muhammadiyah per ranting dll.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-lg-2">
                {{-- sidebar --}}
            </div>
        </div>
    </div>


    @include('component.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" cross origin="anonymous">



    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>

</html>
