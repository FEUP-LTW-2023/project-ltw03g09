.mode columns
.headers on
DROP TABLE IF EXISTS User;
DROP TABLE IF EXISTS Ticket;
DROP TABLE IF EXISTS Client;
DROP TABLE IF EXISTS Agent;
DROP TABLE IF EXISTS Admin;
DROP TABLE IF EXISTS Department;
DROP TABLE IF EXISTS UserTickets;
DROP TABLE IF EXISTS Comment;
DROP TABLE IF EXISTS AgentDepartment;

CREATE TABLE User (
    id		INTEGER PRIMARY KEY,
    username 	VARCHAR(50),
    name 	VARCHAR(50),
    password 	VARCHAR(50),
    email 	VARCHAR(50),
    image     VARCHAR(500)
);

CREATE TABLE Ticket (
    ticketId	INTEGER PRIMARY KEY,
    title	VARCHAR(50),
    text VARCHAR(500),
    creator INTEGER,
    status	VARCHAR(50),
    department	VARCHAR(50),
    priority	VARCHAR(50),
    label	VARCHAR(50),
    assignedAgent INTEGER,
    date	VARCHAR(50),
    FOREIGN KEY (creator) REFERENCES User(id),
    FOREIGN KEY (assignedAgent) REFERENCES Agent(id)
);


CREATE TABLE Department (
  name	VARCHAR(20) PRIMARY KEY
);

CREATE TABLE Agent (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  user_id INTEGER,
  FOREIGN KEY (user_id) REFERENCES User(id)
);

CREATE TABLE Admin (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  agent_id INTEGER,
  FOREIGN KEY (agent_id) REFERENCES agent(id)
);


CREATE TABLE UserTickets (
  username	REFERENCES User,
  ticketId	REFERENCES Ticket
);

CREATE TABLE AgentDepartment (
  agent_id INTEGER,
  department VARCHAR(20),
  FOREIGN KEY (agent_id) REFERENCES agent(id),
  FOREIGN KEY (department) REFERENCES department(name)
);

CREATE TABLE Comment (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    text VARCHAR(100),
    ticket_id REFERENCES Ticket,
    user_id REFERENCES User,
    date Date
)
