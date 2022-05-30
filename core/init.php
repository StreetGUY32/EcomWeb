<?php

    $db = mysqli_connect('localhost', 'root','','ecom');
    
    if (mysqli_connect_errno())
    {
        echo "Error in database connection.".mysqli_connect_error();
        die;
    }

?>