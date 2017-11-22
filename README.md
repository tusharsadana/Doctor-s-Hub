# Doctor-s-Hub
Book Appointment or Cancel, Login, Create New Account or Logout. Validated By Email.

Create Table using following commands.

CREATE TABLE `members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `loginAttempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

Setup the login/dbconf.php file.
Setup the login/config.php file.

Add this line to all the pages where you need to maintain the session.
<?php require "login/loginheader.php"; ?>

Signup/Login Workflow:

Create new user using signup.php form (note: validation occurs both client and server side)     Validation requires:        - Passwords to match and be at least 4 characters        - Valid email address        - Unique username
Password gets hashed and new GUID is generated for User ID
User gets added to database as unverified
Email is sent to user email (or $admin_email if set) with verification link
User (or admin) clicks verification link which sends them to verifyuser.php and verifies user in the database
Verified user may now log in
