<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enquiry</title>
    <link href="assets/style.css" rel="stylesheet"> 
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <div class="page-wrapper">
        <div class="content">
        <h3>Student Details</h3>
        <br>
        <div class="add">
        <a href="add student.php">Add Student</a>
</div>
<br>
        <div class="col">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>EnquiryDate</th>
                <th>JoiningDate</th>
                <th>Status</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Place</th>
                <th>Course</th>
                <th>ForWhom</th>
                <th>Education</th>
                <th>EducationDetails</th>
                <th>Summary</th>
                <th>Reference</th>
                <th>Action</th>
</tr>
</thead>
<?php

include "header.php";
  include "connection.php";
        $sql = "SELECT * FROM `enquiry` where role=0";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
<tr>
<td><?php echo $row['id'] ?></td>
      <td><?php echo $row['edate'] ?></td>
      <td><?php echo $row['jdate'] ?></td>
      <td><?php echo $row['status'] ?></td>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['phone'] ?></td>
      <td><?php echo $row['place'] ?></td>
      <td><?php echo $row['course'] ?></td>
      <td><?php echo $row['forwhom'] ?></td>
      <td><?php echo $row['edu'] ?></td>
      <td><?php echo $row['edud'] ?></td>
      <td><?php echo $row['sum'] ?></td>
      <td><?php echo $row['ref'] ?></td>
      <td>   
           <a href="edit.php?id=<?php echo $row["id"] ?>"><i class='bx bx-edit'></i></a>
</td>
</tr>
<?php
    }
    ?>
 </table>
</div>
</div>
</div>

</body>
</html>