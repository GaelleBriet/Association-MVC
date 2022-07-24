<!DOCTYPE html>
<html lang=fr>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title><?= $title ?></title>
  <!-- Favicon-->
  <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
  <link rel="icon" type="image/png" sizes="16x16" href=<?= $navicon ?>>
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="./public/css/styles.css" rel="stylesheet" />
  <!-- <link href="./public/css/sb-admin-2.css" rel="stylesheet"> -->
</head>

<body>

  <!-- Responsive navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <?= $logo ?>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href=<?= $link_home ?>>Home</a></li>
          <li class="nav-item"><a class="nav-link" href=<?= $link_administration ?>>Administration</a></li>
          <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header - set the background image for the header in the line below-->
  <?= $header_img ?>
  <div class="text-center my-5 position-absolute top-50 start-50 translate-middle">
    <?= $header_text ?>
  </div>
  </header>


</body>

</html>