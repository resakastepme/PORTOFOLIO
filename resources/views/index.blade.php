<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">

    <title>resaka's portofolio</title>
</head>

<style>

</style>

<body>

    <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <section id="clickableLogo" style="cursor: pointer">
                <i class="fa-solid fa-ghost fa-2xl">

                    <a class="ms-2 navbar-brand" href="#">RESAKA</a>

                </i>
            </section>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <button class="btn btn-secondary btn-sm themeBTN">theme: <span id="aliasesTheme"> dark </span></button>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                {{-- <form class="d-flex me-3" role="search">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Config::get('languages')[App::getLocale()]['display'] }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}">
                                            {{ $language['display'] }}</a>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                    </ul>

                </form> --}}
            </div>
        </div>
    </nav>

    <div class="container mt-5 mb-5 pb-5">
        <div class="row">
            <div class="col">

                <section id="firstSec" align="center">
                    <div class="image-container">
                        <img src="{{ asset('img/myself.png') }}" alt="Image" id="myself">
                    </div>

                    <h1 class="rubik-font" id="myname"> RESA KOMARA AKBARI </h1>

                    <div class="d-flex justify-content-center align-items-center">
                        <div class="card" style="width: 200px;">
                            <div class="card-body">
                                <div class="d-flex justify-content-center align-items-center">
                                    <a href="https://www.instagram.com/30.29.04.127.0.0.1/" target="blank">
                                        <button type="button" class="btn btn-outline-danger me-1">
                                            <i class="fa-brands fa-instagram"></i>
                                        </button>
                                    </a>
                                    <a href="https://www.linkedin.com/in/resakomaraakbari/" target="blank">
                                        <button type="button" class="btn btn-outline-primary me-1">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    </button>
                                    <a href="https://www.github.com/resakastepme/" target="blank">
                                        <button type="button" class="btn btn-outline-secondary me-1">
                                            <i class="fa-brands fa-github"></i>
                                    </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                </section>

                <hr class="mt-5 mb-5">

                <section id="secondSec">

                    <h1> TENTANG SAYA </h1>
                    <div class="card rounded shadow border-1">
                        <dov class="card-body">

                            <p class="justifyText"> Saya adalah seorang fresh graduate dengan gelar Sarjana Teknik
                                Informatika dari Universitas
                                Komputer Indonesia yang memiliki dasar yang kuat dalam pengembangan perangkat lunak.
                                Saya
                                menguasai beberapa bahasa pemrograman seperti PHP, JavaScript, dan Java, serta memiliki
                                pengalaman dalam membangun website menggunakan framework seperti Laravel. Saya memiliki
                                kemampuan berpikir kritis dan problem solving yang baik, serta mampu beradaptasi dengan
                                cepat
                                terhadap teknologi baru. Dengan kepribadian yang gigih, pantang menyerah, dan kemampuan
                                belajar
                                yang cepat, saya siap menghadapi tantangan di dunia profesional dan berkontribusi dalam
                                pengembangan teknologi yang lebih inovatif. </p>

                        </dov>
                    </div>

                    <hr class="mt-5 mb-5">

                    <h1> PENGALAMAN </h1>

                    <div class="row" style="line-height: 15px;">
                        <div class="col-md-6">
                            <div class="card rounded shadow border-1">
                                <div class="row g-0">
                                    <div class="col-md-4 d-flex justify-content-center align-items-center"
                                        style="background-color: white; padding: 10px; display: inline-block;">
                                        <img src="{{ asset('img/telkomLogo.png') }}" alt="Telkom Logo"
                                            style="width: 100%; height: 100%;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4> PT Telekomunikasi Indonesia Tbk. </h3>
                                                <p style="text-decoration: underline;">Magang</p>
                                                <p> Access Data Validation & Inventory Management </p>
                                                <p> Agustus 2023 s/d Oktober 2023 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 breakCard">
                            <div class="card rounded shadow border-1">
                                <div class="row g-0">
                                    <div class="col-md-4 d-flex justify-content-center align-items-center"
                                        style="background-color: white; padding: 10px; display: inline-block;">
                                        <img src="{{ asset('img/ardanIcon.jpeg') }}" alt="Telkom Logo"
                                            style="width: 70%; height: 70%;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4> PT Ardan Group </h3>
                                                <p style="text-decoration: underline;">Magang</p>
                                                <p> Maintenance Server </p>
                                                <p> Januari 2018 s/d Maret 2018 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="mt-5 mb-5">

                    <h1> PENDIDIKAN </h1>

                    <div class="row" style="line-height: 15px;">
                        <div class="col-md-6">
                            <div class="card rounded shadow border-1">
                                <div class="row g-0">
                                    <div class="col-md-4 d-flex justify-content-center align-items-center"
                                        style="background-color: white; padding: 10px; display: inline-block;">
                                        <img src="{{ asset('img/unikomLogo.png') }}" alt="Telkom Logo"
                                            style="width: 80%; height: 90%;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4> Universitas Komputer Indonesia </h3>
                                                <p style="text-decoration: underline;">Fakultas Teknik dan Ilmu
                                                    Komputer</p>
                                                <p> Sarjana Teknik Informatika
                                                    <br>IPK 3.12
                                                </p>
                                                <p> 2020 - 2024 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 breakCard">
                            <div class="card rounded shadow border-1">
                                <div class="row g-0">
                                    <div class="col-md-4 d-flex justify-content-center align-items-center"
                                        style="background-color: white; padding: 10px; display: inline-block;">
                                        <img src="{{ asset('img/smkn2Logo.jpeg') }}" alt="Telkom Logo"
                                            style="width: 82%; height: 92%;">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4> SMKN 2 Bandung </h3>
                                                <p style="text-decoration: underline;">Teknologi Informasi dan
                                                    Komunikasi</p>
                                                <p> Teknik Komputer dan Jaringan </p>
                                                <p> 2016 - 2019 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="mt-5 mb-5">

                    <h1> KETERAMPILAN </h1>

                    <div class="card-container" style="cursor: default;">
                        <div class="cardMod">Microsoft Office</div>
                        <div class="cardMod">Linux</div>
                        <div class="cardMod">Merakit Komputer</div>
                        <div class="cardMod">Instalasi Komputer</div>
                        <div class="cardMod">Networking</div>
                        <div class="cardMod">HTML5</div>
                        <div class="cardMod">CSS</div>
                        <div class="cardMod">JavaScript</div>
                        <div class="cardMod">PHP</div>
                        <div class="cardMod">Java</div>
                        <div class="cardMod">MySQL</div>
                        <div class="cardMod">Firebase</div>
                        <div class="cardMod">Laravel Framework</div>
                        <div class="cardMod">Android Studio</div>
                        <div class="cardMod">Bootstrap</div>
                        <div class="cardMod">Adobe Photoshop</div>
                        <div class="cardMod">Adobe Premiere Pro</div>
                        <div class="cardMod">Adobe After Effect</div>
                    </div>


                    <hr class="mt-5 mb-5">

                    <h1> BAHASA </h1>

                    <div class="d-flex justify-content-center align-items-center">
                        <div class="box me-3">
                            <div class="percent">
                                <svg>
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <circle cx="70" cy="70" r="70"></circle>
                                </svg>
                                <div class="number">
                                    <h3> Native </h3>
                                </div>
                            </div>
                            <h2 class="text"> Indonesia </h2>
                        </div>

                        <div class="box">
                            <div class="percent2">
                                <svg>
                                    <circle cx="70" cy="70" r="70"></circle>
                                    <circle cx="70" cy="70" r="70"></circle>
                                </svg>
                                <div class="number2">
                                    <h2>80<span>%</span></h2>
                                </div>
                            </div>
                            <h2 class="text"> English </h2>
                        </div>
                    </div>

                    <hr class="mt-5 mb-5">

                    <h1> SERTIFIKASI </h1>

                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Junior Web Programmer</h5>
                            <p class="mb-2"><strong>Badan Nasional Sertifikasi Profesi</strong> | <small>September
                                    2024 - September 2027</small></p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">English Proficiency Test</h5>
                            <p class="mb-2"><strong>Unikom Language Center</strong> | <small>September 2024 -
                                    Desember 2025</small></p>
                            <p>Score 497</p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Magang</h5>
                            <p class="mb-2"><strong>PT Telekomunikasi Indonesia Tbk.</strong> | <small>Agustus 2023 -
                                    Oktober 2023</small></p>
                            <p>Access Data Validation & Inventory Management</p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute"
                                style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Magang</h5>
                            <p class="mb-2"><strong>PT Ardan Group</strong> | <small>Januari 2018 - Maret
                                    2018</small></p>
                            <p>Maintenance Server</p>
                        </div>
                    </div>

                    <hr class="mt-5 mb-5">

                    <h1> PROYEK </h1>

                    <div class="row" style="line-height: 15px;">
                        <div class="col-md-6">
                            <div class="card rounded shadow border-1" id="hoverableProyek1">
                                <div class="row g-0" style="cursor: pointer;">
                                    <div class="col-md-4 d-flex justify-content-center align-items-center"
                                        style="background-color: white; padding: 10px; display: inline-block;">
                                        <img src="{{ asset('img/shielded.png') }}" alt="Telkom Logo"
                                            id="shieldedProyekLogo">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h4> Shielded <br> with AI Assistant </h3>
                                                <p style="text-decoration: underline;">Chrome Extension</p>
                                                <p> Access Data Validation & Inventory Management </p>
                                                <p> Agustus 2023 s/d Oktober 2023 </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <i class="fa-solid fa-chevron-right fa-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 breakCard">
                            <div class="card rounded shadow border-1" id="hoverableProyek2">
                                <div class="row g-0" style="cursor: pointer;">
                                    <div class="col-md-4 d-flex justify-content-center align-items-center"
                                        style="background-color: white; padding: 10px; display: inline-block;">
                                        <img src="{{ asset('img/telkomLogo.png') }}" alt="Telkom Logo"
                                            id="valinsProyekLogo">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h4> PT Telekomunikasi Indonesia Tbk. </h3>
                                                <p style="text-decoration: underline;">Magang</p>
                                                <p> Access Data Validation & Inventory Management </p>
                                                <p> Agustus 2023 s/d Oktober 2023 </p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="d-flex justify-content-center align-items-center h-100">
                                            <i class="fa-solid fa-chevron-right fa-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

            </div>
        </div>
    </div>

    <footer class="border-top me-3 ms-3 mb-1 mt-5" align="center">
        <p class="mb-0 ==text-body-secondary">© 2024 RESAKA </p>
        <i class="fa-solid fa-ghost fa-sm me-1"></i>
        <a href="https://www.instagram.com/resaka.xmp" target="blank">resaka</a>
    </footer>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/d639410787.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
    function getUserOSTheme() {
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            return 'dark';
        }
        return 'light';
    }

    const userTheme = getUserOSTheme();
    $('html').attr('data-bs-theme', userTheme);
    $('#aliasesTheme').text(userTheme);

    $('#clickableLogo').on('click', function(e) {
        e.preventDefault();
        location.href = '/';
    })

    $(document).ready(function() {

        $('.themeBTN').on('click', () => {
            const current = $('#aliasesTheme').text().trim();
            // console.log('Current Theme:', current);

            if (current === 'dark') {
                $('html').attr('data-bs-theme', 'light');
                $('#aliasesTheme').text('light');
            } else {
                $('html').attr('data-bs-theme', 'dark');
                $('#aliasesTheme').text('dark');
            }
        });

    });
</script>

</html>
