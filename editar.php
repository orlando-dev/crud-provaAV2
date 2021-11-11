<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar aluno');

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
if(isset($_POST['nome'],$_POST['email'])){

  $obAlunos->nome  = $_POST['nome'];
  $obAlunos->email = $_POST['email'];
  $obAlunos->atualizar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';