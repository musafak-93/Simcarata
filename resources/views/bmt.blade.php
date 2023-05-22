<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{!! asset('storage/Muhammadiyah.png') !!}" />

    <title>SIMCARATA - BMT</title>

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
                    <div class="mb-4  rounded-3">
                        <div class="container-fluid py-5">
                            <h5 class="display-6 fw-bold">BMT Tegalrejo</h5>
                        </div>

                        <div class="col-lg-8 col-md-10">
                            @foreach ($data_bmt as $item)
                                <div class="row row-cols-sm-1 row-cols-sm-1 g-5">
                                    <div class="col">
                                        <div class="card h-100" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseExample" aria-expanded="false"
                                            aria-controls="collapseExample">

                                            {{-- <img src="{{ Voyager::image($item->foto) }}" class="card-img-top" alt="..."> --}}
                                            <div class="card-body">
                                                <h3 class="card-title">{{ $item->nama }}</h3>
                                                <h5 class="card-text">Direktur : {{ $item->direktur }}</h5>
                                                <p class="card-title">Alamat : {{ $item->alamat }}</p>
                                                <p class="card-title">Tanggal Berdiri :
                                                    {{ $item->tanggalberdiri }}
                                                </p>
                                                <div class="collapse" id="collapseExample">
                                                    <div class="card card-body">
                                                        <div class="card-body"
                                                            style="display: flex; flex-direction: column;">
                                                            <div>
                                                                @foreach (json_decode($item->foto) as $image)
                                                                    <img style="max-width: 50% ; max-height: 50%; background-size: cover"
                                                                        src="{{ Voyager::image($image) }}"
                                                                        class="card-img-top">
                                                                    {{-- <img src="{{ Voyager::image($image) }}"> --}}
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            @endforeach
                        </div>

                    </div>

                </div>
                <div class="col col-lg-2">
                    {{-- sidebar --}}
                </div>
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
