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
  <section class="hero-intern cookies">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="fw-bold mb-3">Política de cookies</h1>
          <h2 class="fw-semibold mb-5">Informações relevantes sobre as nossa política de cookies</h2>
          <nav class="d-flex justify-content-start">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= $Config['protocol'].$Config['fqd'] ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= $Config['protocol'].$Config['fqd'] ?>/politica-de-cookies">Política de cookies</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- Cookies -->
  <section>
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-12">
          <h5 class="fw-semibold mb-3">O que são Cookies e como utilizamos?</h5>
          <p>Cookies são pequenos arquivos de texto que são armazenados em seu computador ou dispositivo móvel por sites para rastrear seus movimentos individuais nesse site ao longo do tempo.</p>
          <p>A <span class="fw-semibold">Realiza Assessoria Empresarial</span> utiliza as seguintes categorias de Cookies:</p>
          <ul>
            <li><span class="fw-semibold">Cookies de Sessão:</span> Os cookies de sessão são armazenados na memória e não são gravados no disco. São utilizados apenas para guardar informações necessárias para uma boa experiência de navegação. Quando o navegador se fecha, o Cookie será perdido permanentemente. Portanto, nenhuma informação pessoal ficará armazenada após a navegação no site da <span class="fw-semibold">Realiza Assessoria Empresarial</span>.</li>
            <li><span class="fw-semibold">Cookies Persistentes:</span> Têm funcionalidades e características similares aos cookies de sessão, entretanto possuem data de validade, por isso o nome cookie persistente. Na data de validade, o cookie será removido do disco. Um cookie persistente pode nos ajudar a reconhecê-lo quando você retornar ao nosso site e recordar suas configurações ou preferências.</li>
          </ul>
          <p>Tanto os Cookies de Sessão, quanto os Cookies Persistentes utilizados pela <span class="fw-semibold">Realiza Assessoria Empresarial</span> são cookies essências para possibilitar uma melhor navegabilidade a você usuário, eles são usados para autenticar seu acesso, evitar fraudes e fornecer os serviços que você solicitou.</p>
          <hr class="my-5">
          <h5 class="fw-semibold mb-3">CONSENTIMENTO</h5>
          <p>O consentimento que você nos entrega para uso dos cookies poderá ser revogado a qualquer tempo, utilizando as configurações do seu navegador. Caso tenha alguma dificuldade, pode nos consultar através do e-mail:  <span class="fw-semibold">contato@realizaassessoria.com.br</span>.</p>
          <hr class="my-5">
          <h5 class="fw-semibold mb-3">INFORMAÇÕES IMPORTANTES</h5>
          <p>Caso você queira desabilitar os cookies que utilizamos, algumas funcionalidades dos sites poderão ficar indisponíveis e, dependendo do cookie desabilitado, podemos não ter como gerenciar possíveis fraudes com o seu perfil. Para desabilitar os cookies, você pode entrar em “Painel de Controle” do seu computador e buscar por navegador. Em seguida, você encontrará as formas de gerenciamento de cookies.</p>
          <p>A política de privacidade da <span class="fw-semibold">Realiza Assessoria Empresarial</span> é regida e será interpretada de acordo com as leis brasileiras. Se você usar nossos serviços e residir fora do Brasil, suas informações serão transferidas para este país e serão processadas e armazenadas conforme padrões de privacidade da legislação local.</p>
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