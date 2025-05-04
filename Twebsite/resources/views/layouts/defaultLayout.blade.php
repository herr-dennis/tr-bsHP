
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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
    <script src="{{asset("js/funktions.js")}}" ></script>
    <script src="{{asset("js/nav.js")}}" ></script>
</head>
<body>
<header>
    @section("header")
        <div class="navContainer">
            <!-- Logo und Schriftzug -->


            <!-- Schriftzüge (Firma und Slogan) -->
            <div class="schriftzugNavContainer">
                <div class="schriftzugGroß">Daniel Sujan Troebs</div> <!-- Groß -->
                <div class="schriftzugKlein">Beratung - Coaching - Mediation</div> <!-- Klein -->
            </div>

            <!-- Navigation Button (für mobile Ansicht) -->


            <!-- Ausklappbare Navigation -->
            <!-- Desktop Navigation -->
            <nav class="navLinks desktopNav">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="dropdown">
                        <a href="Leistungen">Leistungen</a>
                        <ul class="dropdownMenu">
                            <li><a href="/Leistungen#PBC">Psychologische Beratung & Coaching</a></li>
                            <li><a href="/Leistungen#SBC">Systemische Beratung & Coaching</a></li>
                            <li><a href="/Leistungen#SBCF">Systemische Beratung & Coaching für Führungskräfte,
                                    Selbstständige & Unternehmen</a></li>
                            <li><a href="/Leistungen#MP">Meditation & Potenzialentfaltung</a></li>
                            <li><a href="/Leistungen#S">Soziotherapie</a></li>
                        </ul>
                    </li>
                    <li><a href="/KostenAblauf" >Kosten&Ablauf</a></li>
                    <li><a href="Kontakt">Kontakt</a></li>
                    <li><a href="Übermich">Über mich</a></li>
                </ul>
            </nav>

            <!-- Mobile Navigation -->
            <nav class="navLinks mobileNav">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="dropdownMobile">
                        <a href="Leistungen">Leistungen</a>
                        <ul id="dropdownMenuMobileID" class="dropdownMenuMobile">
                            <li><a href="#" id="backToMain">← Zurück</a></li>
                            <li><a href="/Leistungen#PBC">Psychologische Beratung & Coaching</a></li>
                            <li><a href="/Leistungen#SBC">Systemische Beratung & Coaching</a></li>
                            <li><a href="/Leistungen#SBCF">Systemische Beratung & Coaching für Führungskräfte,Selbstständige & Unternehmen</a></li>
                            <li> <a href="/Leistungen#MP">Meditation & Potenzialentfaltung</a></li>
                            <li> <a href="/Leistungen#S">Soziotherapie</a></li>
                        </ul>

                    </li>
                    <li><a href="/KostenAblauf" >Kosten&Ablauf</a></li>
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
    @show
</header>
<main>
    <div style="position: fixed; bottom: 0; left: 0; margin: 3px ">
        <button id="scrollBtn">
            <i class="fas fa-arrow-up"></i>
        </button>
    </div>

    @section("main-content")
    @show
</main>

<footer>
    <div class="socialMedia">
        <i  id="facebookBtn" class="fab fa-facebook"></i>

        <i id="instagramBtn" class="fab fa-instagram"></i>
    </div>

    <div class="container" id="mitglieder">
        <p  class="headline" >  Bundesverband Soziotherapie e.V.</p>
        <div class="logos">
            <div class="logo-item">
                <a href="https://soziotherapie.eu/" target="_blank" >

                    <img src="{{asset('image/sozioBund.png')}}" alt="Platzhalter Logo 2">
                </a>
            </div>
        </div>
    </div>
    <div class="container" id="mitglieder">
        <p class="headline" > Deutsche Gesellschaft für Systemische Therapie</p>
        <div class="logos">
            <div class="logo-item">
                <a href="https://dgsf.org/" target="_blank" >

                    <img src="{{asset('image/dgsf-siegel-mitglied-rgb + Link.gif')}}" alt="Platzhalter Logo 2">
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
