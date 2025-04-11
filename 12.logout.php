<?php
    session_start(); #開啟
    unset($_SESSION["id"]); #清除登入資訊
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";  #3秒後自動跳轉 到 2.login.html 登入頁面

?>
