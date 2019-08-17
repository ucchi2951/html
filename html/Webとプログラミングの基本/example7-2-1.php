<html>
<body>
    <?php
    //セッションを開始する。
        session_start();
        if(!isset($_POST["order"])){
            //setcookie("order","",time()-3600);
            unset($_SESSION["order"]);
        }else{
            $ordervalue = $_POST["order"];
            $_SESSION["order"] = $ordervalue;
            //setcookie("order",$ordervalue);
        }
    ?>
    商品を設定しました。<br>
    <a href ="example7-2-2.php">決済ページへ</a>
</body>
</html>