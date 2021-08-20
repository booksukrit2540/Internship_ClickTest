<!DOCTYPE html>
<html>
    <head>
        <title>Question 5</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <form method="get">
            <p>input: <input type="text" name="num"></p>
            <p>ผลลัพธ์</p>
        </form>

        <?php
            error_reporting(0);
            
            $num = $_GET['num'];
            $n = 1;
            for($i=1 ; $i<=$num ; $i++){
                for($x=$num ; $x>=$i ; $x--){
                    echo "&nbsp;&nbsp;";
                }
                for($j=1; $j<=$i; $j++){
                    if($n!=10){
                        echo "&nbsp;".$n++."&nbsp;";
                    }
                    else{
                        echo "&nbsp;"."0"."&nbsp;";
                    }
                }
                echo "<br>";
            } 
        ?>
    </body>
</html>
