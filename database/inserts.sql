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
  (3,'HR'),
  (2, 'HR'),
  (2, 'TaxFraud');
  
  INSERT INTO Ticket VALUES

  (1, 'Ainda não me pagaram o reembolso', 'Ainda não recebi o reembolso devido. Apesar de ter feito todas as solicitações e cumprido os prazos estabelecidos, o pagamento ainda não foi efetuado. É frustrante lidar com essa situação, pois contava com esses recursos para resolver minhas obrigações financeiras. Tenho entrado em contato com a empresa responsável e aguardo uma resposta satisfatória o mais breve possível. Espero que essa questão seja resolvida em breve, pois a demora está gerando desconforto e preocupação. Continuarei persistindo e buscando soluções para obter o reembolso devido.', 5, 'open', 'TaxFraud', 'urgent', '#hashtag', 1, 1),

  (2, 'Fraude Fiscal: Solicitação de Investigação', 'Estou escrevendo para expressar minha profunda insatisfação e preocupação em relação a uma possível fraude fiscal que ocorreu recentemente em minha situação financeira. Gostaria de relatar os eventos e solicitar uma investigação adequada. Recebi um aviso do órgão de arrecadação de impostos informando que minha declaração de imposto de renda foi rejeitada devido a duplicidade de informações. Fiquei chocado ao descobrir isso, pois sempre forneço informações precisas em todas as minhas declarações fiscais. Após uma análise mais detalhada, descobri que alguém usou meus dados pessoais para apresentar uma declaração falsa em meu nome. Essa ação fraudulenta comprometeu minha situação financeira e prejudicou minha reputação junto ao órgão fiscal, causando considerável estresse e desconforto emocional. Solicito que o Departamento de TaxFraud inicie imediatamente uma investigação sobre esse incidente. Peço que analisem minhas informações e investiguem a origem dessa fraude. Também gostaria de ser informado sobre quais medidas podem ser tomadas para corrigir essa situação e proteger minha integridade financeira no futuro. Possuo todas as evidências disponíveis, incluindo cópias de minhas declarações fiscais e outros documentos relevantes. Estou disposto(a) a fornecer informações adicionais para auxiliar no processo. Peço urgência e diligência no tratamento desse assunto. Além disso, solicito a confidencialidade de minha identidade durante toda a investigação, a fim de evitar qualquer retaliação ou repercussão negativa. Agradeço antecipadamente sua atenção e cooperação. Aguardo uma resposta o mais breve possível.', 5, 'open', 'TaxFraud', 'urgent', '#hashtag', 2, 1),

  (3, 'Serviços Contábeis Inadequados.', 'Gostaria de registrar uma reclamação relacionada aos serviços contábeis fornecidos pela empresa. Tenho enfrentado dificuldades em obter informações precisas e oportunas sobre minhas obrigações fiscais e financeiras. Solicito uma revisão imediata do meu caso e a tomada de medidas para garantir a prestação adequada de serviços contábeis.', 5, 'open', 'Accounting', 'urgent', '#hashtag', 3, 1213213213),

  (4, 'Insatisfação com Serviços Contábeis Fornecidos.', 'Venho por meio desta carta expressar minha insatisfação com os serviços contábeis fornecidos pela empresa. Tenho enfrentado atrasos na elaboração de relatórios financeiros e falta de transparência nas informações. Solicito uma revisão imediata dessa situação e medidas para melhorar a qualidade dos serviços contábeis prestados.', 4, 'open', 'Accounting', 'urgent', '#hashtag', 2, 4321432),

  (5, 'Suspeita de Fraude Fiscal', 'Estou escrevendo para apresentar uma reclamação formal em relação a uma possível fraude fiscal que recentemente afetou minha situação financeira. Gostaria de relatar os eventos ocorridos e solicitar uma investigação imediata. Recebi um aviso do órgão de arrecadação de impostos informando que minha declaração de imposto de renda foi rejeitada devido a discrepâncias nos dados fornecidos. Fiquei extremamente preocupado(a) com essa notificação, uma vez que sempre prestei muita atenção e forneci informações precisas em todas as minhas declarações fiscais. Após minhas próprias investigações, descobri que houve uma possível utilização indevida de meus dados pessoais para a apresentação de uma declaração fraudulenta em meu nome. Essa ação prejudicial não apenas comprometeu minha situação financeira, mas também afetou minha confiança no sistema tributário.Solicito encarecidamente que o Departamento de TaxFraud conduza uma investigação aprofundada sobre esse incidente. Peço que examinem minhas informações fiscais e tomem medidas apropriadas para corrigir qualquer irregularidade detectada. Além disso, gostaria de ser informado(a) sobre os desdobramentos da investigação e das medidas tomadas para prevenir futuras ocorrências.Anexo a esta carta, você encontrará cópias de minhas declarações fiscais, bem como qualquer outra evidência relevante que possa auxiliar na investigação.Agradeço antecipadamente sua atenção e espero uma resolução satisfatória para essa situação o mais breve possível.', 4, 'open', 'TaxFraud', 'urgent', '#hashtag', 3, 543289070),

  (6, 'Muito Bem', 'Ótimo trabalho, merece 20', 6, 'open', 'HR', 'urgent', '#perfeição', 7, 1684944300);
