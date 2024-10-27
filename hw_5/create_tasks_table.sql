CREATE TABLE tasks
(
    id           SERIAL PRIMARY KEY,
    title        VARCHAR(255),
    description  TEXT,
    status_id    INT,
    task_list_id INT,
    FOREIGN KEY (task_list_id) REFERENCES task_lists (id),
    FOREIGN KEY (status_id) REFERENCES statuses (id)
);
