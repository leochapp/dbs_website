<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.png">
        <title>Dbs</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ url('/styles/toolbar.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ url('/styles/contact.css') }}" />

    </head>
    <body class="antialiased">
       <?php include "../resources/views/tools/toolbar.blade.php";?>


        <div class="contact_main">
            <div class="title_contact">
            <h1>Mentions légales : </h1>
                <p>Conformément aux dispositions de la loi n° 2004-575 du 21 juin 2004 pour la confiance en l'économie numérique, il est précisé aux utilisateurs du site Dbs UTC l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi.</p>
            <h2>Edition du site : </h2>
                <p>Le présent site, accessible à l’URL assos.utc.fr/decibels (le « Site »), est édité par :</p>
                <p>L'entité Décibels PAE-UTC est conventionné par le PAE-UTC, enregistrée auprès de la préfecture/sous-préfecture de 60 - Sous-Préfecture Compiègne sous le numéro W603002440, ayant son siège situé à rue roger couttolenc 60200 COMPIEGNE. Cette comission est représentée par Justine Renard.</p>
            <h2>Hébergement : </h2>
                <p>Le Site est hébergé par la DSI (Direction des Systèmes d'information) - UTC, situé Rue du Dr Schweitzer, 60200 Compiègne, (contact téléphonique ou email : 5000@utc.fr).</p>
            <h2>Directeur de publication : </h2>
                <p>Le Directeur de la publication du Site est Justine Renard.</p>
            <h2>Contacts : </h2>
                <p>Par téléphone : +33778562773</p>
                <p>Par email : decibels@assos.utc.fr</p>
                <p>Par courrier : rue roger couttolenc 60200 Compiègne</p>
            <h2>Cookies et Données personelles :</h2>
                <p>Ce site n'utilise aucune cookie et ne stocke pas de données personelles utilisateur.</p>
            </div>

       </div>

    </body>
    <footer>
        <?php include "../resources/views/tools/footer.blade.php";?>
    </footer>
</html>
