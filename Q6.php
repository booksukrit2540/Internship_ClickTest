<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 6</title>
</head>
<body>
<?php
function descendingorder(){
    echo "input: "."<form method=post action=Q6.php>";
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
        rsort($num);
        echo "ผลลัพธ์: ";
        foreach($num as $result){
            if($result != $num[9]){
                echo $result . ", ";
            }
            else echo $result;
        }
    }
}
echo descendingorder();
?>
    </body>
</html>