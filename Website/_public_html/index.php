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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" integrity="sha256-bA4I6ewBzTSiwrAJh61J0WZTA5P+yY+Je2qKlNLwDyY=" crossorigin="anonymous">
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
  <div class="hero-animated">
    <div class="overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop"><source src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/vids/hero.mp4" type="video/mp4"></video>
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-8">
          <h1 class="fw-bold mb-4">Excelência em gestão de terceiros</h1>
          <h2 class="fw-semibold mb-4">Solução em Gestão de Terceiros para sua empresa<br>Previdenciária – Trabalhista – Segurança do Trabalho</h2>
          <p>Tenha à disposição a excelência em gestão de terceiros que o seu negócio precisa. Contamos com uma equipe especialista em gestão previdenciária e homologação, proporcionando segurança e redução de riscos para a sua empresa que terceiriza mão de obra, tudo feito através de uma ferramenta online que te permite acompanhar todo processo.</p>
          <a class="btn btn-gold text-uppercase mt-5" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos">Saiba mais<i class="fa-solid fa-arrow-right ms-2"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Services -->
  <section>
    <div class="container">
      <div class="row g-4 justify-content-center">
        <div class="col-lg-10"><div class="t-center"><h5>Nossos</h5><h4><span>Serviços</span></h4></div></div>
        <div class="col-lg-12">
          <div data-slider-nav-autoplay-interval="4000" class="swiffy-slider slider-nav-autoplay slider-nav-autopause slider-item-show2 slider-nav-visible slider-nav-square slider-nav-dark slider-nav-sm slider-nav-outside-expand">
            <ul class="slider-container">
              <li class="p-4">
                <div class="d-flex flex-column r-box p-4 h-100">
                  <img src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/screen/cta-pension.webp" class="img-fluid" alt="Análise de um gráfico no monitor">
                  <h5 class="text-gold text-center text-uppercase fw-bold my-4">Gestão previdenciária</h5>
                  <p class="mb-5">Conhecer com quem a sua empresa negocia para garantir o cumprimento de todas as normas referente a terceirização, é uma prática fundamental para a imagem e saúde financeira do seu negócio. Identifique irregularidades, acompanhe as informações durante a vigência do contrato, evite problemas e minimize riscos com o apoio da Realiza Assessoria Empresarial.</p>
                  <div class="mt-auto text-center"><a class="btn btn-primary" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/gestao-previdenciaria">Saiba mais<i class="fa-solid fa-arrow-right ms-2"></i></a></div>
                </div>
              </li>
              <li class="p-4">
                <div class="d-flex flex-column r-box p-4 h-100">
                  <img src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/screen/cta-homologation.webp" class="img-fluid" alt="Análise de um gráfico no monitor">
                  <h5 class="text-gold text-center text-uppercase fw-bold my-4">Homologação</h5>
                  <p class="mb-5">Iniciar uma prestação de serviço com um fornecedor saudável é essencial para a segurança da empresa. A Realiza avalia previamente informações do prestador e auxilia no processo de homologação com o objetivo de ser assertivo na nova contratação. Antes de contratar qualquer serviço terceirizado, é necessário conhecer bem a empresa, pois assim é possível minimizar problemas jurídicos e financeiros e evitar prejuízos.</p>
                  <div class="mt-auto text-center"><a class="btn btn-primary" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/homologacao">Saiba mais<i class="fa-solid fa-arrow-right ms-2"></i></a></div>
                </div>
              </li>
              <li class="p-4">
                <div class="d-flex flex-column r-box p-4 h-100">
                  <img src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/screen/cta-ssma.webp" class="img-fluid" alt="Análise de um gráfico no monitor">
                  <h5 class="text-gold text-center text-uppercase fw-bold my-4">Gestão de SSMA</h5>
                  <p class="mb-5">SSMA é a sigla para Segurança, Saúde e Meio Ambiente, que se baseia no cumprimento de legislações, normas regulamentadoras do trabalho, procedimentos e metodologias com objetivo de eliminar ou minimizar os riscos ocupacionais, de acidentes e preservar o meio ambiente. Um ambiente seguro, confortável e que esteja totalmente integrado é o princípio para garantir que o fornecedor preste um serviço com excelência.</p>
                  <div class="mt-auto text-center"><a class="btn btn-primary" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/gestao-seguranca-do-trabalho-saude-meio-ambiente">Saiba mais<i class="fa-solid fa-arrow-right ms-2"></i></a></div>
                </div>
              </li>
            </ul>
            <button type="button" class="slider-nav"></button>
            <button type="button" class="slider-nav slider-nav-next"></button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- CTA -->
<?php include __DIR__.'/inc/inc.cta.php'; ?>
  <!-- About -->
  <section class="bg-frames">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-6"><img class="img-fluid" src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/img/screen/home-cup.webp" alt="Xícara com logotipo Realiza Assessoria"></div>
        <div class="col-lg-6">
          <div class="t-start"><h5>Quem somos</h5><h4><span>Realiza Assessoria Empresarial</span></h4></div>
          <p>Desde 1991, a Realiza Assessoria está no mercado disponibilizando serviços corporativos com foco em gestão de terceiros nas áreas previdenciária, trabalhista, segurança do trabalho e meio ambiente.</p>
          <p>Já são mais de 30 anos de experiência, onde nos especializamos na área de Gestão de Empresas Terceirizadas, trabalhando para grandes empresas e oferecendo a segurança e qualidade para todos os nossos clientes.</p>
          <a href="<?= $Config['protocol'].$Config['fqd'] ?>/empresa" class="btn btn-primary mt-5">Saiba mais<i class="fa-solid fa-arrow-right ms-2"></i></a>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- Footer -->
<?php include __DIR__.'/inc/inc.footer.php'; ?>
<!-- JavaScript -->
<?php include __DIR__.'/inc/inc.js.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" integrity="sha256-IBcxodeO6rZST8CIYuqQ7U/7asGmPHNv8luz+NVmotQ=" crossorigin="anonymous"></script>
<!-- JavaScript -->
<script src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/js/scripts.min.js?v=<?= $Config['version']['js'] ?>"></script>
<!-- ~~~~~~~~~~ -->
</body>
</html>