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
  <section class="hero-intern sitemap">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="fw-bold mb-3">Mapa do site</h1>
          <h2 class="fw-semibold mb-5">Páginas que constituem nosso site</h2>
          <nav class="d-flex justify-content-start">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= $Config['protocol'].$Config['fqd'] ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= $Config['protocol'].$Config['fqd'] ?>/mapa-do-site">Mapa do site</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- Sitemap -->
  <section>
    <div class="container">
      <div class="row g-4 justify-content-center">
        <div class="col-lg-12"><div class="t-center"><h5>Todas as páginas</h5><h4><span>Do nosso website</span></h4></div></div>
        <div class="col-lg-3">
          <div class="text-center">
            <h5 class="text-uppercase fw-bold mb-4">Institucional</h5>
            <ul class="list-unstyled">
              <li><a href="<?= $Config['protocol'].$Config['fqd'] ?>">Home</a></li>
              <li><a href="<?= $Config['protocol'].$Config['fqd'] ?>/empresa">Empresa</a></li>
              <li><a href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos">Serviços</a></li>
              <li><a href="<?= $Config['protocol'].$Config['fqd'] ?>/cases-e-clientes">Cases & Clientes</a></li>
              <li><a href="<?= $Config['protocol'].$Config['fqd'] ?>/duvidas">Dúvidas</a></li>
              <li><a href="<?= $Config['protocol'].$Config['fqd'] ?>/contato">Contato</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="text-center">
            <h5 class="text-uppercase fw-bold mb-4">Serviços</h5>
            <ul class="list-unstyled">
              <li><a href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/gestao-previdenciaria">Gestão previdenciária</a></li>
              <li><a href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/homologacao">Homologação</a></li>
              <li><a href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/gestao-seguranca-do-trabalho-saude-meio-ambiente">Gestão de SSMA</a></li>
              <li><a href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/consultoria-tributaria-societaria">Consultoria tributária e societária</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="text-center">
            <h5 class="text-uppercase fw-bold mb-4">Outros</h5>
            <ul class="list-unstyled">
              <li><a href="<?= $Config['protocol'].$Config['fqd'] ?>/politica-de-privacidade">Política de privacidade</a></li>
              <li><a href="<?= $Config['protocol'].$Config['fqd'] ?>/politica-de-cookies">Política de cookies</a></li>
              <li><a href="<?= $Config['protocol'].$Config['fqd'] ?>/mapa-do-site">Mapa do site</a></li>
            </ul>
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