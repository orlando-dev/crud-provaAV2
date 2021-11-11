<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Alunos{

  /**
   * Identificador único do ALUNO
   * @var integer
   */
  public $id;

  /**
   * Nome do ALUNO
   * @var string
   */
  public $nome;

  /**
   * Email do ALUNO
   * @var string
   */
  public $email;

  public function cadastrar(){
    //INSERIR ALUNO NO BANCO
    $obDatabase = new Database('alunos');
    $this->id = $obDatabase->insert([
                                      'nome'  => $this->nome,
                                      'email' => $this->email
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar o ALUNO no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('alunos'))->update('id = '.$this->id,[
                                                               'nome'  => $this->nome,
                                                               'email' => $this->email
                                                              ]);
  }

  /**
   * Método responsável por excluir o ALUNO do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('alunos'))->delete('id = '.$this->id);
  }

  /**
   * Método responsável por obter os ALUNOs do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getAlunos($where = null, $order = null, $limit = null){
    return (new Database('alunos'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por buscar um ALUNO com base em seu ID
   * @param  integer $id
   * @return Alunos
   */
  public static function getAluno($id){
    return (new Database('alunos'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}