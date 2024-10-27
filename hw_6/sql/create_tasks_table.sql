CREATE TABLE tasks
(
    id          SERIAL PRIMARY KEY,
    title       VARCHAR(255),
    description TEXT,
    user_id     INT,
    FOREIGN KEY (user_id) REFERENCES users (id)
);
