<?php
#mysqli_connect() 建立資料庫連結
$conn=mysqli_connect("db4free.net","immust","immustimmust","immust");
   #mysqli_query() 從資料庫查詢資料
$result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
$login=false;
while($row=mysqli_fetch_array($result)){
    if(($_POST["id"]==$row["id"])&&($_POST["pwd"]==$row["pwd"]))
        $login=true;
}
#若登入與資料庫帳密不符將慧登入失敗且重新登入，符合則會進入
if ($login==true)
    echo"登入成功";
else
    echo"登入失敗";

?>
