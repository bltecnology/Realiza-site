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
  <!-- reCAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js?hl=pt-BR" async defer></script>
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
  <section class="hero-intern contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="fw-bold mb-3">Fale conosco</h1>
          <h2 class="fw-semibold mb-5">Converse com uma equipe especializada, pronta para tirar suas dúvidas e auxiliar o seu negócio</h2>
          <nav class="d-flex justify-content-start">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= $Config['protocol'].$Config['fqd'] ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= $Config['protocol'].$Config['fqd'] ?>/contato">Contato</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Form -->
  <section class="bg-frames">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-12"><div class="t-start"><h5>Fale conosco</h5><h4><span>Envie sua mensagem</span></h4></div></div>
        <div class="col-lg-5">
          <p>Tenha à disposição toda a equipe de profissionais especializados da Realiza Assessoria Empresarial para que todas as suas dúvidas ou questionamentos tenham uma solução clara. Envie o máximo de informações possíveis para que a nossa equipe possa responder de maneira precisa e rápida todas as suas dúvidas.</p>
          <p>Preencha o formulário com os seus dados, relate os seus questionamentos e todas as informações complementares possíveis, responderemos em breve.</p>
          <h6 class="fw-bold mt-5 mb-4">Nossos contatos</h6>
          <div class="d-flex flex-column gap-4">
            <div class="d-flex align-items-center">
              <i class="fa-brands fa-whatsapp fa-fw text-gold me-3"></i>
              <a class="external" href="https://api.whatsapp.com/send?phone=5511919193435">(11) 91919-3435</a>
            </div>
            <div class="d-flex align-items-center">
              <i class="fa-solid fa-phone fa-fw text-gold me-3"></i>
              <a class="external" href="tel:+551121497479">(11) 2149-7479</a>
            </div>
            <div class="d-flex align-items-center">
              <i class="fa-solid fa-envelope fa-fw text-gold me-3"></i>
              <a class="external" href="mailto:contato@realizaassessoria.com.br">contato@realizaassessoria.com.br</a>
            </div>
            <div class="d-flex align-items-center">
              <i class="fa-solid fa-clock fa-fw text-gold me-3"></i>
              <span>Seg. a sex. | 08:00 - 18:00</span>
            </div>
            <div class="d-flex align-items-center">
              <i class="fa-solid fa-location-dot fa-fw text-gold me-3"></i>
              <a class="external" href="https://maps.app.goo.gl/C618UnT7gBn6BD6w9">Rua Tiradentes 141 - Santa Paula<br>São Caetano do Sul - SP</a>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <form data-response data-action="<?= $Config['protocol'].$Config['fqd'] ?>/enviar-contato">
            <div class="row g-4">
              <div class="form-group col-lg-12"><label class="form-label">Nome *</label><input type="text" class="form-control" name="name" required></div>
              <div class="form-group col-lg-12"><label class="form-label">E-mail *</label><input type="email" class="form-control" name="email" required></div>
              <div class="form-group col-lg-12"><label class="form-label">Telefone *</label><input type="text" class="form-control" name="phone" maxlength="15" data-mask="(00) 00000-0000" required></div>
              <div class="form-group col-lg-12"><label class="form-label">Mensagem *</label><textarea rows="6" class="form-control" name="message" required></textarea></div>
              <div class="form-group col-lg-12"><div class="d-flex justify-content-center justify-content-lg-start"><div class="form-check"><input class="form-check-input" type="checkbox" name="privacy" checked><label class="form-check-label">Li e aceito a <a class="text-decoration-underline external" href="<?= $Config['protocol'].$Config['fqd'] ?>/politica-de-cookies">Política de Cookies</a> e a <a class="text-decoration-underline external" href="<?= $Config['protocol'].$Config['fqd'] ?>/politica-de-privacidade">Política de Privacidade</a></label></div></div></div>
              <div class="form-group col-lg-12">
                <div class="d-flex flex-column flex-lg-row gap-4 align-items-center justify-content-center justify-content-lg-between">
                  <div class="g-recaptcha mb-2 mb-lg-0" data-sitekey="6Le2kKUdAAAAALWoLfMeZVJMCBH-VcAWDY2YRAhK"></div>
                  <button type="submit" class="btn btn-primary mt-2 mt-lg-0">Enviar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Map -->
  <section class="p-0">
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d913.9125077477617!2d-46.5605308!3d-23.616881!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5ce74422b2d9%3A0x9599b309088d7d28!2sR.%20Tiradentes%2C%20141%20-%20Santa%20Paula%2C%20S%C3%A3o%20Caetano%20do%20Sul%20-%20SP%2C%2009541-220!5e0!3m2!1spt-BR!2sbr!4v1712634471318!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>
</main>
<!-- Footer -->
<?php include __DIR__.'/inc/inc.footer.php'; ?>
<!-- CDN -->
<?php include __DIR__.'/inc/inc.js.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- JavaScript -->
<script src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/js/scripts.min.js?v=<?= $Config['version']['js'] ?>"></script>
<script src="<?= $Config['protocol'].$Config['fqd'] ?>/assets/js/responses.min.js?v=<?= $Config['version']['js'] ?>"></script>
<!-- ~~~~~~~~~~ -->
</body>
</html>