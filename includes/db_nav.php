<?php

// needed for nav bar

// To Get the Current Filename. 
$currentPage= $_SERVER['SCRIPT_NAME'];
//groups
$query_groups = "SELECT * FROM project_groups";
$stmt = $pdo->prepare(query:$query_groups);
$stmt->execute();
$project_groups = $stmt->fetchAll(PDO::FETCH_ASSOC);
//art project titles
$query_menu_art_projects = "SELECT title_en, title_lv, project_file_name FROM content WHERE group_id = 2 ORDER BY year DESC;";
$stmt = $pdo->prepare(query:$query_menu_art_projects);
$stmt->execute();
$menu_art_projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
//documentary titles
$query_menu_documentary_projects = "SELECT title_en, title_lv, project_file_name FROM content WHERE group_id = 3 ORDER BY year DESC;";
$stmt = $pdo->prepare(query:$query_menu_documentary_projects);
$stmt->execute();
$menu_documentary_projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>