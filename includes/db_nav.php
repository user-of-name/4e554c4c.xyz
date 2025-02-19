<?php

// needed for nav bar

// To Get the Current Filename. 
$currentPage= $_SERVER['SCRIPT_NAME'];
//groups
$query_groups = "SELECT * FROM project_groups WHERE Display = 1";
$stmt = $pdo->prepare(query:$query_groups);
$stmt->execute();
$project_groups = $stmt->fetchAll(PDO::FETCH_ASSOC);
//art project titles
$query_menu_art_projects = "SELECT title_en, title_lv, project_file_name FROM content WHERE group_id = 2 AND Display = 1 ORDER BY year DESC;";
$stmt = $pdo->prepare(query:$query_menu_art_projects);
$stmt->execute();
$menu_art_projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
//documentary titles
$query_menu_documentary_projects = "SELECT title_en, title_lv, project_file_name FROM content WHERE group_id = 3 AND Display = 1 ORDER BY year DESC;";
$stmt = $pdo->prepare(query:$query_menu_documentary_projects);
$stmt->execute();
$menu_documentary_projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
//image making titles
$query_menu_image_making = "SELECT title_en, title_lv, group_file_name FROM image_making;";
$stmt = $pdo->prepare(query:$query_menu_image_making);
$stmt->execute();
$menu_image_making = $stmt->fetchAll(PDO::FETCH_ASSOC);
//misc
$query_misc = "SELECT * FROM misc_elements;";
$stmt = $pdo->prepare(query:$query_misc);
$stmt->execute();
$misc = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>