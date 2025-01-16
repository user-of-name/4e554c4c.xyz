<?php
// content
$query_content = "SELECT * FROM image_making_projects WHERE img_making_project_id = $project_id;";
$stmt = $pdo->prepare(query:$query_content);
$stmt->execute();
$content = $stmt->fetchAll(PDO::FETCH_ASSOC);

// images
$query_project_images = "SELECT * FROM img_making_images WHERE img_making_project_id = $project_id ORDER BY Display_order;";
$stmt = $pdo->prepare(query:$query_project_images);
$stmt->execute();
$project_images = $stmt->fetchAll(PDO::FETCH_ASSOC);

//collaborators
$query_project_collaborators = "SELECT roles.role_en,roles.role_lv,collaborators.artist_name,collaborators.link FROM collaborators LEFT JOIN roles ON roles.collaborator = collaborators.collaborator_id WHERE roles.project = $project_id;";
$stmt = $pdo->prepare(query:$query_project_collaborators);
$stmt->execute();
$project_collaborators = $stmt->fetchAll(PDO::FETCH_ASSOC);

$pdo = null;
$stmt = null;

?>