<?php

include "header.php";
include "connection.php";

if (isset($_POST["submit"])) {
    $edate = $_POST['edate'];
    $jdate = $_POST['jdate'];
    $status = $_POST['status'];
    $name = $_POST['name'];
   
    $phone = $_POST['phone'];
    $place = $_POST['place'];
    $course = $_POST['course'];
    $forwhom = $_POST['forwhom'];
    $edu = $_POST['edu'];
    $edud = $_POST['edud'];
    $sum = $_POST['sum'];
    $ref = $_POST['ref'];

    $sql = "INSERT INTO `enquiry`(`id`, `edate`, `jdate`, `status`, `name`, `phone`, `place`, `course`, `forwhom`, `edu`, `edud`, `sum`, `ref`) VALUES ( NULL, '$edate', '$jdate', '$status', '$name', '$phone', '$place', '$course', '$forwhom', '$edu', '$edud', '$sum', '$ref')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: student.php?msg=New record created successfully");
     } else {
        echo "Failed: " . mysqli_error($conn);
     }
}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href="assets/style.css" rel="stylesheet">
</head>

<body>
<div class="page-wrapper">
<div class="content">
    <div class="table">
        <form action="" method="post">
            <label>EnquiryDate</label>
            <input type="date" name="edate">
            <label>JoiningDate</label>
            <input type="date" name="jdate">
             <label>Status</label>
             <select name="status">
             <option>Select Status</option>
             <option>Joinied</option>
             <option>Follow-up</option>
             <option>Pending</option>
             <option>Closed</option>
             </select>
            <label>Name</label>
            <input type="text" name="name"> 
            <label>Phone</label>
            <input type="tel" name="phone"> 
            <label>Place</label>
            <input type="text" name="place"> 
            <label>Course</label>
            <input type="text" name="course"> 
            <label>ForWhom</label>
            <input type="text" name="forwhom">
             <label>Education</label>
             <select name="edu">
             <option>Select Education</option>
             <option>Grade 1</option>
             <option>Grade 2</option>
             <option>Grade 3</option>
             <option>Grade 4</option>
             <option>Grade 5</option>
             <option>Grade 6</option>
             <option>Grade 7</option>
             <option>Grade 8</option>
             <option>Grade 9</option>
             <option>Grade 10</option>
             <option>Grade 11</option>
             <option>Grade 12</option>
             <option>Bachelor Degree</option>
             <option>Master Degree</option>
             <option>Working Professional</option>
             <option>Others</option>
</select>
             <label>EducationDetails</label>
            <input type="text" name="edud">
            <label>Summary</label>
            <input type="text" name="sum">
            <label>Reference</label>
            <input type="text" name="ref">
            <button type="submit" name="submit">Add Student</button>
            <a href="student.php" class="cancel">Cancel</a>

</form>
</div>
</div>
</div>
</body>
</html>