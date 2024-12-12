<?php

$language = 'en';

if (isset($_GET['lang'])) {
    $language = $_GET['lang'];
}

//references the connection file
require_once "includes/dbh.inc.php";
//defines the querry to then get the stuff
$query_groups = "SELECT * FROM project_groups";
$query_menu_art_projects = "SELECT title_en, title_lv, file_name FROM content WHERE group_id = 2;";
$query_menu_documentary_projects = "SELECT title_en, title_lv, file_name FROM content WHERE group_id = 3;";
//groups
$stmt = $pdo->prepare(query:$query_groups);
$stmt->execute();
$project_groups = $stmt->fetchAll(PDO::FETCH_ASSOC);
//art project titles
$stmt = $pdo->prepare(query:$query_menu_art_projects);
$stmt->execute();
$menu_art_projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

//documentary titles
$stmt = $pdo->prepare(query:$query_menu_documentary_projects);
$stmt->execute();
$menu_documentary_projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

$pdo = null;
$stmt = null;
?>

<nav class="pb-2 bg-black navbar-expand-md nav-fill border-bottom sticky-top">
        <ul class="nav nav-tabs">
            <li class="nav-link flex-fill border-0 active" aria-current="page" href="#">
                4e554c4c.xyz/index.php
                <!-- <?php echo $project_groups['group_file_name']; ?> -->
            </li>
            <select class="nav-link flex-fill border-0 active" id="langSwitcher">
                <option class="nav-link border-0 p-0" value="en">EN</option>
                <option class="nav-link border-0 p-0" value="lv">LV</option>
            </select>
            <!-- <li id="langSwitcher">
                <button class="nav-link border-0 p-0" aria-current="page" id="langSwitcher" onclick="value='en'"> EN </button>
            </li>
            <li>
                <a class="nav-link border-0 p-0"> / </a>
            </li>
            <li id="langSwitcher">
                <button class="nav-link border-0 active" id="langSwitcher" value="lv"> LV </button>
            </li> -->
        </ul>
        <ul class="nav nav-tabs nav-fill nav-fill collapse navbar-collapse" id="navbarNav">
            <?php
              foreach ($project_groups as $row){
                        echo '<li class="nav-item text-start">';
                    echo '<a class="nav-link active" data-bs-toggle="tab" type="button" role="tab" href="/';
                    echo $row["group_file_name"];
                    echo '">[  ';
                        echo $row["group_name_$language"];
                    echo "  ]</a>";
                        echo '</li>';
                        }
            ?>
        </ul>
        <ul class="nav nav-tabs nav-fill collapse navbar-collapse" id="navbarNav">
            <!-- <li class="nav-item text-start">
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
            </li> -->
            <?php
              foreach ($menu_art_projects as $row){
                echo '<li class="nav-item text-start">';
            echo '<a class="nav-link active" aria-current="page" href="/';
            echo $row["file_name"];
            echo '">[  ';
                echo $row["title_$language"];
            echo "  ]</a>";
                echo '</li>';
                }
            ?>
        </ul>
        <ul class="nav nav-tabs nav-fill collapse navbar-collapse" id="navbarNav">
        <?php
              foreach ($menu_documentary_projects as $row){
                echo '<li class="nav-item text-start">';
            echo '<a class="nav-link active" aria-current="page" href="../';
            echo $row["file_name"];
            echo '">[  ';
                echo $row["title_$language"];
            echo "  ]</a>";
                echo '</li>';
                }
            ?>
        </ul>    
    </nav>