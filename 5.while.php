<?php

$conn=mysqli_connect("db4free.net","immust","immustimmust","immust");
$result=mysqli_query($conn, "select * from user");
#mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
while ($row=mysqli_fetch_array($result)) {
  echo $row["id"]." ".$row["pwd"]."<br>";
} 
?>
