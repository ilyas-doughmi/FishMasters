-- Active: 1768832213002@@dockhosting.dev@42576@app

CREATE TABLE users (
    userId SERIAL PRIMARY KEY,
    userFullName VARCHAR(100) NOT NULL,
    userEmail VARCHAR(150) NOT NULL UNIQUE,
    userPassword VARCHAR(255) NOT NULL,
    userRole VARCHAR(100) NOT NULL,
    userCreatedAt TIMESTAMP DEFAULT NOW()
);

CREATE TABLE fisher (
    userPhoto TEXT NOT NULL,
    userClub VARCHAR(100) NOT NULL,
    userRegion VARCHAR(100) NOT NULL,
    userFavoritPeche VARCHAR(255) NOT NULL
) INHERITS (users);


CREATE TYPE likeTarget AS ENUM ('fisherman', 'catch', 'competition');

CREATE TYPE competitionStatus AS ENUM ('inProgress', 'done', 'notStarted');

CREATE TABLE badge (
    badgeId SERIAL PRIMARY KEY,
    badgeName VARCHAR(100) NOT NULL,
    badgeDescription TEXT NOT NULL
);

CREATE TABLE badge_user (
    badgeId INT NOT NULL,
    userId INT NOT NULL,
    PRIMARY KEY (badgeId, userId),
    FOREIGN KEY (badgeId) REFERENCES badge (badgeId),
    FOREIGN KEY (userId) REFERENCES users (userId)
);

CREATE TABLE likes (
    likeId SERIAL PRIMARY KEY,
    likeType likeTarget NOT NULL,
    likeTypeId INT NOT NULL,
    likeUserId INT NOT NULL,
    likeCreatedAt TIMESTAMP DEFAULT NOW(),
    FOREIGN KEY (likeUserId) REFERENCES users (userId),
    UNIQUE (
        likeUserId,
        likeType,
        likeTypeId
    )
);

CREATE TABLE subscribe (
    subscribeId SERIAL PRIMARY KEY,
    subscribeType likeTarget NOT NULL,
    subscribeTypeId INT NOT NULL,
    subscribeUserId INT NOT NULL,
    subscribeCreatedAt TIMESTAMP DEFAULT NOW(),
    FOREIGN KEY (subscribeUserId) REFERENCES users (userId),
    UNIQUE (
        subscribeUserId,
        subscribeType,
        subscribeTypeId
    )
);

CREATE TABLE species (
    speciesId SERIAL PRIMARY KEY,
    speciesName VARCHAR(100) NOT NULL,
    speciesMinSize NUMERIC(5, 2) NOT NULL,
    coefficient NUMERIC(5, 2) NOT NULL
);

CREATE TABLE competition (
    competitionId SERIAL PRIMARY KEY,
    competitionName VARCHAR(100) NOT NULL,
    competitionType VARCHAR(100) NOT NULL,
    competitionCategory VARCHAR(100) NOT NULL,
    competitionLocation VARCHAR(255) NOT NULL,
    competitionStartDate DATE NOT NULL,
    competitionEndDate DATE NOT NULL,
    competitionStatus competitionStatus NOT NULL
);

CREATE TABLE score (
    scoreId SERIAL PRIMARY KEY,
    scoreTotalWeight NUMERIC(5, 2) NOT NULL,
    scoreTotalPoints NUMERIC(5, 2) NOT NULL,
    scoreBiggestCatch NUMERIC(5, 2) NOT NULL,
    scoreCatchCount INT NOT NULL,
    scoreCompetitionId INT,
    FOREIGN KEY (scoreCompetitionId) REFERENCES competition (competitionId)
);

CREATE TABLE catch (
    catchId SERIAL PRIMARY KEY,
    catchWeight NUMERIC(5, 2) NOT NULL,
    catchLength NUMERIC(5, 2) NOT NULL,
    catchPhoto VARCHAR(100) NOT NULL,
    catchIsReleased BOOLEAN DEFAULT FALSE,
    catchValidated BOOLEAN DEFAULT FALSE,
    catchCreatedAt TIMESTAMP DEFAULT NOW(),
    catchFisherId INT NOT NULL,
    catchScoreId INT,
    FOREIGN KEY (catchFisherId) REFERENCES fisher (fisherId),
    FOREIGN KEY (catchScoreId) REFERENCES score (scoreId)
);

CREATE TABLE catch_species (
    catchId INT,
    speciesId INT,
    PRIMARY KEY (catchId, speciesId),
    FOREIGN KEY (catchId) REFERENCES catch (catchId),
    FOREIGN KEY (speciesId) REFERENCES species (speciesId)
);

