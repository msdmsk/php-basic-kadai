<!DOCTYPE html>
<html>

    <head>
        <meta charset = "UTF-8">
        <title>PHP基礎編</title>
    </head>

    <body>

        <?php
            $name = $_POST["employee_name"];
            $age = $_POST["employee_age"];
            $belongs_to = $_POST["department"];
        ?>

        <h2>入力内容をご確認ください。</h2>
        <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

        <table border = "1">
            <tr>
                <th>項目</th>
                <th>入力内容</th>
            </tr>
            <tr>
                <td>社員名</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>年齢</td>
                <td><?php echo $age; ?></td>
            </tr>
            <tr>
                <td>所属部署</td>
                <td><?php echo $belongs_to; ?></td>
            </tr>
        </table>
        <button id = "confirm-btn" onclick = "location.href = 'complete.php';">確定</button>
        <button id = "cancel-btn" onclick = "history.back();">キャンセル</button>
    </body>
</html>