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
  <section class="hero-intern company">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="fw-bold mb-3">Nossa empresa</h1>
          <h2 class="fw-semibold mb-5">Conheça um pouco da trajetória da Realiza Assessoria com mais de 30 anos de sucesso, qualidade e satisfação dos nossos clientes</h2>
          <nav class="d-flex justify-content-start">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= $Config['protocol'].$Config['fqd'] ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= $Config['protocol'].$Config['fqd'] ?>/empresa">Empresa</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- About -->
  <section>
    <div class="container">
      <div class="row g-4 justify-content-center">
        <div class="col-lg-10"><div class="t-center"><h5>Quem somos</h5><h4><span>Realiza Assessoria Empresarial</span></h4></div></div>
        <div class="col-lg-10">
          <p>Desde 1991, a Realiza Assessoria Empresarial está no mercado disponibilizando serviços corporativos com foco em gestão de terceiros.</p>
          <p>Em 2001, observamos como as empresas de médio e grande porte se comportavam diante da terceirização de mão de obra. Por isso, desenvolvemos uma assessoria de padrão preventivo para monitorar todas as obrigações trabalhistas e previdenciárias dos prestadores de serviços terceirizados.</p>
        </div>
        <div class="col-lg-8"><div class="r-box p-2 my-4"><img class="img-fluid" src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/screen/company-office.webp" alt="Escritório Realiza Assessoria Empresarial"></div></div>
        <div class="col-lg-10">
          <p>Nesses mais de 30 anos de experiência, nos especializamos na área de Gestão de Empresas Terceirizadas, trabalhando para grandes corporações e oferecendo a segurança e qualidade para todos os nossos clientes.</p>
          <p>Aumentamos a nossa produtividade com qualidade, investindo constantemente em novas tecnologias, desenvolvendo ferramentas que melhoram os nossos serviços e operando online com muita transparência, permitindo que os nossos parceiros também consigam verificar a situação trabalhista e previdenciária de todas as prestadoras de serviços.</p>
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