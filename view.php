<?php
if(isset($_POST['enrollment']))
{
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
echo "<br>";

$enroll=$_POST['enrollment'];
echo $sql="SELECT*from info  where Enroll='$enroll'";
echo "<br>";

$query=mysqli_query($connect,$sql);
if($query)
{
    echo "Hii";
    echo "<br>";
    // Double data hoy to while no use karvo niche ni line thi
    $row=mysqli_fetch_array($query);
    if($row>0)
    {
        echo "Here is your data";
    }

    echo "<br>";
    echo "<table border='1'>";

    echo "<tr>";
    echo "<th>";
    echo "Firstname";
    echo "</th>";
    echo "<th>";
    echo "Lastname";
    echo "</th>";
    echo "<th>";
    echo "Sem";
    echo "</th>";

    echo "<tr>";
    echo "<td>";
    echo $row['Firstname'];
    echo "</td>";
    echo "<td>";
    echo $row['Lastname'];
    echo "</td>";
    echo "<td>";
    echo $row['Sem'];
    echo "</td>";
    echo "</tr>";
}
?>