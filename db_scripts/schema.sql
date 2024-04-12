-- Creating the 'nightcityterm' schema
CREATE SCHEMA IF NOT EXISTS ncterm;

-- Switching to the 'nightcityterm' schema
USE ncterm;

CREATE TABLE user (
                      user_id INT AUTO_INCREMENT PRIMARY KEY,
                      first_name VARCHAR(50) NOT NULL,
                      last_name VARCHAR(50) NOT NULL,
                      username VARCHAR(50) UNIQUE NOT NULL,
                      email VARCHAR(100) UNIQUE NOT NULL,
                      role ENUM('user', 'admin') NOT NULL,
                      banned BOOLEAN NOT NULL DEFAULT FALSE,
                      signature VARCHAR(255),
                      profile_image_url VARCHAR(255),
                      encrypted_password VARCHAR(255) NOT NULL
);

CREATE TABLE friendship (
                            friendship_id INT AUTO_INCREMENT PRIMARY KEY,
                            user_id1 INT,
                            user_id2 INT,
                            FOREIGN KEY (user_id1) REFERENCES user(user_id),
                            FOREIGN KEY (user_id2) REFERENCES user(user_id),
                            UNIQUE KEY unique_friendship (user_id1, user_id2)
);

CREATE TABLE work (
                      work_id INT AUTO_INCREMENT PRIMARY KEY,
                      release_date DATE,
                      title VARCHAR(100) NOT NULL,
                      author VARCHAR(100),
                      illustration_url VARCHAR(255)
);

CREATE TABLE album (
                       album_id INT AUTO_INCREMENT PRIMARY KEY,
                       work_id INT,
                       FOREIGN KEY (work_id) REFERENCES work(work_id)
);

CREATE TABLE track (
                       track_id INT AUTO_INCREMENT PRIMARY KEY,
                       album_id INT,
                       title VARCHAR(100) NOT NULL,
                       duration TIME NOT NULL,
                       FOREIGN KEY (album_id) REFERENCES album(album_id)
);

CREATE TABLE genre (
                       genre_id INT AUTO_INCREMENT PRIMARY KEY,
                       work_id INT,
                       genre_name VARCHAR(50) NOT NULL,
                       FOREIGN KEY (work_id) REFERENCES work(work_id)
);

CREATE TABLE music_label (
                             music_label_id INT AUTO_INCREMENT PRIMARY KEY,
                             work_id INT,
                             label_name VARCHAR(50) NOT NULL,
                             FOREIGN KEY (work_id) REFERENCES work(work_id)
);

CREATE TABLE book (
                      book_id INT AUTO_INCREMENT PRIMARY KEY,
                      work_id INT,
                      isbn VARCHAR(20) NOT NULL,
                      num_pages INT,
                      illustrator VARCHAR(100),
                      FOREIGN KEY (work_id) REFERENCES work(work_id)
);

CREATE TABLE edition (
                         edition_id INT AUTO_INCREMENT PRIMARY KEY,
                         book_id INT,
                         date DATE,
                         format VARCHAR(50),
                         editor VARCHAR(100),
                         FOREIGN KEY (book_id) REFERENCES book(book_id)
);

CREATE TABLE video_game (
                            video_game_id INT AUTO_INCREMENT PRIMARY KEY,
                            work_id INT,
                            developer VARCHAR(100),
                            editor VARCHAR(100),
                            max_players INT,
                            online BOOLEAN,
                            FOREIGN KEY (work_id) REFERENCES work(work_id)
);

CREATE TABLE platform (
                          platform_id INT AUTO_INCREMENT PRIMARY KEY,
                          video_game_id INT,
                          platform_name VARCHAR(50) NOT NULL,
                          FOREIGN KEY (video_game_id) REFERENCES video_game(video_game_id)
);

CREATE TABLE movie (
                       movie_id INT AUTO_INCREMENT PRIMARY KEY,
                       work_id INT,
                       director VARCHAR(100),
                       producer VARCHAR(100),
                       duration INT,
                       FOREIGN KEY (work_id) REFERENCES work(work_id)
);

CREATE TABLE actor (
                       actor_id INT AUTO_INCREMENT PRIMARY KEY,
                       movie_id INT,
                       actor_name VARCHAR(100) NOT NULL,
                       FOREIGN KEY (movie_id) REFERENCES movie(movie_id)
);

CREATE TABLE topic (
                       topic_id INT AUTO_INCREMENT PRIMARY KEY,
                       topic_title VARCHAR(100) NOT NULL,
                       status ENUM('open', 'locked', 'solved') NOT NULL,
                       author_id INT,
                       FOREIGN KEY (author_id) REFERENCES user(user_id)
);

CREATE TABLE post (
                      post_id INT AUTO_INCREMENT PRIMARY KEY,
                      user_id INT,
                      topic_id INT,
                      content TEXT NOT NULL,
                      moderation_status ENUM('pending', 'approved', 'rejected') NOT NULL DEFAULT 'pending',
                      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                      FOREIGN KEY (user_id) REFERENCES user(user_id),
                      FOREIGN KEY (topic_id) REFERENCES topic(topic_id)
);

CREATE TABLE comment (
                         comment_id INT AUTO_INCREMENT PRIMARY KEY,
                         user_id INT,
                         post_id INT,
                         content TEXT NOT NULL,
                         reference_page VARCHAR(30) NOT NULL,
                         created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                         FOREIGN KEY (user_id) REFERENCES user(user_id),
                         FOREIGN KEY (post_id) REFERENCES post(post_id)
);

