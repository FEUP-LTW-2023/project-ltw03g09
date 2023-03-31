CREATE TABLE User {
    username 	VARCHAR(50) PRIMARY KEY,
    name 	VARCHAR(50),
    password 	VARCHAR(50),
    email 	VARCHAR(50),
    permissions	VARCHAR(50)
}

CREATE TABLE Ticket {
    ticketId	INTEGER PRIMARY KEY,
    description	VARCHAR(50),
    date	Date
}

CREATE TABLE Student {
    username	REFERENCES User,
    studentNumber	VARCHAR(9) PRIMARY KEY,
    averageMark		INTEGER --should be float
}

CREATE TABLE Professor {
    username	REFERENCES User,
    profNumber	VARCHAR(9),
    salary	INTEGER
}

CREATE TABLE UserTickets {
    username	REFERENCES User,
    ticketId	REFERENCES Ticket
}


