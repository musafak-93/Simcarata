<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{!! asset('storage/Muhammadiyah.png') !!}" />


    <title>SIMCARATA - Ranting Aisyiyah</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

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
        </div> --}}
        <div class="container" style="height: 2cm"></div>
        <div class="col-md-15">
            <div class="h-100 p-4 bg-light  rounded-3">
                <h4>Ranting Aisyiyah Sidomulyo</h4>
                <div class=" table-responsive table-hover table-light">

                    <table class="table table-hover">
                        <tr>
                            <th>NAMA</th>
                            <th>JABATAN</th>
                            <th>ORGANISASI</th>
                        </tr>
                        @foreach ($data_pra->where('organisasi', 'like', 'RANTING AISYIYAH SIDOMULYO - PIMPINAN HARIAN') as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->tipejabatan }}</td>
                            <td>{{ $item->organisasi }}</td>

                        </tr>
                        @endforeach
                    </table>

                </div>
                <br>
                <h4>Ranting Aisyiyah Bangirejo</h4>
                <div class=" table-responsive table-hover table-light">

                    <table class="table table-hover">
                        <tr>
                            <th>NAMA</th>
                            <th>JABATAN</th>
                            <th>ORGANISASI</th>
                        </tr>
                        @foreach ($data_pra->where('organisasi', 'like', 'RANTING AISYIYAH BANGIREJO - PIMPINAN HARIAN') as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->tipejabatan }}</td>
                            <td>{{ $item->organisasi }}</td>

                        </tr>
                        @endforeach
                    </table>

                </div>
                <br>
                <h4>Ranting Aisyiyah Bangunrejo</h4>
                <div class=" table-responsive table-hover table-light">

                    <table class="table table-hover">
                        <tr>
                            <th>NAMA</th>
                            <th>JABATAN</th>
                            <th>ORGANISASI</th>
                        </tr>
                        @foreach ($data_pra->where('organisasi', 'like', 'RANTING AISYIYAH BANGUNREJO - PIMPINAN HARIAN') as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->tipejabatan }}</td>
                            <td>{{ $item->organisasi }}</td>

                        </tr>
                        @endforeach
                    </table>

                </div>
                <br>
                <h4>Ranting Aisyiyah Sudagaran</h4>
                <div class=" table-responsive table-hover table-light">

                    <table class="table table-hover">
                        <tr>
                            <th>NAMA</th>
                            <th>JABATAN</th>
                            <th>ORGANISASI</th>
                        </tr>
                        @foreach ($data_pra->where('organisasi', 'like', 'RANTING AISYIYAH SUDAGARAN - PIMPINAN HARIAN') as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->tipejabatan }}</td>
                            <td>{{ $item->organisasi }}</td>

                        </tr>
                        @endforeach
                    </table>

                </div>
                <br>
                <h4>Ranting Aisyiyah Tegalrejo</h4>
                <div class=" table-responsive table-hover table-light">

                    <table class="table table-hover">
                        <tr>
                            <th>NAMA</th>
                            <th>JABATAN</th>
                            <th>ORGANISASI</th>
                        </tr>
                        @foreach ($data_pra->where('organisasi', 'like', 'RANTING AISYIYAH TEGALREJO - PIMPINAN HARIAN') as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->tipejabatan }}</td>
                            <td>{{ $item->organisasi }}</td>

                        </tr>
                        @endforeach
                    </table>

                </div>
                <br>
                <h4>Ranting Aisyiyah Tompeyan</h4>
                <div class=" table-responsive table-hover table-light">

                    <table class="table table-hover">
                        <tr>
                            <th>NAMA</th>
                            <th>JABATAN</th>
                            <th>ORGANISASI</th>
                        </tr>
                        @foreach ($data_pra->where('organisasi', 'like', 'RANTING AISYIYAH TOMPEYAN - PIMPINAN HARIAN') as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->tipejabatan }}</td>
                            <td>{{ $item->organisasi }}</td>

                        </tr>
                        @endforeach
                    </table>

                </div>
                <br>
                <h4>Ranting Aisyiyah Blunyahrejo</h4>
                <div class=" table-responsive table-hover table-light">

                    <table class="table table-hover">
                        <tr>
                            <th>NAMA</th>
                            <th>JABATAN</th>
                            <th>ORGANISASI</th>
                        </tr>
                        @foreach ($data_pra->where('organisasi', 'like', 'RANTING AISYIYAH BLUNYAHREJO - PIMPINAN HARIAN') as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->tipejabatan }}</td>
                            <td>{{ $item->organisasi }}</td>

                        </tr>
                        @endforeach
                    </table>

                </div>
                <br>
                <h4>Ranting Aisyiyah Karangwaru</h4>
                <div class=" table-responsive table-hover table-light">

                    <table class="table table-hover">
                        <tr>
                            <th>NAMA</th>
                            <th>JABATAN</th>
                            <th>ORGANISASI</th>
                        </tr>
                        @foreach ($data_pra->where('organisasi', 'like', 'RANTING AISYIYAH KARANGWARU - PIMPINAN HARIAN') as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->tipejabatan }}</td>
                            <td>{{ $item->organisasi }}</td>

                        </tr>
                        @endforeach
                    </table>

                </div>
                <br>
                <h4>Ranting Aisyiyah Jatimulyo</h4>
                <div class=" table-responsive table-hover table-light">

                    <table class="table table-hover">
                        <tr>
                            <th>NAMA</th>
                            <th>JABATAN</th>
                            <th>ORGANISASI</th>
                        </tr>
                        @foreach ($data_pra->where('organisasi', 'like', 'RANTING AISYIYAH JATIMULYO - PIMPINAN HARIAN') as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->tipejabatan }}</td>
                            <td>{{ $item->organisasi }}</td>

                        </tr>
                        @endforeach
                    </table>

                </div>
                <br>
                <h4>Ranting Aisyiyah Kricak Kidul</h4>
                <div class=" table-responsive table-hover table-light">

                    <table class="table table-hover">
                        <tr>
                            <th>NAMA</th>
                            <th>JABATAN</th>
                            <th>ORGANISASI</th>
                        </tr>
                        @foreach ($data_pra->where('organisasi', 'like', 'RANTING AISYIYAH KRICAK KIDUL - PIMPINAN HARIAN') as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->tipejabatan }}</td>
                            <td>{{ $item->organisasi }}</td>

                        </tr>
                        @endforeach
                    </table>

                </div>
                <br>
                <h4>Ranting Aisyiyah Petinggen</h4>
                <div class=" table-responsive table-hover table-light">

                    <table class="table table-hover">
                        <tr>
                            <th>NAMA</th>
                            <th>JABATAN</th>
                            <th>ORGANISASI</th>
                        </tr>
                        @foreach ($data_pra->where('organisasi', 'like', 'RANTING AISYIYAH PETINGGEN - PIMPINAN HARIAN') as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->tipejabatan }}</td>
                            <td>{{ $item->organisasi }}</td>

                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>

        </div>
        <br>

        <div class="col col-lg-2">
            {{-- sidebar --}}
        </div>
    </div>
    <br>
    </div>

    @include('component.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" cross origin="anonymous">



    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>
</body>

</html>

