
<?php
#連接資料庫步驟
#步驟一:建立資料庫連結 mysqli_connect()
$conn=mysqli_connect("db4free.net","immust","immustimmust","immust");
#步驟二:查詢資料庫 mysqli_query()
$result=mysqli_query($conn,"select * from user");
#步驟三:抓出資料 my sqli_fetch_arry
$row=mysqli_fetch_array($result);
echo $row["id"]." ".$row["pwd"]."<br>";
$row=mysqli_fetch_array($result);
echo $row["id"]." ".$row["pwd"]."<br>";
$row=mysqli_fetch_array($result);
echo $row["id"]." ".$row["pwd"]."<br>";
$row=mysqli_fetch_array($result);
echo $row["id"]." ".$row["pwd"]."<br>";
?>
