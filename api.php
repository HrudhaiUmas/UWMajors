<?php
    $host = '127.0.0.1';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'uwmajors';

    $con = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
    $response = array();
    if ($con) {
        $sql = "select * from crowdsource_info";
        $result = mysqli_query($con, $sql);
        if ($result) {
            header("Content-Type: JSON");
            $i=0;
            while ($row = mysqli_fetch_assoc($result)) {
                $response[$i]["majors"] = $row["majors"];
                $response[$i]["admitted1"] = $row["admitted1"];
                $response[$i]["dualm"] = $row["dualm"];
                $response[$i]["majors2"] = $row["majors2"];
                $response[$i]["wsa"] = $row["wsa"];
                $response[$i]["standing"] = $row["standing"];
                $response[$i]["resident"] = $row["resident"];
                $response[$i]["firstgen"] = $row["firstgen"];
                $response[$i]["running"] = $row["running"];
                $response[$i]["transfer"] = $row["transfer"];
                $response[$i]["transcredit"] = $row["transcredit"];
                $response[$i]["internship"] = $row["internship"];
                $response[$i]["work"] = $row["work"];
                $response[$i]["gpa"] = $row["gpa"];
                $response[$i]["coursestaken"] = $row["coursestaken"];
                $response[$i]["firstapp"] = $row["firstapp"];
                $response[$i]["message"] = $row["message"];
                $i++;
            }
            echo json_encode($response, JSON_PRETTY_PRINT);
        }
    } else {
        echo "DataBase connection Failed";
    }
?>