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

<form name ="form1" action ="calc.php" method="post">
    <input type ="number" name = numA>
    <select name = "operator">
        <option value = "+">＋</option>
        <option value = "-">－</option>
        <option value = "×">×</option>
        <option value = "÷">÷</option>
    </select>
    <input type ="number" name = numB>
    <input type = "submit" value ="計算する"/>
</form>


</body>
</html>

<?php
if(isset($_POST['operator'])) {
    $a = $_POST['numA'];
    $b = $_POST['numB'];
    $ope = $_POST['operator'];
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
            if ($b == 0){
                echo "ゼロ除算はできません。";
            }
            $answer = $a / $b;
            break;
    }
    echo($a." ".$ope." ".$b." = ".$answer);
}
?>

<!--function div($numA, $numB) {  //割り算
if ($numB == 0){
//例外発生
throw new Exception("ゼロ除算");
}
$ans = $numA / $numB;
return $ans;
echo "ゼロ除算はできません。"
}-->


<!--if ($b = 0){
echo "0では割れません。";
}-->


<!--/**
 * Created by PhpStorm.
 * User: 森　諒星
 * Date: 2016/12/08
 * Time: 1:53
 */
-->