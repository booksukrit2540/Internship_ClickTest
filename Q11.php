<!DOCTYPE html>
<html>
    <head>
        <title>Question 11</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php

        function ascendingorder(){
            echo "input: "."<form method=post action=Q11.php>";
            for($i=0; $i<10; $i++){
                if($i!=9){
                    echo "<input type=text name=txt$i size=1 /> , ";
                }
                else echo "<input type=text name=txt$i size=1 /> ";
            }
                echo "<input type=submit value=Submit />";
            echo "</form>";
            $num = array();
            if(isset($_POST['txt0'])){
                for($i=0; $i<10; $i++){
                    $num[$i] = $_POST['txt'.$i];
                }
                sort($num);
                echo "ผลลัพธ์<br>";
                foreach($num as $result){
                    if($result != $num[9]){
                        echo $result . ", ";
                    }
                    else echo $result;
                }
            }
        }
        echo ascendingorder();
        ?>
    </body>
</html>
