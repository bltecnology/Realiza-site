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
          <h1 class="fw-bold mb-3">Gestão de SSMA (Segurança do trabalho, saúde e meio ambiente)</h1>
          <h2 class="fw-semibold mb-5">Excelência e qualidade na execução do nosso trabalho</h2>
          <nav class="d-flex justify-content-start">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= $Config['protocol'].$Config['fqd'] ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos">Serviços</a></li>
              <li class="breadcrumb-item active"><a href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/homologacao">Gestão de SSMA (Segurança do trabalho, saúde e meio ambiente)</a></li>
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
        <div class="col-lg-12"><div class="t-start"><h4><span>Gestão de SSMA (Segurança do trabalho, saúde e meio ambiente)</span></h4></div></div>
        <div class="col-lg-9 col-12">
          <p>Você já ouviu falar de SSMA?</p>
          <p>SSMA é a sigla para Segurança, Saúde e Meio Ambiente, que se baseia no cumprimento de:</p>
          <ul>
            <li>Legislações;</li>
            <li>Normas regulamentadoras do trabalho;</li>
            <li>Procedimentos e metodologias com objetivo de eliminar ou minimizar os riscos ocupacionais de acidentes e preservar o meio ambiente.</li>
          </ul>
          <p>A Gestão SSMA é um conjunto de processos que garante ao seu negócio o atendimento de todos os requisitos exigidos, de maneira segura e eficaz.</p>
          <p>Com a Gestão de SSMA, todas as áreas da empresa são beneficiadas. Esse processo é realizado através da definição de deveres e responsabilidades a serem cumpridas, visando sempre oferecer proteção aos colaboradores, equipamentos de qualidade, revisão das instalações e promover a proteção do meio ambiente.</p>
          <p>A Gestão de SSMA é fundamental para o negócio, pois qualquer ambiente de trabalho apresenta risco de acidentes, dos menores aos mais extremos.</p>
          <p>Investir em soluções de SSMA torna o seu negócio mais seguro, oferece aos colaboradores um ambiente confiável, e a qualidade e preocupação dedicada a este propósito o tornam referência para os clientes e fornecedores.</p>
          <p>Visando garantir que você esteja sempre no controle e integrado com tudo que acontece no seu negócio, contamos com uma ferramenta que auxilia na gestão de documentos e nos permite dar maior suporte para eventos de Saúde e Segurança no Trabalho (SST), para tornar o ambiente de trabalho mais seguro.</p>
          <p>É possível fazer o controle de documentos diversos: ASO’s, NR’s, PGR, PCMSO, Treinamentos, Certificações, dentre outros documentos pertinentes a essa área.</p>
          <p>Para uma gestão com excelência, zelar pela vida,  fortalecer sua marca, e garantir a segurança dos times e do meio ambiente, entre em contato com a equipe da Realiza Assessoria. Solicite uma demonstração da nossa ferramenta de SSMA e fale conosco. Clique aqui para saber mais.</p>
        </div>
        <div class="col-lg-3 col-9">
          <div class="list-group">
            <div class="list-group-item bg-primary-subtle"><h6 class="text-primary text-uppercase fw-bold my-2">Serviços</h6></div>
            <a class="list-group-item list-group-item-action" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/gestao-previdenciaria">Gestão previdenciária</a>
            <a class="list-group-item list-group-item-action" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/homologacao">Homologação</a>
            <a class="list-group-item list-group-item-action active" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/gestao-seguranca-do-trabalho-saude-meio-ambiente">Gestão de SSMA</a>
            <a class="list-group-item list-group-item-action" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/consultoria-tributaria-societaria">Consultoria tributária e societária</a>
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