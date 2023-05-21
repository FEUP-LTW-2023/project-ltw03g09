INSERT INTO User VALUES
  (1, 'trump69', 'John Doe', '$2y$10$3XIbjkOsON9nMNOUt5jg.uTvU/GyVw44xsK8cqzreaTUadsGPCOFS', 'johndoe@example.com', 'https://d3544la1u8djza.cloudfront.net/APHI/Blog/2021/07-06/small+white+fluffy+dog+smiling+at+the+camera+in+close-up-min.jpg'),
  (2, 'leroyJeankins', 'Jane Doe',  '$2y$10$/7nbRrEl7QLzWhyYqXJ2Iux5J0l6hKjsj/MimVj7ymnnZ9ZNStG8e', 'janedoe@example.com', 'https://images.squarespace-cdn.com/content/v1/541d14f8e4b09246971df445/1625729557397-8TTI2PX2KUF0T9SB0P0R/how-to-take-the-perfect-selfie-2.jpg?format=1000w'),
  (3, 'bobby69', 'Bob Smith', '$2y$10$/7nbRrEl7QLzWhyYqXJ2Iux5J0l6hKjsj/MimVj7ymnnZ9ZNStG8e', 'bobsmith@example.com', 'https://images.pexels.com/photos/260024/pexels-photo-260024.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'),
  (4, 'shrek_is_life', 'Antonia Andrade', '$2y$10$/7nbRrEl7QLzWhyYqXJ2Iux5J0l6hKjsj/MimVj7ymnnZ9ZNStG8e', 'test@example.com','https://static.fandomspot.com/images/11/10388/00-featured-shrek-smiling-in-mud-bath.jpg'),
  (5, 'Miguel', 'Miguel Charchalis', '$2y$10$/7nbRrEl7QLzWhyYqXJ2Iux5J0l6hKjsj/MimVj7ymnnZ9ZNStG8e', 'miguel@email.com','https://e7.pngegg.com/pngimages/922/865/png-clipart-discord-pepe-the-frog-video-games-pepe.png'),
  (6, 'LittlePrincess', 'Gonçalo Gonçalves', '$2y$10$Nl7ln9rSfi0j.0Z/r0pMPeM3cJyqAnskicKDa48LODO99bV7q57GK', 'gflcg@fe.up.pt', 'https://lh3.googleusercontent.com/pw/AJFCJaXN6UOlw9LX7j-O-y5AS1bVHt9rDQLSCm2THx-k-TlC0a0IVx5TzB3EcU1znxIH4WlphJoO5neGqhZ4Gvm8iabHiBZ_wnbmAeNCIhdi7uLNKLW5y9lATaxbZiK8_JdFR_ph0dxDxUAfPZIcWVbtZABPzw=w160-h200-s-no?authuser=0'),
  (7, 'admins', 'João e Miguel', '$2y$10$/7nbRrEl7QLzWhyYqXJ2Iux5J0l6hKjsj/MimVj7ymnnZ9ZNStG8e', 'feup@fe.up.pt', 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2F9%2F93%2FCora%25C3%25A7%25C3%25A3o-icone.png%2F1040px-Cora%25C3%25A7%25C3%25A3o-icone.png&tbnid=H5XxsK8YvSD9HM&vet=12ahUKEwiF79CpkIf_AhUCsUwKHewkDXsQMygDegUIARDFAQ..i&imgrefurl=https%3A%2F%2Fpt.wikipedia.org%2Fwiki%2FFicheiro%3ACora%25C3%25A7%25C3%25A3o-icone.png&docid=KGnzimP_VyvuNM&w=1040&h=1024&q=cora%C3%A7%C3%A3o&ved=2ahUKEwiF79CpkIf_AhUCsUwKHewkDXsQMygDegUIARDFAQ'),
  (8, 'Joao', 'Joao Martins', '$2y$10$/7nbRrEl7QLzWhyYqXJ2Iux5J0l6hKjsj/MimVj7ymnnZ9ZNStG8e', 'miguel@email.com','https://e7.pngegg.com/pngimages/922/865/png-clipart-discord-pepe-the-frog-video-games-pepe.png');
    

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
  (1, 'Save the world', 'the planet is dying. we should recycle so we can breath nice air and swim on nice water', 5, 'open', 'Hr', 'urgent', '#hashtag', 1, 1),
  (2, 'title2', 'lorem ipsum', 5, 'open', 'TaxFraud', 'urgent', '#hashtag', 2, 1),
  (3, 'title3', 'lorem ipsum', 5, 'open', 'Accounting', 'urgent', '#hashtag', 3, 1213213213),
  (4, 'title4', 'lorem ipsum', 4, 'open', 'Accounting', 'urgent', '#hashtag', 2, 4321432),
  (5, 'title5', 'lorem ipsum', 4, 'open', 'TaxFraud', 'urgent', '#hashtag', 3, 543289070),
  (6, 'Muito Bem', 'Ótimo trabalho, merece 20', 6, 'open', 'HR', 'urgent', '#perfeição', 7, 1684944300);