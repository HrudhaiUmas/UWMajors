<?php
    $majors = isset($_POST["majors"]) ? $_POST["majors"] : "";
    $admitted1 = isset($_POST["admitted1"]) ? $_POST["admitted1"] : "";
    $dualm = isset($_POST["dual"]) ? $_POST["dual"] : "";
    $majors2 = isset($_POST["majors2"]) ? $_POST["majors2"] : "";
    $wsa = isset($_POST["Wsa"]) ? filter_input(INPUT_POST, "Wsa", FILTER_VALIDATE_FLOAT) : null;
    $standing = isset($_POST["standing"]) ? $_POST["standing"] : "";
    $resident = isset($_POST["resident"]) ? $_POST["resident"] : "";
    $firstgen = isset($_POST["firstgen"]) ? $_POST["firstgen"] : "";
    $running = isset($_POST["running"]) ? $_POST["running"] : "";
    $transfer = isset($_POST["transfer"]) ? $_POST["transfer"] : "";
    $transcredit = isset($_POST["transcredit"]) ? $_POST["transcredit"] : "";
    $internship = isset($_POST["internship"]) ? $_POST["internship"] : "";
    $work = isset($_POST["work"]) ? $_POST["work"] : "";
    $gpa = isset($_POST["gpa"]) ? $_POST["gpa"] : "";
    $coursestaken = isset($_POST["coursestaken"]) ? filter_input(INPUT_POST, "coursestaken", FILTER_VALIDATE_INT) : null;
    $firstapp = isset($_POST["firstapp"]) ? $_POST["firstapp"] : "";
    $message = isset($_POST["message"]) ? $_POST["message"] : "";


    $host = '127.0.0.1';
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'uwmajors';

   // Create connection 
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection Error: " . $conn->connect_error);
    } else {
        $sql = "INSERT INTO crowdsource_info (majors, admitted1, dualm, majors2, Wsa, standing, resident, firstgen, running, transfer, transcredit, internship, work, gpa, coursestaken, firstapp, message)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssdssssssssisss", $majors, $admitted1, $dualm, $majors2, $wsa, $standing, $resident, $firstgen, $running, $transfer, $transcredit, $internship, $work, $gpa, $coursestaken, $firstapp, $message);


        if ($stmt->execute()) {
            echo '<p>New record is inserted successfully</p>';
            echo '<button onclick="window.location.href=\'index.html\'">Go back to home page</button>';

        } else {
            echo "Error: " . $sql . "<br>" . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
?>