<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{!! asset('storage/Muhammadiyah.png') !!}" />

    <title>SIMCARATA - Pimpinan Nasyiatul Aisyiyah</title>

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
                            <h5 class="display-6 fw-bold" style="text-align: center">Pimpinan Nasyiatul Aisyiyah Tegalrejo 2021-2025</h5>
                        </div>

                        <div class="row">
                            @foreach ($data_na->where('organisasi', 'like', 'Nasyiatul Aisyiyah')->where('masajabatan', 'like', '2021-2025') as $item)
                                <div class="col-md-4" style="display: flex; justify-content: center">

                                    <div class="card mt-4" style="width: 17rem;">
                                        <img style="max-width: 100% ; max-height: 100%; background-size: cover"
                                            src="{{ Voyager::image($item->foto) }}" class="card-img-top">
                                        {{-- <div class="listing__item__pic set-bg">
                            <div class="listing__item__pic__tag"><img src="{{ Voyager::image($item->foto) }}" class="card-img-top" alt="..."></div>
                        </div> --}}
                                        <div class="card-body"
                                            style="display: flex; flex-direction: column; justify-content: space-between">
                                            <div>
                                                <h4 class="card-title">{{ $item->nama }}</h4>
                                                <hr />
                                                <h6 class="card-title">{{ $item->tipejabatan }}</h6>

                                                <p class="card-text" style="font-size: 13px">
                                                    {{ $item->masajabatan }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
