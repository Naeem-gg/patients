<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/button.css">
    <title>Patients</title>
</head>
<body>
    
<?php
// echo "<h1>Welcome</h1>";
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
            // echo "ready to fetch";
            $q = "select * from patients";
            
            if($r = $con->query($q))
            {
                // print_r($r);
                if($r->num_rows>0)
                {
                    // echo "ready to fetch data";
                    echo "<table border=1 cellspacing=0 cellpadding=10 style='margin:0px auto; text-align:center; margin-top:50px; width:80%; font-family:Arial;'>";
                    echo "<tr><th>Patient ID</th><th>Name</th><th>Visits</th><th>Date</th><th>Show All records</th><th>New visit</th></tr>";
                    while($row = $r->fetch_assoc())
                    {
                        echo "<tr>
                        <form method='POST' action='allRec.php?pid={$row['pid']}'>
                         
                            <td>{$row['pid']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['visits']}</td>
                            <td>{$row['date']}</td>
                            <td><button class='button-62' type='submit'>All records</button></td>
                            </form>
                            
                            
                            
                            
                            <td>
                            <form method='POST' action='newRecords.php'>
                            <button type='submit' class='button-62' role='button' name='new_record'>New record</button>
                            </form>
                            </td>
                            </tr>";
                    }
                    echo "</table>";
                }
                else
                {
                    echo "no data to retrieve";
                }
            }
            else
            {
                echo "Error while executing the query";
            }
        }
    }
     catch (Exception $th) 
     {
        echo $th->getMessage();
    }
?>
</body>
</html>