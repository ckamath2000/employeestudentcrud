
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style3.css">
    <style>

table,tr,td,th{
    border-collapse:collapse;
    border:1px solid black;
    background-color:lightpink;
}
        </style></head><center> 
   

<div class="container">
    <div class="form">
      <h1><i>Query</i></h1><br>
      <br><br>
      <form class="signUp" action="" method="POST">
        <div class="formGroup">

         Empname:  <input type="text" name="ename" required>
   <br><br>
        </div>
        
        
        <br><br>
        <div class="formGroup">
          <button type="submit" class="btn2" name="submit" value="submit">Submit</button>
<a href="employee1.php"><button type="button" class="btn2">Back</button></a><br><br>
        </div>
 
      </form>
</div>
</center>
<?php
    include "connection2.php";

    if(isset($_POST['submit'])){
        $Name = $_POST['ename'];
        $firstChar = substr($Name,0,1);
        $sql = "SELECT * from emp WHERE ename LIKE '$firstChar%'";
        $sqlReult = mysqli_query($connect,$sql);
            if(mysqli_num_rows($sqlReult) > 0){?>
                <table class="table">



                
     <tr class="row">
         <th>Empno</th>
         <th>Emp-Name</th>
         <th>Bsalary</th>
         <th>DA</th>            
         <th>HRA</th>
         <th>MA</th>
         <th>INSURANCE</th>  
         <th>NETSALARY</th>            
     </tr>
   
      
    <?php
                while($row = mysqli_fetch_assoc($sqlReult)){?>
        <tr class="row">
        <td><?php echo $row['empno'];?></td>
        <td><?php echo $row['ename'];?></td>
        <td><?php echo $row['bsalary'];?></td>
        <td><?php echo $row['da'];?></td>
        <td><?php echo $row['hra'];?></td>
        <td><?php echo $row['ma'];?></td>
        <td><?php echo $row['insurance'];?></td>
        <td><?php echo $row['netsalary'];?></td>
         
        </tr>
       
<?php
                    }
                }
                else{
                    $_SESSION['removeReport'] = "No Employee have been added!!!";
                }
            }
?>
</table> 
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