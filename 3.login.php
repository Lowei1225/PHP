<?php
if (($_POST["id"]=="jack") && ($_POST["pwd"]=="jack123"))
    echo"登入成功";
else                    #對應2.login.html，若輸入正確能直接進入
    echo"帳密錯誤";
?>
