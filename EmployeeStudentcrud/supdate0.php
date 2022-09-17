<?php

//$setUsn = false;
$showAlert = false;
$showError = false;

//if($_SERVER["REQUEST_METHOD"] == "POST" && $setUsn != true)
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'connection1.php';
    $usn = $_POST["rollno"];

    $sql = "SELECT * FROM mark WHERE rollno='$usn'";
    $result = mysqli_query($connect, $sql);

    $oldUsn = $usn;
    $setUsn = true;

}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['updateSubmit']) && $_POST['updateSubmit']=="Submit")
{
    include 'connection1.php';
    $usn = $_POST["rollno"];
    $name = $_POST["sname"];
    $sub1 = $_POST["sub1"];
    $sub2 = $_POST["sub2"];
    $sub3 = $_POST["sub3"];
    $sub4 = $_POST["sub4"];
    $sub5 = $_POST["sub5"];
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
    $sql = "UPDATE mark SET sname='$name', sub1='$sub1', sub2='$sub2', sub3='$sub3', sub4='$sub4', sub5='$sub5' , total='$total' , avg='$avg' , class='$class'WHERE rollno='$usn'";
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




    

<div style="background-color: magenta; width:300px; height: 130px;" ><br>
    <div class="search-box-container">
        <div class="search-box">
            
            <center>
            <div class="header-text">Update Module</div><br>
            <form action="supdate0.php" method="post">
                <input required type="text" placeholder="Enter Rollno" name="rollno">
                <br><br>
            <button type="submit" name="result">Submit</button>
            </form>
</center>
        </div>
    </div>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["result"]))
        {   
    ?>

    <div>
        <form action="supdate0.php" method="post">
        <table class="middle">
            <thead>
                <td>USN</td>
                <td>Name</td>
                <td>Subject 1</td>
                <td>Subject 2</td>
                <td>Subject 3</td>
                <td>Subject 4</td>
                <td>Subject 5</td>
            </thead>
            <tbody>
                <tr>
                    <?php
                       /* while($row = mysqli_fetch_assoc($result))
                        {*/
                        $row = mysqli_fetch_assoc($result);

                    ?>  
                    <td id="usn"><input type="text" name="rollno" value="<?php echo $row['rollno'];?>" readonly></td>
                    <td id="name"><input type="text" name="sname" value="<?php echo $row['sname']?>"></td>
                    <td id="m1"><input type="number" name="sub1" value="<?php echo $row['sub1'];?>"></td>
                    <td id="m2"><input type="number" name="sub2" value="<?php echo $row['sub2'];?>"></td>
                    <td id="m3"><input type="number" name="sub3" value="<?php echo $row['sub3'];?>"></td>
                    <td id="m4"><input type="number" name="sub4" value="<?php echo $row['sub4'];?>"></td>
                    <td id="m5"><input type="number" name="sub5" value="<?php echo $row['sub5'];?>"></td>
                   
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