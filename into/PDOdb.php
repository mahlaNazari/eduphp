<?php
###pdo
//connect
try {
    $conn = new PDO("mysql:host=$servername;dbname=myDb", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected succefully";
} catch (PDOException $e) {
    echo "Connection Error : " . $e->getMessage();
}

//create database
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE myDbPDO";
    $conn->exec($sql);
    echo "create database successfully";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

//create table
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql1 = "CREATE TABLE myGuests(
    id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
    $conn->exec($sql1);
    echo "Table MyGuests created successfully";
} catch (PDOException $e) {
    echo $sql1 . "<br>" . $e->getMessage();
}

//insert table
try{
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql2 = "INSERT INTO TABLE myGuests(firstName,lastName,email)
values('mahla','nazari','m@gmail.com')";

$conn->exec($sql2);
$lastId=$conn->lastInsertId();
echo "new record created successfully , last Id is : ".$lastId;
}
catch(PDOException $e){
echo $sql2."<br>".$e->getMessage();
}

//insert multiple data

try{
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->beginTransaction();
    $conn->exec(
        "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('ali', 'mohammadi', 'ali@example.com')"
    );
    $conn->exec(
        "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('ali', 'mohammadi', 'ali@example.com')"
    );

    $conn->commit();
    echo "new records created successfully";
}
catch(PDOException $e){
$conn->rollBack();
echo "Error : ".$e->getMessage();
}


//prepare and bind
try{
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt=$conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES (:firstname, :lastname, :email)");
  $stmt->bindParam(':firstName',$firstName);
  $stmt->bindParam(':lastName',$lastName);
  $stmt->bindParam(':email',$email);

  $firstName="john";
  $lastName="ffg";
  $email="john@gmail.com";
  $stmt->execute();

    echo "New records created successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$conn = null;
?>