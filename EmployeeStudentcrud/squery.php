
<html>
<style>
input[type="submit"],[type="reset"]
{
text-align=centre;
}
label{
width:100px;
display:inline-block;
}
table,tr,td,th{
    border-collapse:collapse;
    border:1px solid black;
    background-color:lightpink;
}
</style><center> 
   <div style="background-color:aquamarine; width:300px;">
  
    <form action="" method="post" class="form-control" style="height:200px;">
    <h1><i>Query</i></h1>
    Sname:  <input type="text" name="sname" >
   <br><br>

 <input type="submit" name="submit" value="Submit">
   

 <input type="reset" name="reset" >
   <br><br>


       
       <a href="student1.php"><input type="button" name="back" value="Back"></a>
    </form>
    </div>
</center>
<br>
<br>
    <?php
        include "connection1.php";

        if(isset($_POST['submit'])){
            $Name = $_POST['sname'];
            $firstChar = substr($Name,0,1);
            $sql = "SELECT * from mark WHERE sname LIKE '$firstChar%'";
            $sqlReult = mysqli_query($connect,$sql);
                if(mysqli_num_rows($sqlReult) > 0){?>
                    <table>
        <tr class="row">
            <th>Roll No</th>
            <th>Student Name</th>
            <th>Subject I</th>
            <th>Subject II</th>            
            <th>Subject III</th>
            <th>Subject IV</th>
            <th>Subject V</th>            
        </tr>
        <?php
                    while($row = mysqli_fetch_assoc($sqlReult)){?>
            <tr class="row">
                <td><?php echo $row['rollno'];?></td>
                <td><?php echo $row['sname'];?></td>
                <td><?php echo $row['sub1'];?></td>
                <td><?php echo $row['sub2'];?></td>
                <td><?php echo $row['sub3'];?></td>
                <td><?php echo $row['sub4'];?></td>
                <td><?php echo $row['sub5'];?></td>
            </tr>
           
    <?php
                        }
                    }
                    else{
                        $_SESSION['removeReport'] = "No Student have been added!!!";
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