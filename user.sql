CREATE TABLE 'User'(
    'UserID' int(11)unsigned NOT NULL AUTO_INCRETMENT,
    'DateOfBirth' date
    PRIMARY KEY ('UserID'),
    FOREIGN KEY (ProfileID) REFERENCES Profile(ProfileID)


)