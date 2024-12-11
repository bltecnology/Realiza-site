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
          <h1 class="fw-bold mb-3">Nosso serviços</h1>
          <h2 class="fw-semibold mb-5">Excelência e qualidade na execução do nosso trabalho</h2>
          <nav class="d-flex justify-content-start">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= $Config['protocol'].$Config['fqd'] ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos">Serviços</a></li>
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
        <div class="col-lg-12"><div class="t-center"><h5>Nossos</h5><h4><span>Serviços</span></h4></div></div>
        <div class="col-lg-10 col-12">
          <div class="card border-0 bg-gold-subtle shadow">
            <div class="row g-0">
              <div class="col-lg-4">
                <img src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/screen/cta-pension.webp" class="img-fluid" alt="Gestão previdenciária">
              </div>
              <div class="col-lg-8">
                <div class="d-flex flex-column h-100 p-4">
                  <h5 class="fw-bold text-primary">Gestão previdenciária</h5>
                  <p>Conhecer com quem a sua empresa negocia para garantir o cumprimento de todas as normas referente a terceirização, é uma prática fundamental para a imagem e saúde financeira do seu negócio. Identifique irregularidades, acompanhe as informações durante a vigência do contrato, evite problemas e minimize riscos com o apoio da Realiza Assessoria Empresarial.</p>
                  <div class="mt-auto"><a class="btn btn-primary" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/gestao-previdenciaria">Saiba mais<i class="fa-solid fa-arrow-right ms-2"></i></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-10 col-12">
          <div class="card border-0 bg-gold-subtle shadow">
            <div class="row g-0">
              <div class="col-lg-4">
                <img src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/screen/cta-homologation.webp" class="img-fluid" alt="Homologação">
              </div>
              <div class="col-lg-8">
                <div class="d-flex flex-column h-100 p-4">
                  <h5 class="fw-bold text-primary">Homologação</h5>
                  <p>Iniciar uma prestação de serviço com um fornecedor saudável é essencial para a segurança da empresa. A Realiza avalia previamente informações do prestador e auxilia no processo de homologação com o objetivo de ser assertivo na nova contratação. Antes de contratar qualquer serviço terceirizado, é necessário conhecer bem a empresa, pois assim é possível minimizar problemas jurídicos e financeiros e evitar prejuízos.</p>
                  <div class="mt-auto"><a class="btn btn-primary" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/homologacao">Saiba mais<i class="fa-solid fa-arrow-right ms-2"></i></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-10 col-12">
          <div class="card border-0 bg-gold-subtle shadow">
            <div class="row g-0">
              <div class="col-lg-4">
                <img src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/screen/cta-ssma.webp" class="img-fluid" alt="Gestão de SSMA">
              </div>
              <div class="col-lg-8">
                <div class="d-flex flex-column h-100 p-4">
                  <h5 class="fw-bold text-primary">Gestão de SSMA</h5>
                  <p>SSMA é a sigla para Segurança, Saúde e Meio Ambiente, que se baseia no cumprimento de legislações, normas regulamentadoras do trabalho, procedimentos e metodologias com objetivo de eliminar ou minimizar os riscos ocupacionais, de acidentes e preservar o meio ambiente. Um ambiente seguro, confortável e que esteja totalmente integrado é o princípio para garantir que o fornecedor preste um serviço com excelência.</p>
                  <div class="mt-auto"><a class="btn btn-primary" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/gestao-seguranca-do-trabalho-saude-meio-ambiente">Saiba mais<i class="fa-solid fa-arrow-right ms-2"></i></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-10 col-12">
          <div class="card border-0 bg-gold-subtle shadow">
            <div class="row g-0">
              <div class="col-lg-4">
                <img src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/screen/cta-consulting.webp" class="img-fluid" alt="Consultoria tributária e societária">
              </div>
              <div class="col-lg-8">
                <div class="d-flex flex-column h-100 p-4">
                  <h5 class="fw-bold text-primary">Consultoria tributária e societária</h5>
                  <p>Tenha uma visão mais ampla do seu negócio, gerencie as questões de contabilidade, declaração fiscal e de temas sobre a sua sociedade com a Consultoria Tributária e Societária especializada da Realiza Assessoria Empresarial.</p>
                  <div class="mt-auto"><a class="btn btn-primary" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/consultoria-tributaria-societaria">Saiba mais<i class="fa-solid fa-arrow-right ms-2"></i></a></div>
                </div>
              </div>
            </div>
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