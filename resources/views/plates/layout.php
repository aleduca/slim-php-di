<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css
    integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque&family=Raleway:wght@100;400;600&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css">
  <title><?php echo $title ?? 'Slim Framework' ?></title>
</head>
<body>
<?php $this->insert('partials/header') ?>
  <div class="container">
    <?=$this->section('content')?>
    <?php $this->insert('partials/footer') ?>
  </div>
</body>
</html>