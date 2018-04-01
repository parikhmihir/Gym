<html>
<head>
  <title></title>
<style type="text/css"> 
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 30px 40px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
li a:active{
  background-color: #fff;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#exercise").click(function(){
        alert("You must login to access our exercises.");
    });
});
</script>
</head>
<body>
  <ul>
  <li><img src="images/logo1.jpg" height="100" width="100"></img></li>
  <li><a href="index.php">HOME</a></li>
  <li><a href="aboutus.php">ABOUT US</a></li>
  <li><a href="login.php" id="exercise">EXERCISES</a></li>
  <li><a href=''>FITNESS ARTICLES</a></li>
  <li><a href="">CONTACT US</a></li>
</ul>
</body>
</html>