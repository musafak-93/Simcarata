<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{!! asset('storage/Muhammadiyah.png') !!}" />
    <title>SIMCARATA - Berita </title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>

<body>
    @include('component.navbar')

    <article>
        <div class="container">
            <div class="container" style="height: 2cm"></div>
            <div class="row">
                {{-- Search --}}
                <div class="col-lg-8 col-md-10 mx-auto pb-3">
                    <form class="d-flex" action="/post" method="get">
                        <input name="search" class="form-control me-2" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
                {{-- Artikel --}}
                <div class="col-lg-8 col-md-10 mx-auto">
                    @if (count($data) > 0)
                        @foreach ($data as $item)
                            <div class="card mb-3">
                                <img src="{{ Voyager::image($item->image) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    <p class="card-text">{{ $item->excerpt }}</p>
                                    <p class="card-text"><small class="text-muted">Terakhir diperbarui
                                        {{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</small></p>
                                    <a href="/detail/{{ $item->id }}-{{ $item->slug }}" type="button"
                                        class="btn btn-light">Baca
                                        Selengkapnya</a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p class="alert alert-danger">Berita tidak ditemukan</p>
                    @endif
                    {{-- Pagination --}}
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </article>


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
