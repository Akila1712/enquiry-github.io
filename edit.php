<?php

include "header.php";
include "connection.php";
$id = $_GET["id"];


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

    $sql = " UPDATE `enquiry` SET `edate`='$edate',`jdate`='$jdate',`status`='$status',`name`='$name',`phone`='$phone',`place`='$place',`course`='$course',`forwhom`='$forwhom',`edu`='$edu',`edud`='$edud',`sum`='$sum',`ref`='$ref' WHERE id = $id";
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
<?php
    $sql = "SELECT * FROM `enquiry` WHERE  id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="table">
        <form action="" method="post">
            <label>EnquiryDate</label>
            <input type="date" name="edate" value="<?php echo $row['edate'] ?>">
            <label>JoiningDate</label>
            <input type="date" name="jdate" value="<?php echo $row['jdate'] ?>">
             <label>Status</label>
             <select name="status" value="<?php echo $row['status'] ?>">
             <option>Select Status</option>
             <option>Joinied</option>
             <option>Follow-up</option>
             <option>Pending</option>
             <option>Closed</option>
             </select>
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $row['name'] ?>">  
            <label>Phone</label>
            <input type="tel" name="phone" value="<?php echo $row['phone'] ?>"> 
            <label>Place</label>
            <input type="text" name="place" value="<?php echo $row['place'] ?>"> 
            <label>Course</label>
            <input type="text" name="course" value="<?php echo $row['course'] ?>"> 
            <label>ForWhom</label>
            <input type="text" name="forwhom" value="<?php echo $row['forwhom'] ?>">
             <label>Education</label>
             <select name="edu" value="<?php echo $row['edu'] ?>">
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
             <option>Master  Degree</option>
             <option>Working Professional</option>
             <option>Others</option>
</select>
             <label>EducationDetails</label>
            <input type="text" name="edud" value="<?php echo $row['edud'] ?>">
            <label>Summary</label>
            <input type="text" name="sum" value="<?php echo $row['sum'] ?>">
            <label>Reference</label>
            <input type="text" name="ref" value="<?php echo $row['ref'] ?>">
            <button type="submit" name="submit">Update</button>
            <a href="dashboard.php" class="cancel">Cancel</a>

</form>
</div>
</div>
</div>
</body>
</html>