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
        <strong>Email:</strong> <a href="mailto:office@d.troebs.de">office@d.troebs.de</a><br>
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
        <strong>Privatadresse:</strong><br>
        Daniel Tröbs<br>
        Tannenweg 9<br>
        52511 Geilenkirchen<br>
        <br>
        <strong>Büro-Adresse:</strong><br>
        Bewo Paiva<br>
        Z.Hd.: Daniel Tröbs<br>
        Bahnhofstraße 33<br>
        52146 Würselen
    </div>

    <hr>

    <h2>Zusätzliche Informationen</h2>
    <div class="info-block">
        <a href="/Impressum" >Impressum</a>
    </div>
</div>

@endsection
