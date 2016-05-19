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
        <p>姓：<input type="textbox" name="name1" size="20"></p>
        <!--名のテキストボックスを表示 -->
        <p>名：<input type="textbox" name="name2" size="20"></p>
        <!--性別のラジオボタン-->
        <p>
        <!--ラジオボタン（男性）-->
        <input id="rd_man" type="radio" name="rd" value="man">
        <label for="rd_man">男性</label>
        <!--ラジオボタン（女性）-->
        <input id="rd_woman" type="radio" name="rd" value="woman">
        <label for="rd_woman">女性</label>
        <!--ラジオボタン（不明）-->
        <input id="rd_unknown" type="radio" name="rd" value="unknown">
        <label for="rd_unknown">不明</label>

        <!--送信ボタン-->
        <p><input type="submit"></p>

        <!--ここまで中央揃え-->
        </center>

    </form>
</body>

</html>
