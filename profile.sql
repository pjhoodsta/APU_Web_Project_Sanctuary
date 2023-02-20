CREATE TABLE 'Profile'(
    'ProfileID' int(11)unsigned NOT NULL AUTO_INCRETMENT,
    'Name' varchar(75) NOT NULL,
    'Password' varchar(255) NOT NULL,
    'Email' varchar(100) NOT NULL,
    'CreatedOn' datetime default,
    'Privilege' varchar(255) NOT NULL,
    PRIMARY KEY ('ProfileID'),
    UNIQUE KEY ('Email')
)