<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title> Fomr_課題 </title>
</head>

<body>
    <form action="result.php" method="post">
    <!--ここから中央揃え-->
        <center>
    <!--姓のテキストボックスを表示 -->
        <p>
            <label for="name1">姓：</label>
            <input type="textbox" name="name1" id="neme1" size="20">
        </p>
    <!--名のテキストボックスを表示 -->
        <p>
            <label for="name1">名：</label>
            <input type="textbox" name="name2" id="name2" size="20"></p>
    <!--性別のラジオボタン-->
        <p>
            性別：
        <!--ラジオボタン（男性）-->
            <input id="rd_man" type="radio" name="rd" value="man" checked>
            <label for="rd_man">男性</label>
        <!--ラジオボタン（女性）-->
            <input id="rd_woman" type="radio" name="rd" value="woman">
            <label for="rd_woman">女性</label>
        <!--ラジオボタン（不明）-->
            <input id="rd_unknown" type="radio" name="rd" value="unknown">
            <label for="rd_unknown">不明</label>
        </p>
    <!--住所のテキストボックス-->
        <p>
            <label for="adress">住所：</label>
            <input type="textbox" name="adress" id="adress" size="20"></p>
    <!--電話番号のテキストボックス-->
        <p>
            お電話番号：
        <!--上三桁-->
            <input type="textbox" name="phon_first" size="5">
            -
        <!--四桁-->
            <input type="textbox" name="phon_second" size="5">
            -
        <!--下四桁-->
            <input type="textbox" name="phon_third" size="5">
        </p>
    <!--メールアドレス-->
        <p>
            メールアドレス：
        <!--ローカル部-->
            <input type="textbox" name="local" size="10">
        <!--アットマーク-->
            @
        <!--ドメイン-->
            <input type="textbox" name="domain" size="10">
        </p>

        <!--送信ボタン-->
            <p><input type="submit"></p>

    <!--ここまで中央揃え-->
        </center>

    </form>
</body>

</html>
