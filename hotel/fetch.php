<?php

$connect = mysqli_connect("localhost", "root", "", "hotelmate");
$request = mysqli_real_escape_string($connect, $_POST["query"]);
$query = "
 SELECT * FROM cities WHERE name LIKE '%".$request."%' LIMIT 10
";

$result = mysqli_query($connect, $query);

$data = array();

if(mysqli_num_rows($result) > 0)
{
 while($row = mysqli_fetch_assoc($result))
 {
  $data[] = $row["name"];
 }
 echo json_encode($data);
}

?>