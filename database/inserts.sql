-- Populate the users table
INSERT INTO User VALUES
  (1, 'jontho', 'John Doe', '1234', 'johndoe@example.com', 'https://e7.pngegg.com/pngimages/922/865/png-clipart-discord-pepe-the-frog-video-games-pepe.png'),
  (2, 'janetho', 'Jane Doe',  '1234', 'janedoe@example.com', 'https://e7.pngegg.com/pngimages/922/865/png-clipart-discord-pepe-the-frog-video-games-pepe.png'),
  (3, 'bobby69', 'Bob Smith', '1234', 'bobsmith@example.com', 'https://e7.pngegg.com/pngimages/922/865/png-clipart-discord-pepe-the-frog-video-games-pepe.png'),
  (4, 'test', 'test', 'test', 'test','https://e7.pngegg.com/pngimages/922/865/png-clipart-discord-pepe-the-frog-video-games-pepe.png'),
  (5, 'username', 'name', 'password', 'email','https://e7.pngegg.com/pngimages/922/865/png-clipart-discord-pepe-the-frog-video-games-pepe.png');
    

-- Populate the agents table
INSERT INTO Agent (id, user_id) VALUES
  (1, 1),
  (2, 4),
  (3, 5);

INSERT INTO Admin (id, agent_id) VALUES
  (1, 3);

INSERT INTO Department VALUES
  ('Accounting'),
  ('Investigation'),
  ('Production'),
  ('TaxFraud'),
  ('HR');
  
INSERT INTO AgentDepartment (agent_id, department) VALUES
  (3,'TaxFraud'),
  (3,'Accounting'),
  (2, 'HR'),
  (2, 'TaxFraud');
  
INSERT INTO Ticket VALUES
  (1, 'title1', 'lorem ipsum', 5, 'open', 'TaxFraud', 'urgent', '#hashtag', 1, 1),
  (2, 'title2', 'lorem ipsum', 5, 'open', 'TaxFraud', 'urgent', '#hashtag', 2, 1),
  (3, 'title3', 'lorem ipsum', 5, 'open', 'Accounting', 'urgent', '#hashtag', 3, 1213213213),
  (4, 'title4', 'lorem ipsum', 4, 'open', 'Accounting', 'urgent', '#hashtag', 2, 4321432),
  (5, 'title5', 'lorem ipsum', 4, 'open', 'TaxFraud', 'urgent', '#hashtag', 3, 543289070);