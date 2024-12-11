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
  <section class="hero-intern services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="fw-bold mb-3">Consultoria tributária e societária</h1>
          <h2 class="fw-semibold mb-5">Excelência e qualidade na execução do nosso trabalho</h2>
          <nav class="d-flex justify-content-start">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= $Config['protocol'].$Config['fqd'] ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos">Serviços</a></li>
              <li class="breadcrumb-item active"><a href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/consultoria-tributaria-societaria">Consultoria tributária e societária</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- Services -->
  <section class="bg-lines">
    <div class="container">
      <div class="row g-4 justify-content-center">
        <div class="col-lg-12"><div class="t-start"><h4><span>Consultoria tributária e societária</span></h4></div></div>
        <div class="col-lg-9 col-12">
          <p>O Brasil possui uma das legislações fiscais e tributárias mais complexas do mundo, tornando ainda mais importante os cuidados para o recolhimento de tributos.</p>
          <p>Isso mostra como a Consultoria Tributária e Societária é necessária para todas as empresas, independente da situação financeira que se encontra.</p>
          <p>Aqui na Realiza Assessoria, apontamos o caminho certo para seguir com base nas necessidades reais dos clientes, apresentamos soluções para a parte jurídica e pagamento de tributos, oferecendo uma visão diferente para a empresa, baseando-se em avaliações, contabilidade, regulamentações e muito mais.</p>
          <p>A Consultoria Tributária e Societária permite uma visão mais ampla do negócio e de temas societários, resolvendo controvérsias com autoridades fiscais, gerenciando questões de contabilidade e declaração fiscal, além de evitar possíveis discussões entre os participantes e auxiliando em questões conflitantes.</p>
          <p>Com a Consultoria Tributária e Societária é possível organizar e planejar todo o futuro da empresa, tanto na parte financeira quanto em uma sociedade mais saudável, apresentando todas as questões que envolvem o fisco e as possibilidades societárias.</p>
          <p>Tenha todo suporte necessário para que o seu negócio siga todas as normas fiscais, nós te auxiliamos em todas as dúvidas quanto aos modelos de sociedades.</p>
          <p>Entre em contato conosco e saiba mais.</p>
        </div>
        <div class="col-lg-3 col-9">
          <div class="list-group">
            <div class="list-group-item bg-primary-subtle"><h6 class="text-primary text-uppercase fw-bold my-2">Serviços</h6></div>
            <a class="list-group-item list-group-item-action" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/gestao-previdenciaria">Gestão previdenciária</a>
            <a class="list-group-item list-group-item-action" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/homologacao">Homologação</a>
            <a class="list-group-item list-group-item-action" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/gestao-seguranca-do-trabalho-saude-meio-ambiente">Gestão de SSMA</a>
            <a class="list-group-item list-group-item-action active" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/consultoria-tributaria-societaria">Consultoria tributária e societária</a>
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