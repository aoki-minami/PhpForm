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
            <input type="textbox" name="name1">
        </td>
        </tr>

    <!--名のテキストボックスを表示 -->
        <tr>
        <th scope="row">名</th>
        <td>
            <input type="textbox" name="name2">
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
            <input type="textbox" name="adress">
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
        <!--チェックボックス 1-->
            <input id="ch_magazin" type="checkbox" name='ch[]' value="雑誌" checked>
            <label for="ch_magazin">雑誌</label>
        <!--チェックボックス 2-->
            <input id="ch_web" type="checkbox" name='ch[]' value="Web">
            <label for="ch_web">Web</label>
        <!--チェックボックス 3-->
            <input id="ch_other" type="checkbox" name='ch[]' value="その他">
            <label for="ch_other">その他</label>
        </td>
        </tr>

    <!--質問カテゴリ　セレクトボックスで選択-->
        <tr>
        <th scope="row">質問カテゴリ</th>
        <td>
            <select name="question_category">
                <option>商品について</option>
                <option>その他</option>
            </select>
        </td>
        </tr>

    <!--質問内容　テキストエリアで入力-->
        <tr>
        <th scope="row">質問内容</th>
        <td>
            <textarea cols="50" rows="5" name="question"></textarea>
        </td>
        </tr>
</table>
</main>

<footer>
    <!--送信ボタン-->
        <input type="submit" name="submit" value="send">

</footre>

</form>
</center>
</body>

</html>
