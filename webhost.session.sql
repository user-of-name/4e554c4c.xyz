SELECT * FROM image_making_projects, img_making_images WHERE img_making_group = 2 AND Displayed = 1 AND Display_order = 1 ORDER BY year DESC;

SELECT *
FROM image_making_projects
JOIN img_making_images ON image_making_projects.img_making_project_id = img_making_images.img_making_project_id
 WHERE img_making_group = 2 AND Displayed = 1 AND Display_order = 1 ORDER BY date DESC;
