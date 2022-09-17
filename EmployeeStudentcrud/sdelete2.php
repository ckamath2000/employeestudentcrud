<?php
    include "connection1.php";

    $rollNo = $_GET['id'];
    if($rollNo != 0){
        $sql = "DELETE FROM mark WHERE rollno = '$rollNo'";
        if(mysqli_query($connect,$sql)){
        
            echo "Student deleted Successfully";
        }
    }
    else{
       echo "Student not deleted";
    }
    mysqli_close($connect);
?><br>
 <a href="student1.php"><input type="button" name="back" value="Back"></a>