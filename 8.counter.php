<?php
    session_start(); #啟用
    if (!isset($_SESSION["counter"]))#設定 counter = 1 之後每次再開或刷新這個頁面 → counter 就加 1

        $_SESSION["counter"]=1;
    else
        $_SESSION["counter"]++;

    echo "counter=".$_SESSION["counter"];#顯示目前的計數值
    echo "<br><a href=9.reset_counter.php>重置counter</a>"; #點了會跳去 9.reset_counter.php 用來重置計數器。
?>
