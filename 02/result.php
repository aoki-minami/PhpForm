<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title> Fomr_課題 </title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
<h1>確認画面</h1>

<center>
<table class="type">
<!--姓名のテキストボックスの値を表示-->
    <tr>
    <th scope="row">姓名</th>
    <td>
        <?php
        // 姓の値が入っているかチェック
            if($_POST['name1'] !== ""){
                echo $_POST['name1'] . " ";
            }else{
                echo "姓を入力してください" . " ";
            }
        // 名の値が入っているかチェック
            if($_POST['name2'] !== ""){
                echo $_POST['name1'] . " ";
            }else{
                echo "名を入力してください";
            }
        ?>
    </td>
    </tr>
<!--性別のラジオボタンの値を表示-->
    <tr>
    <th scope="row">性別</th>
    <td>
        <?php echo $_POST['rd'] . "<br>"; ?>
    </td>
    </tr>
<!--住所のテキストボックスの値を表示-->
    <tr>
    <th scope="row">住所</th>
    <td>
        <?php
        // 住所の値が入っているかチェック
            if($_POST['adress'] !== ""){
                echo $_POST['adress'] . " ";
            }else{
                echo "住所を入力してください" . " ";
            }
        ?>
    </td>
    </tr>
<!--電話番号のテキストボックスの値を出力-->
    <tr>
    <th scope="row">お電話番号</th>
    <td>
        <?php
            echo $_POST['phon_first'] . "-" . $_POST['phon_second'] . "-" . $_POST['phon_third'] . "<br>";
        ?>
    </td>
    </tr>
<!--メールアドレスの値を出力-->
    <tr>
    <th scope="row">メールアドレス</th>
    <td>
        <?php echo $_POST['local'] . "@" . $_POST['domain'] . "<br>"; ?>
    </td>
    </tr>
<!--どこで知ったか　チェックボックス-->
    <tr>
    <th scope="row">どこで知ったか</th>
    <td>
        <?php echo $_POST['ch'] . "<br>"; ?>
    </td>
    </tr>
<!--質問カテゴリ　セレクトボックスで選択-->
        <tr>
        <th scope="row">質問カテゴリ</th>
        <td>
            <?php echo $_POST['question_category'] . "<br>"; ?>
        </td>
        </tr>
<!--質問内容　テキストエリアで入力-->
        <tr>
        <th scope="row">質問内容</th>
        <td>
            <?php echo $_POST['question'] . "<br>"; ?>
        </td>
        </tr>
</table>

<footer>
<!--戻るボタン-->
<form action="contact.php" method="post">
    <input type="submit" value="戻る">
</form>
</footer>
</canter>
</body>
</html>
