<?php
include "config.php";
$sql1="create table skills(language_name VARCHAR(20),progress int)";
$sql2="create table social(name VARCHAR(20),link VARCHAR(75),path VARCHAR(75))";
$sql3="INSERT INTO skills VALUES('html',90),('c++',90),('c',85),('java',80),('php',80),('android',50),('javascript',45),('css',60),('photoshop',75),('premiere pro',70)";
$sql4="INSERT INTO social VALUES('github','https://github.com/iamrohitsuthar','ion-social-github'),('twitter','https://twitter.com/iamohitsuthar','ion-social-twitter'),('instagram','https://www.instagram.com/iamrohitsuthar','ion-social-twitter'),('googleplus','https://plus.google.com/115577873641997857772','ion-social-googleplus'),('youtube','https://www.youtube.com/channel/UCGsxK8IE21U1c9urUuQnrTA','ion-social-youtube'),('linkedin','https://www.linkedin.com/in/iamrohitsuthar/','ion-social-linkedin'),('mail','mailto:rohitsuthar886@gmail.com','ion-email')";
$sql5="CREATE TABLE education(year VARCHAR(20),course VARCHAR(50),college VARCHAR(75),percentage FLOAT)";
$sql6="INSERT INTO education VALUES('2015','10th','Manibai Gujrati High School Amravati',93.40),('2015','MS-CIT','Maharashtra State - Certificate in Information Technology',80),('Winter 2015','Diploma in computer engineering (SEM I)','Government Polytechnic Amravati',88),('Summer 2016','Diploma in computer engineering (SEM II)','Government Polytechnic Amravati',83),('Winter 2016','Diploma in computer engineering (SEM III)','Government Polytechnic Amravati',89),('Summer 2017','Diploma in computer engineering (SEM IV)','Government Polytechnic Amravati',87),('Winter 2017','Diploma in computer engineering (SEM V)','Government Polytechnic Amravati',91.03)";
if(mysqli_query($conn,$sql1))
{
	echo "success";
}
else
{
	echo mysqli_error($conn);
}
mysqli_query($conn,$sql2);
mysqli_query($conn,$sql3);
mysqli_query($conn,$sql4);
mysqli_query($conn,$sql5);
mysqli_query($conn,$sql6);
echo "data inserted";
?>