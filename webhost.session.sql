CREATE TABLE image_making_projects (
    img_making_project_id INT AUTO_INCREMENT PRIMARY KEY,
    title_en VARCHAR(255),
    title_lv VARCHAR(255),
    descr_en VARCHAR(255),
    descr_lv VARCHAR(255),
    year INT,
    img_making_group INT,
    FOREIGN KEY (img_making_group) REFERENCES image_making(image_making_group_id)
);