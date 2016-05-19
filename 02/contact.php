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
            <input id="neme1" type="textbox" name="name1" size="20">
        </p>

    <!--名のテキストボックスを表示 -->
        <p>
            <label for="name2">名：</label>
            <input id="name2" type="textbox" name="name2" size="20">
        </p>

    <!--性別のラジオボタン-->
        <p>
            性別：
        <!--ラジオボタン（男性）-->
            <input id="rd_man" type="radio" name="rd" value="男性" checked>
            <label for="rd_man">男性</label>
        <!--ラジオボタン（女性）-->
            <input id="rd_woman" type="radio" name="rd" value="女性">
            <label for="rd_woman">女性</label>
        <!--ラジオボタン（不明）-->
            <input id="rd_unknown" type="radio" name="rd" value="不明">
            <label for="rd_unknown">不明</label>
        </p>

    <!--住所のテキストボックス-->
        <p>
            <label for="adress">住所：</label>
            <input id="adress" type="textbox" name="adress" size="20">
        </p>

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

    <!--どこで知ったか　チェックボックス-->
        <p>
            <label for="know">どこで知ったか：</label>
            <textarea id="know" cols="20" rows="5" name="know"></textarea>
        </p>

    <!--質問カテゴリ　セレクトボックスで選択-->
        <p>
            <label for="question">質問カテゴリ：</label>
            <select id="question" name="question">
                <option>雑誌</option>
                <option>新聞</option>
                <option>Web</option>
                <option>その他</option>
            </select>
        </p>
        <!--送信ボタン-->
            <p><input type="submit"></p>

    <!--ここまで中央揃え-->
        </center>

    </form>
</body>

</html>
