<html>
<body>
    <?php
        $email = $_POST["email"];
        if(preg_match("/^([a-zA-Z0-9\._\-]+)@([a-zA-Z0-9_\-]+\.[a-zA-Z0-9\._\-]+)$/",$email,$matches)){
            $username = $matches[1];
            $domain = $matches[2];
            echo "ユーザ名：" . $username . "<br>";
            echo "ドメイン名：" . $domain . "<br>";
        }else{
            echo "書式が正しくありません";
        }
    ?>
</body>
</html>
