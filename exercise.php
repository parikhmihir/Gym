<?php
session_start();
  if(empty($_SESSION['user_info']))
  {
    echo "<script type='text/javascript'>alert('You must login before accessing exercises');</script>";
    header('location:login.php');
  }
?>
<html>
<head>
<title>Exercise wisely!</title>
<style>
*{
  color: red;
}
#t1, #t2{
  padding: 50px;
}
table{
  width: 100%;
}
button{
  border-radius: 8px;
  background-color: #008CBA;
  color: white;
  padding: 18px;
}
</style>
</head>
<body bgcolor="black">
  <?php include("header.php") ?>
  <h2 align="center">Choose your target muscle here!</h2>
<table align="center" border="1">
  <tr>
    <td align="center" id="t1">
      <h3>UPPER BODY</h3><br> 
        CHEST<br>
        SHOULDERS<br>
        BACK<br><br><br><br>
        <a href="upperbody.php"><button id="button1">TRY OUT SOME UPPER BODY EXERCISES</button>

      
    </td>
    <td align="center" id="t2">
      <h3>LOWER BODY</h3><br>
        QUADRICEPS<br>
        HAMSTRINGS<br>
        CALVES<br><br><br><br>
        <a href="lowerbody.php"><button id="button1">TRY OUT SOME LOWER BODY EXERCISES</button>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center" style="padding: 30px">CARDIO<br><br><br><br>
    <a href="cardio.php"><button id="button1">TRY OUT SOME CARDIO EXERCISES</button>
    </td>  
  </tr>
</table>
</body>
</html>

