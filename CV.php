
<?php
$project_id = 8;
//language stuff
include "includes/lang-top.php";
//references the connection file
require_once "includes/dbh.inc.php";
//navigation database
include "includes/db_nav.php";
//project id and content
?>
<!-- html begins -->
<!DOCTYPE html>
<html lang="en">
<head>
<!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CV">
    <title>
    CV
    </title>
    <link rel="icon" type="image/png" href="../assets/favicon32.png">
    <link rel="stylesheet" href="assets/css/style.css">

<!-- <script defer src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script defer src="main.js"> </script>
</script>
</head>
<body class="bg-black">  
<?php include 'includes/nav.php'; ?>
    <!--  main body of the page begins -->
<div class="container-fluid">
    
<div class="text-center text-uppercase text-primary">
<a class="title">CV</a>
<br><br>
</div>
<div class="text-center text-primary">
<a class="title">Exhibitions / Events</a>
<br><br>
</div>
<div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    Pigeonfest
                    </div>
                    </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2025
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         Groningen, Netherlands - projects Werewolf Dinner, I wished to be Magic
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    "Rats on the Run" screening
                    </div>
                    </div>
                    <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2024
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         Maiznīca, Rīga, Latvia
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    "Sluts and Squats"
                    </div>
                    </div>
                    <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2024
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         Roodkapje, Roterdam  - projects Rats on the Run, 101
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    "Jiny Svety"
                    </div>
                    </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2024
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                        Anežka Praha - project Impro Jam
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    WdKA Grad Show
                    </div>
                    </div>
                    <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2024
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                        Rotterdam, Netherlands - project Depustūtes
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    Pigeonfest
                    </div>
                    </div>
                    <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2022
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                        Groningen, Netherlands - project glitch_fries
                    </div>
                </div>
            </div>
               <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    Mono
                    </div>
                    </div>
                    <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2022
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                        Rotterdam, Netherlands - project glitch_fries
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    Sinfonietta Rīga season premiere
                    </div>
                    </div>
                    <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2020
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                        Riga, Latvia - project Captive Audience
                    </div>
                </div>
            </div>
             <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    ISSP "Labāk redzu cilvēkus aizejam"
                    </div>
                    </div>
                    <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2020
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                        Riga, Latvia - project Captive Audience
                    </div>
                </div>
            </div>
            <br><br>
<div class="text-center text-uppercase text-primary">
<a class="title">Education</a>
<br><br>
</div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary text-end">
                    Willem de Kooning Academy
                    </div>
                    </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2020-2024
                    </div>
                </div>
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         Bachelor of Fine Arts, Rotterdam, Netherlands
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary text-end">
                    ISSP "Attīstot Fotogrāfijas Valodu"
                    </div>
                    </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2018-2020
                    </div>
                </div>
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2 year course, Riga, Latvia
                    </div>
                </div>
            </div>
             <div class="row cv-list overflow-visible">
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary text-end">
                    ISSP "Summer School of Photography"
                    </div>
                    </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2020
                    </div>
                </div>
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         Cēsis, Latvia
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary text-end">
                    ISSP "Summer School of Photography"
                    </div>
                    </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2019
                    </div>
                </div>
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         "Photography and the World" Zaļenieki, Latvia
                    </div>
                </div>
            </div>
            <br><br>
<div class="text-center text-uppercase text-primary">
<a class="title">Work Experience</a>
<br><br>
</div>
                <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    "Learning Latvian as a Native English Speaker" - Valodu Māja</div>
                    </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2025
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         video and photo documentation, Riga, Latvia
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    "Fernandu Pesoas Pēcpusdiena" - Valodu Māja</div>
                    </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2025
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         video and photo documentation, Riga, Latvia
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    "Valoda un Vide" - Valodu Māja</div>
                    </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2025
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         video and photo documentation, Riga, Latvia
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    Body Shop, Kaspars Ozoliņš - Advents Calendar Advertisement</div>
                    </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2025
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         video filming and editing, Sigulda, Latvia
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    “Vieta, Scenāriji, Ludza” ISSP Summerschool </div>
                    </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2025
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         photo and technical assistant, Ludza, Latvia
                    </div>
                </div>
            </div>
                    <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    “Luminous Dasies” Tanec Praha
                    </div>
                </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2025
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         photo and video documentation, Prague, Karlovy Vary, Zlin, Brno, The Czech Republic
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    Video workout series for SPKC (Latvian Center for Disease Prevention and Control)
                    </div>
                </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2025
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         video and photo material, Riga, Latvia
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    “Magnificat” Valodu Māja
                    </div>
                </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2025
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         advertising material and book release event documentation, Riga, Latvia
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    ISSP Artist talk
                    </div>
                </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2025
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         Riga, Latvia
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    “Krievija Pret Mūsdienīgumu” Valodu Māja
                    </div>
                </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2025
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                        video and photo documentation, Riga, Latvia
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    “Valodfestivāls Avots” Valodu Māja, ĢIT
                    </div>
                </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2025
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                        video and photo documentation, Riga, Latvia
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    Zumba Party
                    </div>
                </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2024
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         photo documentation, Ogre, Latvia
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    DCH Training
                    </div>
                </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2024
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         photo and video documentation, Riga, Ogre, Latvia
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    “Dancing Hopeful Worried Lines” exhibition
                    </div>
                </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2024
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         photo documentation, Helsinki, Finland
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    “3013EXPO” WdKA
                    </div>
                </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2023
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                        exhibition organising, Rotterdam, Netherlands
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    “Video Sales Mastery”
                    </div>
                </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2023
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         video production and editing, Rotterdam, Netherlands
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    Codarts performances
                    </div>
                </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2022
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                        performance photo documentation, Rotterdam, Netherlands
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    Sinfonietta Riga
                    </div>
                </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2020
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                        concert photo documentation, Riga, Latvia
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    DCH Studija
                    </div>
                </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2019
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                        event, portrait, editorial photography, Riga, Latvia
                    </div>
                </div>
            </div>
            <div class="row cv-list overflow-visible">
                <div class="col-md-3 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                    LTV
                    </div>
                </div>
                <div class="col-md-1 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         2018-2020
                    </div>
                </div>
                <div class="col-md-8 overflow-y-visible overflow-x-none m-0">
                    <div class="text-primary">
                         event and portrait photography - Riga, Latvia
                    </div>
                </div>
            </div>
                </div>

    </div>
</div>
<!-- Modal -->
<?php include "includes/image_carousel_modal.php"; ?>
<!-- language junk -->
<?php include "includes/lang-script.php"; ?>
</body>
</html>