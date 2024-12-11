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
  <section class="hero-intern privacy">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="fw-bold mb-3">Política de privacidade</h1>
          <h2 class="fw-semibold mb-5">Informações relevantes sobre as nossas políticas de privacidade</h2>
          <nav class="d-flex justify-content-start">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?= $Config['protocol'].$Config['fqd'] ?>">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?= $Config['protocol'].$Config['fqd'] ?>/politica-de-privacidade">Política de privacidade</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!-- Privacy -->
  <section>
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-12">
          <h5 class="fw-semibold mb-3">1. Definições</h5>
          <ol type="A">
            <li><span class="fw-semibold">REALIZA ASSESSORIA EMPRESARIAL:</span> pessoa jurídica de direito privado, devidamente inscrita no CNPJ/MF sob número 58.153.297/0001-05, com endereço na Rua Tiradentes, 141 – bairro Santa Paula, município de São Caetano do Sul, Estado de São Paulo, denominada apenas “REALIZA”;</li>
            <li><span class="fw-semibold">Dados Pessoais:</span> Informações que possam identificar ou tornar identificável uma pessoa;</li>
            <li><span class="fw-semibold">Tratamento de Dados:</span> toda operação realizada com dados, tais como, a coleta, produção, recepção, classificação, utilização, acesso, reprodução, transmissão, distribuição, processamento, arquivamento, armazenamento, eliminação, avaliação ou controle da informação, modificação, comunicação, transferência, difusão ou extração;</li>
            <li><span class="fw-semibold">WebSite:</span> Endereço virtual utilizado pela internet para comunicação comercial ou pessoal.</li>
            <li><span class="fw-semibold">Controlador:</span> pessoa natural ou jurídica, de direito público ou privado, a quem competem as decisões referentes ao tratamento de dados pessoais;</li>
            <li><span class="fw-semibold">Titular de Dados:</span> pessoa natural a quem se referem os dados pessoais que são objetos de tratamento;</li>
            <li><span class="fw-semibold">Encarregado de Dados:</span> pessoa indicada pelo controlador para atuar como canal de comunicação entre o controlador, os titulares dos dados e a Autoridade Nacional de Proteção de Dados (ANPD);</li>
          </ol>
          <hr class="my-5">
          <h5 class="fw-semibold mb-3">1. Introdução ao Negócio</h5>
          <p>A REALIZA oferece uma gama completa de serviços relacionados à gestão e guarda de documentação previdenciária das empresas clientes, consultoria tributária e societária e gestão de risco de empresas terceirizadas.</p>
          <h5 class="fw-semibold mt-5 mb-3">2. Objetivo</h5>
          <p>A REALIZA estabelece, nesta Política de Privacidade, as diretrizes de Tratamento de Dados Pessoais adotadas em respeito a privacidade de todas as pessoas que com ela se relacionam sejam como funcionários, parceiros, clientes ou fornecedores.</p>
          <h5 class="fw-semibold mt-5 mb-3">3. Dados Coletados</h5>
          <p>A coleta do dado é realizada de forma direta, enviada pelo próprio titular do dado pessoal, ou indiretamente a partir de terceiro:</p>
          <ol type="A">
            <li><span class="fw-semibold">Dados coletados de terceiros:</span> QUANDO FAZEMOS A GESTÃO DE TERCEIROS PARA OS NOSSOS CLIENTES - Dados fornecidos pelas empresas que prestação serviços para os nossos clientes e que, portanto, precisam comprovar a regularidade da documentação fiscal, trabalhista e previdenciários. Esses documentos são compartilhados através do portal da REALIZADA com acesso apenas com login e senha.</li>
            <li><span class="fw-semibold">Dados coletados do Próprio Titular:</span> QUANDO FAZEMOS A GESTÃO DOS COLABORADORES OU PRESTADORES DE SERVIÇOS PARA OS NOSSOS CLIENTES - Para efetuar o cadastro na contratação direta de colaboradores e prestadores de serviços. Em todas essas atividades, solicitamos dados pessoais dos titulares envolvidos e dependendo da situação, dos seus dependentes.</li>
            <li><span class="fw-semibold">Dados coletados do Próprio Titular:</span> QUANDO CONTRATAMOS FUNCIONÁRIOS PARA ATUAR NA REALIZA - Para efetuar o cadastro na contratação direta dos nossos colaboradores, solicitamos dados pessoais dos titulares envolvidos e dependendo da situação, dos seus dependentes.</li>
            <li><span class="fw-semibold">Dados coletados de terceiros:</span> QUANDO A REALIZA CONTRATA PARCEIROS E EMPRESAS PRESTADORAS DE SERVIÇOS PARA VIABILIZAR SEU NEGÓCIO OU QUANDO ELA ATENDE UM CLIENTE - São coletados os dados necessários para a comunicação entre as empresas, elaboração de contrato comercial e contato para relação fiscal e financeira.</li>
            <li><span class="fw-semibold">Dados coletados de crianças e Adolescentes:</span> QUANDO A REALIZA CONTRATA FUNCIONÁRIOS E ESTENDE OS BENEFÍCIOS AOS FAMILIARES OU QUANDO NA PRESTAÇÃO DE SERVIÇOS MANTEMOS GESTÃO E GUARDA DE DOCUMENTOS TRABALHISTAS E PREVIDÊNCIARIOS COLETADOS PELOS NOSSOS CLIENTES (controladores) – Estes dados serão coletados sempre no melhor interesse dos titulares de dados e em observância ao Art. 14 da Lei n. 13.709/2018 (LGPD). Os Dados Pessoais de crianças (aquelas com idade inferior a 12 anos) são coletados e tratados mediante consentimento dos pais ou responsável legal.</li>
          </ol>
          <p>A REALIZA não utiliza dados pessoais de menores para fins de marketing ou qualquer outro meio de oferta de produtos e serviços.</p>
          <h5 class="fw-semibold mt-5 mb-3">4. Compartilhamento dos dados pessoais</h5>
          <p>Para executar procedimentos externos de gestão de documentos do departamento de Recursos Humanos ou de gestão de risco dos terceirizados, a REALIZA poderá compartilhar os dados pessoais para:</p>
          <ol type="A">
            <li>Empresas parceiras que nos auxiliam nos processos de atendimento aos nossos clientes;</li>
            <li>Funcionários nomeados das empresas que nos contratam para esta atividade;</li>
          </ol>
          <p>Para executar procedimentos internos inerentes ao negócio da REALIZA, poderão ser compartilhados os dados pessoais para:</p>
          <ol type="A">
            <li>Autoridades e Governo, no intuito de manter conformidade com a legislação brasileira;</li>
            <li>Escritórios Jurídicos nos casos de necessidade de exercer o direito regular em processos judiciais, arbitrais ou administrativos.</li>
            <li>mediante ordem judicial ou pelo requerimento de autoridades administrativas que detenham competência legal para a sua requisição.</li>
          </ol>
          <h5 class="fw-semibold mt-5 mb-3">5. Finalidade do Tratamento</h5>
          <p>Conforme Art. 7º da Lei Geral de Proteção de Dados somente realizamos o tratamento de dados pessoais considerando:</p>
          <ol type="A">
            <li>O consentimento do usuário;</li>
            <li>O cumprimento de obrigação legal ou regulatória pelo controlador;</li>
            <li>Quando necessário para a execução de contrato ou de procedimentos preliminares relacionados a contrato do qual seja parte o titular, a pedido do titular dos dados</li>
            <li>Para o exercício regular de direitos em processo judicial, administrativo ou arbitral</li>
            <li>Quando necessário para atender aos interesses legítimos, mas sempre respeitando os interesses, direitos e liberdades fundamentais dos titulares de dados.</li>
          </ol>
          <h5 class="fw-semibold mt-5 mb-3">6. Armazenamento e Retenção de Dados Pessoais</h5>
          <p>A REALIZA garante que os dados pessoais ficam armazenados de forma segurança, apenas pelo tempo necessário.</p>
          <p>Quando a RELIZA guarda dados pessoais em razão da obrigação contratual mantida com os seus clientes, ela assume o papel de OPERADORA de dados. Nestes casos, a temporalidade de guarda dos dados é determinada pelo Cliente, na função de CONTROLADOR.</p>
          <h5 class="fw-semibold mt-5 mb-3">7. Segurança dos Dados Pessoais</h5>
          <p>A proteção e segurança dos dados pessoais é realizada a partir de medidas técnicas organizacionais, com ela conseguimos garantir a integridade e privacidade priorizando sempre a proteção dos dados pessoais de acessos não autorizados e de situações acidentais ou ilícitas de destruição, perda, alteração, comunicação ou difusão da informação.</p>
          <p>Os nossos funcionários são treinados sobre a necessidade de confidencialidade dos dados pessoais que tratam nas atividades da empresa.</p>
          <p>Na possibilidade de ocorrência de incidência de segurança com dados pessoais, a REALIZA garante seus melhores esforços para remediar as consequências do evento, sempre garantindo a transparência e comunicação com os nossos clientes, parceiros e funcionários.</p>
          <h5 class="fw-semibold mt-5 mb-3">8. Direito do Titular</h5>
          <p>Conforme o art. 18 da Lei Geral de Proteção de Dados, o titular dos dados pessoais tem direitos que devem ser atendidos a qualquer momento e mediante requisição:</p>
          <ol type="A">
            <li>Confirmação da existência de tratamento;</li>
            <li>Acesso aos dados;</li>
            <li>Correção de dados incompletos, inexatos ou desatualizados;</li>
            <li>Anonimização, bloqueio ou eliminação de dados desnecessários, excessivos ou tratados em desconformidade com o disposto da Lei Geral de Proteção de Dados;</li>
            <li>Portabilidade dos dados a outro fornecedor de serviço ou produto, mediante requisição expressa, de acordo com a regulamentação da autoridade nacional, observados os segredos comercial e industrial;</li>
            <li>Eliminação dos dados pessoais tratados com o consentimento do titular;</li>
            <li>Informação das entidades públicas e privadas com as quais realizamos uso compartilhado de dados;</li>
            <li>Revogação do consentimento, nos termos do art. 8º da Lei Geral de Proteção de Dados.</li>
          </ol>
          <p>O exercício dos direitos pelo Usuário titular dos Dados, poderá ser exercido através do contato com a REALIZA no endereço do seu Encarregado de Dados: <span class="fw-semibold">elaine@kellersa.com</span>.</p>
          <hr class="my-5">
          <p>O <span class="fw-semibold">DPO</span> ou <span class="fw-semibold">Data Protection Officer</span> (responsável pela proteção de dados) trabalha para assegurar que as organizações estejam em conformidade com os regulamentos globais de privacidade de dados, estabelecendo o padrão e protegendo as informações dos usuários por meio de práticas e padrões éticos.</p>
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