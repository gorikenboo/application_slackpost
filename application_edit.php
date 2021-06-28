<?php
include("functions.php");
$pdo = connect_to_db();

$id = $_GET["id"];

$sql = 'SELECT * FROM application_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $record = $stmt->fetch(PDO::FETCH_ASSOC);
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
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">案件登録フォーム</h1>
          <p class="lead text-muted">あなたの名前を記入して送信してください</p>
          <form class="row g-3" action="application_update.php" method="POST">
            <div class="col-md-4">
              <label for="validationDefault01" class="form-label">依頼者名</label>
              <input type="text" class="form-control" id="validationDefault01" value="<?= $record["char_sei"] ?><?= $record["char_mei"] ?>" required readonly>
            </div>

            <div class="col-md-4">
              <label for="validationDefault03" class="form-label">所属</label>
              <input type="text" class="form-control" id="validationDefault03" value="<?= $record["affiliation"] ?>" required name="affiliation" readonly>
            </div>
            <div class="col-md-4">
              <label for="validationDefault03" class="form-label">実施の対象</label>
              <input type="text" class="form-control" id="validationDefault03" value="<?= $record["target_for"] ?>" required name="target" readonly>
            </div>
            <div class="col-md-4">
              <label for="validationDefault03" class="form-label">実施の内容</label>
              <input type="text" class="form-control" id="validationDefault03" value="<?= $record["contents"] ?>" required name="contents" readonly>
            </div>
            <div class="col-md-4">
              <label for="validationDefault03" class="form-label">問題点</label>
              <input type="text" class="form-control" id="validationDefault03" value="<?= $record["problem"] ?>" required name="problem" readonly>
            </div>
            <div class="col-md-12">
              <label for="validationDefault01" class="form-label">あなたの名前</label>
              <input type="text" class="form-control" id="validationDefault01" name="pffp_name" required>
            </div>
            <input type="hidden" class="form-control" id="validationDefault01" value="<?= $record["char_sei"] ?>" required name="char_sei">
            <input type="hidden" class="form-control" id="validationDefault01" value="<?= $record["kana_sei"] ?>" required name="kana_sei">
            <input type="hidden" class="form-control" id="validationDefault01" value="<?= $record["char_mei"] ?>" required name="char_mei">
            <input type="hidden" class="form-control" id="validationDefault01" value="<?= $record["kana_mei"] ?>" required name="kana_mei">
            <input type="hidden" name="id" value="<?= $record['id'] ?>">
            <div class="col-12">
              <button class="btn btn-primary" type="submit">送信する</button>
            </div>
          </form>
        </div>
      </div>



    </section>


  </main>
  <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>

</html>