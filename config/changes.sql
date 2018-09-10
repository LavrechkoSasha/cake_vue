ALTER TABLE users ADD login varchar(255) NULL;
ALTER TABLE users
  MODIFY COLUMN password varchar(255) AFTER login,
  MODIFY COLUMN login varchar(255) AFTER email;