ALTER TABLE user
    ADD COLUMN favorite_theme ENUM('purple', 'blue', 'green', 'yellow', 'orange', 'red', 'grey') DEFAULT NULL;
