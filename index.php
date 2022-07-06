<?php
if(isset($_POST['sub']))
{
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    if($user==='admin' && $pass==="doc")
    {
        header("location:patients.php");
    }
    else
    {
        echo "<script>if(confirm('Error!! plzz try again'))
        {
            window.location='index.html';
        }
        else
        {
            window.location='index.html';
        }
        </script>";
        // header("Location:index.html");
    }
}
?>