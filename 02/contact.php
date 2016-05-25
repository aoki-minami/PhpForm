<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title> Fomr_課題 </title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
<!--見出し-->
<header>
    <h1>お問い合わせ</h1>
</header>

<!--ここから中央揃え-->
<center>

<main>
<table class="type">
<form action="result.php" method="post">

    <?php
    // 姓の値の初期化
        $name1 = "";
    // 空の否定判定、値が入っていた場合、　$_POST['name1']　の値を $name1　に代入
        if( !empty($_POST['name1']) ){ $name1 = $_POST['name1']; }

    // 名の値の初期化
        $name2 = "";
    // 空の否定判定、値が入っていた場合、　$_POST['name2']　の値を $name2　に代入
        if( !empty($_POST['name2']) ){ $name2 = $_POST['name2']; }

    // 住所の値の初期化
        $address = "";
    // 空の否定判定、値が入っていた場合、　$_POST['address']　の値を $address　に代入
        if( !empty($_POST['address']) ){ $address = $_POST['address']; }

    // 電話番号の初期化
        $phon1 = "";
        $phon2 = "";
        $phon3 = "";
    // 空の否定判定、値が入っていた場合、　$_POST['phon1']　の値を $phon1　に代入
        if( !empty($_POST['phon1']) ){ $phon1 = $_POST['phon1']; }
    // 空の否定判定、値が入っていた場合、　$_POST['phon2']　の値を $phon2　に代入
        if( !empty($_POST['phon2']) ){ $phon2 = $_POST['phon2']; }
    // 空の否定判定、値が入っていた場合、　$_POST['phon3']　の値を $phon3　に代入
        if( !empty($_POST['phon3']) ){ $phon3 = $_POST['phon3']; }

    // メールアドレスの値の初期化
        $local = "";
        $domain = "";
    // 空の否定判定、値が入っていた場合、　$_POST['local']　の値を $local　に代入
        if( !empty($_POST['local']) ){ $local = $_POST['local']; }
    // 空の否定判定、値が入っていた場合、　$_POST['domain']　の値を $domain　に代入
        if( !empty($_POST['domain']) ){ $domain = $_POST['domain']; }

    // ラジオボタンの checked の状態を空にしておく
        $rd = "";
    // 空の否定判定、checked の状態を維持
        if( !empty($_POST['rd']) ){$rd = $_POST['rd']; }
        else{$rd = "男性";}

    // チェックボックスの checked の状態を空にしておく
        $ch1 = "";
        $ch2 = "";
        $ch3 = "";
    //　空の否定判定、checked の状態を維持
        if( !empty($_POST['ch1']) ){$ch1 = $_POST['ch1']; }
        else{$ch1 = "雑誌";}
        if( !empty($_POST['ch2']) ){$ch2 = $_POST['ch2']; }
        if( !empty($_POST['ch3']) ){$ch3 = $_POST['ch3']; }

    //
        $select = "";
    //
        if( !empty($_POST['select']) ){$select = $_POST['select']; }
    ?>

    <!--姓のテキストボックスを表示 -->
        <tr>
        <th scope="row">姓</th>
        <td>
            <input type="textbox" name="name1"
                    required="required" value="<?php echo $name1; ?>">
        </td>
        </tr>

    <!--名のテキストボックスを表示 -->
        <tr>
        <th scope="row">名</th>
        <td>
            <input type="textbox" name="name2"
                    required="required" value="<?php echo $name2; ?>">
        </td>
        </tr>

    <!--性別のラジオボタン-->
        <tr>
        <th scope="row">性別</th>
        <td>
        <!--ラジオボタン（男性）-->
            <label><input type="radio" name="rd" value="男性"
                <?php if($rd == "男性"){echo "checked";} ?> >男性</label>
        <!--ラジオボタン（女性）-->
            <label><input type="radio" name="rd" value="女性"
                <?php if($rd == "女性"){echo "checked";} ?> >女性</label>
        <!--ラジオボタン（不明）-->
            <label><input type="radio" name="rd" value="不明"
                <?php if($rd == "不明"){echo "checked";} ?> >不明</label>
        </td>
        </tr>

    <!--住所のテキストボックス-->
        <tr>
        <th scope="row">住所</th>
        <td>
            <input type="textbox" name="address"
                    required="required" value="<?php echo $address; ?>">
        </td>
        </tr>

    <!--電話番号のテキストボックス-->
        <tr>
        <th scope="row">お電話番号　(半角入力)</th>
        <td>
        <!--三桁-->
            <input type="textbox" name="phon[]" size="1"
                    required="required" value="<?php echo $phon1; ?>">
        <!--ハイフン-->
            -
        <!--四桁-->
            <input type="textbox" name="phon[]" size="1"
                    required="required" value="<?php echo $phon2; ?>">
        <!--ハイフン-->
            -
        <!--四桁-->
            <input type="textbox" name="phon[]" size="1"
                    required="required" value="<?php echo $phon3; ?>">
        </td>
        </tr>

    <!--メールアドレス-->
        <tr>
        <th scope="row">メールアドレス　(半角入力)</th>
        <td>
        <!--ローカル部-->
            <input type="textbox" name="local"
                    required="required" value="<?php echo $local; ?>">
        <!--アットマーク-->
            @
        <!--ドメイン-->
            <input type="textbox" name="domain"
                    required="required" value="<?php echo $domain; ?>">
        </td>
        </tr>

    <!--どこで知ったか　チェックボックス-->
        <tr>
        <th scope="row">どこで知ったか</th>
        <td>
        <!--チェックボックス 1-->
            <label><input type="checkbox" name='ch[]' value="雑誌"
                <?php if($ch1 == "雑誌"){echo "checked";} ?> >雑誌</label>
        <!--チェックボックス 2-->
            <label><input type="checkbox" name='ch[]' value="Web"
                <?php if($ch2 == "Web"){echo "checked";} ?> >Web</label>
        <!--チェックボックス 3-->
            <label><input type="checkbox" name='ch[]' value="その他"
                <?php if($ch3 == "その他"){echo "checked";} ?> >その他</label>
        </td>
        </tr>

    <!--質問カテゴリ　セレクトボックスで選択-->
        <tr>
        <th scope="row">質問カテゴリ</th>
        <td>
            <select name="question_category">
                <option <?php if($select == "商品について"){echo "selected";}?>>
                    商品について
                </option>
                <option <?php if($select == "その他"){echo "selected";}?>>
                    その他
                </option>
            </select>
        </td>
        </tr>

    <!--質問内容　テキストエリアで入力-->
        <tr>
        <th scope="row">質問内容</th>
        <td>
            <textarea cols="50" rows="10" name="question">
            </textarea>
        </td>
        </tr>
</table>
</main>

<footer>
    <!--送信ボタン-->
        <input type="submit" name="send" value="送信">
    <!--リセットボタン-->
        <input type="reset" name="reset" value="リセット">
</footre>

</form>
</center>
</body>

</html>
