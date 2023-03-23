<?php
$con = mysqli_connect("localhost","root","","claimant-schema");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " .mysqli_connect_error();
  exit();
}

// Perform query
if ($result = mysqli_query($con, "SELECT * FROM claimant-details")) {
  echo "Returned rows are: " .mysqli_num_rows($result);
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($con);
?>

$sql="select * from `claimant-details`";
$query=Query($sql);
confirm($query);
$row=fetch_data($query);
echo $row['Email'];