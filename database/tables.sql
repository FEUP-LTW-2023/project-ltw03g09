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
    date	Date
);


CREATE TABLE Client (
  id INTEGER PRIMARY KEY,
  user_id INTEGER,
  FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE Agent (
  id INTEGER PRIMARY KEY,
  client_id INTEGER,
  department VARCHAR(20),
  FOREIGN KEY (client_id) REFERENCES clients(id)
);

CREATE TABLE UserTickets (
    username	REFERENCES User,
    ticketId	REFERENCES Ticket
);


