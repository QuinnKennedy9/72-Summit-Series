-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2017-03-30 23:31:47.657

-- tables
-- Table: blogposts
CREATE TABLE blogposts (
    id int NOT NULL,
    p_title varchar(40) NOT NULL,
    p_date date NOT NULL,
    p_time time NOT NULL,
    p_content text NOT NULL,
    p_images json NOT NULL,
    users_id int NOT NULL,
    p_tags int NOT NULL,
    CONSTRAINT id PRIMARY KEY (id)
);

-- Table: content
CREATE TABLE content (
    id int NOT NULL,
    parent_selector varchar(20) NOT NULL,
    content json NOT NULL,
    users_id int NOT NULL,
    CONSTRAINT content_pk PRIMARY KEY (id)
);

-- Table: gallery_images
CREATE TABLE gallery_images (
    id int NOT NULL,
    i_tags int NOT NULL,
    i_src int NOT NULL,
    i_title int NOT NULL,
    i_desc int NOT NULL,
    CONSTRAINT gallery_images_pk PRIMARY KEY (id)
);

-- Table: users
CREATE TABLE users (
    id int NOT NULL,
    f_name varchar(20) NOT NULL,
    l_name varchar(20) NOT NULL,
    p_phrase char(60) NOT NULL,
    u_email varchar(30) NOT NULL,
    CONSTRAINT id PRIMARY KEY (id)
);

-- foreign keys
-- Reference: blogposts_users (table: blogposts)
ALTER TABLE blogposts ADD CONSTRAINT blogposts_users FOREIGN KEY blogposts_users (users_id)
    REFERENCES users (id);

-- Reference: content_users (table: content)
ALTER TABLE content ADD CONSTRAINT content_users FOREIGN KEY content_users (users_id)
    REFERENCES users (id);

-- End of file.

