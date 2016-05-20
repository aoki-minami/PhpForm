<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title> Fomr_課題 </title>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>
<!--ここから中央揃え-->
    <center>
<!--見出し-->
<header>
    <h1>お問い合わせ</h1>
</header>

<main>
<table class="type">
    <form action="result.php" method="post">
    <!--姓のテキストボックスを表示 -->
        <tr>
        <th scope="row">姓</th>
        <td>
            <input id="neme1" type="textbox" name="name1">
        </td>
        </tr>

    <!--名のテキストボックスを表示 -->
        <tr>
        <th scope="row">名</th>
        <td>
            <input id="name2" type="textbox" name="name2">
        </td>
        </tr>

    <!--性別のラジオボタン-->
        <tr>
        <th scope="row">性別</th>
        <td>
        <!--ラジオボタン（男性）-->
            <input id="rd_man" type="radio" name="rd" value="男性" checked>
            <label for="rd_man">男性</label>
        <!--ラジオボタン（女性）-->
            <input id="rd_woman" type="radio" name="rd" value="女性">
            <label for="rd_woman">女性</label>
        <!--ラジオボタン（不明）-->
            <input id="rd_unknown" type="radio" name="rd" value="不明">
            <label for="rd_unknown">不明</label>
        </td>
        </tr>

    <!--住所のテキストボックス-->
        <tr>
        <th scope="row">住所</th>
        <td>
            <input id="adress" type="textbox" name="adress">
        </td>
        </tr>

    <!--電話番号のテキストボックス-->
        <tr>
        <th scope="row">お電話番号</th>
        <td>
        <!--上三桁-->
            <input type="textbox" name="phon_first" size="1">
            -
        <!--四桁-->
            <input type="textbox" name="phon_second" size="1">
            -
        <!--下四桁-->
            <input type="textbox" name="phon_third" size="1">
        </td>
        </tr>

    <!--メールアドレス-->
        <tr>
        <th scope="row">メールアドレス</th>
        <td>
        <!--ローカル部-->
            <input type="textbox" name="local">
        <!--アットマーク-->
            @
        <!--ドメイン-->
            <input type="textbox" name="domain">
        </td>
        </tr>

    <!--どこで知ったか　チェックボックス-->
        <tr>
        <th scope="row">どこで知ったか</th>
        <td>
            <textarea id="know" cols="50" rows="5" name="know"></textarea>
        </td>
        </tr>

    <!--質問カテゴリ　セレクトボックスで選択-->
        <tr>
        <th scope="row">質問カテゴリ</th>
        <td>
            <select id="question_category" name="question_category">
                <option>雑誌</option>
                <option>新聞</option>
                <option>Web</option>
                <option>その他</option>
            </select>
        </td>
        </tr>

    <!--質問内容　テキストエリアで入力-->
        <tr>
        <th scope="row">質問内容</th>
        <td>
            <textarea id="question" cols="50" rows="5" name="question"></textarea>
        </td>
        </tr>
</table>
</main>

<footer>
    <!--送信ボタン-->
        <p><input type="submit"></p>
</footre>
<!--ここまで中央揃え-->
    </center>

    </form>
</body>

</html>
