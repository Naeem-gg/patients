<?php
// echo "Fetch all records here for";
// print_r($_GET);
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
            $pid=$_GET['pid'];
            $q = "select * from visits where pid=$pid";
            $q1 = "select * from patients where pid=$pid";
            if($r = $con->query($q))
            {
                // print_r($r);
                if($r->num_rows>0)
                {
                    // echo "ready to fetch data";
                    if($r1 = $con->query($q1))
                    {   $row1 = $r1->fetch_assoc(); 
                        echo "<h1>Patients name : {$row1['name']} </h1>";

                    }
                    echo "<table border=1 cellspacing=0 cellpadding=10 style='margin:0px auto; text-align:center; margin-top:50px; width:80%; font-family:Arial;'>";
                    echo "<tr><th>Patient ID</th><th>Visit Count</th><th>Blood</th><th>Temperature</th><th>pressure</th><th>Sugar</th><th>Symptoms</th><th>Prescription</th><th>Visit date</th></tr>";
                    while($row = $r->fetch_assoc())
                    {
                        echo "<tr>
                        
                         
                            <td>{$row['pid']}</td>
                            <td>{$row['visit_count']}</td>
                            <td>{$row['blood']}</td>
                            <td>{$row['temp']}</td>
                            <td>{$row['pressure']}</td>
                            <td>{$row['sugar']}</td>
                            <td>{$row['symptoms']}</td>
                            <td>{$row['presc']}</td>
                            <td>{$row['date']}</td>

                            </tr>";
                    }
                    echo "</table><br><br>
                    <a href=patients.php>Go back</a>";
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