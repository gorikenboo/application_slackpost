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
                    <h1 class="fw-light">申し込みフォーム</h1>
                    <p class="lead text-muted">必要事項を記入して送信してください</p>
                    <form class="row g-3" action="application_create.php" method="POST">
                        <div class="col-md-6">
                            <label for="validationDefault01" class="form-label">姓</label>
                            <input type="text" class="form-control" id="validationDefault01" value="" required name="char_sei">
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault02" class="form-label">名</label>
                            <input type="text" class="form-control" id="validationDefault02" value="" required name="char_mei">
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault01" class="form-label">セイ</label>
                            <input type="text" class="form-control" id="validationDefault01" value="" required name="kana_sei">
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault02" class="form-label">メイ</label>
                            <input type="text" class="form-control" id="validationDefault02" value="" required name="kana_mei">
                        </div>

                        <div class="col-md-12">
                            <label for="validationDefault03" class="form-label">メールアドレス</label>
                            <input type="email" class="form-control" id="validationDefault03" required name="mail">
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">あなたの所属</label>
                            <input type="text" class="form-control" id="validationDefault03" required name="affiliation">
                        </div>
                        <div class="col-md-6">
                            <label for="validationDefault03" class="form-label">実施の対象</label>
                            <input type="text" class="form-control" id="validationDefault03" required name="target">
                        </div>
                        <div class="col-md-12">
                            <label for="validationDefault03" class="form-label">実施の内容</label>
                            <input type="text" class="form-control" id="validationDefault03" required name="contents">
                        </div>
                        <div class="col-md-12">
                            <label for="validationDefault03" class="form-label">現在感じている問題点(あれば)</label>
                            <input type="text" class="form-control" id="validationDefault03" required name="problem">
                        </div>


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