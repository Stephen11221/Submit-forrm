<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=mysqli_connect($server,$username,$password,$database);
if( isset($_POST['submitbutton']) )
{
    //1. fetch form data
    $firstName=$_POST['firstname'];
    $lastName=$_POST['lastname'];
    $email=$_POST['email'];
    $phonenumber=$_POST['phonenumber'];
    $massege=$_POST['message'];
    //2. submit form data
    $insertData= mysqli_query($conn, "INSERT INTO contactus(firstname,lastname,email,phonenumber,message)
    VALUES('$firstName','$lastName','$email','$phonenumber','$massege')");
    
    if($insertData)
    {
        echo "Sucess Detail.";
    }
    else{
        echo "Delete information ";
    }



}