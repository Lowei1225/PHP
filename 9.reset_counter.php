<?php
    session_start();
    unset($_SESSION["counter"]); #使用者在 8.counter.php 頁面上點重置 開啟此檔 刪除$_SESSION["counter"]
    echo "counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>"; #2秒後自動跳回去 計數器重新開始

?>
