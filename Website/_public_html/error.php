<?php
# --------------------------------------------------
header('Content-Type: text/html; charset=utf-8');
# -------------------------
require_once __DIR__.'/app/lib/conf/config.php';
# --------------------------------------------------
?>
<!doctype html>
<html lang="pt-br">
<!--
# ~~~~~~~~~~~~~~~~~~~~~~ #
# Developed by Volkertek #
# All rights reserved    #
# ~~~~~~~~~~~~~~~~~~~~~~ #
-->
<head>
<?php include __DIR__.'/inc/inc.head.php'; ?>
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/favicon/favicon.ico" type="image/x-icon">
  <link rel="icon"          href="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/favicon/favicon.ico" type="image/x-icon">
  <!-- CDN -->
<?php include __DIR__.'/inc/inc.cdn.php'; ?>
  <!-- CSS -->
<?php include __DIR__.'/inc/inc.css.php'; ?>
  <!-- Schema -->
<?php include __DIR__.'/inc/inc.schema.php'; ?>
</head>
<!-- Body -->
<body>
<!-- Header -->
<?php include __DIR__.'/inc/inc.header.php'; ?>
<!-- Wrapper -->
<main>
  <!-- Hero -->
  <section class="hero-intern error">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="fw-bold mb-3">Ops! Algo inesperado aconteceu</h1>
          <h2 class="fw-semibold mb-5">Encontramos um erro</h2>
          <nav class="d-flex justify-content-start">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= $Config['protocol'].$Config['fqd'] ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= $Config['protocol'].$Config['fqd'] ?>/erro">Erro</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- Error -->
  <section>
    <div class="container">
      <div class="row g-4 justify-content-center">
        <div class="col-lg-9"><div class="t-center"><h5>Não se preocupe</h5><h4><span>Vamos auxiliar</span></h4></div></div>
        <div class="col-lg-9">
          <div class="text-center">
            <p>Infelizmente o que você está buscando não existe ou não pode ser acessado.<br>Clique no botão abaixo para ser levado para nossa página inicial.</p>
            <a href="<?= $Config['protocol'].$Config['fqd'] ?>" class="btn btn-primary mt-5"><i class="fa-solid fa-house me-2"></i>Home</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CTA -->
<?php include __DIR__.'/inc/inc.cta.php'; ?>
</main>
<!-- Footer -->
<?php include __DIR__.'/inc/inc.footer.php'; ?>
<!-- CDN -->
<?php include __DIR__.'/inc/inc.js.php'; ?>
<!-- JavaScript -->
<script src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/js/scripts.min.js?v=<?= $Config['version']['js'] ?>"></script>
<!-- ~~~~~~~~~~ -->
</body>
</html>