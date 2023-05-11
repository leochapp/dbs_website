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
        <link rel="stylesheet" type="text/css" href="{{ url('/styles/matos.css') }}" />

    </head>
    <body class="antialiased">
       <?php include "../resources/views/tools/toolbar.blade.php";?>

        <div class="waiting">
            <p><b>En attente de pumpkin! </b></p>
            <img class="waiting-img" src="resources/icons/ecouteurs.png">
        </div>

    </body>
    <footer>
    <?php include "../resources/views/tools/footer.blade.php";?>
    </footer>
</html>
