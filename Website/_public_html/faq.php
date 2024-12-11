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
  <section class="hero-intern faq">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="fw-bold mb-3">Dúvidas</h1>
          <h2 class="fw-semibold mb-5">As dúvidas mais frequentes e recorrentes sobre gestão de terceiros</h2>
          <nav class="d-flex justify-content-start">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= $Config['protocol'].$Config['fqd'] ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= $Config['protocol'].$Config['fqd'] ?>/duvidas">Dúvidas</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- About -->
  <section>
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-12"><div class="t-center"><h5>Dúvidas Frequentes</h5><h4><span>Esclareça as principais dúvidas</span></h4></div></div>
        <div class="col-lg-12">
          <div class="accordion accordion-flush" id="accordionFAQ">
            <!-- Item -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-01">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-01"><strong>Como se conceitua a solidariedade na legislação previdenciária?</strong></button>
              </h2>
              <div id="flush-01" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                  <p>São solidariamente obrigadas as pessoas que tenham interesse comum na situação que constitua o fato gerador da obrigação previdenciária principal e as expressamente designadas por lei como tal. A solidariedade não comporta benefício de ordem, ou seja, não há ordem de preferência, todos os devedores solidários são responsáveis, independente de preferência.</p>
                </div>
              </div>
            </div>
            <!-- Item -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-heading-02">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-02"><strong>Qual o objetivo de terceirizar?</strong></button>
              </h2>
              <div id="flush-02" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                <div class="accordion-body">
                  <p>Para uma melhora na produção, especialização, maior competitividade e fornecer produtos e serviços a custos menores.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
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