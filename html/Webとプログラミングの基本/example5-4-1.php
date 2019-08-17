<html>
<body>
    <?php
        if(isset($_POST["val1"]) && isset($_POST["val2"])){
            $val1 = intval($_POST["val1"]);
            $val2 = intval($_POST["val2"]);
            if(($val1 >= 1) && ($val1 <= 10)){
                $result = $val1 + $val2;
                echo $val1 . "+" . $val2 . "=" . $result;
            }else{
                echo "1つ目の数字は、１から１０までを入力してください。";
            }
        }else{
            echo "値を入力してください。<br>";
            echo "<a href = 'example5-4-1.html'>入力フォームへ</a>";
        }
    ?>
</body>
</html>
