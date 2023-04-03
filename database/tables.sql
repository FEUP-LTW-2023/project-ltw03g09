DROP TABLE IF EXISTS User;
DROP TABLE IF EXISTS Ticket;
DROP TABLE IF EXISTS Client;
DROP TABLE IF EXISTS Agent;
DROP TABLE IF EXISTS UserTickets;
CREATE TABLE User (
    id		INTEGER PRIMARY KEY,
    username 	VARCHAR(50),
    name 	VARCHAR(50),
    password 	VARCHAR(50),
    email 	VARCHAR(50),
    permissions	VARCHAR(50)
);

CREATE TABLE Ticket (
    ticketId	INTEGER PRIMARY KEY,
    description	VARCHAR(50),
    title	VARCHAR(50),
    status	VARCHAR(50),
    department	VARCHAR(50),
    priority	VARCHAR(50),
    label	VARCHAR(50),
    --assignedAgent
    date	Date
);



CREATE TABLE Agent (
  id INTEGER PRIMARY KEY,
  user_id INTEGER,
  department VARCHAR(20),
  FOREIGN KEY (user_id) REFERENCES user(id)
);

CREATE TABLE Admin (
  id INTEGER PRIMARY KEY,
  agent_id INTEGER,
  FOREIGN KEY (agent_id) REFERENCES agent(id)
);

CREATE TABLE UserTickets (
    username	REFERENCES User,
    ticketId	REFERENCES Ticket
);


