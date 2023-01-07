USE codeigniter4; 

CREATE TABLE students (
    id int(10) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name varchar(255) NOT NULL,
    email varchar(30) NOT NULL,
    phone varchar(20) NOT NULL,
    course varchar(20) NOT NULL,
    created_at timestamp(20) NOT NULL

);

INSERT INTO students (`name`, `email`, `phone`, `course`, `created_at`) 
                VALUES('Parkash Kash', 'par@c.c', '430943', 'BCA', now());


INSERT INTO students (`name`, `email`, `phone`, `course`, `created_at`) 
                VALUES('Parusha Kim', 'parkim@c.c', '4357854943', 'BAC', now());