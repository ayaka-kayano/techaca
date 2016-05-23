<html>
<head> 
    <title>電卓</title>
</head>
<?php
print '数値を入力してください'
?>
<body>

<!--フォームを作る-->
<form action = "calc2.php" method= "POST">
<input type = 'text' name ='num1'>  <!--１つ目の項-->

<select name="select">  <!--演算子の選択-->
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">×</option>
    <option value="/">÷</option>
</select>

<input type = 'text' name ='num2'><br/>  <!--２つ目の項-->

<input type = 'submit' value ='計算'>
<input type = 'submit' value ='クリア'>

</form>
</html>


<?php
//計算

//文字を当てはめる
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$select = $_POST['select'];

//文字が入っているかの判定
if (isset($num1) && isset($num2)) {
    //数字かどうかの判定
    if(is_numeric($num1) &&is_numeric($num2)) {
        //どの演算記号を選んだかによって条件わけ
        switch ($select) {
            case'+';
                print($num1 + $num2);
                break;
            case'-';
                print($num1 - $num2);
                break;
            case'*';
                print($num1 * $num2);
                break;
            case'/';
                //２つ目の項が０の時を除外
                if ($num2 != 0)
                    print($num1 / $num2);
                else print '0を分母にすることはできません';
                break;
        }
    }else {print "計算できません";}

 }
else {
        print '計算できません';
    }
?>
</body>

