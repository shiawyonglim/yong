<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="index.css" media="screen">

<head>
    <title>juri</title>
    <h1>Login Page untuk juri</h1>

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
        <label><b>Idjuri</b></label>
        <input type="number" placeholder="Id juri" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="password" required>

        <button onclick="document.location='homeurusetia.php'">Login</button>
        <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <a href="loginpelajar.php"><button type="button" class="cancelbtn">pelajar?</button></a>
        <a href="loginjuri.php"><button type="button" class="cancelbtn">urusetia?</button></a>
        <span class="forget">Forgot <a href="troll.php">password?</a></span>
        <a class="new" href="newacc.php">new account</a>
  </div>
</form>
    </div>
</body>

</html>
