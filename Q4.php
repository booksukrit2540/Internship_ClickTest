<!DOCTYPE html>
<html>
    <head>
        <title>Question 4</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="get">
            <p>Input: <input type="text" name="num"></p>
            <p>ผลลัพธ์</p>
        </form>

        <?php
            $num = $_GET['num'];
            for($i=$num ; $i>0 ; $i--){
                for($j=$num-$i ; $j>0 ; $j--){
                    echo " &nbsp;&nbsp";
                }
                for($j=2*$i-1; $j>0; $j--)
                    echo ("&nbsp;"."*");
                echo "<br>";
            }
        ?>
    </body>
</html>
