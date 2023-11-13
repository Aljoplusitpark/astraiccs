<?php
          include("connection/config.php");
            error_reporting(0);
            session_start();
   if(isset($_POST['submit']))
{
    $name = $_POST['content'];
    $dob = date('Y-m-d', strtotime($_POST['event_date']));

    $query = "INSERT INTO banner (content,event_date) VALUES ('$name','$dob')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Date values Inserted";
        header("Location: banner.php");
    }
    else
    {
        $_SESSION['status'] = "Date values Inserting Failed";
        header("Location: error.php");
    }
}
                    
        ?>