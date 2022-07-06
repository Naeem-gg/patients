<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Record</title>
</head>
<body>
    <form method="post">
        <strong>Enter Blood reports</strong>
        <input type="text" name="blood"><br>
        <strong>Enter Temperature</strong>
        <input type="text" name="temp"><br>
        <strong>Enter Pressure</strong>
        <input type="text" name="pressure"><br>
        <strong>Enter Sugar</strong>
        <input type="text" name="sugar"><br>
        <!-- <strong>Enter Symptoms</strong> -->
        <br><br>
        <textarea name="symptoms" cols="30" rows="5">Enter Symptoms</textarea><br>
        <br><br>
        <textarea name="presc" cols="30" rows="5">Enter prescription</textarea>
        <br><br>
        <input type="submit" name="sub" value="Insert New Record">
    </form>
</body>
</html>
<?php
// echo "Insert new record";
if(isset($_POST['sub']))
{

    $servername="localhost";
    $username="naeem";
    $password="Navjivan";
    $db="patients";
    try 
    {
        $con= new mysqli($servername,$username,$password,$db);
        if($con->connect_error)
        {
            die("ERROR! while connecting $db ".$con->connect_error);
        }
        else
        {
                $q ="INSERT INTO `visits` (`pid`, `visit_count`, `blood`, `temp`, `pressure`, `sugar`, `symptoms`, `presc`, `date`) 
                VALUES ('1', '2', '{$_POST['blood']}','{$_POST['temp']}', '{$_POST['pressure']}', '{$_POST['sugar']}', '{$_POST['symptoms']}', '{$_POST['presc']}', CURRENT_TIMESTAMP);";          
                if(!$con->query($q))
                {
                    echo "Error in the query";
                }
                else
                {
                    echo "done";
                }
        }
    }
    catch (Exception $th) 
    {
        echo $th->getMessage();
    }
}
?>