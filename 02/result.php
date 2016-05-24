<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title> Fomr_課題 </title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
<header>
    <h1>確認画面</h1>
</header>

<center>
<main>
<table class="type">
<form action="contact.php" method="post">
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
                echo $_POST['name2'] . " ";
            }else{
                echo "名を入力してください";
            }
        ?>
    <!--入力フォームに値を送る-->
        <input type="hidden" name="name1"
                value="<?php echo htmlspecialchars($_POST['name1']); ?>">
        <input type="hidden" name="name2"
                value="<?php echo htmlspecialchars($_POST['name2']); ?>">
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
            if($_POST['address'] !== ""){
                echo $_POST['address'] . " ";
            }else{
                echo "住所を入力してください" . " ";
            }
        ?>
    <!--入力フォームに値を送る-->
        <input type="hidden" name="address"　
                value="<?php echo htmlspecialchars($_POST['address']); ?>">
    </td>
    </tr>
<!--電話番号のテキストボックスの値を出力-->
    <tr>
    <th scope="row">お電話番号</th>
    <td>
        <?php
            $phon = $_POST['phon'];
            $flg_empty = 0;
            $flg_half  = 0;
        // 電話番号が入っているかチェック
            foreach($phon as $phon_value){
                if($phon_value !== ""){
                        $flg_empty++;
                }else{
                    echo "お電話番号を入力してください";
                    break;
                }
            }
        // 半角かどうかチェック
            foreach($phon as $phon_value){
                if(mb_strlen($phon_value, "UTF-8") === mb_strwidth($phon_value, "UTF-8") ){
                    $flg_half++;
                }else{
                    echo "半角で入力してください";
                    break;
                }
            }
        // 条件が全て満たせていれば表示
            if($flg_empty === 3 && $flg_half === 3){
                $flg_empty = 0;
                $flg_half  = 0;
                echo $phon[0] . "-" . $phon[1] . "-" . $phon[2];
            }
        ?>
    <!--入力フォームに値を送る-->
        <input type="hidden" name="phon1"　
                value="<?php echo $phon[0]; ?>">
        <input type="hidden" name="phon2"　
                value="<?php echo $phon[1]; ?>">
        <input type="hidden" name="phon3"　
                value="<?php echo $phon[2]; ?>">
    </td>
    </tr>
<!--メールアドレスの値を出力-->
    <tr>
    <th scope="row">メールアドレス</th>
    <td>
        <?php
        // メールアドレスの値が入っているかチェック
            if($_POST['local'] !== "" && $_POST['domain'] !== ""){
                $flg_empty = 1;
            }else{
                echo "メールアドレスを入力してください";
            }
        // 半角かどうかチェック
            $len_local  = mb_strlen($_POST['local'], "UTF-8");
            $len_domain = mb_strlen($_POST['domain'], "UTF-8");
            $wid_local  = mb_strwidth($_POST['local'], "UTF-8");
            $wid_domain = mb_strwidth($_POST['domain'], "UTF-8");

            if( $len_local === $wid_local && $len_domain === $wid_domain ){
                $flg_half = 1;
            }else{
                echo "半角で入力してください";
            }
        // 条件が全て満たせていれば表示
            if($flg_empty === 1 && $flg_half === 1){
                echo $_POST['local'] . "@" . $_POST['domain'];
            }
        ?>
    <!--入力フォームに値を送る-->
        <input type="hidden" name="local"　
                value="<?php echo $_POST['local']; ?>">
        <input type="hidden" name="domain"　
                value="<?php echo $_POST['domain']; ?>">
    </td>
    </tr>
<!--どこで知ったか　チェックボックス-->
    <tr>
    <th scope="row">どこで知ったか</th>
    <td>
        <?php
        // どこで知ったkの値が入っているかチェック
            $check = $_POST["ch"];
            foreach($check as $value){
                if($check !== ""){
                    echo $value . " ";
                }
            }
        ?>
    </td>
    </tr>
<!--質問カテゴリ　セレクトボックスで選択-->
        <tr>
        <th scope="row">質問カテゴリ</th>
        <td>
            <?php echo $_POST['question_category']; ?>
        </td>
        </tr>
<!--質問内容　テキストエリアで入力-->
        <tr>
        <th scope="row">質問内容</th>
        <td>
            <?php
            // 質問内容の値が入っているかチェック
                if($_POST['question'] !== ""){
                    echo nl2br(htmlspecialchars($_POST['question']) );
                }else{
                    echo "質問内容を入力してください";
                }
            ?>
        </td>
        </tr>
</table>
</main>

<footer>
<!--戻るボタン-->
    <input type="submit" value="戻る">
</footer>

</form>
</canter>
</body>
</html>
