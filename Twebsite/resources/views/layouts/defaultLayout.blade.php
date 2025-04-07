
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titel')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css">
    <link href="{{ asset('css/app.css') }}?v={{ filemtime(public_path('css/app.css')) }}" rel="stylesheet">
    <link href="{{ asset('css/nav.css') }}?v={{ filemtime(public_path('css/nav.css')) }}" rel="stylesheet">
    <link href="{{ asset('css/media.css') }}?v={{ filemtime(public_path('css/media.css')) }}" rel="stylesheet">
    <!-- In den <head> deiner Blade- oder HTML-Datei -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Lora:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">

    <link rel="icon" href="{{ asset('FaviconLogo.png') }}" type="image/x-icon">
    <meta name="description" content="@yield("beschreibung")">
    <meta name="robots" content="index, follow"> <!-- Suchmaschinen dürfen die Seite indexieren und Links folgen -->

    <meta property="og:title" content="@yield('titelOg')" />
    <meta property="og:description" content="@yield('beschreibungOg')" />
    <meta property="og:image" content="{{ asset('MediumSquareLogo.jpg') }}" />
    <meta property="og:url" content="{{ Request::url() }}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/js/foundation.min.js"></script>

</head>
<body>
<header>
    @section("header")
        <div class="navContainer">
            <!-- Logo und Schriftzug -->
            <div class="logoNav">
                <img src="{{ asset('image/TröbsLogoFinalöö.png') }}" alt="" class="logo"> <!-- Dein Logo hier -->
            </div>

            <!-- Schriftzüge (Firma und Slogan) -->
            <div class="schriftzugNavContainer">
                <div class="schriftzugGroß">Daniel Troebs</div> <!-- Groß -->
                <div class="schriftzugKlein">Balance, Ruhe & Energie</div> <!-- Klein -->
            </div>

            <!-- Navigation Button (für mobile Ansicht) -->


            <!-- Ausklappbare Navigation -->
            <!-- Desktop Navigation -->
            <nav class="navLinks desktopNav">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="Leistungen">Leistungen</a></li>
                    <li><a href="Kontakt">Kontakt</a></li>
                    <li><a href="Übermich">Über mich</a></li>
                </ul>
            </nav>

            <!-- Mobile Navigation -->
            <nav class="navLinks mobileNav">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="Leistungen">Leistungen</a></li>
                    <li><a href="Kontakt">Kontakt</a></li>
                    <li><a href="Übermich">Über mich</a></li>
                </ul>
            </nav>

            <!-- Hamburger Button für Mobile -->
            <button class="navButton" onclick="toggleNav()">☰</button>
        </div>
        <script>
            function toggleNav() {
                const mobileNav = document.querySelector('.mobileNav');
                mobileNav.classList.toggle('active');
            }

        </script>


        <script>
            // Logo-Element abrufen
            let logos = document.querySelectorAll('.imgHeader');
            logos.forEach(function (logo) {
                logo.addEventListener('click', function () {
                    window.location.href = '/';
                });
            });
        </script>


    @show
</header>
<main>
    <div style="position: fixed; bottom: 0; left: 0; margin: 3px ">
        <button class="buttonLogin" onclick="scrollToLogo()">
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>


    <script>
        function scrollToLogo() {
            const logoElement = document.getElementById("logo");
            if (logoElement) {
                logoElement.scrollIntoView({
                    behavior: 'smooth', // Weiches Scrollen
                    block: 'start'      // Beginnt am oberen Rand des Elements
                });
            }
        }

    </script>


    @section("main-content")
    @show
</main>

<footer>

    <div class="container" id="mitglieder">
        <p> Bundesverband Soziotherapie e.V.</p>
        <div class="logos">
            <div class="logo-item">
                <a href="https://soziotherapie.eu/" target="_blank" >

                    <img src="{{asset('image/sozioBund.png')}}" alt="Platzhalter Logo 2">
                </a>
            </div>
        </div>
    </div>

    <div class="footerContainer" >
        <a  href="/Impressum">Impressum</a>
        <span>|</span>
        <a  href="/Datenschutz">Datenschutz</a>
    </div>

    <p class="copy" >&copy; Entwickelt von Schwarz@Web</p>
    @section("footer")
    @show
</footer>
</body>
</html>
