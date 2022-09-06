<?php
$servername="localhost";
$username="root";
$password="";

###mysqli object oriented
//connect
$conn=new mysqli($servername,$username,$password);
if($conn->connect_error){
 die("connection Error : ".$conn->connect_error); 
 }

//create database
$sql="CREATE DATABASE myDB3";
if($conn->query($sql)===TRUE){
echo "Database created successfully";
}
else
{
echo "DataBase created Error";
}

//create table
$sql1="CREATE TABLE myGuests(
    id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if($conn->query($sql1)===TRUE){
    echo "Table myGuests create successfully";
}
else{
    echo "ERROR Table Created : ".$conn->error;
}

//insert table
$sql2="INSERT INTO TABLE myGuests(firstName,lastName,email)
values('mahla','nazari','m@gmail.com')";
if($conn->query($sql2)===TRUE){
    $lastId=$conn->insert_id;
    echo "new record created successfully , last id is :" .$lastId;
}
else{
    echo "Error : ".$sql."<br>".$conn->error;
}
//insert multiple data
if($conn->multi_query($sql2)===TRUE){
    echo "new records created successfully";
} else {
    echo "Error : " . $sql2 . "<br>" . $conn->error;
}

//prepare and bind
$stmt=$conn->prepare("INSERT INTO TABLE myGuests(firstName,lastName,email) VALUES(?,?,?)");
$stmt->bind_param("sss",$firstName,$lastName,$email);
$firstName="mohammad";
$lastName="mohammadi";
$email="mohammad@gmail.com";
$stmt->execute();

echo "create new records successfully";
$stmt->close();

//select from table
$sql3="SELECT id,firstName,lastName from myGuest";
$Res=$conn->query($sql3);
if($row->num_rows>0){
    while($row=$Res->fetch_assoc()){
        echo "id :".$row['id'];
    }
}


$conn->close();

###mysqli procedural
//connect
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("connection field : ".mysqli_connect_error());
}
echo "success connected";

//create database
$sql="CREATE DATABASE myDB";
if(mysqli_query($conn,$sql)){
    echo "database created successfully";
}
else{
    echo "database created Error : ".mysqli_error($conn);
}

//create table
$sql1 = "CREATE TABLE myGuests(
    id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if(mysqli_query($conn,$sql1)){
    echo "Table myGuests create successfully";
}
else{
    echo "ERROR Table Created : " . mysqli_error($conn);
}

//insert table
$sql2 = "INSERT INTO TABLE myGuests(firstName,lastName,email)
values('mahla','nazari','m@gmail.com')";
if(mysqli_query($conn,$sql2)){
    $lastId=mysqli_insert_id($conn);
    echo "new record created successfully , last id is : ".$lastId;
}
else{
    echo "Error : ".$sql2."<br>".mysqli_error($conn);
}

//insert multiple data
if(mysqli_multi_query($conn,$sql2)){
    echo "new records created successfully"; 
} else {
    echo "Error : " . $sql2 . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
