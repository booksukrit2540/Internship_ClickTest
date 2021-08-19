<!DOCTYPE html>
<html>
    <head>
        <title>Question 10</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="get">
            <p>Input: <input type="text" name="num"></p>
            <p>ผลลัพธ์</p>
        </form>

        <?php
            $num = $_GET['num'];
            for($i=1 ; $i<=$num ; $i++){
                for ($j=$num ; $j>=$i ; $j--){
                    echo "&nbsp;&nbsp;";
                }
                    for ($x=1 ; $x<$i ; $x++){
                         echo "*";
                }
                    for ($y=1 ; $y<=$i ; $y++){
                         echo "*";
                }
                 echo "<br>";
            }
        ?>
    </body>
</html>
