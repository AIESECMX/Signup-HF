<?php
/*
Plugin Name: AIESEC HOST FAMILIA GLOBAL REGISTRO
Description: Poder llevar los registros de familia gloabl que se enceuentran en la pagina web a la plataforma de podio
Version: 1.0.0
Author: Gerardo Godfrey
Author URI: https://www.linkedin.com/in/godfreycasta?eda/
License: GPL
TEST: YES
*/

defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );

function load_scripts() {
  wp_enqueue_style('purecss','https://cdnjs.cloudflare.com/ajax/libs/pure/1.0.0/pure-min.css');
  wp_enqueue_style('singup-style',plugins_url('css/signupform.css',__FILE__));
}

function getFormHF($product = "",$configs = null) {
  //Get File
  $form = file_get_contents('form.html',TRUE);
  
  $form = str_replace("{action_url}",plugins_url('controller/signUp.php',__FILE__),$form);
  if ($configs != null) {
    $form = str_replace($configs['recaptcha_public_test'],$configs['recaptcha_public'],$form);
  }

  return $form;
}

function getFormWithErrorHF($form,$code) {
  $msg = null;
  switch($code) {
    case "email":
      $msg = "Ya te has registrado con esta dirección de correo. Intenta de nuevo con otro correo electrónico.";
      break;
    case "validation":
      $msg = "Los datos ingresados no son válidos, por favor intenta de nuevo.";
      break;
    case "captcha":
      $msg = "La verificación CAPTCHA es incorrecta, por favor intenta de nuevo.";
      break;
  }

  if($msg != null) {
    $form = str_replace('<div id="error" class="error"><p></p></div>','<div id="error" class="error-show"><p>'.$msg.'</p></div>',$form);
  }

  return $form;
}

//General Sign-up Form
function signup_form_hf() {
    load_scripts();

    $configs = include('config.php');
    $form = getFormHF("",$configs);
    
    if (isset($_REQUEST['error'])) {
      return getFormWithErrorHF($form,$_REQUEST['error']);    
    }

    return $form;

}
add_shortcode('signup-form-hf', 'signup_form_hf');
