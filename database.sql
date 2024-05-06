-- Membre : Cette classe représente les membres du club de sport.
CREATE TABLE Membre (
    ID INT PRIMARY KEY,
    Nom NVARCHAR(50),
    Prenom NVARCHAR(50),
    DateNaissance DATE,
    Adresse NVARCHAR(100),
    Email NVARCHAR(100),
    Telephone NVARCHAR(20)
);

-- Entraîneur : Cette classe représente les entraîneurs du club.
CREATE TABLE Entraineur (
    ID INT PRIMARY KEY,
    Nom NVARCHAR(50),
    Prenom NVARCHAR(50),
    Specialite NVARCHAR(100),
    DateEmbauche DATE,
    Salaire DECIMAL(10, 2)
);

-- Activité : Cette classe représente les différentes activités proposées par le club.
CREATE TABLE Activite (
    ID INT PRIMARY KEY,
    Nom NVARCHAR(100),
    Description NVARCHAR(255),
    Tarif DECIMAL(10, 2)
);

-- Inscription : Cette classe représente les inscriptions des membres à des activités.
CREATE TABLE Inscription (
    ID INT PRIMARY KEY,
    MembreID INT,
    ActiviteID INT,
    DateInscription DATE,
    FOREIGN KEY (MembreID) REFERENCES Membre(ID),
    FOREIGN KEY (ActiviteID) REFERENCES Activite(ID)
);

-- Réservation : Cette classe représente les réservations des membres pour des installations ou des événements.
CREATE TABLE Reservation (
    ID INT PRIMARY KEY,
    MembreID INT,
    DateReservation DATE,
    Details NVARCHAR(255),
    FOREIGN KEY (MembreID) REFERENCES Membre(ID)
);