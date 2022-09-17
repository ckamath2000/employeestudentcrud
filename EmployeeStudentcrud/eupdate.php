<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style2.css">
    </head>
<?php

//$setUsn = false;
$showAlert = false;
$showError = false;

//if($_SERVER["REQUEST_METHOD"] == "POST" && $setUsn != true)
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'connection2.php';
    $empno = $_POST["empno"];

    $sql = "SELECT * FROM emp WHERE empno='$emp'";
    $result = mysqli_query($connect, $sql);

    $oldUsn = $empno;
    $setUsn = true;

}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['updateSubmit']) && $_POST['updateSubmit']=="Submit")
{
    include 'connection2.php';
    $empno = $_POST["empno"];
    $ename = $_POST["ename"];
    $bsalary = $_POST["bsalary"];
    $da=(0.80)*$bsalary;
   $hra=(0.15)*$bsalary;
   $ma=(0.12)*$bsalary;
  $insurance=(0.10)*$bsalary;
  $netsalary=$bsalary+$hra+$ma-$insurance;

    $sql = "UPDATE emp SET ename='$ename', bsalary='$bsalary', da='$da', hra='$hra', ma='$ma', insurance='$insurance' , net='$net' WHERE empno='$empno'";
    $resultUpdate = mysqli_query($connect, $sql);

    if($resultUpdate)
    {
        $showAlert = true;
        /*$sql = "SELECT * FROM Student WHERE usn='$usn'";
        $result = mysqli_query($conn, $sql);*/
        
    }
    else
    {
        $showError = "Update failed";
    }
}

?>




    


   
            
            <center>
                <div class="container">
    <div class="form">
            <h1><i> Update</i></h1>
            
            <form class="signUp" action="eupdate.php" method="POST">
        <div class="formGroup">

         <input required type="text" placeholder="Enter Empno" name="rollno">
   <br><br>
        </div>
        
        
        <br><br>
        <div class="formGroup">
          <button type="submit" class="btn2" name="result" value="submit">Submit</button>
<a href="employee1.php"><button type="button" class="btn2">Back</button></a><br><br>
        </div>
 
</center>
        </div>
    </div>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["result"]))
        {   
    ?>

    <div>
        <form action="eupdate.php" method="post">
        <table class="middle">
            <thead>
                <td>Empno</td>
                <td>Empname</td>
                <td>Bsalary</td>
                
            </thead>
            <tbody>
                <tr>
                    <?php
                       /* while($row = mysqli_fetch_assoc($result))
                        {*/
                        $row = mysqli_fetch_assoc($result);

                    ?>  
                    <td id="empno"><input type="text" name="empno" value="<?php echo $row['empno'];?>" readonly></td>
                    <td id="ename"><input type="text" name="ename" value="<?php echo $row['ename'];?>"></td>
                    <td id="bsalary"><input type="number" name="bsalary" value="<?php echo $row['bsalary'];?>"></td>
                   
                   
                    <?php
                      //  }
                    ?>
                </tr>
            </tbody>
        </table>
        <button type="submit" name="updateSubmit" value="Submit">Update</button>
        
        </form>
    </div>
   
</div>

    <?php
        }
    ?>



</body>
</html>    