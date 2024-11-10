<?php

class Membro {
    private int $idMembro;
    private string $nome;
    private DateTime $dataNascimento;
    private string $email;
    private string $tel;

    // Ativo ou Inativo
    private string $status;

    function __construct($idMembro, $nome, $dataNascimento, $email, $tel, $status) {
        $this->idMembro = $idMembro;
        $this->nome = $nome;
        $this->dataNascimento = new DateTime($dataNascimento); 
        $this->email = $email;
        $this->tel = $tel;
        $this->status = $status;
    }

    function getAtributo($atributo) {
        return $this->$atributo;
    }

    function setAtributo($atributo, $novoValor) {
        $this->$atributo = $novoValor;
    }

    // Metodo que retorna os valores da classe:
    function dadosClasse() {
        return "\n". $this->idMembro .",". $this->nome .",". $this->dataNascimento->format("d, m, Y") .",". $this->email .",". $this->tel .",". $this->status;
    }
}