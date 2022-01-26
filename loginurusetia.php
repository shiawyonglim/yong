<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="index.css" media="screen">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>  
    <?php
        $con=mysqli_connect("localhost","root","");
        if($con){
            echo"successful ";
        }
        else{
            echo"connet error";
        }
        $db=mysqli_select_db($con,"hello");
        if($db){
            echo"database exist";
        }
        else{
            echo" no database";
        }
        
    ?>
    <title>urusetia</title>
    <h1>Login Page untuk urursetia</h1>

<head>

<body>
    <div class="header">
    </div>
    <div class="navigation">    
    </div>
    <div class="content">
        <form action="action_page.php" method="POST">
    </div>

    <div class="container">
        <label><b>Idurusetia</b></label>
        <input type="number" placeholder="Id urusetia" name="Idurusetia" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="password" name="PassUs" required>

        <button type="submit" name="submit">Login</button>
        <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <a href="loginpelajar.php"><button type="button" class="cancelbtn">pelajar?</button></a>
        <a href="loginjuri.php"><button type="button" class="cancelbtn">juri?</button></a>
        <span class="forget">Forgot <a href="troll.php">password?</a></span>
        <a class="new" href="newacc.php">new account</a>
  </div>
</form>
<?php
if(isset($_POST['submit'])){
    $query=mysqli_query($con,"SELECT * FROM urusetia WHERE Idurusetia='$_POST[Idurusetia] and PassUs='[PassUs]' ");
    $row=mysqli_fetch_array($query);

    if($row['Idurusetia'] == $_POST['Idurusetia']){

        if($row['PassUs'] == $_POST['PassUs']){
            echo "<script>alert('sucessful login');
            window.location.href='homeurusetia.php';</script>";        
        }
        else{
            echo"wrong password";
        }
    }
    else{
        echo"username not exist";
    }
}


?>
    </div>
</body>

</html>
