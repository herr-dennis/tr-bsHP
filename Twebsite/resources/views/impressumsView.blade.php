@extends("layouts.defaultLayout")

@section("main-content")

    <div class="defaultContainer" >
        <h2 class="headline">Daniel (Sujan) Tröbs 2025</h2>
        <div class="logoIntro">
            <img src="{{ asset('image/TröbsLogoFinal.svg.png') }}" alt="Daniel Troebs Logo">
        </div>
        <div class="info-block" >
            <p><strong>Internet:</strong> <a href="http://www.daniel-troebs.de" target="_blank">www.daniel-troebs.de</a></p>
            <p><strong>E-Mail:</strong> <a href="mailto:office@d.troebs.de">office@daniel-troebs.de</a></p>

        </div>


        <h2 class="headline">Bankverbindung</h2>
        <div class="info-block">
            <p><strong>Geschäftskonto:</strong> Fyrst</p>
            <p><strong>IBAN:</strong> DE59 3107 0206 0064 8543 00</p>
            <p><strong>BIC:</strong> DEUTDEDDP05</p>
        </div>


        <h2 class="headline">Steuerinformationen</h2>
        <div class="info-block">
            <p>Kleingewerbe</p>
            <p><strong>Steuernummer:</strong> 210/5952/7198</p>
        </div>


        <h2 class="headline">Kontakt</h2>

        <div class="info-block">
            <p>  <a href="tel:017635455268">
                    <i style="color: #1b392b; margin-right: 5px " class="fa fa-phone"></i> </a>  0176 - 354 55 268</p>
        </div>

        <h2 class="headline">Adressen</h2>

        <div class="info-block">

            <p><strong>Büro-Adresse:</strong></p>
            <p><br> Daniel Tröbs<br>An der Friedensburg 20<br>52511 Geilenkirchen</p>

        </div>
            <h2 class="headline">Weitere Informationen</h2>
            <strong>Paypal-Anbindung:</strong> Folgt

    </div>



    <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2512.9627662988264!2d6.1237910768741886!3d50.96139265044352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0a44357996245%3A0xbdf2d2492342f67d!2sAn%20d.%20Friedensburg%2020%2C%2052511%20Geilenkirchen!5e0!3m2!1sde!2sde!4v1746439947701!5m2!1sde!2sde"
            width="600" height="450" style="border:0; margin: 20px" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

@endsection
