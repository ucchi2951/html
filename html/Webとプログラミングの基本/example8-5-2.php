<html>
<body>
<?php
    //コネクションを開く
    $link =mysqli_connect("localhost","sample","hoge","sample");
    //文字コード設定
    mysqli_set_charset($link,"utf8");
    
    //insert文を発行
    $sql = "INSERT INTO address (username, zip, address1, address2, tel)" . 
           " VALUES (" . 
           "'" . mysqli_real_escape_string($link, $_POST["username"]) . "'," . 
           "'" . mysqli_real_escape_string($link, $_POST["zip"]) . "'," .
           "'" . mysqli_real_escape_string($link, $_POST["address1"]) . "'," . 
           "'" . mysqli_real_escape_string($link, $_POST["address2"]) . "'," . 
           "'" . mysqli_real_escape_string($link, $_POST["tel"]) . "');";  
    //mysqli_query($link, "INSERT INTO address (username, zip, address1, address2, tel)" . "VALUES ('田中　次郎', '227-0062', '神奈川県', '横浜市青葉台1-2-3', '045-111-1111');");

    mysqli_query($link, $sql);

    //コネクションを閉じる
    mysqli_close($link);

    echo "レコードを追加しました";
    ?>  
</body>
</html>