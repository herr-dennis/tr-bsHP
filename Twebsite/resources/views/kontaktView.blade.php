@extends("layouts.defaultLayout")

@section("main-content")

    <h2>Kontakt</h2>

<div class="defaultContainer">

    <div class="logoIntro">
        <img src="{{ asset('image/kontakt.jpeg') }}" alt="Daniel Troebs Logo">
    </div>

    <h2>Daniel Tröbs (Sujan)</h2>
    <div class="info-block">
        <strong>Website:</strong> <a href="http://www.daniel-troebs.de" target="_blank">www.daniel-troebs.de</a><br>
        <strong>Email:</strong> <a href="mailto:office@daniel-troebs.de">office@d.troebs.de</a><br>
        <strong>Telefon:</strong> 0176 - 354 55 268
    </div>

    <hr>

    <h2>Geschäftliche Angaben</h2>
    <div class="info-block">
        <strong>Geschäftskonto:</strong> Fyrst Bank<br>
        <strong>IBAN:</strong> DE59 3107 0206 0064 8543 00<br>
        <strong>BIC:</strong> DEUTDEDDP05<br>
        <strong>Steuernummer:</strong> 210/5952/7198
    </div>

    <hr>

    <h2>Adressen</h2>
    <div class="info-block">
        <strong>Büro-Adresse:</strong><br>
        Daniel Tröbs<br>
        An der Friedensburg 20<br>
        52511 Geilenkirchen
    </div>

    <hr>
    <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2512.9627662988264!2d6.1237910768741886!3d50.96139265044352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0a44357996245%3A0xbdf2d2492342f67d!2sAn%20d.%20Friedensburg%2020%2C%2052511%20Geilenkirchen!5e0!3m2!1sde!2sde!4v1746439947701!5m2!1sde!2sde"
            width="600" height="450" style="border:0; margin: 20px" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    <hr>

</div>

@endsection
