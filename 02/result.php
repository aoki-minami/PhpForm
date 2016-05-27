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

<form action="contact.php" method="post">

<main>

<?php

function error($no){
    if($no === 1){ echo "姓を入力してください" . " ";}
    if($no === 2){ echo "名を入力してください" . " ";}
    if($no === 3){ echo "住所を入力してください";}
    if($no === 4){ echo "お電話番号を入力してください";}
    if($no === 5){ echo "半角で入力してください";}
    if($no === 6){ echo "数字で入力してください";}
    if($no === 7){ echo "メールアドレスを入力してください";}
    if($no === 8){ echo "どこで知ったかチェックをいれてください";}
    if($no === 9){ echo "質問内容を入力してください";}

}

 ?>



<table class="type">

<!-- 姓名のテキストボックスの値を表示 -->
    <tr>
        <th scope="row">姓名</th>
        <td>
        <?php

        // 姓の値が入っているかチェック
            if($_POST['name1'] !== "" ){
                echo $_POST['name1'] . " ";
            }else{
                error(1);
            }

        // 名の値が入っているかチェック
            if($_POST['name2'] !== "" ){
                echo $_POST['name2'] . " ";
            }else{
                error(2);
            }
        ?>
    <!-- 入力フォームに値を送る -->
        <input type="hidden" name="name1" value="<?php echo $_POST['name1']; ?>">
        <input type="hidden" name="name2" value="<?php echo $_POST['name2']; ?>">
        </td>
    </tr>

<!-- 性別のラジオボタンの値を表示 -->
    <tr>
        <th scope="row">性別</th>
        <td>
        <?php echo $_POST['rd']; ?>
    <!--入力フォームに値を送る-->
        <input type="hidden" name="rd" value="<?php echo $_POST['rd']; ?>">
        </td>
    </tr>

<!-- 住所のテキストボックスの値を表示 -->
    <tr>
        <th scope="row">住所</th>
        <td>
        <?php
        // 住所の値が入っているかチェック
            if($_POST['address'] !== "" ){
                echo $_POST['address'] . " ";
            }else{
                error(3);
            }
        ?>
    <!--入力フォームに値を送る-->
        <input type="hidden" name="address" value="<?php echo $_POST['address']; ?>">
        </td>
    </tr>

<!-- 電話番号のテキストボックスの値を出力 -->
    <tr>
        <th scope="row">お電話番号　(半角数字)</th>
        <td>
        <?php
        // 初期化
            $phon = $_POST['phon'];
            $flg_empty = 0;
            $flg_half  = 0;
            $flg_num   = 0;

        // 電話番号が入っているかチェック
            foreach($phon as $phon_value){
                if($phon_value !== "" ){
                        $flg_empty++;
                }else{
                    error(4);
                    break;
                }
            }

        // 半角かどうかチェック
            foreach($phon as $phon_value){
                if(mb_strlen($phon_value, "UTF-8") === mb_strwidth($phon_value, "UTF-8") ){
                    $flg_half++;
                }else{
                    error(5);
                    break;
                }
            }

        // 数字かどうかチェック
            if($flg_empty === 3){
                foreach($phon as $phon_value){
                    if(is_numeric($phon_value) ){
                        $flg_num++;
                    }else{
                        error(6);
                        break;
                    }
                }
            }

        // 条件が全て満たせていれば表示
            if($flg_empty === 3 && $flg_half === 3 && $flg_num === 3){
                $flg_empty = 0;
                $flg_half  = 0;
                $flg_num   = 0;
                echo $phon[0] . "-" . $phon[1] . "-" . $phon[2];
            }
        ?>
    <!--入力フォームに値を送る-->
        <input type="hidden" name="phon1" value="<?php echo $phon[0]; ?>">
        <input type="hidden" name="phon2" value="<?php echo $phon[1]; ?>">
        <input type="hidden" name="phon3" value="<?php echo $phon[2]; ?>">
        </td>
    </tr>

<!-- メールアドレスの値を出力 -->
    <tr>
        <th scope="row">メールアドレス　(半角英数字)</th>
        <td>
        <?php
        // メールアドレスの値が入っているかチェック
            if($_POST['local'] !== "" && $_POST['domain'] !== "" ){
                $flg_empty = 1;
            }else{
                error(7);
            }
        // 半角かどうかチェック
            $len_local  = mb_strlen($_POST['local'], "UTF-8");
            $len_domain = mb_strlen($_POST['domain'], "UTF-8");
            $wid_local  = mb_strwidth($_POST['local'], "UTF-8");
            $wid_domain = mb_strwidth($_POST['domain'], "UTF-8");
            if( $len_local === $wid_local && $len_domain === $wid_domain ){
                $flg_half = 1;
            }else{
                error(5);
            }
        // 条件が全て満たせていれば表示
            if($flg_empty === 1 && $flg_half === 1){
                $flg_empty = 0;
                $flg_half  = 0;
                echo $_POST['local'] . "@" . $_POST['domain'];
            }
        ?>
    <!--入力フォームに値を送る-->
        <input type="hidden" name="local" value="<?php echo $_POST['local']; ?>">
        <input type="hidden" name="domain" value="<?php echo $_POST['domain']; ?>">
        </td>
    </tr>

<!-- どこで知ったか　チェックボックス -->
    <tr>
        <th scope="row">どこで知ったか</th>
        <td>
        <?php
        // どこで知ったkの値が入っているかチェック
            $check = $_POST["ch"];
            foreach($check as $value){
                if($check !== "" ){
                    echo $value . " ";
                }else{
                    $flg_empty++;
                }
            }
            if($flg_empty === 3){
                error(8);
            }
        ?>
    <!--入力フォームに値を送る-->
        <input type="hidden" name="ch1" value="<?php echo $check[0]; ?>">
        <input type="hidden" name="ch2" value="<?php echo $check[1]; ?>">
        <input type="hidden" name="ch3" value="<?php echo $check[2]; ?>">
        </td>
    </tr>

<!-- 質問カテゴリ　セレクトボックスで選択 -->
        <tr>
            <th scope="row">質問カテゴリ</th>
            <td>
            <?php echo $_POST['question_category']; ?>
        <!--入力フォームに値を送る-->
            <input type="hidden" name="select" value="<?php echo $_POST['question_category']; ?>">
            </td>
        </tr>

<!-- 質問内容　テキストエリアで入力 -->
        <tr>
            <th scope="row">質問内容</th>
            <td>
            <?php
            // 質問内容の値が入っているかチェック
                if($_POST['question'] !== "" ){
                // 改行文字の前に HTML の改行タグを挿入する
                    echo nl2br($_POST['question'] );
                }else{
                    error(9);
                }
            ?>
        <!--入力フォームに値を送る-->
            <input type="hidden" name="question" value="<?php echo nl2br($_POST['question']); ?>">
            </td>
        </tr>
</table>
</main>

<footer>
<center>
<!--戻るボタン-->
    <button type="submit">戻る</button>
</canter>
</footer>

</form>

</body>

</html>
