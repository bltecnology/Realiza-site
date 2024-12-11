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
  <section class="hero-intern cases">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="fw-bold mb-3">Cases & Clientes</h1>
          <h2 class="fw-semibold mb-5">Os cases de sucesso que fazem parte da história da Realiza Assessoria Empresarial</h2>
          <nav class="d-flex justify-content-start">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= $Config['protocol'].$Config['fqd'] ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= $Config['protocol'].$Config['fqd'] ?>/cases-e-clientes">Cases & Clientes</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- Cases -->
  <section>
    <div class="container">
      <div class="row g-4 align-items-center justify-content-center">
        <div class="col-lg-12"><div class="t-center"><h5>História de sucesso</h5><h4><span>Cases & Clientes</span></h4></div></div>
        <div class="col-lg-10">
          <p>Com 30 anos de mercado e diversos cases de sucessos abrangendo os mais variados setores, a Realiza Assessoria Empresarial cria relacionamentos sólidos e duradouros com seus clientes, sempre apresentando um serviço de exímia qualidade técnica e total transparência nos processos realizados.</p>
          <p>Confira abaixo uma pequena lista de cases da Realiza Assessoria Empresarial ao longo de sua existência.</p>
        </div>
        <div class="col-lg-12"><hr class="border-gold my-5"></div>
        <div class="col-lg-2 col-6"><a class="external" href="https://www.ultragaz.com.br"><img class="img-fluid client" src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/clients/ultragaz.webp" alt="Ultragaz"></a></div>
        <div class="col-lg-2 col-6"><a class="external" href="https://www.messer-br.com"><img class="img-fluid client" src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/clients/messer.webp" alt="Messer"></a></div>
        <div class="col-lg-2 col-6"><a class="external" href="https://www.mann-hummel.com"><img class="img-fluid client" src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/clients/mannhummel.webp" alt="Mann-Hummel"></a></div>
        <div class="col-lg-2 col-6"><a class="external" href="https://www.cbre.com.br"><img class="img-fluid client" src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/clients/cbre.webp" alt="CBRE Group"></a></div>
        <div class="col-lg-2 col-6"><a class="external" href="https://figueiredogoncalves.com.br"><img class="img-fluid client" src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/clients/fga.webp" alt="FG Advogados"></a></div>
        <div class="col-lg-2 col-6"><a class="external" href="https://volkertek.com.br"><img class="img-fluid client" src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/clients/volkertek.webp" alt="Volkertek"></a></div>
        <div class="col-lg-2 col-6"><a class="external" href="https://bcanton.com.br"><img class="img-fluid client" src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/clients/bcanton.webp" alt="B.Canton"></a></div>
        <div class="col-lg-2 col-6"><a class="external" href="https://xpi.com.br"><img class="img-fluid client" src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/clients/xpi.webp" alt="XPI"></a></div>
      </div>
    </div>
  </section>
  <!-- Services -->
<?php include __DIR__.'/inc/inc.services.php'; ?>
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