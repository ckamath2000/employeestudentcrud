<body bgcolor="yellow">
<?php
          session_start();

          $con = mysqli_connect('localhost','root',"");
          mysqli_select_db($con, 'employee');
        
        //   $result = mysqli_query($con, $sql_u);
         
          
           







        $mysqli = new mysqli("localhost", "root", "","employee"); 


    
$query = "SELECT * FROM emp";
echo "<b><h1> <center>Report</center></h1></b> <br> <br>";





echo "<center>";
echo "<table id='table' border=2 style='background-color:#669900', 'width='100px' >
            <tr>";
     echo   '<tr> 
            <td> <font face="Times New Roman" color="white">Empno</font> </td> 
            <td> <font face="Times New Roman" color="white">Ename</font> </td> 
            <td> <font face="Times New Roman"color="white">Bsalary</font> </td> 
            <td> <font face="Times New Roman" color="white">DA</font> </td> 
            <td> <font face="Times New Roman" color="white">HRA</font> </td> 
            <td> <font face="Times New Roman" color="white">MA</font> </td> 
            <td> <font face="Times New Roman" color="white">INSURANCE</font> </td> 
            <td> <font face="Times New Roman" color="white">NETSALARY</font> </td> 
           
        </tr>';
  
  if ($result = $mysqli->query($query)) {
      while ($row = $result->fetch_assoc()) {
          $field1name = $row["empno"];
          $field2name = $row["ename"];
          $field3name = $row["bsalary"];
          $field4name = $row["da"];
          $field5name = $row["hra"]; 
          $field6name = $row["ma"];
          $field7name = $row["insurance"];
          $field8name = $row["netsalary"];
        
          echo '<tr> 
                    <td>'.$field1name.'</td> 
                    <td>'.$field2name.'</td> 
                    <td>'.$field3name.'</td> 
                    <td>'.$field4name.'</td> 
                    <td>'.$field5name.'</td> 
                    <td>'.$field6name.'</td> 
                    <td>'.$field7name.'</td> 
                    <td>'.$field8name.'</td> 
                  
                </tr>';
                echo" </center>";
            
      }
      $result->free();
     
  } 
  echo '<a href="employee1.php"><input type="button" name="back" value="Back"></a>';
  ?>
</body>
