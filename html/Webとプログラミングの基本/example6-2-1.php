<html>
<body>
    <?php
        $yubin = $_POST["yubin"];
        if(preg_match("/^\d{3}\-?\d{4}$/",$yubin)){
            echo "正しい書式です。";
        }else{
            echo "書式が正しくありません。";
        }
    ?>
</body>
</html>
