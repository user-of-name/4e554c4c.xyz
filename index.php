<?php
//references the connection file
require_once "includes/dbh.inc.php";
//defines the querry to then get the stuff
$query = "SELECT title_eng, descr_eng FROM content WHERE id = 1;";
// prepare statement
$stmt = $pdo->prepare(query:$query);
//it executes a thing?
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$pdo = null;
$stmt = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="responsivity.css">
</head>

<body class="p-2 bg-black">
    
    <nav class="pb-2 bg-black navbar-expand-md nav-fill border-bottom sticky-top">
        <ul class="nav nav-tabs">
            <li class="nav-link flex-fill border-0 active" aria-current="page" href="#">
                4e554c4c.xyz/art_projects/jiny_svety
            </li>
            <li>
                <a class="nav-link border-0 p-0" aria-current="page" href="#"> EN /</a>
            </li>
            <li>
                <a class="nav-link border-0 active" href="#"> LV </a>
            </li>
        </ul>
        <ul class="nav nav-tabs nav-fill nav-fill collapse navbar-collapse" id="navbarNav"">
            <li class="nav-item text-start">
              <a class="nav-link active" aria-current="page" href="#">[ index ]</a>
            </li>
            <li class="nav-item text-start">
                <a class="nav-link" href="#">[ art projects ]</a>
              </li>
            <li class="nav-item text-start">
              <a class="nav-link" href="#">[ documentary work ]</a>
            </li>
            <li class="nav-item text-start">
                <a class="nav-link" href="#">[ contact ]</a>
            </li>
        </ul>
        <ul class="nav nav-tabs nav-fill collapse navbar-collapse" id="navbarNav">
            <li class="nav-item text-start">
              <a class="nav-link" aria-current="page" href="#">[ captive audience ]</a>
            </li>
            <li class="nav-item text-start">
                <a class="nav-link active" href="#">[ jiny svety improv jam ]</a>
              </li>
            <li class="nav-item text-start">
              <a class="nav-link" href="#">[ rats on the run ]</a>
            </li>
            <li class="nav-item text-start">
                <a class="nav-link" href="#">[ uff servers ]</a>
            </li>
        </ul>   
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 border-top border-end border-bottom overflow-y-auto" style="max-height: 90vh;">
               <div class="container-fluid">
                   <h6 class="text-center text-uppercase text-primary">
                        <?php
                        echo "<div>";
                        foreach ($results as $row){
                                echo $row["title_eng"];
                        }
                        echo "</div>";
                        ?>
                    </h6>
                    <div class="container-fluid"></div>
                    <!-- <p class="text-primary">I am an experimental visual and documentary artist based in Latvia, I work with digital mediums as tools to better express the cultural shifts that came about the technological advancements since the beginning of the 21st century. As an artist I am interested in the new ways of organizing and structuring political resistance movements, alternative cultural scenes and digital subcultures and ways of understanding stories and narratives that have come about in the recent decade, which are radically different, faster and less linear compared to the equivalents that came before.</p>
                    <p class="text-primary">In recent years I have been working with <span class="text-bg-primary">meme culture</span>, the <span class=" text-bg-primary">squatting scene</span> in Rotterdam, ideas venturing into the <span class=" text-bg-primary">parasitic</span> and <span class="text-bg-primary">performance art</span> involving the merging of performers and audience. I think an important part of my practice is the desire to not see the <span class="text-bg-primary">audience as separate</span> from the process of making the artwork especially reflecting on meme culture.</p>
                    <p class="text-primary">Through my practice I took a lot of theory from the writings of <span class="text-bg-primary">Ariela Azoulay</span> on the involvement of the spectatorand in my research into meme culture I delved quite deep into semiotics, for example <span class="text-bg-primary">Yuri Lotman</span> and his ideas of the semiosphere and expanding on that with contemporary non-canonical narrative research of <span class="text-bg-primary">Alexandra Georgakapoulou</span>.</p>
                    <p class="text-primary">This all works towards a practice of archiving the fleeting, the temporary and the new, because right now a lot of our culture is expressed through digital communication or verbal which in essence is opt-in to be saved for it to be revisited in the future.</p> -->
                    <p class="text-primary">
                    <?php
                        //echo "<div>";
                        foreach ($results as $row){
                                echo $row["descr_eng"];
                        }
                        //echo "</div>";
                        ?>
                        </p>
                </div>
            </div>

            <div class="col-md-6 border-top border-start border-bottom overflow-y-auto" style="max-height: 90vh;">
                <div class="row d-flex overflow-y-auto p-2">                
                    <div class="">
                        <img src="../assets/Cave.jpg" class="border-bottom border-end border-2" alt="...">
                        <figcaption class="figure-caption">[ img.1 ] this is an image caption</figcaption>
                    </div>
                    <div class="" id=>
                        <img src="../assets/Cave.jpg" class="w-100 border-bottom border-end border-2" alt="...">
                        <figcaption class="figure-caption">[ img.1 ] this is an image caption</figcaption>
                    </div>
                    <div class="" id=>
                        <img src="../assets/Cave.jpg" class="w-100 border-bottom border-end border-2" alt="...">
                        <figcaption class="figure-caption">[ img.1 ] this is an image caption</figcaption>
                    </div>
                </div>
            </div>            
        </div>
            </div>
        </div>
    </div>

</body>
</html>