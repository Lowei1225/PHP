<?php

$conn=mysqli_connect("db4free.net","immust","immustimmust","immust");
$result=mysqli_query($conn, "select * from user");
$login=false;
while($row=mysqli_fetch_array($result)){
    if(($_POST["id"]==$row["id"])&&($_POST["pwd"]==$row["pwd"]))
        $login=true;
}

if ($login==true)
    echo"登入成功";
else
    echo"登入失敗";

?>
