<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>calculator</title>
</head>
<body>

<form name ="form1" action ="calc_mori.php" method="post">
    <input type ="number" name = numA>
    <select name = "operation">
        <option value = "+">＋</option>
        <option value = "-">－</option>
        <option value = "×">×</option>
        <option value = "÷">÷</option>
    </select>
    <input type ="number" name = numB>　
    <input type = "submit" value ="計算"/>
</form>


</body>
</html>

<?php

if (!isset($_POST['numA'],$_POST['numB']) || $_POST['numA'] === '' || $_POST['numB'] === '' ) {    //未入力判定
    echo "数値を入力して「計算」を押してください。";
    exit;
} elseif (!is_numeric($_POST['numA'])) {
    echo "半角数字を入力してください。";    //数字かどうか判定
    exit;
} elseif (!is_numeric($_POST['numB'])) {
    echo "半角数字を入力してください。";
    exit;
}

$a =$_POST['numA'];            //代入
$b = $_POST['numB'];
$ope = $_POST['operation'];

switch ($ope){
    case "+":
        $answer = $a + $b;
        break;
    case "-":
        $answer = $a - $b;
        break;
    case "×":
        $answer = $a * $b;
        break;
    case "÷":
        if ($b == 0){                              //ゼロ除算の処理
            echo "0で割ることはできません。";
            exit;
        }
        $answer = $a / $b;
        break;
    default:
        $answer = "計算できません。";
}
echo($a." ".$ope." ".$b." = ".$answer);

/*
 * Created by PhpStorm.
 * User: 森　諒星
 * Date: 2016/12/08
 * Time: 1:53
 */
?>
