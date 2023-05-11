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
    <link rel="stylesheet" type="text/css" href="{{ url('/styles/portfolio.css') }}" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        .hidden {
            display: none;
        }
    </style>

</head>

<body class="antialiased">

<?php include "../resources/views/tools/toolbar.blade.php";?>

<div class="gallery" style="text-align: center;">
    @foreach (glob("storage/Portfolio/*") as $image)
        @php
            $imageName = basename($image);
            $imageName = str_replace('_', ' ', $imageName);
            $imageName = pathinfo($imageName, PATHINFO_FILENAME);
        @endphp
        <div class="image-container hidden" style="display: inline-block;">
            <img class="images_portfolio" src="{{ asset($image) }}" alt="{{ $imageName }}">
            <p class="image-name">{{ $imageName }}</p>
        </div>
    @endforeach
</div>

<script>
    $(document).ready(function() {
        // Sélectionnez toutes les images qui ont la classe "hidden"
        $('.hidden').each(function(i) {
            // Utilisez la méthode fadeIn() pour afficher chaque image avec un effet de fade in
            $(this).delay(10000 * i).fadeIn();
        });
    });
</script>

</body>
</div>
<footer>
    <?php include "../resources/views/tools/footer.blade.php";?>
</footer>
</html>
