<!DOCTYPE html>
<html>
<head>
  <title></title>
 <link rel="stylesheet1" href="../css/stylesheet1.css"/>
<style>
input[type="text"],[type="number"]
{
text-align=centre;
}
label{
width:100px;
display:inline-block;
}
</style>
</head>
<body>

<center>
 <marquee direction="side" width="500px";> <h1>Mark Display</h1></marquee>
  <br>
 <div style="background-color: #b8e994; width:350px;">
<br>
<div class="forms"  >
    <form action="mark.php" method="POST" >
    
    <br><br>   
        
        rollno: <input type="number" name="rollno" class="text_box0"><br><br>
        sname: <input type="text" name="sname" class="text_box0"><br><br>
        sub1: <input type="number" name="sub1" class="text_box0"><br><br>
        sub2: <input type="number" name="sub2" class="text_box0"><br><br>
        sub3: <input type="number" name="sub3" class="text_box0"><br><br>
        sub4: <input type="number" name="sub4" class="text_box0"><br><br>
        sub5: <input type="number" name="sub5" class="text_box0"><br><br>
        
        <input type="submit" name="submit" class="submit-btn" style="margin-center: 50%;"><br><br>

</form>
</div>
</div>
</center>
</body>
</head>




<?php
$conn = mysqli_connect("localhost", "root", "", "student");
          
    // Check connection
    if($conn === false){
        die("ERROR: Could not connect. " 
            . mysqli_connect_error());
    }
      
    // Taking all 5 values from the form data(input)
    if(isset($_POST['submit'])){

    $rollno=  $_POST['rollno'];
    $sname = $_POST['sname'];
    $sub1=$_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
    $sub5 = $_POST['sub5'];
    
    
    
    
      
    // Performing insert query execution
    // here our table name is nominee
    
      $sql = "INSERT INTO mark(rollno,sname,sub1,sub2,sub3,sub4,sub5) VALUES (?,?,?,?,?,?,?)";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param('dsddddd',$rollno,$sname,$sub1,$sub2,$sub3,$sub4,$sub5); 
        if($stmt->execute())
        {
            
            $_SESSION['rollno']=$rollno;
            $_SESSION['sname']=$sname;
            $_SESSION['sub1']=$sub1;
            $_SESSION['sub2']=$sub2;
            $_SESSION['sub3']=$sub3;
            $_SESSION['sub4']=$sub4;
            $_SESSION['sub5']=$sub5;
         
            
            echo ("<script LANGUAGE='JavaScript'>window.alert('Mark  Details Added Sucessfully');
            window.location.href='student1.php';
            </script>"); 
                      




           
  

 }       
        
        else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
    }
    

   
  ?>
      