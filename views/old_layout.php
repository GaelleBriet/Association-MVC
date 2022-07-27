<!DOCTYPE html>
<html lang=fr>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title><?= $title ?></title>
  <!-- Favicon-->
  <link rel="icon" type="image/png" sizes="16x16" href=<?= $favicon ?>>
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href=<?= $linkcss ?> rel="stylesheet" />
</head>

<body>

  <!-- Responsive navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <?= $logo ?>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <?= $link_home ?>
          <?= $link_administration ?>
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