CREATE TABLE rules (
    ruleId SERIAL PRIMARY KEY,
    ruleName VARCHAR(100) NOT NULL,
    ruleDescription TEXT NOT NULL
);

CREATE TABLE competition_rules (
    competitionId INT,
    ruleId INT,
    PRIMARY KEY (competitionId, ruleId),
    FOREIGN KEY (competitionId) REFERENCES competition (competitionId),
    FOREIGN KEY (ruleId) REFERENCES rules (ruleId)
);

CREATE TABLE rule_species (
    ruleId INT NOT NULL,
    speciesId INT NOT NULL,
    PRIMARY KEY (ruleId, speciesId),
    FOREIGN KEY (ruleId) REFERENCES rules (ruleId),
    FOREIGN KEY (speciesId) REFERENCES species (speciesId)
);

INSERT INTO
    users (
        userFullName,
        userEmail,
        userPassword,
        userRole
    )
VALUES (
        'Mehdi Cherkaoui',
        'mehdi@mail.com',
        '$2y$10$.RPgf5MmgrvmMZ4z7u8yI.NFqhj4QcRMTbAbfbuGVRkVE4a0AhbnK',
        'fisher'
    ),
    (
        'Yassine Amrani',
        'yassine@mail.com',
        'pwd2',
        'fisher'
    ),
    (
        'Admin User',
        'admin@mail.com',
        'adminpwd',
        'admin'
    );


INSERT INTO fisher (
    userFullName,
    userEmail,
    userPassword,
    userRole,
    userPhoto,
    userClub,
    userRegion,
    userFavoritPeche
)
VALUES
(
    'Mehdi Cherkaoui',
    'mehdi@mail.com',
    'hashed_password_1',
    'FISHER',
    'mehdi.jpg',
    'Blue Sea Club',
    'Casablanca',
    'Surfcasting'
),
(
    'Yassine El Amrani',
    'yassine@mail.com',
    'hashed_password_2',
    'FISHER',
    'yassine.jpg',
    'Atlantic Anglers',
    'Agadir',
    'Spinning'
);

INSERT INTO
    badge (badgeName, badgeDescription)
VALUES (
        'First Catch',
        'Awarded for first validated catch'
    ),
    (
        'Big Fish',
        'Awarded for catching a big fish'
    );

INSERT INTO badge_user (badgeId, userId) VALUES (1, 1), (2, 2);

INSERT INTO
    species (
        speciesName,
        speciesMinSize,
        coefficient
    )
VALUES ('Sea Bass', 42.00, 1.50),
    ('Gilthead Bream', 30.00, 1.20),
    ('Tuna', 70.00, 2.00);

INSERT INTO
    competition (
        competitionName,
        competitionType,
        competitionCategory,
        competitionLocation,
        competitionStartDate,
        competitionEndDate,
        competitionStatus
    )
VALUES (
        'FishMasters 2026',
        'National',
        'Sea Fishing',
        'Agadir',
        '2026-06-01',
        '2026-06-05',
        'inProgress'
    );

INSERT INTO
    score (
        scoreTotalWeight,
        scoreTotalPoints,
        scoreBiggestCatch,
        scoreCatchCount,
        scoreCompetitionId
    )
VALUES (15.50, 120.00, 5.20, 3, 1),
    (12.30, 95.00, 4.10, 2, 1);

INSERT INTO
    catch (
        catchWeight,
        catchLength,
        catchPhoto,
        catchIsReleased,
        catchValidated,
        catchFisherId,
        catchScoreId
    )
VALUES (
        5.20,
        60.00,
        'catch1.jpg',
        FALSE,
        TRUE,
        1,
        1
    ),
    (
        4.10,
        55.00,
        'catch2.jpg',
        TRUE,
        TRUE,
        2,
        2
    );

INSERT INTO catch_species (catchId, speciesId) VALUES (1, 1), (2, 2);

INSERT INTO
    rules (ruleName, ruleDescription)
VALUES (
        'Minimum Size Rule',
        'Fish under minimum size must be released'
    ),
    (
        'Catch Limit',
        'Maximum 5 catches per fisher'
    );

INSERT INTO
    competition_rules (competitionId, ruleId)
VALUES (1, 1),
    (1, 2);

INSERT INTO
    rule_species (ruleId, speciesId)
VALUES (1, 1),
    (1, 2),
    (2, 3);

INSERT INTO
    likes (
        likeType,
        likeTypeId,
        likeUserId
    )
VALUES ('competition', 1, 1),
    ('fisherman', 2, 1),
    ('catch', 1, 2);

INSERT INTO
    subscribe (
        subscribeType,
        subscribeTypeId,
        subscribeUserId
    )
VALUES ('competition', 1, 2),
    ('fisherman', 1, 2);