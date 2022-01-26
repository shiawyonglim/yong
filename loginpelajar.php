<!DOCTYPE html>

<html>
<link rel="stylesheet" type="text/css" href="index.css">

<head>
    <?php
    $con=mysqli_connect("localhost","root","");
    if($con){
        echo"successful";
    }
    else{
        echo"connet error";
    }
    $db=mysqli_select_db($con,"hello");
    if($db){
        echo"database exist";
    }
    else{
        echo"error no database";
    }
    ?>

    <title>Pelajar</title>
    <h1>Login Page untutk pelajar</h1>
<head>
<body>
    <div class="header">
    </div>
    <div class="navigation">    
    </div>
    <div class="content">
        <form action="action_page.php" method="post">
    </div>

    <div class="container">
        <label><b>Idpelajar</b></label>
        <input type="number" placeholder="Id pelajar" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="password" required>

        <button onclick="document.location='homepelajar.php'">Login</button>
        <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <a href="loginurusetia.php"><button type="button" class="cancelbtn">urusetia?</button></a>
        <a href="loginjuri.php"><button type="button" class="cancelbtn">juri?</button></a>
        <span class="forget">Forgot <a href="troll.php">password?</a></span>
        <a class="new" href="newacc.php">new account</a>
  </div>
</form>
    </div>
</body>

</html>
