<html>
<body>
    <?php
        $a = array("リンゴ","バナナ","みかん","ジャガイモ","トマト");
        echo "<table border='1'>\n";
        for($i = 0;$i < count($a);$i++){
            echo "<tr><td>" . $a[$i] . "</tr></td>\n";
        }
        echo "</table>";
    ?>
</body>
</html>