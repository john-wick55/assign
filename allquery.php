<?php
include('./connection.php');
if(isset($_REQUEST['btnsave']))
{
$sqlquery ="INSERT INTO `admin`(`Name`, `Email`) VALUES ('". $_REQUEST['name']."','". $_REQUEST['email']."')";

$result = mysqli_query($connection,$sqlquery);
header('location:index.php');
}

if(isset($_REQUEST['btnedit']))
{
$sqlquery =" UPDATE `admin` SET `NAME` = '".$_REQUEST['name']."',`Email`= '".$_REQUEST['email']."' 
WHERE ID = '".$_REQUEST['Id']."'";

$result = mysqli_query($connection,$sqlquery);
header('location: show.php');
}


if(isset($_REQUEST['btndelete']))
{
$sqlquery ="DELETE FROM `admin` WHERE id = '".$_REQUEST['Id']."' ";

$result = mysqli_query($connection,$sqlquery);

header('location: show.php');
}


mysqli_close($connection);
?>