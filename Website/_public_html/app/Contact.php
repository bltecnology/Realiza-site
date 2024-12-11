<?php
# ---------------------- #
# Developed by Volkertek #
# All rights reserved    #
# ---------------------- #
# --------------------------------------------------
# --------------------------------------------------
header('Content-Type: text/html; charset=utf-8');
# --------------------------------------------------
# --------------------------------------------------
require_once __DIR__.'/lib/conf/config.php';
require_once __DIR__.'/lib/help/functions.php';
# --------------------------------------------------
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
# --------------------------------------------------
require_once __DIR__.'/lib/mail/Exception.php';
require_once __DIR__.'/lib/mail/PHPMailer.php';
require_once __DIR__.'/lib/mail/SMTP.php';
# --------------------------------------------------
# --------------------------------------------------
$mail = new PHPMailer(true);
# --------------------------------------------------
# --------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  # -------------------------
  $name    = formatName($_POST['name']);
  $email   = formatEmail($_POST['email']);
  $phone   = formatPhone($_POST['phone']);
  $message = formatText($_POST['message']);
  $privacy = (!empty($_POST['privacy']) ? 'checked' : '');
  # -------------------------
  if (empty($name) || empty($email) || empty($phone) || empty($message))
  {
    http_response_code(422);
    $json = ['responseIcon' => $codeResponse['status'][2]['icon'], 'responseStatus' => 'Campo(s) obrigatório(s) não preenchido(s)<br>Verifique as informações'];
    echo json_encode($json);
    exit;
  }
  # -------------------------
  if (empty($privacy))
  {
    http_response_code(422);
    $json = ['responseIcon' => $codeResponse['status'][2]['icon'], 'responseStatus' => 'Você precisa aceitar a nossas Políticas de Cookies e Privacidade<br>Verifique no formulário'];
    echo json_encode($json);
    exit;
  }
  # -------------------------
  $g_recaptcha_secret = '%%PREENCHER_COM_NOVO_RECAPCTCHA%%';
  $g_recaptcha_verify = @file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$g_recaptcha_secret.'&response='.$_POST['g-recaptcha-response']);
  $g_recaptcha_result = json_decode($g_recaptcha_verify);
  # -------------------------
  if ($g_recaptcha_result->success == false)
  {
    http_response_code(400);
    $json = ['responseIcon' => $codeResponse['status'][2]['icon'], 'responseStatus' => 'Verificação de segurança incompleta<br>Assinale o reCAPTCHA no formulário'];
    echo json_encode($json);
    exit;
  }
  # -------------------------
  try {
    $mail->isSMTP();
    $mail->Host       = '';
    $mail->SMTPAuth   = true;
    $mail->Username   = '';
    $mail->Password   = '';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;
    # -------------------------
    $mail->CharSet    = 'utf-8';
    # -------------------------
    $mail->setFrom('noreply@volkertek.email', 'Não Responder | Volkertek');
    # -------------------------
    $mail->addAddress('contato@realizaassessoria.com.br', 'Contato Site | Realiza Assesoria Empresarial');
    # -------------------------
    $mail->addReplyTo($email, $name);
    # -------------------------
    $mail->isHTML(true);
    $mail->Subject    = 'Site | Formulário de contato';
    $mail->Body       = '
    <!doctype html>
    <html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <style>table{border-collapse:collapse;border-spacing:0;font-size:12px;width:100%}td,th,tr{padding:10px 5px;border-color:#666;border-style:solid;border-width:1px;overflow:hidden;word-break:normal}th{background-color:#efefef}</style>
    </head>
    <body>
    <table>
    <tr><th>NOME</th></tr>
    <tr><td>'.$name.'</td></tr>
    <tr><th>E-MAIL</th></tr>
    <tr><td>'.$email.'</td></tr>
    <tr><th>TELEFONE</th></tr>
    <tr><td>'.$phone.'</td></tr>
    <tr><th>MENSAGEM</th></tr>
    <tr><td>'.$message.'</td></tr>
    </table>
    </body>
    </html>
    ';
    # -------------------------
    $mail->send();
    # -------------------------
    http_response_code(200);
    $json = ['responseIcon' => $codeResponse['status'][1]['icon'], 'responseStatus' => 'Solicitação de <b>contato</b> enviada com sucesso<br>Atualizando a página'];
    echo json_encode($json);
  }
  catch (Exception $e)
  {
    http_response_code(500);
    $json = ['responseIcon' => $codeResponse['status'][2]['icon'], 'responseStatus' => 'Erro: '.$mail->ErrorInfo];
    echo json_encode($json);
    exit;
  }
}
else
{
  http_response_code(403);
  $json = ['responseIcon' => $codeResponse['status'][0]['icon'], 'responseStatus' => 'Processamento não autorizado<br>Entre em contato com o administrador'];
  echo json_encode($json);
  exit;
}