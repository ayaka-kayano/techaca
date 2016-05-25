<html>
<head>
    <title>電卓</title>
</head>

<p>'数値を小文字で入力してください'</p>

<body>

<!--フォームを作る-->
<form action = 'calc3.php' method= 'POST'>
    <input type = 'text' name ='num1'>  <!--１つ目の項-->

    <select name='select'>  <!--演算子の選択-->
        <option value='+'>+</option>
        <option value='-'>-</option>
        <option value='*'>×</option>
        <option value='/'>÷</option>
    </select>

    <input type = 'text' name ='num2'><br/>  <!--２つ目の項-->

    <input type = 'submit' value ='計算'>
    <input type = 'reset' value ='クリア'><br/>


    <?php
    //計算

    //値が入っているかの判定
    if(isset($_POST['num1']) && $_POST['num2'] && $_POST['select']){
        
        //数字かどうかの判定
        if (is_numeric($_POST['num1']) && is_numeric($_POST['num2'])) {

            //どの演算記号を選んだかによって条件わけ
            switch ($_POST['select']) {
                case'+':
                    print($_POST['num1'] + $_POST['num2']);
                    break;
                case'-':
                    print($_POST['num1']- $_POST['num2']);
                    break;
                case'*':
                    print($_POST['num1'] * $_POST['num2']);
                    break;
                case'/':
                    //２つ目の項が０の時を除外
                    if ($_POST['num2'] != 0){
                        print($_POST['num1'] / $_POST['num2']);}
                    else print '0を分母にすることはできません';
                    break;
            }
        }
        else {
            print '計算できませんa';
        }//数字じゃない時
    }
    else {
        print '計算できませんb';
    }//何も入っていない時
    ?>

</body>
</form>
</html>