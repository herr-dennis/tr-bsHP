<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #16464b;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            border: 1px solid #e5e5e5;
            border-radius: 8px;
            padding: 20px;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            height: 60px;
        }

        h2 {
            border-bottom: 2px solid #16464b;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        p {
            margin: 10px 0;
            line-height: 1.5;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
<div class="container">

    <div class="logo">
        <img src="{{ asset('image/TröbsLogoFinal.svg.png') }}" alt="Schwarz&Web Logo">
    </div>

    <h2>Neue Kontaktanfrage</h2>

    <p><strong>Von:</strong> {{ $name }}</p>
    <p><strong>E-Mail des Anfragenden:</strong> {{ $email }}</p>
    <p><strong>Nachricht:</strong></p>
    <p>{!! nl2br(e($nachricht)) !!}</p>

    <div class="footer">
        <p>Dies ist eine automatische E-Mail, entwickelt von <strong>Schwarz&Web</strong>.</p>
    </div>

</div>
</body>
</html>
