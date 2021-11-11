<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Alunos;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

//CONSULTA O ALUNO
$obAlunos = Alunos::getAluno($_GET['id']);

//VALIDAÇÃO DO ALUNO
if(!$obAlunos instanceof Alunos){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['excluir'])){

  $obAlunos->excluir();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';