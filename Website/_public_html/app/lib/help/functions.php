<?php
# ---------------------- #
# Developed by Volkertek #
# All rights reserved    #
# ---------------------- #
# --------------------------------------------------
header('Content-Type: text/html; charset=utf-8');
# --------------------------------------------------
# --------------------------------------------------
require_once __DIR__.'/codes.php';
# --------------------------------------------------
# --------------------------------------------------
function formatEmail($string)
{
  # -------------------------
  $string = strip_tags($string);
  # -------------------------
  $string = filter_var($string, FILTER_SANITIZE_EMAIL);
  # -------------------------
  $string = htmlspecialchars($string, ENT_QUOTES, 'utf-8');
  $string = str_replace('&nbsp;', '', $string);
  $string = preg_replace('/\s+/', '', $string);
  $string = html_entity_decode($string);
  # -------------------------
  $string = str_replace(['`', '´', '´´', '``', '"', '\'', '\'\''], '', $string);
  $string = trim($string);
  # -------------------------
  $string = mb_convert_case($string, MB_CASE_LOWER, 'utf-8');
  # -------------------------
  return $string;
}
# --------------------------------------------------
# --------------------------------------------------
function formatName($string)
{
  # -------------------------
  $string = strip_tags($string);
  # -------------------------
  $string = htmlspecialchars($string, ENT_QUOTES, 'utf-8');
  $string = str_replace('&nbsp;', ' ', $string);
  $string = preg_replace('/\s+/', ' ', $string);
  $string = html_entity_decode($string);
  # -------------------------
  $string = str_replace(['`', '´', '´´', '``', '"'], '\'', $string);
  $string = preg_replace('/\'{2,}/', '\'', $string);
  # -------------------------
  $string = trim(trim(preg_replace('/[^A-Za-z0-9\xC0-\xD6\xD8-\xF6\xF8-\xFF\s\']+/miuU', '', $string), '\''));
  # -------------------------
  $string = mb_convert_case($string, MB_CASE_LOWER, 'utf-8');
  $string = mb_convert_case($string, MB_CASE_TITLE, 'utf-8');
  $string = ucwords($string, '\'');
  # -------------------------
  return $string;
}
# --------------------------------------------------
# --------------------------------------------------
function formatPhone($string)
{
  # -------------------------
  $string = strip_tags($string);
  # -------------------------
  $string = preg_replace('/\D/', '', $string);
  # -------------------------
  if (strlen($string) == 11)
  {
    $string = substr_replace($string, '(', 0, 0);
    $string = substr_replace($string, ')', 3, 0);
    $string = substr_replace($string, ' ', 4, 0);
    $string = substr_replace($string, '-', 10, 0);
  }
  else
  {
    $string = substr_replace($string, '(', 0, 0);
    $string = substr_replace($string, ')', 3, 0);
    $string = substr_replace($string, ' ', 4, 0);
    $string = substr_replace($string, '-', 9, 0);
  }
  # -------------------------
  return $string;
}
# --------------------------------------------------
# --------------------------------------------------
function formatText($string)
{
  # -------------------------
  strip_tags($string);
  # -------------------------
  return $string;
}
# --------------------------------------------------
# --------------------------------------------------