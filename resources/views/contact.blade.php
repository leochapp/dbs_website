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
            <h1>Comment nous contacter ?</h1>
                <br>
                <div class="contact_list">
                <section class="section1">
                <ul class="ul-contact">
                    <li class="li-contact">
                        <img class="a-contact" src="resources/icons/instagram.png" width="25px" height="25px">
                        <a class="a-contact" href="https://www.instagram.com/dbsutc">@dbsutc</a>
                    </li>
                    <li class="li-contact">
                        <img class="a-contact" src="resources/icons/facebook.png" width="25px" height="25px">
                        <a href="https://www.facebook.com/DecibelsUTC">Décibels</a>
                    </li>
                    <li class="li-contact">
                        <img class="a-contact" src="resources/icons/mail.png" width="25px" height="25px">
                        <a href="mailto:decibels@assos.utc.fr">decibels@assos.utc.fr</a>
                    </li>
                </ul>
                    <p>Nous prenons à coeur nos activitées, c'est pourquoi nous sommes très réactifs.</p>
                    <p>Nous vous répondrons donc dans les plus brefs délais.</p>
                    <p>Signé le bureau de Décibels.</p>
                </section>

                <script>
                    const links = document.querySelectorAll("li a");
                    for (let link of links) {
                        link.addEventListener("mouseover", function() {
                            this.style.textDecoration = "underline";
                        });
                        link.addEventListener("mouseout", function() {
                            this.style.textDecoration = "none";
                        });
                    }
                </script>
                    <!--
                    <section class="section2">
                        <form action="{{ route('envoyer-email') }}" method="post">
                            @ csrf
                            <div class="form-group">
                                <label for="name">Nom:</label>
                                <input class="form-control" type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input class="form-control" type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea class="form-control" id="message" name="message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </section>
                    -->

                    <section class="section2">
                        <ul class="ul-contact">
                            <li class="li-contact">
                                <div>
                                <h1>
                                    <img class="img2" src="resources/icons/utc.jpg" >
                                    L'UTC :
                                </h1>
                                <p>Tous les techniciens de Décibels sont étudians à l'Université de Technologie de Compiègne. La plupart étant en cursus ingénieur.</p></div>
                            </li>
                            <li class="li-contact">
                                <div>
                                <h1>
                                    <img class="img2"  src="resources/icons/bde.jpg" >
                                    Le BDE :
                                </h1>
                                <p>Notre association est féderée par le Bureau des Étudiants (BDE) de l'UTC, qui a pour but d'organiser la vie étudiante dans notre école. C'est grâce au BDE qu'on a l'opportunité de pouvoir se former sur des domaines techniques de son et lumière.</p>
                                </div>
                            </li>
                            <li class="li-contact">
                                <div>
                                <h1>
                                    <img class="img2"  src="resources/icons/pae.png" >
                                    Le PAE :
                                </h1>
                                <p>En tant qu'association de l'UTC, nous sommes rattachés au Pôle Artistique et Evenementiel (PAE).Ce pôle a pour but de développer, d'aider et de soutenir les associations voulant développer l'évenmentiel à l'UTC. Il dépend directement du Bureau des Étudiants.</p>
                                </div>
                            </li>
                        </ul>
                    </section>
        </div>
            </div>
            <script src="scripts/contact.js"></script>


       </div>

    </body>
    <footer>
        <?php include "../resources/views/tools/footer.blade.php";?>
    </footer>
</html>
