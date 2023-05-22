<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{!! asset('storage/Muhammadiyah.png') !!}" />
    <title>SIMCARATA - Ranting Aisyiyah</title>

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
                <div class="container" style="height: 2cm"></div>
                {{-- RANTING AISYIYAH --}}
                <div class="col-md-15">
                    <div class="h-100 p-4 bg-light  rounded-3">
                        <h4>Ranting Aisyiyah</h4>
                        @foreach ($data_pra as $item)
                            <h6>
                                <div class="list-group">
                                    <a class="list-group-item list-group-item-action" aria-current="true">
                                        <div class="d-flex w-100 justify-content-between">
                                            <h5 class="mb-1">{{ $item->nama_ranting_aisyiyah }}</h5>

                                        </div>
                                        <p class="mb-1">Alamat : {{ $item->alamat }}
                                        </p>

                                    </a>
                                </div>
                            </h6>
                        @endforeach
                    </div>
                </div>
                <div class="col col-lg-2">
                    {{-- sidebar --}}
                </div>
            </div>
        </div>
    </div>
    <br>

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
