<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title> Fomr_課題 </title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
<table class="type">
<!--姓名のテキストボックスの値を表示-->
    <tr>
    <th scope="row">姓名</th>
    <td>
        <?php echo $_POST['name1'] . " " . $_POST['name2'] . "<br>"; ?>
    </td>
    </tr>




<?php
//echo "姓名　：　" . $_POST['name1'] . " " . $_POST['name2'] . "<br>";
echo "性別　：　" . $_POST['rd'] . "<br>";
echo "住所　：　" . $_POST['adress'] . "<br>";
echo "電話番号　：　" . $_POST['phon_first'] . "-" . $_POST['phon_second'] . "-" . $_POST['phon_third'] . "<br>";
echo "メールアドレス　：　" . $_POST['local'] . "@" . $_POST['domain'] . "<br>";
echo "どこでしったか　：　" . $_POST['ch'] . "<br>";
echo "質問カテゴリ　：　" . $_POST['question_category'] . "<br>";
echo "質問内容　：　" . $_POST['question'] . "<br>";
//var_dump($_POST);
?>

</table>
</body>
</html>
