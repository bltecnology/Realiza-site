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
          <h1 class="fw-bold mb-3">Homologação</h1>
          <h2 class="fw-semibold mb-5">Excelência e qualidade na execução do nosso trabalho</h2>
          <nav class="d-flex justify-content-start">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= $Config['protocol'].$Config['fqd'] ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos">Serviços</a></li>
              <li class="breadcrumb-item active"><a href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/homologacao">Homologação</a></li>
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
        <div class="col-lg-12"><div class="t-start"><h4><span>Homologação</span></h4></div></div>
        <div class="col-lg-9 col-12">
          <p>Também conhecido como qualificação, validação ou certificação dos fornecedores, a homologação é um processo criterioso, cujo objetivo é reunir e avaliar as informações, serviços e documentos das empresas terceiras, antes que iniciem a prestação de serviço.</p>
          <p>Antes de contratar qualquer serviço terceirizado, é necessário conhecer bem a empresa, pois assim é possível minimizar problemas jurídicos e financeiros e evitar prejuízos.</p>
          <p>Essa avaliação contempla a análise de diversos itens, por exemplo:</p>
          <ul>
            <li>CNPJ;</li>
            <li>CPF dos sócios;</li>
            <li>Análise financeira;</li>
            <li>Certidões do FGTS, Trabalhista, Federal, Ministério do Trabalho, etc;</li>
            <li>Due Diligence;</li>
            <li>DRE - Demonstração de Resultados de Exercício;</li>
            <li>Balanço Patrimonial;</li>
            <li>Score;</li>
            <li>Licenças;</li>
            <li>Alvará;</li>
            <li>Vendor List.</li>
          </ul>
          <p>Todo processo de homologação deve ser realizado de maneira transparente, com critérios objetivos e o resultado deve corresponder com o risco da empresa analisada, sendo esse relatório crucial na hora de tomar a decisão sobre a contratação dos fornecedores.</p>
          <p>O serviço de homologação te ajuda a contratar fornecedores capacitados e saudáveis, que não ofereçam risco de crédito ou de não entregar os serviços contratados por falta de recursos. Além disso, ajuda a preservar a imagem da sua empresa.</p>
          <p>Para essa avaliação, a Realiza Assessoria disponibiliza uma ferramenta que seleciona os critérios de avaliação conforme a sua necessidade, pesquisa as informações necessárias e avalia os documentos disponibilizados. Por fim, apresenta um relatório que classifica o fornecedor avaliado de acordo com o critério da contratante.</p>
          <p>Conheça mais sobre homologação e como a Realiza Assessoria pode auxiliar a sua empresa. Entre em contato conosco para saber mais.</p>
        </div>
        <div class="col-lg-3 col-9">
          <div class="list-group">
            <div class="list-group-item bg-primary-subtle"><h6 class="text-primary text-uppercase fw-bold my-2">Serviços</h6></div>
            <a class="list-group-item list-group-item-action" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/gestao-previdenciaria">Gestão previdenciária</a>
            <a class="list-group-item list-group-item-action active" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/homologacao">Homologação</a>
            <a class="list-group-item list-group-item-action" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/gestao-seguranca-do-trabalho-saude-meio-ambiente">Gestão de SSMA</a>
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