<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('component.navbar')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{!! asset('storage/Muhammadiyah.png') !!}" />
    <title>SIMCARATA - Detail Berita</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">




</head>





<body>

    @extends('master')

    <!-- memberikan judul di tab sesuai dengan judul artikel yang sedang dibaca -->
    @section('title')
        {{ $data->title }}
    @endsection

    @section('image')
        {{ $data->image }}
    @endsection

    <!-- menampilkan gambar, judul, dan isi artikel -->
    {{-- @section('main')
        <div class="col-md-7 col-sm-12 mb-5 bg-white p-0">
            <img src="{{ Voyager::image($data->image) }}" class="card-img-top" alt="...">
            <div class="p-4">
                <h2>{{ $data->title }}</h2>
                <p class="mt-5">{!! $data->body !!}</p>
                <p class="card-text"><small class="text-muted">Meta Keyword : {{ $data->meta_keywords }}</small></p>
                <p class="card-text"><small class="text-muted">Last updated {{ $data->created_at }}</small></p>

            </div>
        </div>
    @endsection --}}

    <!-- menampilkan tombol kembali ke halaman utama -->
    {{-- @section('sidebar')
    <div class="col-md-4 offset-md-1 col-sm-12 bg-white p-4 h-100">
       <center>
            <a href="/">
                <button class="btn btn-info text-white w-100">Kembali</button>
            </a>
        </center>
    </div>
    @endsection --}}



    {{-- <header class="masthead" style="background-image: url( {{ Voyager::image($data->image) }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{ $data->title }}</h1>
                        <h2 class="subheading">{{ $data->excerpt }}</h2>

                    </div>
                </div>
            </div>
        </div>
    </header> --}}
    <!-- Post Content-->
    <article>
        <div class="container">
            <div class="container" style="height: 2cm"></div>
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <img src="{{ Voyager::image($data->image) }}" class="card-img-top" alt="...">
                    <br>
                    <h1>{{ $data->title }}</h1>

                    {{-- <h5 class="subheading">{{ $data->excerpt }}</h5> --}}
                    <p class="container">{!! $data->body !!}</p>
                    <p class="card-text"><small class="text-muted">Meta Keyword :
                            {{ $data->meta_keywords }}</small>
                    </p>
                    <p class="card-text"><small class="text-muted">Terakhir Diperbarui {{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</small></p>

                </div>
            </div>
        </div>
        <br>
    </article>






    {{-- <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        ©2021 Pimpinan Cabang Muhammadiyah Tegalrejo . Dikembangkan oleh Mahasiswa Universitas Muhammadiyah
        Yogyakarta
    </div> --}}

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
