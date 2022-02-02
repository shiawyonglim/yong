<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="index.css" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
        <title>homeurusetia</title>
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
    </head>
    <body>
        <table class="table">
            <tr>
                <th></th>
                <td></td>
            </tr>
            <tr>
                <th></th>
                <td></td>
            </tr>
        </table>
            <?php
                $query = mysqli_query($con,"SELECT * from urusetia ")
            
            ?>
    </body>
</html>

