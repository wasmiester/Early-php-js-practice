<?php

        echo "Trying to connect <br>" ;
        $con=mysqli_connect("127.0.0.1","s_user40","s_user40","sampdb");

// Check connection
        if (mysqli_connect_errno()){
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
        } else {
                echo "Connected <br>" ;
                $s_id = $_POST["id"];
                $sql = "Select * from student where student_id  >= " . $s_id;
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result)){
                        echo "<tr><td>" . $row['student_id'] . "</td><td>" . $row['name'];
                        echo "</td></tr>";
                }

                mysqli_close($con);
        }
?>
