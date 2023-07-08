<?php
        // Connect to MySQL server
        $servername = "localhost";
        $username = "root";
        $password = "usbw"; 
        $dbname = "geomano";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $query = "SET NAMES utf8";
        mysqli_query($conn, $query); 

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

?>