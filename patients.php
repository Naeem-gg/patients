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
    
</body>
</html>
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
                    echo "<form method='POST' action='newRecords.php'>";
                    echo "<table border=1 cellspacing=0 cellpadding=10 style='margin:0px auto; text-align:center; margin-top:50px; width:80%; font-family:Arial;'>";
                    echo "<tr><th>Patient ID</th><th>Name</th><th>Visits</th><th>Show All records</th><th>Insert new visit</th><th>Date</th></tr>";
                    while($row = $r->fetch_assoc())
                    {
                            echo "<tr>
                            <td>{$row['pid']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['visits']}</td>
                            <td><button class='button-62' role='button'>All records</button></td>
                            <td><!-- HTML !-->
                            <button type='submit' class='button-62' role='button' name='new_record'>New record</button>
                            
                            
                            </td>
                            <td>{$row['date']}</td>

                            </tr>";
                    }
                    echo "</table>";
                    echo "</form>";
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
