<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) { 
       $login=TRUE; #如果某一筆資料中的帳號 ($row["id"]) 和密碼 ($row["pwd"]) 跟使用者輸入的一樣，就設為登入成功
     }
   } 
   if ($login==TRUE) {
    session_start();
    $_SESSION["id"]=$_POST["id"]; #將帳號存進 $_SESSION["id"] 3 秒後跳轉到佈告欄管理頁 11.bulletin.php
    echo "登入成功"; 
    echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
   }
 
  else{
    echo "帳號/密碼 錯誤"; #如果登入失敗 顯示帳密錯誤 3 秒後跳轉回登入頁 2.login.html
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
  }
?>
