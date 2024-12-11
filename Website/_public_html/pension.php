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
          <h1 class="fw-bold mb-3">Gestão previdenciária</h1>
          <h2 class="fw-semibold mb-5">Excelência e qualidade na execução do nosso trabalho</h2>
          <nav class="d-flex justify-content-start">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= $Config['protocol'].$Config['fqd'] ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos">Serviços</a></li>
              <li class="breadcrumb-item active"><a href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/gestao-riscos-terceirizadas">Gestão previdenciária</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- Services -->
  <section class="bg-frames">
    <div class="container">
      <div class="row g-4 justify-content-center">
        <div class="col-lg-12"><div class="t-start"><h4><span>Gestão previdenciária</span></h4></div></div>
        <div class="col-lg-9 col-12">
          <p>A terceirização de serviços faz parte de uma estratégia para garantir que as operações da empresa sejam mais enxutas ou para aproveitar serviços variados, sem a necessidade de investir em especializações e desenvolvimento interno. Tudo isso permite que custos sejam reduzidos, o negócio siga inovando e as operações sigam com mais agilidade e qualidade.</p>
          <p>Para isso, é possível terceirizar a mão de obra e diminuir custos operacionais, desde que sejam atividades de meio, como serviços de limpeza ou segurança. Mas é importante se atentar a toda documentação necessária para evitar erros e problemas financeiros.</p>
          <p>A gestão de risco das terceirizadas possui um papel fundamental no mundo corporativo. Saber com quem você está fazendo negócio é importante para o sucesso, pois evita problemas judiciais para a sua empresa.</p>
          <p>Voltado para um conjunto de práticas empresariais que visam identificar e combater possíveis ameaças provenientes de fatores externos, a gestão de risco das terceirizadas consiste em cumprir as normas da Lei 13.429, a “Lei da Terceirização”, conhecer as empresas que disponibilizam esses serviços e todos os funcionários que irão fazer parte do seu quadro de colaboradores.</p>
          <p>Qualquer irregularidade no processo de execução dos serviços terceirizados, bem como nos contratos, pode resultar em riscos trabalhistas.</p>
          <p>Para gerir com eficiência essas demandas, é importante conhecer quais são suas obrigações e fiscalizar a empresa contratada para que esteja cumprindo com os deveres em relação aos colaboradores.</p>
          <p>Além disso, erros na gestão de risco das terceirizadas também podem comprometer a segurança do seu trabalho, qualidade dos produtos, reputação, dados confidenciais e muito mais.</p>
          <p>Nessas horas, contar com uma empresa especializada para gerir e fiscalizar todas as ações de empresas terceirizadas, garantir que elas ofereçam as condições adequadas para os funcionários trabalharem e que tudo esteja dentro das normas trabalhistas é um grande diferencial, e nisso a Realiza Assessoria pode te ajudar.</p>
          <p>Através de ferramentas avançadas e ótimo apoio tecnológico, disponibilizamos uma solução robusta em nossa atuação consultiva, monitorando todo o processo de terceirização, visando garantir os cumprimentos legais e diminuir riscos de passivos administrativos e judiciais.</p>
          <p>Entre em contato conosco para saber mais.</p>
        </div>
        <div class="col-lg-3 col-9">
          <div class="list-group">
            <div class="list-group-item bg-primary-subtle"><h6 class="text-primary text-uppercase fw-bold my-2">Serviços</h6></div>
            <a class="list-group-item list-group-item-action active" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/gestao-previdenciaria">Gestão previdenciária</a>
            <a class="list-group-item list-group-item-action" href="<?= $Config['protocol'].$Config['fqd'] ?>/servicos/homologacao">Homologação</a>
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