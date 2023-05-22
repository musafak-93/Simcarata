<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{!! asset('storage/Muhammadiyah.png') !!}" />

    <title>SIMCARATA - Profil</title>

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
            <div class="col col-lg-2">
                {{-- sidebar --}}
            </div>
            <div class="col-md-auto">
                <div class="p-5 rounded-3">
                    <div class="container-fluid py-5">
                        <h5 class="display-6 fw-bold">Profil Cabang Muhammadiyah Tegalrejo</h5>
                        {{-- <h5>SIMCARATA merupakan Sistem Informasi Cabang Ranting Tegalrejo (SIMCARATA) dengan tujuan --}}
                        </h5>
                    </div>
                    <div class="col align-items-md-stretch">
                        {{-- VISI --}}
                        <div class="col-md-15">
                            <div class="h-100 p-4  bg-light rounded-3">
                                <h4>Visi :</h4>
                                <h5>
                                    <ul class="list-group list-group">
                                        <li class="list-group-item">Muhammadiyah sebagai gerakan Islam yang berlandaskan
                                            Al-Qur'an dan As-Sunnah dengan watak tajdid yang dimilikinya senantiasa
                                            istiqomah dan aktif dalam melaksanakan dakwah Islam amar ma'ruf nahi munkar
                                            di semua bidang dalam upaya mewujudkan Islam sebagai rahmatan lil 'alamin
                                            menuju terciptanya atau terwujudnya masyarakat Islamyang sebenar-benarnya
                                        </li>
                                    </ul>
                                </h5>
                            </div>
                        </div>
                        <br>
                        {{-- MISI --}}
                        <div class="col-md-15">
                            <div class="h-100 p-4 bg-light  rounded-3">
                                <h4>Misi :</h4>
                                <h5>
                                    <li class="list-group-item">Muhammadiyah sebagai gerakan Islam, dakwah amar ma'ruf
                                        nahi munkar yang memiliki misi:</li>
                                    <ol class="list-group list-group-numbered">
                                        <li class="list-group-item">Menegakkan keyakinan tauhid yang murni sesuai dengan
                                            ajaran Allah SWT yang dibawa oleh para Rasul sejak Nabi Adam as, hingga Nabi
                                            Muhammad saw.</li>
                                        <li class="list-group-item">Memahami agama dengan menggunakan akal fikiran
                                            sesuai dengan jiwa ajaran Islam untuk menjawab dan menyelesaikan persoalan -
                                            persoalan kehidupan.</li>
                                        <li class="list-group-item">Menyebarluaskan ajaran Islam yang bersumber pada
                                            Al-Qur'an sebagai kitab Allah SWT terakhir dan Sunnah Rasul untuk pedoman
                                            hidup umat manusia.</li>
                                        <li class="list-group-item">Mewujudkan amalan - amalan Islam dalam kehidupan
                                            pribadi, keluarga dan masyarakat.</li>
                                    </ol>
                                </h5>
                            </div>
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
