<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
      td
      {
        color:white;
      }
      .invalid
      {
        color:white;
      }
    </style>

</head>
<body><center>

  <div class="container">
    <div class="form">
      <h1><i>Insert the values</i></h1>
      <br><br>
      <form class="signUp" action="einsert.php" method="POST">
        <div class="formGroup">

         Empno:  <input type="text" name="empno" required>
   <br><br>
        </div>
        
        <div class="formGroup">
          Ename: <input type="text" name="ename" required>
   <br><br>
        </div>
        <div class="formGroup">
          Bsalary : <input type="text" name="bsalary"  required>
   <br><br>
        </div>
        <br><br><br><br>
        <div class="formGroup">
          <button type="submit" class="btn2" name="submit" value="submit">Submit</button>
<a href="employee1.php"><button type="button" class="btn2">Back</button></a><br><br>
        </div>
 
      </form>
</center>
</div>
    <?php
     if(isset($_POST['submit'])){
    $con = mysqli_connect('localhost','root',"");
    mysqli_select_db($con,'employee');
    $empno=$_POST['empno'];
    $ename=$_POST['ename'];
    $bsalary=$_POST['bsalary'];
  
    $da=(0.80)*$bsalary;
   $hra=(0.15)*$bsalary;
   $ma=(0.12)*$bsalary;
  $insurance=(0.10)*$bsalary;
  $netsalary=$bsalary+$hra+$ma-$insurance;

    $sql_u = "SELECT * FROM emp WHERE empno='$empno'";
    $result = mysqli_query($con, $sql_u);

    if(mysqli_num_rows($result)){
      echo "<center><h1 class='invalid'>Data already exists</h1></center>";
    }
    else {
      $reg = "insert into emp(empno,ename,bsalary,da,hra,ma,insurance,netsalary) values ('$empno','$ename','$bsalary','$da','$hra','$ma','$insurance','$netsalary')";
      mysqli_query($con, $reg);
       $rslt = mysqli_query($con,"SELECT * FROM emp where empno='$empno'");
       while($row = mysqli_fetch_array($rslt))
          $empno = $row['empno'];
      echo "<center><table>
      <tr><td>Emp-No.</td><td>$empno</td></tr>
      <tr><td>Ename</td><td>$ename</td></tr>
      <tr><td>Bsalary</td><td>$bsalary</td></tr>
      
      </table></center>";

    }

     }
    ?>
</body>
</html>