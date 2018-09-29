<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 28/09/2018
 * Time: 19:09
 */

class professores {

    private $idProfessor;
    private $Nome;
    private $Cargo;

    /**
     * professores constructor.
     * @param $idProfessor
     * @param $Nome
     * @param $Cargo
     */
    public function __construct($idProfessor, $Nome, $Cargo)
    {
        $this->idProfessor = $idProfessor;
        $this->Nome = $Nome;
        $this->Cargo = $Cargo;
    }

    public function getidProfessor() {
        return $this->idProfessor;
    }

    public function setidProfessor($idProfessor) {
        $this->idProfessor = $idProfessor;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
    }

    public function getCargo() {
        return $this->Cargo;
    }

    public function setCargo($Cargo) {
        $this->Cargo = $Cargo;
    }


}


