<?php
$servername="localhost";
$username="root";
$password="";
$dbname="class task";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else

	echo "successful connection";
	{
	
	//$q ="CREATE TABLE Employee( ID INT(5) UNSIGNED AUTO_INCREMENT PRIMERY KEY,NAME VARCHAR(20) NOT NULL, Email VARCHAR(20) NOT NULL,Salary INT(10)NOT NULL)";
	
	$q="INSERT INTO Employee(ID,NAME,EMAIL,Salary)VALUES(1001,'SHAOWN BARUA','shaown@gmail.com',25000)";
	$q="INSERT INTO Employee(ID,NAME,EMAIL,Salary)VALUES('IFTU','iftu@gmail.com',15000)";
	$q="INSERT INTO Employee(ID,NAME,EMAIL,Salary)VALUES('ABRAR','abrar@gmail.com',35000)";
	$q="INSERT INTO Employee(ID,NAME,EMAIL,Salary)VALUES('niladro','niladro@gmail.com',45000)";
	
	//$q="DELETE FROM Employee where ID=1002"
	$q="UPDATE My guest SET NAME='RIMON' where ID=103";
	//$q="CREATE TABLE Student(ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,Name VARCHAR(30) NOT NULL, Email VARCHAR(30) NOT NULL)";
	//$q="INSERT INTO Student(Name,Email) VALUES('Eva','eva@gmail.com')";
	//$q="INSERT INTO Student(Name,Email) VALUES('".$name."','".$email."')";
	//$q="DELETE FROM Student where ID=1003";
	//$q="INSERT INTO Teacher(ID,Name,Email,Salary) VALUES(20024,'".$name."','".$email."',50000)";
	$result=$conn->query($q);
	if($result)
		echo "Table created successful";
	else
		echo " table not created";
}
	//echo "successful connection";
?>