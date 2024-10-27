CREATE TABLE task_list_user
(
    task_list_id INTEGER,
    user_id      INTEGER,
    FOREIGN KEY (task_list_id) REFERENCES task_lists (id),
    FOREIGN KEY (user_id) REFERENCES users (id)
);
