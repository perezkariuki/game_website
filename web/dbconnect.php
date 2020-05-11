<?php
    //Constants Declaration
    define("hostname", "localhost");
    define("hostuser", "root");
    define("hostpass", "");
    define("bd_name", "Daysons");

    //Connection to the database
    $conn = new mysqli(hostname, hostuser, hostpass, bd_name);

    //Verify connection
    if($conn->connect_error){
        die("Connection Failed: <br />" . $conn->connect_error);
    }else{
        print "Connection Successful";
    }
?>
