<html>
    <body>
        <?php
            $total = 0;
            for($i = 1;$i <= 10;$i++){
                $total = $total + $i;
                echo $i . "のとき" . $total . "<br>";
                if($total > 20){
                    break;
                }
            }
        ?>
    </body>
</html>
