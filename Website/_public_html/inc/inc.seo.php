<?php
# -------------------------
$pageActive = basename($_SERVER['REQUEST_URI']);
# -------------------------
switch($pageActive)
{
  # -------------------------
  # -------------------------
  default:
  case 'index.php':
  case '/':
    $pageTitle       = 'Excelência em Gestão de Terceiros | Realiza Assessoria Empresarial';
    $pageDescription = 'Desde 1991, a Realiza Assessoria é uma empresa de serviços corporativos: gestão previdenciária; homologação e gestão SSMA';
  break;
  # -------------------------
  # -------------------------
  case 'cases.php':
  case 'cases':
    $pageTitle       = 'Clientes atendidos e projetos realizados ao longo de nossa trajetória | Realiza Assessoria Empresarial';
    $pageDescription = 'A Realiza Assessoria cria relacionamentos sólidos e duradouros com seus clientes';
  break;
  # -------------------------
  case 'company.php':
  case 'empresa':
    $pageTitle       = 'Uma história de sucesso construída com qualidade e honestidade | Realiza Assessoria Empresarial';
    $pageDescription = 'Com mais de 30 anos de mercado, nossa empresa especializou-se na Gestão de Terceiros';
  break;
  # -------------------------
  case 'consulting.php':
  case 'consultoria-tributaria-societaria':
    $pageTitle       = 'Consultoria tributária e societária | Realiza Assessoria Empresarial';
    $pageDescription = 'Com a Consultoria Tributária e Societária é possível organizar e planejar todo o futuro da sua empresa';
  break;
  # -------------------------
  case 'contact.php':
  case 'contato':
    $pageTitle       = 'Fale com nossos profissionais | Realiza Assessoria Empresarial';
    $pageDescription = 'A Realiza Assessoria Empresarial coloca seu corpo de profissionais à sua disposição para que nenhuma dúvida ou questionamento fique sem solução';
  break;
  # -------------------------
  case 'faq.php':
  case 'duvidas':
    $pageTitle       = 'F.A.Q - As dúvidas mais comuns sobre GestÃO de Terceiros | Realiza Assessoria Empresarial';
    $pageDescription = 'Dúvidas sobre Gestão de Terceiros e outros serviços relacionados? A Realiza Assessoria responde';
  break;
  # -------------------------
  case 'homologation.php':
  case 'homologacao':
    $pageTitle       = 'Homologação | Realiza Assessoria Empresarial';
    $pageDescription = 'Também conhecido como qualificação, validação ou certificação dos fornecedores, a homologação é um processo criterioso';
  break;
  # -------------------------
  case 'pension.php':
  case 'gestao-previdenciaria':
    $pageTitle       = 'Gestão previdenciária | Realiza Assessoria Empresarial';
    $pageDescription = 'A gestão de risco das terceirizadas possui um papel fundamental no mundo corporativo';
  break;
  # -------------------------
  case 'services.php':
  case 'servicos':
    $pageTitle       = 'Nossos serviços: gestão previdenciária; homologação e gestão SSMA; consultoria tributária e societária | Realiza Assessoria Empresarial';
    $pageDescription = 'Uma gama de serviços prestados de forma moderna e segura - essa é a Realiza Assessoria Empresarial';
  break;
  # -------------------------
  case 'ssma.php':
  case 'gestao-seguranca-do-trabalho-saude-meio-ambiente':
    $pageTitle       = 'Gestão SSMA | Realiza Assessoria Empresarial';
    $pageDescription = 'A Gestão SSMA é um conjunto de processos que garante ao seu negócio o atendimento de todos os requisitos exigidos, de maneira segura e eficaz';
  break;
  # -------------------------
  # -------------------------
  case 'error.php':
  case 'erro':
    $pageTitle       = 'Erro | Realiza Assessoria Empresarial';
    $pageDescription = 'Parece que um erro inesperado aconteceu';
  break;
  # -------------------------
  case 'privacy.php':
  case 'politica-de-privacidade':
    $pageTitle       = 'Nossa política de privacidade | Realiza Assessoria Empresarial';
    $pageDescription = 'Informações relevantes sobre a nossa política de privacidade';
  break;
  # -------------------------
  case 'sitemap.php':
  case 'mapa-do-site':
    $pageTitle       = 'As páginas que compõe o nosso site | Realiza Assessoria Empresarial';
    $pageDescription = 'Todas as páginas disponíveis em nosso site';
  break;
  # -------------------------
  case 'cookies.php':
  case 'politica-de-cookies':
    $pageTitle       = 'Nossa política de cookies | Realiza Assessoria Empresarial';
    $pageDescription = 'Informações relevantes sobre a nossa política de cookies';
  break;
  # -------------------------
}