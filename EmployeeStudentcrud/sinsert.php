<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><center>
<div style="background-color: aqua; width:300px;">

<br><h1>Insert the values</h1>
<form method="POST" action="sinsert.php">

Rollno:  <input type="text" name="rollno"  required >
   <br><br>

Sname: <input type="text" name="sname"  required>
   <br><br>

Enter Subject1  Mark  : <input type="number" name="sub1"  min="0" max="100" required>
   <br><br>
   Enter Subject2  Mark  :  <input type="number" name="sub2" min="0" max="100" required>
   <br><br>

   Enter Subject3  Mark : <input type="number" name="sub3" min="0" max="100" required>
   <br><br>

   Enter Subject4  Mark    : <input type="number" name="sub4" min="0" max="100" required >
   <br><br>
   Enter Subject5  Mark : <input type="number" name="sub5" min="0" max="100" required>
   <br><br>

<input type="submit" name="submit" value="Submit">
<a href="student1.php"><input type="button" name="back" value="Back"></a>
</form>
</br><br><br>
</center>
</div>
    <?php
     if(isset($_POST['submit'])){
    $con = mysqli_connect('localhost','root',"");
    mysqli_select_db($con,'student');
    $rollno=$_POST['rollno'];
    $sname=$_POST['sname'];
    $sub1=$_POST['sub1'];
    $sub2=$_POST['sub2'];
    $sub3=$_POST['sub3'];
    $sub4=$_POST['sub4'];
    $sub5=$_POST['sub5'];
    $total=$sub1+$sub2+$sub3+$sub4+$sub5;
    $avg=$total/5;
    if($avg>=80){
      $class="DISTINCTION";
    }
    else if($avg>=60){
     $class="FIRST CLASS";
   }
   else if($avg>=50){
     $class="SECOND CLASS";
   }
   else{
     $class="FAIL";
   }



    $sql_u = "SELECT * FROM mark WHERE rollno='$rollno'";
    $result = mysqli_query($con, $sql_u);

    if(mysqli_num_rows($result)){
      echo "Data already exists";
    }
    else {
      $reg = "insert into mark(rollno,sname,sub1,sub2,sub3,sub4,sub5,total,avg,class) values ('$rollno','$sname','$sub1','$sub2','$sub3','$sub4','$sub5','$total','$avg','$class')";
      mysqli_query($con, $reg);
       $rslt = mysqli_query($con,"SELECT * FROM mark where rollno='$rollno'");
       while($row = mysqli_fetch_array($rslt))
          $id = $row['rollno'];
      echo " <br><center><table border=1>
      <tr><td>Roll No.</td><td>$rollno</td></tr>
      <tr><td>Name</td><td>$sname</td></tr>
      <tr><td>Sub1</td><td>$sub1</td></tr>
      <tr><td>Sub2</td><td>$sub2</td></tr>
      <tr><td>Sub3</td><td>$sub3</td></tr>
      <tr><td>Sub4</td><td>$sub4</td></tr>
      <tr><td>Sub5</td><td>$sub5</td></tr>
      </table></center>";
    }

     }
    ?>
</body>
</html>