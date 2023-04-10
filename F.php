<?php
echo "Welcome";
echo "<br>";
if(isset($_POST['fname']))
{
    echo "Hii";
    echo "<br>";

    $server="localhost";
    $username="root";
    $password="";
    $database="form";
    $connect=mysqli_connect($server,$username,$password,$database);
}

    if(!$connect)
    {
        die(mysqli_connect_error());
    }
    echo "Connected";

    $name=$_POST['fname'];
    $surname=$_POST['lname'];
    $enroll=$_POST['enrollment'];
    $sem=$_POST['sem'];
    echo $sql="INSERT INTO info(Firstname,Lastname,Enroll,Sem) VALUES ('$name','$surname','$enroll','$sem')";
    
    echo "<br>";

    $query=mysqli_query($connect,$sql);
    if($query)
    {
        echo "data inserted successfully";
    }
    else
    {
        echo "Error";
    }
?>