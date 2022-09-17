<?php
          session_start();

          $con = mysqli_connect('localhost','root',"");
          mysqli_select_db($con, 'student');
        
        //   $result = mysqli_query($con, $sql_u);
         
          
           







        $mysqli = new mysqli("localhost", "root", "","student"); 


    
$query = "SELECT * FROM mark";
echo "<b><h1> <center>Report</center></h1></b> <br> <br>";





echo "<center>";
echo "<table id='table' border=1 style='background-color:#DCFFFB', 'width='50px' >
            <tr>";
     echo   '<tr> 
            <td> <font face="Arial">Rollno</font> </td> 
            <td> <font face="Arial">Sname</font> </td> 
            <td> <font face="Arial">Sub1</font> </td> 
            <td> <font face="Arial">Sub2</font> </td> 
            <td> <font face="Arial">Sub3</font> </td> 
            <td> <font face="Arial">Sub4</font> </td> 
            <td> <font face="Arial">Sub5</font> </td> 
            <td> <font face="Arial">Total</font> </td> 
            <td> <font face="Arial">Average</font> </td> 
            <td> <font face="Arial">Class</font> </td> 
        </tr>';
  
  if ($result = $mysqli->query($query)) {
      while ($row = $result->fetch_assoc()) {
          $field1name = $row["rollno"];
          $field2name = $row["sname"];
          $field3name = $row["sub1"];
          $field4name = $row["sub2"];
          $field5name = $row["sub3"]; 
          $field6name = $row["sub4"];
          $field7name = $row["sub5"];
          $field8name = $row["total"];
          $field9name = $row["avg"];
          $field10name = $row["class"]; 
  
          echo '<tr> 
                    <td>'.$field1name.'</td> 
                    <td>'.$field2name.'</td> 
                    <td>'.$field3name.'</td> 
                    <td>'.$field4name.'</td> 
                    <td>'.$field5name.'</td> 
                    <td>'.$field6name.'</td> 
                    <td>'.$field7name.'</td> 
                    <td>'.$field8name.'</td> 
                    <td>'.$field9name.'</td> 
                    <td>'.$field10name.'</td> 
                </tr>';
                echo" </center>";
      }
      $result->free();
  } 
  echo '<a href="student1.php"><input type="button" name="back" value="Back"></a>';
  ?>
