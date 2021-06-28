<?php
include("functions.php");


$pdo = connect_to_db();

// }

$sql = 'SELECT * FROM application_table';

$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
    $output = "";
    foreach ($result as $record) {
        $output .= "<tr>";
        $output .= "<th scope='row'>" . $record["id"] . "</th>";
        $output .= "<td>{$record["created_at"]}</td>";
        $output .= "<td>{$record["char_sei"]}{$record["char_mei"]}</td>";
        $output .= "<td>{$record["affiliation"]}</td>";
        $output .= "<td>{$record["target_for"]}</td>";
        $output .= "<td>{$record["contents"]}</td>";
        $output .= "<td>{$record["problem"]}</td>";
        // edit deleteリンクを追加
        $output .= "<td>
           <a class='btn btn-outline-primary' href='application_edit.php?id={$record["id"]}'>案件に登録する</a>
           </td>";
        $output .= "</tr>";
    }

    // $recordの参照を解除する．解除しないと，再度foreachした場合に最初からループしない
    // 今回は以降foreachしないので影響なし
    unset($record);
}
?>


<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>apprication</title>

    <link rel="canonical" href="https://getbootstrap.jp/docs/5.0/examples/album/">



    <!-- Bootstrap core CSS -->
    <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
        /* .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        } */
    </style>


</head>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply Default Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

<body>


    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-8">
                <div class="col-lg-12 col-md-11 mx-auto">
                    <h1 class="fw-light">申し込み一覧</h1>
                    <p class="lead text-muted">気になる案件に登録してください</p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">申込日</th>
                                <th scope="col">名前</th>
                                <th scope="col">所属</th>
                                <th scope="col">対象</th>
                                <th scope="col">内容</th>
                                <th scope="col">問題点</th>
                                <th scope="col">登録</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?= $output ?>
                        </tbody>
                    </table>
                </div>
            </div>



        </section>

    </main>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>

</html>