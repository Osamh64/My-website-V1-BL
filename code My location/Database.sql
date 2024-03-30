CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    display_name VARCHAR(255),
    first_name VARCHAR(255),
    last_name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    is_writer BOOLEAN,
    is_reader BOOLEAN,
    ip_address VARCHAR(255),
    phone_number VARCHAR(20)
);

CREATE TABLE writers (
    writer_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    story_count INT,
    follower_count INT,
    preferred_language VARCHAR(50)
);

CREATE TABLE readers (
    reader_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    following_count INT,
    story_count INT,
    total_comments INT,
    total_likes INT
);

CREATE TABLE stories (
    story_id INT AUTO_INCREMENT PRIMARY KEY,
    writer_id INT,
    FOREIGN KEY (writer_id) REFERENCES writers(writer_id),
    title VARCHAR(255),
    content TEXT,
    creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    likes INT,
    comments INT
);

CREATE TABLE story_readers (
    story_id INT,
    reader_id INT,
    FOREIGN KEY (story_id) REFERENCES stories(story_id),
    FOREIGN KEY (reader_id) REFERENCES readers(reader_id),
    PRIMARY KEY (story_id, reader_id)
);
