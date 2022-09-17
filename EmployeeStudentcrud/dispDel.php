<?php

    require_once("connection1.php");
    $rollno = $_POST['rollno'];    
   $res = mysqli_query($connect,"select * from mark where rollno=$rollno");
   while($row = mysqli_fetch_array($res)) {
    $_SESSION["sname"]=$row["sname"];
    echo "WELCOME ".$_SESSION["sname"];
    echo "<table id='table' border='1'>
    <tr>";
   echo "<tr><td>ROLL</td><td>" . $row['rollno'] . "</td></tr>";
   echo "<tr><td>NAME</td><td>" . $row['sname'] . "</td></tr>";
   echo "<tr><td>SUB1</td><td>" . $row['sub1'] . "</td></tr>";  
   echo "<tr><td>SUB2</td><td>" . $row['sub2'] . "</td></tr>";
   echo "<tr><td>SUB3</td><td>" . $row['sub3'] . "</td></tr>";
   echo "<tr><td>SUB4</td><td>" . $row['sub4'] . "</td></tr>";
   echo "<tr><td>SUB5</td><td>" . $row['sub5'] . "</td></tr>";
   echo "<tr><td>TOTAL</td><td>" . $row['total'] . "</td></tr>";
   echo "<tr><td>AVG</td><td>" . $row['avg'] . "</td></tr>";
   echo "<tr><td>CLASS</td><td>" . $row['class'] . "</td></tr>";

   echo "</tr>";
}
?>

<a href="sdelete2.php">Yes</a>
<a href="student1.php">No</a>
