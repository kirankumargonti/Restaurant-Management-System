# Project Environment setup 

1. Open xampp and start  apache and mysql => if you don't have installed xampp please click on the below link to  download 

https://www.apachefriends.org/index.html 


2. After that  place this Project folder in  "htdocs" folder.

3. C:\xampp\htdocs\


# Creating database

3.Open your favourite  browser and copy and paste the below link.

https://localhost/phpmyadmin


4.create the database with the exact  name "loginsystem" => after creating a database then

5.Select  The loginsystem database and then select the SQL tab  copy  the below query
 and paste it .
 
# Creating Tables 

### Careating  users table to store the user details i.e., Signup form details 
CREATE TABLE users ( <br>
idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
uidUsers TINYTEXT NOT NULL,
emailUsers TINYTEXT NOT NULL,
pwdUsers LONGTEXT NOT NULL
);


### Creating  reservation table to store the existing user details i.e., reservation form details 

CREATE TABLE reservation (
idUsers int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
rName TINYTEXT NOT NULL,
rDate DATE NOT NULL,
rTime TIME NOT NULL,
rChairs int(15) NOT NULL,
rEmail TINYTEXT NOT NULL,
rPhone int(10) NOT NULL
);

6. This will create the users and reservation table with the some attributes 
7. Thats it now run your project
8. I hope you guys know how to run projects using this xampp apache server.

localhost  (or) localhost:8080

Thank you......!
