-- Populate the users table
INSERT INTO User VALUES
  (1, 'jontho', 'John Doe', '1234', 'johndoe@example.com', 'permission_string'),
  (2, 'janetho', 'Jane Doe',  '1234', 'janedoe@example.com', 'permission_string'),
  (3, 'bobby69', 'Bob Smith', '1234', 'bobsmith@example.com', 'permission_string');

-- Populate the clients table
INSERT INTO Client (id, user_id) VALUES
  (1, 1),
  (2, 2);

-- Populate the agents table
INSERT INTO Agent (id, client_id, department) VALUES
  (1, 1, 'Accounting');

