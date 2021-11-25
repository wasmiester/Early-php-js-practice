<?php

        echo "Trying to connect <br>" ;
        $con=mysqli_connect("127.0.0.1","s_user40","s_user40","sampdb");

// Check connection
        if (mysqli_connect_errno()){
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
        } else {
                echo "Connected <br>" ;
                $s_id = $_POST["id"];
                $sql = "Select last_name, first_name, birth, death from president";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                        echo "<tr><td>" . $row['last_name'] . "</td><td>" . $row['first_name'];
                        echo "</td><td>" . $row['birth'] . " </td><td>" . $row['death'] . "</td></tr>";
                }
                mysqli_close($con);
        }
?>
