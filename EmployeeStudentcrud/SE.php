<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" >
</head>
<style>
.button {
  /* padding: 15px 25px; */
    background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
marquee{
    font-size:34px;
    background-color: black;
    height:40px;
    color:white;

}
.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.background
{	background:url("17.jpg");
	background-size: 100%;
	background-repeat: no-repeat;
	
}

    </style>


<body class="background">
    <center>
        <marquee behavior="alternate">Student and Employee Management</marquee>
    <br> <br> <br> <br> <br> <br> <br> <br>
  
<a href="student1.php"><button style="padding:30px 38px;" class="button">Student</button></a> <br> <br>
 
  
<a href="employee1.php"><button style="padding:30px 28px;" class="button">Employee</button></a>

</center>




    
</body>
</html>