<html>
<body>
    <?php
        $h = array(
            "apple" => "りんご",
            "banana" => "バナナ",
            "orange" => "ミカン",
            "potato" => "じゃがいも",
            "tomato" => "トマト"
        );

        $key = $_POST["english"];
        if(array_key_exists($key,$h)){
            echo $h[$key];
        }else{
            echo $key . "は登録されていません";
        }
    ?>
</body>
</html>
