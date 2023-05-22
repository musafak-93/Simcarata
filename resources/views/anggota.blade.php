<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{!! asset('storage/Muhammadiyah.png') !!}" />


    <title>SIMCARATA - Ranting Muhammadiyah</title>

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
                </h5>
            </div>
        </div> --}}
        {{-- RANTING MUHAMMADIYAH --}}
        <div class="container" style="height: 2cm"></div>
        <div class="col-md-15">
            <div class="h-100 p-4 bg-light  rounded-3">
                <h4>Ranting Muhammadiyah</h4>
                <div class=" table-responsive table-hover table-light">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Ranting</th>
                                <th scope="col">Data Terinput</th>
                                <th scope="col">Anggota Aktif</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ranting Muhammadiyah Bangirejo</td>
                                <td>{{ $rmbangirejo }}</td>
                                <td>{{ $stmbangirejo }}</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Ranting Muhammadiyah Bangunrejo</td>
                                <td>{{ $rmbangunrejo }}</td>
                                <td>{{ $stmbangunrejo }}</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ranting Muhammadiyah Blunyahrejo</td>
                                <td>{{ $rmblunyahrejo }}</td>
                                <td>{{ $stmblunyahrejo }}</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Ranting Muhammadiyah Jatimulyo</td>
                                <td>{{ $rmjatimulyo }}</td>
                                <td>{{ $stmjatimulyo }}</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Ranting Muhammadiyah Karangwaru Lor</td>
                                <td>{{ $rmkarangwarulor }}</td>
                                <td>{{ $stmkarangwarulor }}</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Ranting Muhammadiyah Kricak Kidul</td>
                                <td>{{ $rmkricakkidul }}</td>
                                <td>{{ $stmkricakkidul }}</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Ranting Muhammadiyah Petinggen</td>
                                <td>{{ $rmpetinggen }}</td>
                                <td>{{ $stmpetinggen }}</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Ranting Muhammadiyah Sidomulyo</td>
                                <td>{{ $rmsidomulyo }}</td>
                                <td>{{ $stmsidomulyo }}</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Ranting Muhammadiyah Tegalrejo</td>
                                <td>{{ $rmtegalrejo }}</td>
                                <td>{{ $stmtegalrejo }}</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Ranting Muhammadiyah Tompeyan</td>
                                <td>{{ $rmtompeyan }}</td>
                                <td>{{ $stmtompeyan }}</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Jumlah</td>
                                <td>{{ $total_rm }}</td>
                                <td>{{ $totalrmaktif }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>

                <h4>Ranting Aisyiyah</h4>
                <div class=" table-responsive table-hover table-light">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Ranting</th>
                                <th scope="col">Data Terinput</th>
                                <th scope="col">Anggota Aktif</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Ranting Aisyiyah Sidomulyo</td>
                                <td>{{ $rasidomulyo }}</td>
                                <td>{{ $stasidomulyo }}</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Ranting Aisyiyah Bangirejo</td>
                                <td>{{ $rabangirejo }}</td>
                                <td>{{ $stabangirejo }}</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Ranting Aisyiyah Bangunrejo</td>
                                <td>{{ $rabangunrejo }}</td>
                                <td>{{ $stabangunrejo }}</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Ranting Aisyiyah Sudagaran</td>
                                <td>{{ $rasudagaran }}</td>
                                <td>{{ $stasudagaran }}</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Ranting Aisyiyah Tegalrejo</td>
                                <td>{{ $rategalrejo }}</td>
                                <td>{{ $stategalrejo }}</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Ranting Aisyiyah Tompeyan</td>
                                <td>{{ $ratompeyan }}</td>
                                <td>{{ $statompeyan }}</td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Ranting Aisyiyah Blunyahrejo</td>
                                <td>{{ $rablunyahrejo }}</td>
                                <td>{{ $stablunyahrejo }}</td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Ranting Aisyiyah Karangwaru</td>
                                <td>{{ $rakarangwaru }}</td>
                                <td>{{ $stakarangwaru }}</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Ranting Aisyiyah Jatimulyo</td>
                                <td>{{ $rajatimulyo }}</td>
                                <td>{{ $stajatimulyo }}</td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>Ranting Aisyiyah Kricak Kidul</td>
                                <td>{{ $rakricakkidul }}</td>
                                <td>{{ $stakricakkidul }}</td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>Ranting Aisyiyah Petinggen</td>
                                <td>{{ $rapetinggen }}</td>
                                <td>{{ $stapetinggen }}</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td>Jumlah</td>
                                <td>{{ $total_ra }}</td>
                                <td>{{ $totalraaktif }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <br>
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
