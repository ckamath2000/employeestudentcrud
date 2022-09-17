<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style1.css">
    <style>
a {
  text-decoration: none;
}</style>

</head>
<body>
    <center>

    <div class="container">
    <div class="form">
      <h1><i>Delete</i></h1>
      <br><br>
      <form class="signUp" action="" method="POST">
        <div class="formGroup">

         Empno:  <input type="text" name="empno" required>
   <br><br>
        </div>
        
        
        <br><br>
        <div class="formGroup">
          <button type="submit" class="btn2" name="remove" value="submit">Submit</button>
<a href="employee1.php"><button type="button" class="btn2">Back</button></a><br><br>
        </div>
 
      </form>
    </center>
<?php
    include "connection2.php";

    if(isset($_POST['remove'])){
        $empno = $_POST['empno'];
        $sql = "SELECT * FROM emp WHERE empno = '$empno'";
        
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){ ?>

     
     <table class>
     <tr>
         <th>Empno</th>
         <th>Emp-Name</th>
         <th>Bsalary</th>
         <th>DA</th>            
         <th>HRA</th>
         <th>MA</th>
         <th>INSURANCE</th>  
         <th>NETSALARY</th>            
     </tr>
        <tr>
        <td><?php echo $row['empno'];?></td>
        <td><?php echo $row['ename'];?></td>
        <td><?php echo $row['bsalary'];?></td>
        <td><?php echo $row['da'];?></td>
        <td><?php echo $row['hra'];?></td>
        <td><?php echo $row['ma'];?></td>
        <td><?php echo $row['insurance'];?></td>
        <td><?php echo $row['netsalary'];?></td>
    </tr>
    </table>
    <form action="" method="post">
    <div class="alertMessage">
    <h3>Do you wish to delete the data of the above Student??</h3>.
        <table>
            <tr>
                <td><a href="edelete2.php?id= <?php echo $row['empno'];?>" class="submit-btn">Yes</a></td>
                <td><a href="edelete2.php?id= <?php echo 0;?>" class="reset-btn" style="margin-left: 195px;">No</a></td>
            </tr>
        </table>
    </div>
    </form>

        
                <?php
                }

            }
            else{
                $_SESSION['remove'] = "Student with Emp No: ".$empno." is not present";
                header("location: edelete1.php");
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
</body>
</html>