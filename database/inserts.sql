-- Populate the users table
INSERT INTO User VALUES
  (1, 'jontho', 'John Doe', '1234', 'johndoe@example.com', 'permission_string'),
  (2, 'janetho', 'Jane Doe',  '1234', 'janedoe@example.com', 'permission_string'),
  (3, 'bobby69', 'Bob Smith', '1234', 'bobsmith@example.com', 'permission_string'),
  (4, 'test', 'test', 'test', 'test', 'permission_string'),
  (5, 'username', 'name', 'password', 'email','permission_string');
    

-- Populate the agents table
INSERT INTO Agent (id, user_id, department) VALUES
  (1, 1, 'Accounting');

INSERT INTO Department VALUES
  ('Accounting'),
  ('Investigation'),
  ('Production'),
  ('Tax fraud'),
  ('HR');
