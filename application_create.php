<?php
include("functions.php");
include("slack_post.php");

$pdo = connect_to_db();

$char_sei = $_POST["char_sei"];
$char_mei = $_POST["char_mei"];
$kana_sei = $_POST["kana_sei"];
$kana_mei = $_POST["kana_mei"];
$mail = $_POST["mail"];
$affiliation = $_POST["affiliation"];
$target = $_POST["target"];
$contents = $_POST["contents"];
$problem = $_POST["problem"];




$sql = 'INSERT INTO
           `application_table`(`id`, `char_sei`, `char_mei`, `kana_sei`, `kana_mei`, `mail`, `affiliation`, `target_for`, `contents`, `problem`, `pffp_name`, `created_at`, `updated_at`)
           VALUES(NULL, :char_sei, :char_mei,:kana_sei, :kana_mei, :mail, :affiliation, :target_for, :contents, :problem, NULL, sysdate(), sysdate())';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':char_sei', $char_sei, PDO::PARAM_STR);
$stmt->bindValue(':char_mei', $char_mei, PDO::PARAM_STR);
$stmt->bindValue(':kana_sei', $kana_sei, PDO::PARAM_STR);
$stmt->bindValue(':kana_mei', $kana_mei, PDO::PARAM_STR);
$stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
$stmt->bindValue(':affiliation', $affiliation, PDO::PARAM_STR);
$stmt->bindValue(':target_for', $target, PDO::PARAM_STR);
$stmt->bindValue(':contents', $contents, PDO::PARAM_STR);
$stmt->bindValue(':problem', $problem, PDO::PARAM_STR);
$status = $stmt->execute();

$slack_post = "【新規登録】\r 名前：$char_sei $char_mei\r 所属：$affiliation\r 対象：$target \r 内容：$contents \r 問題点：$problem \r 案件の応募は以下のフォームからお願いします！応募お待ちしています！\r http://localhost/php02_sample/kadai/kadai2/application_read.php  ";
slackpost($slack_post);

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
    .bd-placeholder-img {
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
    }
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
      <div class="row py-lg-5">
        <div class="col-lg-10 col-md-8 mx-auto">
          <h1 class="fw-light">お申し込みありがとうございました！</h1>
          <!-- <p class="lead text-muted">必要事項を記入して送信してください</p> -->

        </div>
      </div>



    </section>

  </main>
  <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>

</html>