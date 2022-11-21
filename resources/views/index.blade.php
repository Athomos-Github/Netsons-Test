<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Netsons Test</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            max-width: 500px;
            margin: auto;
        }
        ol li {
            padding-bottom: 5px;
        }
    </style>



</head>

<body>
<h1>Test del candidato</h1>
<p>
    Benvenuto/a nel test per la tua candidatura.
</p>
<p>
    Cosa puoi fare con questo progetto:
</p>
<ol>
    <li>aggiungere una funzionalità "form di contatto" a questa pagina. Le richieste inviate devono essere salvate in una model di nome Contact. Utilizza le migration per creare la tabella necessaria,</li>
    <li>modificare questa pagina affinché sia una landing page per un prodotto/servizio di tuo gradimento. L'aggiunta di effetti di movimento alla pagina è un plus gradito,</li>
    <li>aggiungere la funzionalità di autenticazione al sistema (utilizzando eventualmente librerie standard di laravel) per fare in modo che questa pagina sia accessibile solo a utenti registrati,</li>
</ol>
<p>
    Sei libero/a di scegliere uno o più di uno dei punti precedenti.
</p>
<p>
    Puoi anche cimentarti in qualcosa di completamente diverso, se lo reputi interessante. Ricorda, non è importante la quantità.
</p>
</body>
</html>
