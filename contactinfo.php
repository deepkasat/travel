<?php

$con = mysqli_connect('localhost', 'root');

if ($con) {
 echo "Connection Successful";
} else {
 echo "No connection";
}

mysqli_select_db($con, 'travelindia');

$user = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$person = $_POST['person'];
$package = $_POST['package'];
$description = $_POST['description'];


$query = "insert into contact(Name, Email, Mobile, Persons, Package, Description) values('$user', '$email', '$mobile', '$person', '$package', '$description') ";

echo "$query";

$query_run = mysqli_query($con, $query);


header('location:travel.html');
