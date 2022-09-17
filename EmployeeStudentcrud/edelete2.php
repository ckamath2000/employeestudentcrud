<?php
    include "connection2.php";

    $rollNo = $_GET['id'];
    if($rollNo != 0){
        $sql = "DELETE FROM emp WHERE empno = '$rollNo'";
        if(mysqli_query($connect,$sql)){
        
            echo "<br><br><br><center><h1 style='color:red;'>Employee deleted Successfully</h1></center>";
        }
    }
    else{
       echo "<br><br><br><center><h1 style='color:blue;'>Employee not deleted</h1></center>";
    }
    mysqli_close($connect);
?><br>
<a href="employee1.php"><input type="button" name="back" value="Back"></a>