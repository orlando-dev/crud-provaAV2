<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar alunos');

use \App\Entity\Alunos;
$obAlunos = new Alunos;

//VALIDAÇÃO DO POST
if(isset($_POST['nome'],$_POST['email'])){

  $obAlunos->nome  = $_POST['nome'];
  $obAlunos->email = $_POST['email'];
  $obAlunos->cadastrar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';