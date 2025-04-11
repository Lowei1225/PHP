<?php

$conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
$result=mysqli_query($conn, "select * from bulletin");
echo "<table border=1><tr><td>布告欄編號</td><td>布告型態</td><td>標題</td><td>布告內容</td>"
while($row=mysqli_fetch_array($result)){
    echo $row["bid"];
    echo" ";
    echo $row["type"];
    echo" ";
    echo $row["title"];
    echo" ";
    echo $row["content"];
    echo" ";
    echo $row["time"];
    echo"<br>";
}
