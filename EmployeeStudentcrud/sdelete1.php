<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        a {
  text-decoration: none;
}

        </style><center>
<div style="background-color:lightpink; width:330px;">
    <form action="" method="post" class="form-control" style="height: 200px;">
    <h1>Deletion</h1>
    <br>
    Rollno:  <input type="text" name="rollno"  required>
   <br><br>

 <input type="submit" name="remove" value="submit">
   

 <input type="reset" name="reset" >
   <br><br>
       
       <a href="student1.php"><input type="button" name="back" value="Back"></a>
    </form>
 
    </center>
</div>
<?php
    include "connection1.php";

    if(isset($_POST['remove'])){
        $rollno = $_POST['rollno'];
        $sql = "SELECT * FROM mark WHERE rollno = '$rollno'";
        
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){ ?>

     
     <table class>
     <tr>
         <th>Roll No</th>
         <th>Student Name</th>
         <th>Subject I</th>
         <th>Subject II</th>            
         <th>Subject III</th>
         <th>Subject IV</th>
         <th>Subject V</th>            
     </tr>
        <tr>
        <td><?php echo $row['rollno'];?></td>
        <td><?php echo $row['sname'];?></td>
        <td><?php echo $row['sub1'];?></td>
        <td><?php echo $row['sub2'];?></td>
        <td><?php echo $row['sub3'];?></td>
        <td><?php echo $row['sub4'];?></td>
        <td><?php echo $row['sub5'];?></td>
    </tr>
    </table>
    <form action="" method="post">
    <div class="alertMessage">
    <h3>Do you wish to delete the data of the above Student??</h3>.
        <table>
            <tr>
                <td><a style="text-decoration: none; padding:10px;" href="sdelete2.php?id= <?php echo $row['rollno'];?>" class="submit-btn">Yes</a></td>
                <td><a href="sdelete2.php?id= <?php echo 0;?>" class="reset-btn" style="margin-left: 195px;">No</a></td>
            </tr>
        </table>
    </div>
    </form>

        
                <?php
                }

            }
            else{
                $_SESSION['remove'] = "Student with Roll No: ".$rollno." is not present";
                header("location: sdelete1.php");
            }
        }
?>  



</body>
<script>
    const targetDiv = document.getElementById("disable");
    const btn = document.getElementById("toggle");
    btn.onclick = function () {
        if (targetDiv.style.display !== "none") {
            targetDiv.style.display = "none";
        } else {
            targetDiv.style.display = "block";
        }
    };
</script>
</html>