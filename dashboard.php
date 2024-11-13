<?php

include "header.php";
include 'connection.php';

$customerCountQuery = "SELECT COUNT(*) AS customer_count FROM enquiry where role=0";
$result = $conn->query($customerCountQuery);
$customerCount = $result->fetch_assoc()['customer_count'];

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="assets/style.css" rel="stylesheet"> 
</head>

<body>
<div class="page-wrapper">
            <div class="content">
              <div class="card">
              <p><i class='bx bxs-user'></i><?php echo $customerCount; ?></p>
								<span>Student</span>
              </div>
							</div>
              </div>
</body>
</html>